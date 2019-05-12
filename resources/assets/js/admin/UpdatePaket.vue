<template>
<div class="modal" :class='openmodal'>
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Paket {{list.kode}}</p>
      <button class="delete" aria-label="close" @click="close"></button>
    </header>
    <section class="modal-card-body">
      <!-- Content ... -->
      <div class="field">
        <label class="label">Kode Paket</label>
        <div class="control">
          <input class="input" type="text" placeholder="Kode paket soal" v-model="list.kode">
        </div>
      </div>
      <div class="field">
        <label class="label">Penjurusan</label>
        <div class="control">
          <div class="select">
            <select v-model="list.penjurusan">
              <option value="IPA" v-bind="{'selected': list.penjurusan == 'IPA'}">IPA</option>
              <option value="IPS" v-bind="{'selected': list.penjurusan == 'IPS'}">IPS</option>
            </select>
          </div>
        </div>
      </div>
      <div class="field">
        <label class="label">Tahun</label>
        <div class="control">
          <input class="input" type="text" placeholder="Tahun paket soal SBMPTN" v-model="list.tahun">
        </div>
      </div>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-primary" @click.prevent="update">Update</button>
      <button class="button" @click="close">Cancel</button>
    </footer>
  </div>
</div>
</template>

<script>
    export default{
      props:['openmodal'],
      data(){
        return{
          list:{},
          errors:{}
        }
      },
      methods:{
          close(){
              this.$emit('closeRequest');
          },
          update(){
            axios.patch(`/paket/${this.list.id}`,this.$data.list).then((response)=>this.close())
            .catch((error)=>this.errors=error.response.data.errors)
          }
      }
    }
     
</script>
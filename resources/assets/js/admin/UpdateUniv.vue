<template>
<div class="modal" :class='openmodal'>
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Ubah {{list.nama_jurusan}}</p>
      <button class="delete" aria-label="close" @click="close"></button>
    </header>
    <section class="modal-card-body">
      <!-- Content ... -->
      <div class="field">
        <label class="label">Nama Jurusan</label>
        <div class="control">
          <input class="input" type="text" placeholder="Nama Jurusan" v-model="list.nama_jurusan">
        </div>
      </div>
      <div class="field">
        <label class="label">Universitas</label>
        <div class="control">
         <div class="select">
            <select v-model="list.univ">
              <option value="" selected disabled hidden>Choose here</option>
              <option value="Institut Pertanian Bogor">Institut Pertanian Bogor</option>
              <option value="Universitas Indonesia">Universitas Indonesia</option>
              <option value="Institut Teknologi Bandung">Institut Teknologi Bandung</option>
              <option value="Universitas Gadjah Mada">Universitas Gadjah Mada</option>
            </select>
          </div>
        </div>
      </div>
      <div class="field">
        <label class="label">Passing Grade</label>
        <div class="control">
          <input class="input" type="number" placeholder="Passing Grade Jurusan" v-model="list.passing_grade">
        </div>
      </div>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success" @click="update">Update</button>
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
            axios.patch(`/jurusan/${this.list.id}`,this.$data.list).then((response)=>this.close())
            .catch((error)=>this.errors=error.response.data.errors)
          }
      }
    }
     
</script>
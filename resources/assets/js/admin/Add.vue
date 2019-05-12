<template>
<div class="modal" :class='openmodal'>
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Paket Soal</p>
      <button class="delete" aria-label="close" @click="close"></button>
    </header>
    <section class="modal-card-body">
      <!-- Content ... -->
      <div class="field">
        <label class="label">Kode Paket</label>
        <div class="control">
          <input class="input" type="text" placeholder="Kode paket soal" v-model="list.kodePaket">
        </div>
      </div>
      <div class="field">
        <label class="label">Penjurusan</label>
        <div class="control">
          <div class="select">
            <select v-model="list.choiceJurusan">
              <option value="" default selected disabled hidden>Choose here</option>
              <option value="IPA">IPA</option>
              <option value="IPS">IPS</option>
            </select>
          </div>
        </div>
      </div>
      <div class="field">
        <label class="label">Tahun</label>
        <div class="control">
          <input class="input" type="text" placeholder="Tahun paket soal SBMPTN" v-model="list.tahunPaket">
        </div>
      </div>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-primary" @click.prevent="save">Simpan</button>
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
            list:{
              kodePaket:'',
              choiceJurusan:'',
              tahunPaket:''
            },
            errors:{},
            processing:false
          }
        },
        methods:{
          close(){
            this.$emit('closeRequest')
          },
          save(){
            if (this.processing === true) {
              return;
            }             
            this.processing = true
            axios.post('/paket',this.$data.list).then((response)=> {
              this.close()
              this.$parent.lists.push(response.data)
              this.$parent.lists.sort(function(a,b){
                if (a.name > b.name) {
                  return 1;
                }else if(a.name < b.name){
                  return -1;
                }
              })
              this.list.kodePaket = ''
              this.list.choiceJurusan = ''
              this.list.tahunPaket = ''
              this.processing = false
            })
              .catch((error) => {
                this.errors = error.response.data.errors
                this.processing = false  
              })
          }
        }
    }
</script>
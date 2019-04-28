<template>
<div class="modal" :class='openmodal'>
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Tambah Soal</p>
      <button class="delete" aria-label="close" @click="close"></button>
    </header>
    <section class="modal-card-body">
      <div class="field">
        <label class="label">Mata Pelajaran</label>
        <div class="control">
          <div class="select">
            <select v-model="list.mapel">
              <option value="" selected disabled hidden>Choose here</option>
              <option value="biologi">Biologi</option>
              <option value="fisika">Fisika</option>
              <option value="kimia">Kimia</option>
              <option value="matematika">Matematika</option>
            </select>
          </div>
        </div>
      </div>
      <div class="field">
    	  <label class="label">Soal</label>
        <div class="control">
          <textarea class="textarea" placeholder="Tulis pertanyaan" rows=10 v-model="list.soal"></textarea>
        </div>
      </div>
      <div class="file has-name is-fullwidth">
        <label class="file-label">
          <input class="file-input" type="file" name="resume">
          <span class="file-cta">
            <span class="file-icon">
              <i class="fa fa-upload"></i>
            </span>
            <span class="file-label">
              Choose a file…
            </span>
          </span>
          <span class="file-name">
            Screen Shot 2017-07-29 at 15.54.25.png
          </span>
        </label>
      </div>
      <br>
      <div class="field">
    	  <label class="label">Pilihan A</label>
        <div class="control">
          <textarea class="textarea" placeholder="Tulis jawaban untuk opsi A" rows=2 v-model="list.A"></textarea>
        </div>
      </div>
      <div class="file has-name is-fullwidth">
        <label class="file-label">
          <input class="file-input" type="file" name="resume">
          <span class="file-cta">
            <span class="file-icon">
              <i class="fa fa-upload"></i>
            </span>
            <span class="file-label">
              Choose a file…
            </span>
          </span>
          <span class="file-name">
            Screen Shot 2017-07-29 at 15.54.25.png
          </span>
        </label>
      </div>
      <br>
      <div class="field">
    	  <label class="label">Pilihan B</label>
        <div class="control">
          <textarea class="textarea" placeholder="Tulis jawaban untuk opsi B" rows=2 v-model="list.B"></textarea>
        </div>
      </div>
      <div class="file has-name is-fullwidth">
        <label class="file-label">
          <input class="file-input" type="file" name="resume">
          <span class="file-cta">
            <span class="file-icon">
              <i class="fa fa-upload"></i>
            </span>
            <span class="file-label">
              Choose a file…
            </span>
          </span>
          <span class="file-name">
            Screen Shot 2017-07-29 at 15.54.25.png
          </span>
        </label>
      </div>
      <br>
      <div class="field">
    	  <label class="label">Pilihan C</label>
        <div class="control">
          <textarea class="textarea" placeholder="Tulis jawaban untuk opsi C" rows=2 v-model="list.C"></textarea>
        </div>
      </div>
      <div class="file has-name is-fullwidth">
        <label class="file-label">
          <input class="file-input" type="file" name="resume">
          <span class="file-cta">
            <span class="file-icon">
              <i class="fa fa-upload"></i>
            </span>
            <span class="file-label">
              Choose a file…
            </span>
          </span>
          <span class="file-name">
            Screen Shot 2017-07-29 at 15.54.25.png
          </span>
        </label>
      </div>
      <br>
      <div class="field">
    	  <label class="label">Pilihan D</label>
        <div class="control">
          <textarea class="textarea" placeholder="Tulis jawaban untuk opsi D" rows=2 v-model="list.D"></textarea>
        </div>
      </div>
      <div class="file has-name is-fullwidth">
        <label class="file-label">
          <input class="file-input" type="file" name="resume">
          <span class="file-cta">
            <span class="file-icon">
              <i class="fa fa-upload"></i>
            </span>
            <span class="file-label">
              Choose a file…
            </span>
          </span>
          <span class="file-name">
            Screen Shot 2017-07-29 at 15.54.25.png
          </span>
        </label>
      </div>
      <br>
      <div class="field">
    	  <label class="label">Pilihan E</label>
        <div class="control">
          <textarea class="textarea" placeholder="Tulis jawaban untuk opsi E" rows=2 v-model="list.E"></textarea>
        </div>
      </div>
      <div class="file has-name is-fullwidth">
        <label class="file-label">
          <input class="file-input" type="file" name="resume">
          <span class="file-cta">
            <span class="file-icon">
              <i class="fa fa-upload"></i>
            </span>
            <span class="file-label">
              Choose a file…
            </span>
          </span>
          <span class="file-name">
            Screen Shot 2017-07-29 at 15.54.25.png
          </span>
        </label>
      </div>
      <br>
      <div class="field">
        <label class="label">Kunci Jawaban</label>
        <div class="control">
          <label class="radio">
            <input type="radio" name="a" value="A" v-model="list.ansUser">
            A
          </label>
          <label class="radio">
            <input type="radio" name="b" value="B" v-model="list.ansUser">
            B
          </label>
          <label class="radio">
            <input type="radio" name="c" value="C" v-model="list.ansUser">
            C
          </label>
          <label class="radio">
            <input type="radio" name="d" value="D" v-model="list.ansUser">
            D
          </label>
          <label class="radio">
            <input type="radio" name="e" value="E" v-model="list.ansUser">
            E
          </label>
        </div>
      </div>
      <div class="field">
    	  <label class="label">Pembahasan</label>
        <div class="control">
          <textarea class="textarea" placeholder="Tulis pembahasan" rows=10 v-model="list.ans"></textarea>
        </div>
      </div>
      <div class="file has-name is-fullwidth">
        <label class="file-label">
          <input class="file-input" type="file" name="resume">
          <span class="file-cta">
            <span class="file-icon">
              <i class="fa fa-upload"></i>
            </span>
            <span class="file-label">
              Choose a file…
            </span>
          </span>
          <span class="file-name">
            Screen Shot 2017-07-29 at 15.54.25.png
          </span>
        </label>
      </div>
      <br>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-primary" @click="save">Simpan</button>
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
              soal:'',
              A:'',
              B:'',
              C:'',
              D:'',
              E:'',
              ansUser:'',
              ans:'',
              idPaket:'',
            },
            errors:{},
            aidi:''
          }
        },
        methods:{
          close(){
            this.$emit('closeRequest')
          },
          save(){
            this.list.idPaket = this.aidi;
            axios.post('/soal',this.$data.list).then((response)=>{
              this.close()
              this.$parent.lists.push(response.data)
              this.list.soal=''
              this.list.A=''
              this.list.B=''
              this.list.C=''
              this.list.D=''
              this.list.E=''
              this.list.ansUser=''
              this.list.ans=''
              this.list.idPaket=''
              this.aidi=''
              })
            .catch((error)=>this.errors=error.response.data.errors)
          }
        }
    }
</script>
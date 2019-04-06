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
            <select>
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
          <textarea class="textarea" placeholder="Tulis pertanyaan" rows=10></textarea>
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
          <textarea class="textarea" placeholder="Tulis jawaban untuk opsi A" rows=2></textarea>
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
          <textarea class="textarea" placeholder="Tulis jawaban untuk opsi B" rows=2></textarea>
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
          <textarea class="textarea" placeholder="Tulis jawaban untuk opsi C" rows=2></textarea>
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
          <textarea class="textarea" placeholder="Tulis jawaban untuk opsi D" rows=2></textarea>
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
          <textarea class="textarea" placeholder="Tulis jawaban untuk opsi E" rows=2></textarea>
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
            <input type="radio" name="a">
            A
          </label>
          <label class="radio">
            <input type="radio" name="b">
            B
          </label>
          <label class="radio">
            <input type="radio" name="c">
            C
          </label>
          <label class="radio">
            <input type="radio" name="d">
            D
          </label>
          <label class="radio">
            <input type="radio" name="e">
            E
          </label>
        </div>
      </div>
      <div class="field">
    	  <label class="label">Pembahasan</label>
        <div class="control">
          <textarea class="textarea" placeholder="Tulis pembahasan" rows=10></textarea>
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
      <button class="button is-primary">Simpan</button>
      <button class="button" @click="close">Cancel</button>
    </footer>
  </div>
</div>
</template>

<script>
    export default{
        props:['openmodal'],
        methods:{
          close(){
            this.$emit('closeRequest')
          }
        }
    }
</script>
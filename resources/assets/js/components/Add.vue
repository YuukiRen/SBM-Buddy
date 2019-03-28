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
          <input class="input" type="text" placeholder="Kode paket soal">
        </div>
      </div>
      <div class="field">
        <label class="label">Penjurusan</label>
        <div class="control">
          <div class="select">
            <select>
              <option>IPA</option>
              <option>Soshum</option>
            </select>
          </div>
        </div>
      </div>
      <div class="field">
        <label class="label">Tahun</label>
        <div class="control">
          <input class="input" type="text" placeholder="Tahun paket soal SBMPTN">
        </div>
      </div>
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
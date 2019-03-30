<template>
<section class="section">
  <div class="columns">
    <div class="column">	
        <div class="field">
            <label class="label">Pilih Universitas</label>
            <div class="select">
                <select>
                    <option value="UI">Universitas Indonesia</option>
                    <option value="ITB">Institut Teknologi Bandung</option>
                    <option value="UGM">Universitas Gadjah Mada</option>
                    <option value="IPB">Institut Pertanian Bogor</option>
                </select>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="control has-icons-left">
            <input class="input" type="text" placeholder="Cari Jurusan">
            <span class="icon is-small is-left">
                <i class="fa fa-search" aria-hidden="true"></i>
            </span>
        </div>
    </div>
    <div class="column">
        <a class="button is-primary" @click="openAddUniv">
            <span class="icon">
                  <i class="fa fa-plus"></i>
            </span>
            <span>Tambah Jurusan</span>
        </a>
    </div>
  </div>

  <table class="table is-hoverable is-fullwidth">
    <thead>
      <tr>
        <th><abbr title="nama_jurusan">Jurusan</abbr></th>
        <th><abbr title="passing_grade">Passing Grade</abbr></th>
        <th><abbr title="edit">Edit</abbr></th>
      </tr>
    </thead>
    <tbody>
        <tr is-selected>
            <td>Ilmu Komputer</td>
            <td>69</td>
            <td>
                <a class="icon">
                    <i class="fa fa-edit has-text-primary"></i>
                </a>
                <a class="icon">
                    <i class="fa fa-trash has-text-danger" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
    </tbody>
  </table>

  <nav class="pagination" role="navigation" aria-label="pagination">
    <a class="pagination-previous" title="This is the first page">Previous</a>
    <a class="pagination-next">Next page</a>
    <ul class="pagination-list">
      <li>
        <a class="pagination-link is-current" aria-label="Page 1" aria-current="page">1</a>
      </li>
      <li>
        <a class="pagination-link" aria-label="Goto page 2">2</a>
      </li>
      <li>
        <a class="pagination-link" aria-label="Goto page 3">3</a>
      </li>
    </ul>
  </nav>

<Add :openmodal='addActive' @closeRequest='close'></Add>
</section>
</template>

<script>
  let Add = require('./AddUniv.vue');
  export default{
    components:{Add},
    data(){
      return {
        addActive : ''
      }
    },
    methods:{
      openAddUniv(){
        this.addActive = 'is-active';
      },
      close(){
        this.addActive = '';
      }
    }
  }
</script>
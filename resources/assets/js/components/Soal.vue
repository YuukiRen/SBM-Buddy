<template>
<section class="section">
  <div class="columns">
    <div class="column"></div>
    <div class="column is-half">
        <div class="control has-icons-left">
            <input class="input" type="text" placeholder="Search">
            <span class="icon is-small is-left">
                <i class="fa fa-search" aria-hidden="true"></i>
            </span>
        </div>
    </div>
    <div class="column">
        <a class="button is-primary" @click="openAdd">
            <span class="icon">
                  <i class="fa fa-plus"></i>
            </span>
            <span>Tambah Paket Soal</span>
        </a>
    </div>
  </div>

  <table class="table is-hoverable is-fullwidth">
    <thead>
      <tr>
        <th><abbr title="kode">Kode Paket</abbr></th>
        <th><abbr title="penjurusan">Jurusan</abbr></th>
        <th><abbr title="tahun">Tahun</abbr></th>
      </tr>
    </thead>
  
    <tbody>
      <tr>
        <th>A1415</th>
        <td>IPA</td>
        <td>2014/2015</td>
      </tr>
      <tr>
        <th>S1415</th>
        <td>Soshum</td>
        <td>2014/2015</td>
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
  let Add = require('./Add.vue');
  export default{
    components:{Add},
    data(){
      return{
        addActive:''
      }
    },
    methods:{
      openAdd(){
        this.addActive = 'is-active';
      },
      close(){
        this.addActive = '';
      }
    }
  }
</script>
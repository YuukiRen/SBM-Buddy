<template>
<section class="section">
  <div class="columns">
    <div class="column">	
        <div class="field">
            <label class="label">Pilih Universitas</label>
            <div class="select">
                <select v-model="dt.univ" @change = updateTable(this.value)>
                    <option value="" selected disabled hidden>Choose here</option>
                    <option value="Institut Pertanian Bogor">Institut Pertanian Bogor</option>
                    <option value="Universitas Indonesia">Universitas Indonesia</option>
                    <option value="Institut Teknologi Bandung">Institut Teknologi Bandung</option>
                    <option value="Universitas Gadjah Mada">Universitas Gadjah Mada</option>
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
                  <i class="fa fa-plus has-text-white"></i>
            </span>
            <span class="has-text-white">Tambah Jurusan</span>
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
        <tr v-for="item,key in lists"
          :key="item.id">
            <td>{{item.nama_jurusan}}</td>
            <td>{{item.passing_grade}}</td>
            <td>
                <a class="icon">
                    <i class="fa fa-edit has-text-primary" @click='openUpdate(key)'></i>
                </a>
                <a class="icon">
                    <i class="fa fa-trash has-text-danger" aria-hidden="true" @click="del(key,item.id)"></i>
                </a>
            </td>
        </tr>
    </tbody>
  </table>

  <nav class="pagination" role="navigation" aria-label="pagination">
    <a class="pagination-previous" title="This is the first page">Previous Paging</a>
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
<Update :openmodal='updateActive' @closeRequest='close'></Update>
</section>
</template>

<script>
  let Add = require('./AddUniv.vue');
  let Update = require('./UpdateUniv.vue');
  export default{
    components:{Add,Update},
    data(){
      return {
        addActive : '',
        updateActive : '',
        lists:{},
        dt:{
          univ:''
        },
        errors:{}
      }
    },
    methods:{
      updateTable(event){
        axios.post('/getUniv',this.$data.dt)
          .then((response)=>this.lists = response.data)
          .catch((error) => this.errors = error.response.data.errors)
      },
      openAddUniv(){
        this.addActive = 'is-active';
      },
      del(key,id){
            if(confirm("Apakah anda yakin akan menghapus jurusan ini?")){
                this.loading=!this.loading
                axios.delete(`jurusan/${id}`)
                .then((response)=>{this.lists.splice(key,1);this.loading=!this.loading})
                .catch((error)=>this.errors=error.response.data.errors)  
            }
        },
      openUpdate(key){
        this.$children[1].list=this.lists[key];
        this.updateActive='is-active';
      },
      close(){
        this.addActive = this.updateActive = '';
      }
    }
  }
</script>
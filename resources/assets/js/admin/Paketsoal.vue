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
                  <i class="fa fa-plus has-text-white"></i>
            </span>
            <span class="has-text-white">Tambah Paket Soal</span>
        </a>
    </div>
  </div>

  <table class="table is-hoverable is-fullwidth">
    <thead>
      <tr>
        <th><abbr title="kode">Kode Paket</abbr></th>
        <th><abbr title="penjurusan">Jurusan</abbr></th>
        <th><abbr title="tahun">Tahun</abbr></th>
        <th><abbr title="edit">Pilihan</abbr></th>
      </tr>
    </thead>
  
    <tbody>
        <tr v-for="item,key in lists"
        :key="item.id">
          <th>{{item.kode}}</th>
          <td>{{item.penjurusan}}</td>
          <td>{{item.tahun}}</td>
          <td>
                <!-- <router-link to="/soal" class="icon">
                    <i class="fa fa-eye has-text-primary" aria-hidden="true"></i>
                </router-link> -->
                <a class="icon">
                    <i class="fa fa-eye has-text-primary" @click='openPassing(key)'></i>
                </a>
                <a class="icon">
                    <i class="fa fa-edit has-text-info" aria-hidden="true" @click='openUpdate(key)'></i>
                </a>
                <a class="icon">
                    <i class="fa fa-trash has-text-danger" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
    </tbody>
  </table>

  <!-- <vue-pagination   :pagination="lists"
                    @paginate="getLists()"
                    :offset="4">
  </vue-pagination> -->

  <!-- <nav class="pagination" role="navigation" aria-label="pagination">
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
  </nav> -->

  <!-- <ul class="pagination">
      <li v-if="pagination.current_page > 1">
          <a href="javascript:void(0)" aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
              <span aria-hidden="true">«</span>
          </a>
      </li>
      <li v-for="page in pagesNumber" :class="{'active': page == pagination.current_page}">
          <a href="javascript:void(0)" v-on:click.prevent="changePage(page)">{{ page }}</a>
      </li>
      <li v-if="pagination.current_page < pagination.last_page">
          <a href="javascript:void(0)" aria-label="Next" v-on:click.prevent="changePage(pagination.current_page + 1)">
              <span aria-hidden="true">»</span>
          </a>
      </li>
  </ul> -->

  <Add :openmodal='addActive' @closeRequest='close'></Add>
  <Update :openmodal='updateActive' @closeRequest='close'></Update>
</section>
</template>

<script>
  let Add = require('./Add.vue');
  let Update = require('./UpdatePaket.vue');
  export default{
    components:{Add,Update},
    data(){
      return{
        addActive:'',
        updateActive : '',
        lists:{},
        errors:{}
      }
    },
    // props: {
    //   pagination: {
    //       type: Object,
    //       required: true
    //   },
    //   offset: {
    //       type: Number,
    //       default: 4
    //   }
    // },
    // computed: {
    //   pagesNumber() {
    //     if (!this.pagination.to) {
    //       return [];
    //     }
    //     let from = this.pagination.current_page - this.offset;
    //     if (from < 1) {
    //       from = 1;
    //     }
    //     let to = from + (this.offset * 2);
    //     if (to >= this.pagination.last_page) {
    //       to = this.pagination.last_page;
    //     }
    //     let pagesArray = [];
    //     for (let page = from; page <= to; page++) {
    //       pagesArray.push(page);
    //     }
    //       return pagesArray;
    //   }
    // },
    mounted(){
      axios.post('/getData')
        .then((response)=>this.lists = response.data)
        .catch((error) => this.errors = error.response.data.errors)
    },
    methods:{
      openAdd(){
        this.addActive = 'is-active';
      },
      openPassing(key){
        this.$router.push({name: "soal",params:{pack:this.lists[key]}})
      },
      close(){
        this.addActive = this.updateActive = '';
      },
      openUpdate(key){
        this.$children[1].list=this.lists[key];
        this.updateActive='is-active';
      },
      // changePage(page) {
      //   this.pagination.current_page = page;
      //   this.$emit('paginate');
      // }
    }
  }
</script>
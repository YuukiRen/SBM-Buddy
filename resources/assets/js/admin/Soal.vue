<template>
<div>
  <nav class="panel column is-offset-3 is-6">
    <div class="panel-heading">
        {{list.kode}}
    </div>
    <div class="panel-block">
        <button class="button is-primary is-fullwidth" @click="openAdd">
          <span class="icon">
              <i class="fa fa-plus has-text-white"></i>
          </span>
          <span class="has-text-white">Tambah Soal</span>
        </button>
    </div>
    
  <p class="tabs is-centered">
    <ul>
      <li v-on:click="activate(0)" v-bind:class="{ 'is-active': active_now==0 }"><a>All</a></li>
      <li v-on:click="activate(1)" v-bind:class="{ 'is-active': active_now==1 }"><a>Biologi</a></li>
      <li v-on:click="activate(2)" v-bind:class="{ 'is-active': active_now==2 }"><a>Fisika</a></li>
      <li v-on:click="activate(3)" v-bind:class="{ 'is-active': active_now==3 }"><a>Kimia</a></li>
      <li v-on:click="activate(4)" v-bind:class="{ 'is-active': active_now==4 }"><a>Matematika</a></li>
    </ul>
  </p>

    <a class="panel-block" v-for="item,key in lists" v-if="active_now==0 || item.mapel == maps[active_now-1] ">
        <span class="panel-icon">
            <i class="fa fa-book" aria-hidden="true"></i>
        </span>
        {{item.pertanyaan}}
        <a class="icon">
            <i class="fa fa-eye has-text-primary" @click='openShow(key)'></i>
        </a>
        <a class="icon">
            <i class="fa fa-edit has-text-info" aria-hidden="true" @click='openUpdate(key)'></i>
        </a>
        <a class="icon">
            <i class="fa fa-trash has-text-danger" aria-hidden="true" @click="del(key,item.id)"></i>
        </a>
    </a>
  </nav>

  <Add :openmodal='addActive' @closeRequest='close'></Add>
  <Show :openmodal='showActive' @closeRequest='close'></Show>
  <Update :openmodal='updateActive' @closeRequest='close'></Update>
</div>
</template>

<script>
  let Add = require('./AddSoal.vue');
  let Show = require('./ShowSoal.vue');
  let Update = require('./UpdateSoal.vue');
  export default{
    components:{Add,Show,Update},
    data(){
      return{
        list:{},
        lists:{},
        addActive:'',
        showActive:'',
        updateActive:'',
        active_now:0,
        maps:[],
        loading:false
      }
    },
    created(){
        this.list = this.$route.params.pack;
        if(this.list.penjurusan == "IPA"){
          this.maps = ["biologi","fisika","kimia","matematika"]
        }
        else{
          this.maps = ["ekonomi","sejarah","sosiologi","geografi"]
        }
        axios.post('/getSoal',this.list)
          .then((response)=>this.lists = response.data)
          .catch((error) => this.errors = error.response.data.errors)
    },
    methods:{
      openAdd(){
        this.$children[0].aidi=this.list.id;
        this.addActive = 'is-active';
      },
      openShow(key){
        this.$children[1].list = this.lists[key]
        this.showActive = 'is-active';
      },
      openUpdate(key){
        this.$children[2].list = this.lists[key]
        this.updateActive = 'is-active';
      },
      del(key,id){
        if(confirm('are you sure?')){
          this.loading = !this.loading
          axios.delete(`/soal/${id}`)
          .then((response)=>{this.lists.splice(key,1);this.loading=!this.loading})
          .catch((error) => this.errors = error.response.data.errors)  
        }
      },
      close(){
        this.addActive = this.updateActive = this.showActive = '';
      },
      activate(now){
        this.active_now = now;
      }
    }
  }
</script>
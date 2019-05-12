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
    </a>
  </nav>

  <Add :openmodal='addActive' @closeRequest='close'></Add>
</div>
</template>

<script>
  let Add = require('./AddSoal.vue');
  export default{
    components:{Add},
    data(){
      return{
        list:{},
        lists:{},
        addActive:'',
        active_now:0,
        maps:["biologi","fisika","kimia","matematika"]
      }
    },
    mounted(){
        this.list = this.$route.params.pack;
        if(this.list.penjurusan == "IPA"){
          maps = ["biologi","fisika","kimia","matematika"]
        }
        else{
          maps = ["ekonomi","sejarah","sosiologi","geografi"]
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
      close(){
        this.addActive = '';
      },
      activate(now){
        this.active_now = now;
      }
    }
  }
</script>
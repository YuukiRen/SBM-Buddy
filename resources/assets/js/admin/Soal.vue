<template>
<div>
  <nav class="panel column is-offset-3 is-6">
    <div class="panel-heading">
        {{list.kode}}
    </div>
    <div class="panel-block">
        <button class="button is-primary is-outlined is-fullwidth" @click="openAdd">
          <span class="icon">
              <i class="fa fa-plus has-text-white"></i>
          </span>
          <span class="has-text-white">Tambah Soal</span>
        </button>
    </div>
    
    <p class="panel-tabs">
    <a class="is-active">All</a>
    <a>Biologi</a>
    <a>Fisika</a>
    <a>Kimia</a>
    <a>Matematika</a>
  </p>

    <a class="panel-block" v-for="item,key in lists" :key="item.id">
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
        addActive:''
      }
    },
    mounted(){
        this.list = this.$route.params.pack;
        
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
      }
    }
  }
</script>
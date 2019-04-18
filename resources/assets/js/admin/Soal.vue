<template>
<div>
  <nav class="panel column is-offset-3 is-6">
    <div class="panel-heading">
        A1314
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

    <a class="panel-block">
        <span class="panel-icon">
            <i class="fa fa-book" aria-hidden="true"></i>
        </span>
        1
    </a>
    <a class="panel-block">
        <span class="panel-icon">
            <i class="fa fa-book" aria-hidden="true"></i>
        </span>
        2
    </a>
    <a class="panel-block">
        <span class="panel-icon">
            <i class="fa fa-book" aria-hidden="true"></i>
        </span>
        3
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
<template>
  <div>
      <nav class="panel">
      <p class="panel-heading">
        repositories

        <button class="button is-link is-outlined" @click="openAdd">
          reset all filters
        </button>
      </p>

      <div class="panel-block">
        <p class="control has-icons-left">
          <input class="input is-small" type="text" placeholder="search">
          <span class="icon is-small is-left">
            <i class="fas fa-search" aria-hidden="true"></i>
          </span>
        </p>
      </div>
      <a class="panel-block">
        <span class="panel-icon">
          <i class="fas fa-book" aria-hidden="true"></i>
        </span>
        marksheet
      </a>
    </nav>  
  <Add :openmodal='addActive' @closeRequest='close'></Add>
  </div>
	
</template>

<script>
  
let Add = require('./Add.vue');
  export default{
    components:{Add},
    data(){
      return{
        addActive : ''
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
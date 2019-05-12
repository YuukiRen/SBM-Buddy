<template>
    
    <section class="container">
        <br><br>
        <div class="columns is-vcentered">
        <div class="column">
            <div class="notification is-primary">
                <br>
                <nav class="level">    
                    <span class="icon level-item has-text-centered">
                        <i class="fa fa-4x fa-pagelines"></i>
                    </span><br>
                </nav>
                <br>
                <div style="text-align: center;">
                    <!-- <a href="pemanasan" class="button title is-primary is-inverted is-outlined">BIOLOGI</a> -->
                    <router-link :to="{ name: 'pemanasan', params: { mapel: 'biologi' } }" class="button title is-primary is-inverted is-outlined" style="text-decoration: none;">
                        BIOLOGI
                    </router-link>
               </div>
            </div>
            <br><br>
            <div class="notification is-link">
                <br>
                <nav class="level">    
                    <span class="icon level-item has-text-centered">
                        <i class="fa fa-4x fa-rocket"></i>
                    </span><br>
                </nav>
                <br>
               <div style="text-align: center;">
               <router-link :to="{ name: 'pemanasan', params: { mapel: 'fisika' } }" class="button title is-primary is-inverted is-outlined" style="text-decoration: none;">
                        FISIKA
                </router-link>
               </div>
            </div>
        </div>
        <div class="column is-1">
        </div>
        <div class="column">
            <div class="notification is-warning">
                <br>
                <nav class="level">    
                    <span class="icon has-text-white level-item has-text-centered">
                        <i class="fa fa-4x fa-calculator"></i>
                    </span><br>
                </nav>
                <br>
               <div style="text-align: center;">
                   <router-link :to="{ name: 'pemanasan', params: { mapel: 'matematika' } }" class="button title is-primary is-inverted is-outlined" style="text-decoration: none;">
                        MATEMATIKA
                    </router-link>
               </div>
            </div>
            <br><br>
            <div class="notification is-danger">
                <br>
                <nav class="level">    
                    <span class="icon level-item has-text-centered">
                        <i class="fa fa-4x fa-flask"></i>
                    </span><br>
                </nav>
                <br>
               <div style="text-align: center;">
                   <router-link :to="{ name: 'pemanasan', params: { mapel: 'kimia' } }" class="button title is-primary is-inverted is-outlined" style="text-decoration: none;">
                        KIMIA
                    </router-link>
               </div>
            </div>
        </div>
        </div>
    </section>

</template>

<script>
  let Pemanasan = require('./Pemanasan.vue');
  export default{
    components:{Pemanasan},
    data(){
      return {
          mapel:''
      }
    }
  }
</script>

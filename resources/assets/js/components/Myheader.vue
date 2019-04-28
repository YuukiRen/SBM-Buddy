<template>
<section class="hero is-link is-bold">
  <!-- Hero head: will stick at the top -->

    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
            <router-link :to="{name: 'home'}">
              <img :src="'img/sbm-logo.png'" >
            </router-link>
            
          </a>
          <span class="navbar-burger burger" data-target="navbarMenuHeroA">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroA" class="navbar-menu">
          <!--UNLOGGED-->
          <div class="navbar-end">
            <div v-if="!$auth.check()" v-for="(route, key) in routes.unlogged" v-bind:key="route.path">
              <router-link  :to="{ name : route.path }" :key="key" class="navbar-item" style="text-decoration: none;">
                  {{route.name}}
              </router-link>
            </div>
          </div>
          <!--LOGGED USER-->
          <div v-if="$auth.check(1)" v-for="(route, key) in routes.user" v-bind:key="route.path">
              <router-link  :to="{ name : route.path }" :key="key" class="navbar-item">
                  {{route.name}}
              </router-link>
          </div>
          <!--LOGGED ADMIN-->
          <div v-if="$auth.check(2)" v-for="(route, key) in routes.admin" v-bind:key="route.path">
              <router-link  :to="{ name : route.path }" :key="key" class="navbar-item">
                  {{route.name}}
              </router-link>
          </div>
          <!--LOGOUT-->
          <div v-if="$auth.check()">
              <span class="navbar-item">
                <a href="#" @click.prevent="$auth.logout()" class="button is-link is-inverted">
                  <span class="icon">
                    <i class="fa fa-sign-out"></i>
                  </span>
                  <span>Log Out</span>
                </a>
              </span>
          </div>
        </div>
      </div>
    </nav>
</section>
</template>

<script>
  export default {
    data() {
      return {
        routes: {
          // UNLOGGED
          unlogged: [
            {
              name: 'Login',
              path: 'login'
            },
            {
              name: 'Register',
              path: 'register'
            }
          ],
          // LOGGED USER
          user: [
            {
              name: 'Dashboard',
              path: 'dashboard'
            },
            {
              name: 'Passing Grade',
              path: 'passingGrade'
            }
          ],
          // LOGGED ADMIN
          admin: [
            {
              name: 'Dashboard',
              path: 'admin.dashboard'
            },
            {
              name: 'Paket Soal',
              path: 'paketsoal'
            },
            {
              name: 'Pesan',
              path: 'pesan'
            },
            {
              name: 'Universitas',
              path: 'universitas'
            }
          ]
        }
      }
    },
    mounted() {
      //
    }
  }
</script>
<template>
<section class="hero is-link is-bold">
  <!-- Hero head: will stick at the top -->

    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
            <router-link :to="{name: 'home'}">
              <img src="https://previews.dropbox.com/p/thumb/AAYfsxxo3PoiAe6TMkLkpF0kz9-paJm3sqQAdXQsFvM0cFRQ4ebJrDJHJtPejZS5fYn0jz472CbuRzecppPzbFQL5jThYw9f6JecUQACExdQ0OhqtKcyKzZerBTszOtoFJ7xNLzBnAXcWjQl5DvDDVqPhxR3_Vi6l0XdTQXFxKZ0V5ZD7Y7QPcunt29tNyrzVY25JeRb3d7EqWvvL0vg9mNO1UOlOwcsKgUb5PrtB_U_eDvD8GJwCALsWIGxuyxJTFlNIxRweM8eB_dnKZbFmu34u3BOylV6QaCcA05xsqUuThyUylk2oE6jiShDEIYkVVWXWaingaRY4iqIoJZphUPy/p.png?size_mode=5" height="100" alt="Logo">
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
          <div class="navbar-end" v-if="!$auth.check()" v-for="(route, key) in routes.unlogged" v-bind:key="route.path">
              <router-link  :to="{ name : route.path }" :key="key" class="navbar-item">
                  {{route.name}}
              </router-link>
          </div>
          <!--LOGGED USER-->
          <li v-if="$auth.check(1)" v-for="(route, key) in routes.user" v-bind:key="route.path">
              <router-link  :to="{ name : route.path }" :key="key" class="navbar-item">
                  {{route.name}}
              </router-link>
          </li>
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
              name: 'Register',
              path: 'register'
            },
            {
              name: 'Login',
              path: 'login'
            }
          ],
          // LOGGED USER
          user: [
            {
              name: 'Dashboard',
              path: 'dashboard'
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
<template>
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Login</div>
            <div class="card-body">
                <div class="alert alert-danger" v-if="has_error">
                    <p>Error, can not connect with these credentials.</p>
                </div>
                <form autocomplete="off" @submit.prevent="login" method="post">
                    <div class="field">
                      <p class="control has-icons-left has-icons-right">
                        <input id="email" class="input" type="email" placeholder="Email" v-model="email" required>
                        <span class="icon is-small is-left">
                          <i class="fa fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                          <i class="fa fa-check"></i>
                        </span>
                      </p>
                    </div>
                    <div class="field">
                      <p class="control has-icons-left">
                        <input id="password" class="input" type="password" placeholder="Password" v-model="password" required>
                        <span class="icon is-small is-left">
                          <i class="fa fa-lock"></i>
                        </span>
                      </p>
                    </div>
                    <div class="field">
                      <p class="control">
                        <button type="submit" class="button is-success">
                          Login
                        </button>
                      </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        email: null,
        password: null,
        has_error: false
      }
    },
    mounted() {
      //
    },
    methods: {
      login() {
        // get the redirect object
        var redirect = this.$auth.redirect()
        var app = this
        this.$auth.login({
          params: {
            email: app.email,
            password: app.password
          },
          success: function() {
            // handle redirection
            const redirectTo = redirect ? redirect.from.name : this.$auth.user().role === 2 ? 'admin.dashboard' : 'dashboard'
            this.$router.push({name: redirectTo})
          },
          error: function() {
            app.has_error = true
          },
          rememberMe: true,
          fetchUser: true
        })
      }
    }
  }
</script>
<template>
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Registration</div>
            <div class="card-body">
                <div class="alert alert-danger" v-if="has_error && !success">
                    <p v-if="error == 'registration_validation_error'">Validation error (s), please consult the message (s) below.</p>
                    <p v-else>Error, can not register at the moment. If the problem persists, please contact an administrator.</p>
                </div>
                <form autocomplete="off" @submit.prevent="register" v-if="!success" method="post">
                    <!-- Form Username -->
                    <div class="field">
                      <label class="label">Username</label>
                      <div class="control has-icons-left has-icons-right">
                        <input class="input " v-bind:class="{ 'is-error': has_error && errors.name }" type="text" placeholder="Username Input" v-model="name">
                        <span class="icon is-small is-left">
                          <i class="fa fa-user"></i>
                        </span>
                        <!-- <span class="icon is-small is-right" >
                          <i class="fa fa-check"></i>
                        </span> -->
                      </div>
                      <p class="help is-danger" v-if="has_error && errors.name">{{errors.name}}</p>
                    </div>
                    <!-- Form Email -->
                    <div class="field">
                      <label class="label">Email</label>
                      <div class="control has-icons-left has-icons-right">
                        <input class="input " v-bind:class="{ 'is-danger': has_error && errors.email }" type="email" placeholder="Email input" v-model="email">
                        <span class="icon is-small is-left">
                          <i class="fa fa-envelope"></i>
                        </span>
                        <!-- <span class="icon is-small is-right">
                          <i class="fa fa-exclamation-triangle"></i>
                        </span> -->
                      </div>
                      <p class="help is-danger" v-if="has_error && errors.email">{{ errors.email }}</p>
                    </div>
                    <!-- Form Password -->
                    <div class="field">
                      <label class="label">Password</label>
                      <p class="control has-icons-left">
                        <input class="input " v-bind:class="{ 'is-danger': has_error && errors.password }" type="password" placeholder="Password" v-model="password">
                        <span class="icon is-small is-left">
                          <i class="fa fa-lock"></i>
                        </span>
                      </p>
                      <p class="help is-danger" v-if="has_error && errors.password">{{ errors.password }}</p>
                    </div>
                    <!-- Form Conf Password -->
                    <div class="field">
                      <label class="label">Password Confirmation</label>
                      <p class="control has-icons-left">
                        <input class="input " v-bind:class="{ 'is-danger': has_error && errors.password }" type="password" placeholder="Password" v-model="password_confirmation">
                        <span class="icon is-small is-left">
                          <i class="fa fa-lock"></i>
                        </span>
                      </p>
                      <p class="help is-danger" v-if="has_error && errors.password">{{ errors.password }}</p>
                    </div>
                    
                    <div class="field">
                      <p class="control">
                        <button type="submit" class="button is-success">
                          Register
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
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        has_error: false,
        error: '',
        errors: {},
        success: false
      }
    },
    methods: {
      register() {
        var app = this
        this.$auth.register({
          data: {
            name: app.name,
            email: app.email,
            password: app.password,
            password_confirmation: app.password_confirmation
          },
          success: function () {
            app.success = true
            this.$router.push({name: 'login', params: {successRegistrationRedirect: true}})
          },
          error: function (res) {
            console.log(res.response.data.errors)
            app.has_error = true
            app.error = res.response.data.error
            app.errors = res.response.data.errors || {}
          }
        })
      }
    }
  }
</script>
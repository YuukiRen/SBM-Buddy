<template>
  <div>
    <h1>Register</h1>
    <input 
    type = "text"
    name="email"
    v-model="email"
    placeholder="email">
    <br>
    <input 
    type = "password"
    name="password"
    v-model="password"
    placeholder="password">
    <br>
    <button
      @click="register">
      Register</button>
  </div>
</template>

<script>
import AuthenticationServices from '@/services/AuthenticationService'
export default {
  data () {
    return {
      email : '',
      password : '' 
    }
  },
  watch:{
    email(value){
      console.log('email has changed',value)
    },
    password(value2){
      console.log('pw has changed',value2)
    }
  },
  methods:{
    async register(){
      const response = await AuthenticationServices.register({
        email: this.email,
        password: this.password
      })
      // console.log('Cliked!',this.email,this.password)
      console.log(response.data)
    }
  }
  ,
  mounted(){
    setTimeout(()=>{
      this.email = 'Hello World'
    }, 2000)
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>

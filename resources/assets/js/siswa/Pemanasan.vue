<template>
  <section class="container" >
  <br><br>
  
  <div class="columns">
    <div class="column is-0 is-one-fifth">
      <h3>Soal</h3>
      <div style="width:100%" v-for="data in soal.length">
        <div style="float:left;width:15%" class="button is-outlined" v-on:click="getIndex(soal[data-1])" v-if="ans[soal[data-1].id]==NULL">
          {{data}}
        </div>
        <div style="float:left;width:15%" class="button is-info is-outlined" v-on:click="getIndex(soal[data-1])" v-else>
          {{data}}
        </div>
      </div>
    </div>
    
    <div class="column is-four-fifth">
      <div class="card">
        <div class="card-header title">
          <div v-for="data in soal" v-if="no == data.id ">
            {{data.pertanyaan}}
            <span>{{data.mapel}}</span>
          </div>
        </div>

        <div class="card-content">
          <div class="control">
            <div v-for="data in soal" v-if="no == data.id">
              <label class="radio is-size-4">
                <input type="radio" value="A" v-model="ans[data.id]">
                {{data.pilihana}}
              </label>
              <br>
              <label class="radio is-size-4">
                <input type="radio" value="B" v-model="ans[data.id]">
                {{data.pilihanb}}
              </label>
              <br>
              <label class="radio is-size-4">
                <input type="radio" value="C" v-model="ans[data.id]">
                {{data.pilihanc}}
              </label>
              <br>
              <label class="radio is-size-4">
                <input type="radio" value="D" v-model="ans[data.id]">
                {{data.pilihand}}
              </label>
              <br>
              <label class="radio is-size-4">
                <input type="radio" value="E" v-model="ans[data.id]">
                {{data.pilihane}}
              </label>
            </div>
          </div>
          <br>
        </div>
      </div>                
    </div>
  </div>
            
  <div class="buttons level-right">
    <button class="button is-success" @click.prevent="submit">Submit all and finish</button>
  </div>
  </section>

</template>

<script>
export default {
  data(){
    return {
      no: 1,
      soal:{},
      ans:{},
      mapel:this.$route.params.mapel,
      sum:0
    }
  },
  mounted(){
    this.mapel = this.$route.params.mapel
    if(this.mapel == 'fisika'){
      axios.post('/getSoalFisika')
        .then((response)=>this.soal = response.data)
        .catch((error) => this.errors = error.response.data.errors)
    }
    else if(this.mapel == 'kimia'){
      axios.post('/getSoalKimia')
        .then((response)=>this.soal = response.data)
        .catch((error) => this.errors = error.response.data.errors)
    }
    else if(this.mapel == 'matematika'){
      axios.post('/getSoalMath')
        .then((response)=>this.soal = response.data)
        .catch((error) => this.errors = error.response.data.errors)
    }
    else if(this.mapel == 'biologi'){
      axios.post('/getSoalBiologi')
        .then((response)=>this.soal = response.data)
        .catch((error) => this.errors = error.response.data.errors)
    }
    
  },
  methods:{
    getIndex : function(value){
      this.no = value.id
    },
    submit(){
        axios.post('/grading',this.$data.ans).then((response)=>{
          this.$data.sum = response.data
          this.$router.push({name: "pembahasan",params:{sum:this.sum,soal:this.soal,ans:this.ans}})
        })
        .catch((error)=>this.errors=error.response.data.errors)
    }
  }
}
</script>
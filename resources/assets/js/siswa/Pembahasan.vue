<template>
  <section class="container" >
  <br><br>
  
  <div class="columns">
    <div class="column is-one-fifth">
      <h3>Soal</h3>
      <div class="button" v-on:click="getIndex(soal[data-1])" v-for="data in soal.length">
        {{data}}
      </div>
      
          <article class="message is-success">
            
              <span>Total Score : {{this.score}}</span>
            
          </article>
    </div>
    
    <div class="column is-four-fifth">
      <div class="card">
        <div class="card-header title">
          <div v-for="data in soal" v-if="no == data.id">
            {{data.pertanyaan}}
          </div>
        </div>

        <div class="card-content">
          <div class="control">
            <div v-for="data in soal" v-if="no == data.id">
              <label class="radio is-size-4" disabled>
                <input type="radio" checked v-if="ans[no] == 'A'">
                <input type="radio" disabled v-else>
                {{data.pilihana}}
              </label>
              <br>
              <label class="radio is-size-4" disabled>
                <input type="radio" checked v-if="ans[no] == 'B'">
                <input type="radio" disabled v-else>
                {{data.pilihanb}}
              </label>
              <br>
              <label class="radio is-size-4" disabled>
                <input type="radio" checked v-if="ans[no] == 'C'">
                <input type="radio" disabled v-else>
                {{data.pilihanc}}
              </label>
              <br>
              <label class="radio is-size-4" disabled>
                <input type="radio" checked v-if="ans[no] == 'D'">
                <input type="radio" disabled v-else>
                {{data.pilihand}}
              </label>
              <br>
              <label class="radio is-size-4" disabled>
                <input type="radio" checked v-if="ans[no] == 'E'">
                <input type="radio" disabled v-else>
                {{data.pilihane}}
              </label>
            </div>
          </div>
          <br>
        </div>
      </div>     
      
    <div v-for="data in soal" v-if="no == data.id">
        <footer class="card-footer level-right">
            {{data.pembahasan}}
        </footer>           
    </div>
    </div>
  </div>
            
  <div class="buttons level-right">
    <button class="button is-info" >Finish Review</button>
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
      score:0
    }
  },
  mounted(){
    this.soal = this.$route.params.soal
    this.ans = this.$route.params.ans
    this.score = this.$route.params.sum
  },
  methods:{
    getIndex : function(value){
      this.no = value.id
    },
  }
}
</script>
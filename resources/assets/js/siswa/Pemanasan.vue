<template>
  <section class="container" >
  <br><br>
  
  <div class="columns">
    <div class="column is-one-fifth">
      <h3>Soal</h3>
      <div class="button" v-on:click="getIndex(data)" v-for="data in soal" v-model="no">
        {{data.soalId}}
      </div>
    </div>
    
    <div class="column is-four-fifth">
      <div class="card">
        <div class="card-header title">
          <div v-for="data in soal" v-if="no == data.soalId">
            {{data.pertanyaan}}
          </div>
        </div>

        <div class="card-content">
          <div class="control">
            <div v-for="data in soal" v-if="no == data.soalId">
              <label class="radio is-size-4">
                <input type="radio" name="rsvp">
                {{data.jawabanA}}
              </label>
              <br>
              <label class="radio is-size-4">
                <input type="radio" name="rsvp">
                {{data.jawabanB}}
              </label>
              <br>
              <label class="radio is-size-4">
                <input type="radio" name="rsvp">
                {{data.jawabanC}}
              </label>
            </div>
          </div>
          <br>
        </div>
      </div>
      
      <footer class="card-footer level-right">
        <a href="#" class="button" v-on:click="no -= 1">Prev</a>
        <a href="#" class="button" v-on:click="no += 1">Next</a>
      </footer>
                
    </div>
  </div>
            
  <div class="buttons level-right">
    <a href="/pembahasan" class="button is-success">Submit all and finish</a>
  </div>
  </section>

</template>

<script>
export default {
  name: 'pemanasan',
  data(){
    return {
      no: 1,
      soal:[
        {
          soalId: 1,
          pertanyaan: "alvin",
          jawabanA: "reinaldo",
          jawabanB: "triadi",
          jawabanC: "hasna"
        },
        {
          soalId: 2,
          pertanyaan: "restu",
          jawabanA: "hasna",
          jawabanB: "triadi",
          jawabanC: "reinaldo"
        },
        {
          soalId: 3,
          pertanyaan: "iqoh",
          jawabanA: "reinaldo",
          jawabanB: "triadi",
          jawabanC: "hasna"
        },
        {
          soalId: 4
        },
        {
          soalId: 5
        },
        {
          soalId: 6
        },
        {
          soalId: 7
        }
      ]      
    }
  },
  methods:{
    getIndex : function(value){
      this.no = value.soalId
    }
  }
}
</script>


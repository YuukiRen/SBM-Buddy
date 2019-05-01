<template>
  <section class="container" >
  <br><br>
  
  <div class="columns">
    <div class="column is-one-fifth">
      <h3>Soal</h3>
      <div class="button" v-on:click="getIndex(soal[data-1])" v-for="data in soal.length">
        {{data}}
      </div>
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
              <label class="radio is-size-4">
                <input type="radio" name="rsvp">
                {{data.pilihana}}
              </label>
              <br>
              <label class="radio is-size-4">
                <input type="radio" name="rsvp">
                {{data.pilihanb}}
              </label>
              <br>
              <label class="radio is-size-4">
                <input type="radio" name="rsvp">
                {{data.pilihanc}}
              </label>
              <br>
              <label class="radio is-size-4">
                <input type="radio" name="rsvp">
                {{data.pilihand}}
              </label>
              <br>
              <label class="radio is-size-4">
                <input type="radio" name="rsvp">
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
      soal:{}  
    }
  },
  mounted(){
    axios.post('/getSoalFisika')
        .then((response)=>this.soal = response.data)
        .catch((error) => this.errors = error.response.data.errors)
  },
  methods:{
    getIndex : function(value){
      this.no = value.id
    }
  }
}
</script>
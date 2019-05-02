<template>
  <section class="container" >
  <br><br>
  
  <div class="columns">
    <div class="column is-one-fifth">
      <article class="message is-link">
        <div class="message-header">
          <p>Total Score : {{this.score}}</p>
        </div>
      </article>

      <h3>Soal</h3>
      <div style="width:100%" v-for="data in soal.length">
        <div style="float:left;width:25%" class="button is-success is-outlined" v-on:click="getIndex(soal[data-1])" v-if="soal[data-1].jawaban == ans[soal[data-1].id]">
          {{data}}
        </div>
        <div style="float:left;width:25%" class="button is-outlined" v-on:click="getIndex(soal[data-1])" v-else-if="ans[soal[data-1].id]==NULL">
          {{data}}
        </div>
        <div style="float:left;width:25%" class="button is-danger is-outlined" v-on:click="getIndex(soal[data-1])" v-else>
          {{data}}
        </div>
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
              <!-- A -->
              <label class="radio is-size-4 has-background-primary has-text-white" disabled v-if="data.jawaban == 'A'">
                <input type="radio" checked disabled>
                {{data.pilihana}}
              </label>
              <label class="radio is-size-4 has-background-danger has-text-white" disabled v-else-if="ans[no] == 'A'">
                <input type="radio" checked disabled>
                {{data.pilihana}}
              </label>
              <label class="radio is-size-4" disabled v-else>
                <input type="radio" disabled>
                {{data.pilihana}}
              </label>
              <br>
              <!-- B -->
              <label class="radio is-size-4 has-background-primary has-text-white" disabled v-if="data.jawaban == 'B'">
                <input type="radio" checked disabled>
                {{data.pilihanb}}
              </label>
              <label class="radio is-size-4 has-background-danger has-text-white" disabled v-else-if="ans[no] == 'B'">
                <input type="radio" checked disabled>
                {{data.pilihanb}}
              </label>
              <label class="radio is-size-4" disabled v-else>
                <input type="radio" disabled>
                {{data.pilihanb}}
              </label>
              <br>
              <!-- C -->
              <label class="radio is-size-4 has-background-primary has-text-white" disabled v-if="data.jawaban == 'C'">
                <input type="radio" checked disabled>
                {{data.pilihanc}}
              </label>
              <label class="radio is-size-4 has-background-danger has-text-white" disabled v-else-if="ans[no] == 'C'">
                <input type="radio" checked disabled>
                {{data.pilihanc}}
              </label>
              <label class="radio is-size-4" disabled v-else>
                <input type="radio" disabled>
                {{data.pilihanc}}
              </label>
              <br>
              <!-- D -->
              <label class="radio is-size-4 has-background-primary has-text-white" disabled v-if="data.jawaban == 'D'">
                <input type="radio" checked disabled>
                {{data.pilihand}}
              </label>
              <label class="radio is-size-4 has-background-danger has-text-white" disabled v-else-if="ans[no] == 'D'">
                <input type="radio" checked disabled>
                {{data.pilihand}}
              </label>
              <label class="radio is-size-4" disabled v-else>
                <input type="radio" disabled>
                {{data.pilihand}}
              </label>
              <br>
              <!-- E -->
              <label class="radio is-size-4 has-background-primary has-text-white" disabled v-if="data.jawaban == 'E'">
                <input type="radio" checked disabled>
                {{data.pilihane}}
              </label>
              <label class="radio is-size-4 has-background-danger has-text-white" disabled v-else-if="ans[no] == 'E'">
                <input type="radio" checked disabled>
                {{data.pilihane}}
              </label>
              <label class="radio is-size-4" disabled v-else>
                <input type="radio" disabled>
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
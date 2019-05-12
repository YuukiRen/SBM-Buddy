<template>
<section class="section">
    <div class="columns">
        <div class="column is-1">
        
        </div>
        <div class="column">
            <h3>Details</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th><abbr title="kode">Paket Soal</abbr></th>
                        <th><abbr title="tanggal">Tanggal Pengerjaan</abbr></th>
                        <th><abbr title="nilai">Score</abbr></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="data in prog.length">
                        <th>{{data}}</th>
                        <td>{{prog[data-1].paketsoal}}</td>
                        <td>{{prog[data-1].created_at | dayOfWeeks}}/{{prog[data-1].created_at | formatDate}}</td>
                        <td>{{prog[data-1].score}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="column is-1">
        
        </div>
    </div>

</section>
</template>

<script>
export default {
  data(){
    return {
			prog:{},
            errors:{},
            weeks:[],
            loading:false
    }
  },
  mounted(){
    if(this.loading == true){
        return;
    }
    this.loading = true
    axios.post('/getProgress')
    .then((response)=>{
            this.prog = response.data
		})
    .catch((error) => this.errors = error.response.data.errors)
  }
}
</script>
<template>
<section class="section">
    <div class="columns">
        <div class="column is-1">
        
        </div>
        <div class="column">
            <div class="tabs">
                <ul>
                    <li class="is-active"><a>Harian</a></li>
                    <li><a>Mingguan</a></li>
                    <li><a>Bulanan</a></li>
                </ul>
            </div>

            <div class="columns">
                <div class="column is-1">
                    <p>Senin</p>
                    <p>Selasa</p>
                    <p>Rabu</p>
                    <p>Kamis</p>
                    <p>Jumat</p>
                    <p>Sabtu</p>
                </div>
                <div class="column is-7">
                    <progress class="progress is-primary" value="15" max="100">15%</progress>
                    <progress class="progress is-primary" value="30" max="100">30%</progress>
                    <progress class="progress is-primary" value="45" max="100">45%</progress>
                    <progress class="progress is-primary" value="60" max="100">60%</progress>
                    <progress class="progress is-primary" value="75" max="100">75%</progress>   
                    <progress class="progress is-primary" value="90" max="100">90%</progress>
                </div>
            </div>

            <br>
            <h3>Detail</h3>

            <div class="dropdown is-hoverable">
                <div class="dropdown-trigger">
                    <button class="button" aria-haspopup="true">
                    <span>Hari</span>
                    <span class="icon is-small">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </span>
                    </button>
                </div>
                <div class="dropdown-menu">
                    <div class="dropdown-content">
                    <a href="#" class="dropdown-item">
                        <label class="checkbox">
                            <input type="checkbox">
                            Senin
                        </label>
                    </a>
                    <a href="#" class="dropdown-item">
                        <label class="checkbox">
                            <input type="checkbox">
                            Selasa
                        </label>
                    </a>
                    <a href="#" class="dropdown-item">
                        <label class="checkbox">
                            <input type="checkbox">
                            Rabu
                        </label>
                    </a>
                    <a href="#" class="dropdown-item">
                        <label class="checkbox">
                            <input type="checkbox">
                            Kamis
                        </label>
                    </a>
                    <a href="#" class="dropdown-item">
                        <label class="checkbox">
                            <input type="checkbox">
                            Jumat
                        </label>
                    </a>
                    <a href="#" class="dropdown-item">
                        <label class="checkbox">
                            <input type="checkbox">
                            Sabtu
                        </label>
                    </a>
                    </div>
                </div>
            </div>

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
                        <td>{{prog[data-1].created_at | formatDate}}</td>
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
            yourDateString: '2018-12-24 04:19:23'
    }
  },
  mounted(){
    axios.post('/getProgress')
    .then((response)=>{
			this.prog = response.data
		})
		.catch((error) => this.errors = error.response.data.errors)
  }
}
</script>
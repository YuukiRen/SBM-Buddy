
<template>
    <section class="container">
<<<<<<< HEAD

            <p class="title has-text-centered">
                <br>
                Halo, Siswa!
=======
    <div class="card">
        <div class="card-content">
            <p class="title">
                Halo, {{user.name}}!
>>>>>>> 8acb7eca1c331bd163913c22b08728e0c8c43e3b
            </p>
            <p class="subtitle has-text-centered">
                Selamat datang kembali. Ayo semangat berlatih!
            </p>
<<<<<<< HEAD

=======
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <p class="subtitle">
                Jurusanmu :
            </p>
            <div class="field">
                <div class="select">
                <select v-model="user.jurusan" @change = updateTable(this.value)>
                    <option value="" selected disabled hidden>Choose here</option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                </select>
                </div>
                <p class="subtitle">
                    {{resp.status}}
                </p>
            </div>
        </div>
    </div>
>>>>>>> 8acb7eca1c331bd163913c22b08728e0c8c43e3b
    <div class="columns is-vcentered">
        <div class="column">
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img :src="'img/siswa3.jpg'" alt="Placeholder image">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                       <div class="media-content">
                            <p class="title is-4">Pemanasan</p>
                        </div>
                    </div>

                    <div class="content">
                            Kamu dapat berlatih mengerjakan soal per mata pelajaran yang kamu inginkan.
                            <br>
                            <br>
                            <div class="buttons has-addons is-centered">
                                <a href='/pilihmapel' class="button is-primary" style="text-decoration: none;">Mulai berlatih</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img :src="'img/siswa2.jpg'" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">

                            <div class="media-content">
                                <p class="title is-4">Try Out</p>
                            </div>
                        </div>

                        <div class="content">
                            Disini, kamu dapat mengerjakan satu paket soal SBMPTN, mirip seperti Try Out.
                            <br>
                            <br>
                            <div class="buttons has-addons is-centered">
<<<<<<< HEAD
                                <a class="button is-primary" style="text-decoration: none;">Mulai Try Out</a>
=======
                                <a href='/tryout' class="button is-primary">Mulai Try Out</a>
>>>>>>> 8acb7eca1c331bd163913c22b08728e0c8c43e3b
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img :src="'img/siswa1.jpg'" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">

                            <div class="media-content">
                                <p class="title is-4">My Progress</p>
                            </div>
                        </div>

                        <div class="content">
                            Ayo lihat bagaimana perkembangan kamu dalam mengerjakan soal-soal yang ada!
                            <br>
                            <br>
                            <div class="buttons has-addons is-centered">
                                <a href="/progress" class="button is-primary" style="text-decoration: none;">Lihat Progress</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</template>

<script>
export default {
  data(){
    return {
			user:{},
            errors:{},
            resp:{},
    }
  },
  mounted(){
    axios.post('/getUser')
    .then((response)=>{
			this.user = response.data
		})
		.catch((error) => this.errors = error.response.data.errors)
  },
  methods:{
    updateTable(event){
        axios.post('/updJurusan',this.$data.user).then((response)=>this.resp = response.data)
    },
  }
}
</script>
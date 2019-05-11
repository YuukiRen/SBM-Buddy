
<template>

    <section class="container">
    <div class="card">
        <div class="card-content">
            <p class="title">
                Halo, {{user.name}}!
            </p>
            <p class="subtitle">
                Selamat datang kembali. Ayo semangat berlatih!
            </p>
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
            </div>
        </div>
    </div>
    <div class="columns is-vcentered">
        <div class="column">
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                       <div class="media-content">
                            <p class="title is-4">Pemanasan</p>
                        </div>
                    </div>

                    <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                            <br>
                            <br>
                            <div class="buttons has-addons is-centered">
                                <a href='/pilihmapel' class="button is-primary">Mulai berlatih</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">

                            <div class="media-content">
                                <p class="title is-4">Try Out</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                            <br>
                            <br>
                            <div class="buttons has-addons is-centered">
                                <a class="button is-primary">Mulai Try Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">

                            <div class="media-content">
                                <p class="title is-4">My Progress</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                            <br>
                            <br>
                            <div class="buttons has-addons is-centered">
                                <a href="/progress" class="button is-primary">Lihat Progress</a>
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
        axios.post('/updJurusan',this.$data.user)
    },
  }
}
</script>
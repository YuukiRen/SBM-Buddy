<template>
	<div class="modal" :class='openmodal'>
	  <div class="modal-background"></div>
	  <div class="modal-card">
	    <header class="modal-card-head">
	      <p class="modal-card-title">Update Soal</p>
	      <button class="delete" aria-label="close" @click="close"></button>
	    </header>
	    <section class="modal-card-body">
	    	<div class="field">
                <label class="label">Mata Pelajaran</label>
                <div class="control">
                <div class="select">
                    <select v-model="list.mapel">
                    <option value="biologi" v-bind="{'selected':this.value == list.mapel}">Biologi</option>
                    <option value="fisika" v-bind="{'selected':this.value == list.mapel}">Fisika</option>
                    <option value="kimia" v-bind="{'selected':this.value == list.mapel}">Kimia</option>
                    <option value="matematika" v-bind="{'selected':this.value == list.mapel}">Matematika</option>
                    </select>
                </div>
                </div>
            </div>
            
            <div class="field">
                <label class="label">Soal</label>
                <div class="control">
                <textarea class="textarea" placeholder="Tulis pertanyaan" rows=10 v-model="list.pertanyaan"></textarea>
                </div>
            </div>
            <br>
            <div class="field">
                <label class="label">Pilihan A</label>
                <div class="control">
                <textarea class="textarea" placeholder="Tulis jawaban untuk opsi A" rows=2 v-model="list.pilihana"></textarea>
                </div>
            </div>
            
            <br>
            <div class="field">
                <label class="label">Pilihan B</label>
                <div class="control">
                <textarea class="textarea" placeholder="Tulis jawaban untuk opsi B" rows=2 v-model="list.pilihanb"></textarea>
                </div>
            </div>
            
            <br>
            <div class="field">
                <label class="label">Pilihan C</label>
                <div class="control">
                <textarea class="textarea" placeholder="Tulis jawaban untuk opsi C" rows=2 v-model="list.pilihanc"></textarea>
                </div>
            </div>
            
            <br>
            <div class="field">
                <label class="label">Pilihan D</label>
                <div class="control">
                <textarea class="textarea" placeholder="Tulis jawaban untuk opsi D" rows=2 v-model="list.pilihand"></textarea>
                </div>
            </div>
            
            <br>
            <div class="field">
                <label class="label">Pilihan E</label>
                <div class="control">
                <textarea class="textarea" placeholder="Tulis jawaban untuk opsi E" rows=2 v-model="list.pilihane"></textarea>
                </div>
            </div>
            <br>
            <div class="field">
                <label class="label">Kunci Jawaban</label>
                <div class="control">
                <label class="radio">
                    <input type="radio" name="a" value="A" v-model="list.jawaban">
                    A
                </label>
                <label class="radio">
                    <input type="radio" name="b" value="B" v-model="list.jawaban">
                    B
                </label>
                <label class="radio">
                    <input type="radio" name="c" value="C" v-model="list.jawaban">
                    C
                </label>
                <label class="radio">
                    <input type="radio" name="d" value="D" v-model="list.jawaban">
                    D
                </label>
                <label class="radio">
                    <input type="radio" name="e" value="E" v-model="list.jawaban">
                    E
                </label>
                </div>
            </div>
            
            <div class="field">
                <label class="label">Pembahasan</label>
                <div class="control">
                <textarea class="textarea" placeholder="Tulis pembahasan" rows=10 v-model="list.pembahasan"></textarea>
                </div>
            </div>
				<!-- Content ... -->
	    </section>
	    <footer class="modal-card-foot">
	      <button class="button is-success" @click="update">Update</button>
	      <button class="button" @click="close">Cancel</button>
	    </footer>
	  </div>
	</div>
</template>


<script>
	export default{
		props:['openmodal'],
		data(){
			return{
				list:''
			}
		},
		methods:{
			close(){
				this.$emit('closeRequest')
            },
			update(){
				axios.patch(`/soal/${this.list.id} `,this.$data.list).then((response)=>this.close())
				.catch((error) => this.errors = error.response.data.errors)
			}
		}
	}
</script>
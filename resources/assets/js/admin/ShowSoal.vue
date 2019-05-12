<template>
	<div class="modal" :class='openmodal'>
	  <div class="modal-background"></div>
	  <div class="modal-card">
	    <header class="modal-card-head">
	      <p class="modal-card-title">{{list.pertanyaan}}</p>
	      <button class="delete" aria-label="close" @click="close"></button>
	    </header>
	    <section class="modal-card-body">
	    	<li class="panel-block">
	    		<label class="column" v-bind:class="{'has-background-primary has-text-white': list.jawaban == 'A'}">A).{{list.pilihana}}</label>
	    	</li>
	    	<li class="panel-block">
	    		<label class="column" v-bind:class="{'has-background-primary has-text-white': list.jawaban == 'B'}">B).{{list.pilihanb}}</label> 
	    	</li>
	    	<li class="panel-block">
	    		<label class="column" v-bind:class="{'has-background-primary has-text-white': list.jawaban == 'C'}">C).{{list.pilihanc}}</label> 
	    	</li>
	    	<li class="panel-block">
	    		<label class="column" v-bind:class="{'has-background-primary has-text-white': list.jawaban == 'D'}">D).{{list.pilihand}}</label> 
	    	</li>
	    	<li class="panel-block">
	    		<label class="column" v-bind:class="{'has-background-primary has-text-white': list.jawaban == 'E'}">E).{{list.pilihane}}</label> 
	    	</li>
				<!-- Content ... -->
	    </section>
	    <footer class="modal-card-foot">
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
			}
		}
	}
</script>
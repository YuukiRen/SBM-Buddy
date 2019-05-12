<template>
	<section class="section">
		<p class="title has-text-centered">
			<br>Admin Dashboard</p>
		<p class="subtitle has-text-centered">Welcome to the administrator dashboard.</p>
		<div class="card-body">
			<userList></userList>
		</div>
	</section>
</template>
<script>
	import userList from '../components/user-list.vue'
	  export default {
	    mounted() {
	      //
	    },
	    components: {
	      userList
	    }
	  }
</script>
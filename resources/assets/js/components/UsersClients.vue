<template>
<section class="searchResultCategory">
		<h2>Clients</h2>
		<article class="results">
			<div class="addNew">
				<a href="/newclient">
					<i class="icon-gr-plus-circle"></i>
					<p>	Add new client</p>
				</a>
			</div>
		</article>
	<article class="results" v-for="client in clients">
		<div>
			<a :href="'/client/'+client.id">
				<i class="icon-gr-social-users"></i>
			</a>
		</div>
		<div>
			<a :href="'/client/'+client.id">
				<h3>{{client.name}}</h3>
				<p>{{client.address}}</p>
			</a>
		</div>
		<a :href="'/client/'+ client.id">
			<img src="images/select-btn.png">
		</a>
	</article>
</section>
</template>

<script>
	import axios from 'axios';
	export default {
		props: ['userid'],
		data: function() {
			return {
				clients: [],
			}
		},
		methods: {
			getClients: function () {
				axios.get('/client/all/' + this.userid).then(response => {
					
					this.clients = response.data.clients;
					console.log(this.clients);
				});
			}
		},
		mounted: function() {
			this.getClients();
		}
	}
</script>
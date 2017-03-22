<template>
<section class="searchResultCategory">
		<h2>Clients</h2>
		<article>
			<div class="addNew">
				<a href="/newclient">
					<i class="icon-gr-plus-circle"></i>
					<p>	Add new client</p>
				</a>
			</div>
		</article>
	<article v-for="client in clients">
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
		<div class="select-cat-btn">
			<a :href="'/client/'+client.id">
				<i class="icon-gr-right-angle"></i>
			</a>
		</div>
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
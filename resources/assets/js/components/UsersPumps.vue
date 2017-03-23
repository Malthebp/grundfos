<template>
	<section class="searchResultCategory">
		<h2>Pumps</h2>
		<article class="results">
			<div class="addNew">
				<a href="/newpump">
					<i class="icon-gr-plus-circle"></i>
					<p>	Add new pump</p>
				</a>
			</div>
		</article>
		<article class="results" v-for="userpump in userpumps">
			<div>
				<a :href="'/userpump/'+ userpump.id">
					<img src="images/alpha3.jpg">
				</a>
			</div>
			<div>
				<a :href="'/userpump/'+ userpump.id">
					<h3>{{userpump.description}}</h3>
					<p>{{userpump.pump.model}}</p>
					<p class="location">{{userpump.pumpAddress}}</p>
				</a>
			</div>
			<div class="select-cat-btn">
				<a :href="'/userpump/'+ userpump.id">
					<i class="icon-gr-right-angle"></i>
				</a>
			</div>
		</article>
	</section>
</template>

<script>
	import axios from 'axios';
	export default {
		props: ['uid'],
		data: function () {
			return {
				userpumps: []
			}
		},
		methods: {
			getPumps: function () {
				axios.get('/userpumps/all/' + this.uid).then(response => {
					this.userpumps = response.data.userpumps;
					console.log(this.userpumps);
				});
			}
		},
		mounted: function() {
			this.getPumps();
		}
	}
</script>
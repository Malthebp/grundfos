<template>
<div class="createForm">
		<section>
			<div>
				<i class="icon-gr-user"></i>
			</div>
			<div>
				<label for="name">Name</label>
				<input v-if="edit" type="text" name="name" id="name" placeholder="model xx-xx xxx" v-model="formUpdate.name"> 
				<h4 v-if="!edit">{{formUpdate.name}}</h4>
			</div>
		</section>
		<section>
			<div>
				<i class="icon-gr-location"></i>
			</div>
			<div>
				<label for="address">Address</label>
				<input v-if="edit" type="text" name="address" placeholder="Ex. Ringvej syd 104, 8260 Viby J" id="address" v-model="formUpdate.address">
				<h4 v-if="!edit">{{formUpdate.address}}</h4>
			</div>
		</section>
		<section>
			<div>
				<i class="icon-gr-mail-contact"></i>
			</div>
			<div>
				<label for="email">Email</label>
				<input v-if="edit" type="text" name="email" placeholder="Ex. john@doe.com" id="email" v-model="formUpdate.email">
				<h4 v-if="!edit">{{formUpdate.email}}</h4>
			</div>
		</section>
</div>
</template>

<script>
	import axios from 'axios';
	export default {
		props: ['uid'],
		data: function (){
			return {
				edit: false,
				formUpdate: {
					name: '',
					address: '',
					email: ''
				},
				isLoading: false,
				active: false,
			}
		}, 
		methods: {
			getUser: function () {
				axios.get('/user').then(response => {
					this.formUpdate.name = response.data.user.name;
					this.formUpdate.address = response.data.user.location;
					this.formUpdate.email = response.data.user.email;
					console.log(response.data);
				});
			}, 
		},
		created: function () {
			this.getUser();
		}
	}
</script>
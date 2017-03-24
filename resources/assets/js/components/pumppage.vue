<template>
<div class="createForm">
		<section class="userPumpPhoto">
			<img src="images/alpha3.jpg">
			</img>
			<div class="addNew addPhoto" @click="modal">
				<i class="icon-gr-plus-circle "></i>
				<p>Add photo</p>
			</div>
		</section>
		<section>
			<div>
				<i class=" icon-gr-tag"></i>
			</div>
			<div>
				<label for="name">model number</label>
				<input v-if="edit" type="text" name="name" id="name" placeholder="model xx-xx xxx" v-model="formUpdate.name"> 
				<h4 v-if="!edit">{{formUpdate.name}}</h4>
			</div>
		</section>
		<section>
			<div>
				<i class="icon-gr-location"></i>
			</div>
			<div>
				<label for="address">Address of pump</label>
				<input v-if="edit" type="text" name="address" placeholder="Ex. Ringvej syd 104, 8260 Viby J" id="address" v-model="formUpdate.address">
				<h4 v-if="!edit">{{formUpdate.address}}</h4>
			</div>
		</section>
		<section>
			<div>
				<i class="icon-gr-doc-text"></i>
			</div>
			<div>
				<label for="description">Description</label>
				<input v-if="edit" type="text" name="description" placeholder="outsite, in basement" id="description" v-model="formUpdate.description">
				<h4 v-if="!edit">{{formUpdate.description}}</h4>
			</div>
		</section>
		<section>
			<div>
				<i class=" icon-gr-calendar-date"></i>
			</div>
			<div>
				<label for="year">Year</label>
				<input v-if="edit" type="text" name="year" placeholder="19xx" id="year" v-model="formUpdate.year">
				<h4 v-if="!edit">{{formUpdate.year}}</h4>
			</div>
		</section>
		<section>
			<div>
				<i class="icon-gr-user"></i>
			</div>
			<div>
				<label for="client">client</label>
				<div class="addNew" @click="modal">
					<i class="icon-gr-plus-circle "></i>
					<p>Add client to pump</p>
				</div>
			</div>
		</section>

<div class="nav-bot-2" v-if="!edit">
	<!-- edit button -->
		<div @click="editForm">
			<i class=" icon-gr-edit-write"></i>
			<a>Edit</a>
		</div>
		
	<!-- delete button -->
		<div>
			<i class="icon-gr-trash"></i>
			<a :href="'/userpump/delete/'+pumpid" v-if="!edit">Delete</a>
		<!-- <button v-if="!edit" @click="editForm">Edit</button> -->
		</div>

	<!-- repair button -->
		<div>
			<i class=" icon-gr-tools"></i>
			<a>Repair</a>
		</div>

	<!-- upgrade button -->
		<div>
			<i class=" icon-gr-sustainable"></i>
			<a>Upgrade</a>
		</div>
</div>
<button @click="update" v-if="edit
		" class="buttonBottom">
	<i v-if="!isLoading" class="icon-gr-check"></i>
	<div v-if="!isLoading">
		Save
	</div>
	<div v-if="isLoading">
		<i class="icon-gr-clockwise animate-spin"></i>
	</div>
</button>
</div>



</template>

<script>
	import axios from 'axios';
	import userpump from './Userpump';
	export default {
		props: ['pumpid', 'userid'],
		components: {userpump},
		data: function (){
			return {
				edit: false,
				formUpdate: {
					name: '',
					address: '',
					year: '',
					description: ''
				},
				isLoading: false,
				active: false,
				userpumps: [],
				chosen: ''
			}
		}, 
		methods: {
			getPump: function () {
				axios.get('/userpump/get/' + this.pumpid).then(response => {
					this.formUpdate.name = response.data.upump.pump.model;
					this.formUpdate.address = response.data.upump.pumpAddress;
					this.formUpdate.year = response.data.upump.year;
					this.formUpdate.description = response.data.upump.description;
				});
			}, 
			getPumps: function () {
				axios.get('/userpumps/getall/' + this.userid).then(response => {
					this.userpumps = response.data;
				});
			},
			editForm: function () {
				if(this.edit == false)
				{
					this.edit = true;
				} else if (this.edit == true){
					this.edit = false;
				}	
			},
			update: function () {
				this.isLoading = true;
				axios.patch('/userpump/update/' + this.pumpid, this.formUpdate).then(response =>{
						this.message = response.data.message;
						this.edit = false;
						this.isLoading = false;
					});
			},
		},
		created: function () {
			this.getPump();
		}
	}
</script>
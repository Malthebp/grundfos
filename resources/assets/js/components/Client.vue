<template>
<div class="createForm">
		<section>
			<div>
				<i class="icon-gr-user"></i>
			</div>
			<div>
				<label for="name">Name</label>
				<input v-if="edit" type="text" name="name" id="name" placeholder="John Doe" v-model="formUpdate.name"> 
				<h4 v-if="!edit">{{formUpdate.name}}</h4>
			</div>
		</section>
		<section>
			<div>
				<i class="icon-gr-location"></i>
			</div>
			<div>
				<label for="address">Address of client</label>
				<input v-if="edit" type="text" name="address" placeholder="Ex. Ringvej syd 104, 8260 Viby J" id="address" v-model="formUpdate.address">
				<h4 v-if="!edit">{{formUpdate.address}}</h4>
			</div>
		</section>
		<section>
			<div>
				<i class="icon-gr-call"></i>
			</div>
			<div>
				<label for="phone">Telephone</label>
				<input v-if="edit" type="text" name="phone" placeholder="Ex. +45 88 88 88 88" id="phone" v-model="formUpdate.phone">
				<h4 v-if="!edit">{{formUpdate.phone}}</h4>
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
		<section>
			<div>
				<i class="icon-gr-doc-text"></i>
			</div>
			<div>
				<label for="description">Description</label>
				<input v-if="edit" type="text" name="description" placeholder="Ex. Call 10 min before arrival" id="description" v-model="formUpdate.description">
				<h4 v-if="!edit">{{formUpdate.description}}</h4>
			</div>
		</section>
		<!-- <section v-for="upump in userpumps.upumps">
			<div>
				<i class="icon-gr-doc-text"></i>
			</div>
			<div>
				<label >Pumps</label>
				<h4>
					<a :href="'/userpump/'+upump.id">{{upump.description}}</a>
				</h4>
			</div>
		</section> -->
		<a href="/newpump">
			<div class="addArea">
				
					<i class="icon-gr-plus-circle"></i>
					<p>Add new pump</p>
				
			</div>
		</a>
		<div class="addArea" @click="modal">
			<i class="icon-gr-plus-circle"></i>
			<p>Add existing pump</p>
		</div>

		<button @click="update" v-if="edit" class="buttonBottom">
			<i v-if="!isLoading" class="icon-gr-check"></i>
			<div v-if="!isLoading">
				Save
			</div>
			<div v-if="isLoading">
				<i class="icon-gr-clockwise animate-spin"></i>
			</div>
		</button>
		<div class="nav-bot-2" v-if="!edit">
	<!-- edit button -->
		<div @click="editForm">
			<i class=" icon-gr-edit-write"></i>
			<a>Edit</a>
		</div>
		
	<!-- delete button -->
		<div>
			<i class="icon-gr-trash"></i>
			<a :href="'/client/delete/'+clientid" v-if="!edit">Delete</a>
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
		<div :class="{modal, isActive: active}">
		  <div class="modalBackground" @click="modal"></div>
		  <div class="modalContent">
		    <div class="box">
		    	<table>
		    		<thead>
		    			<tr>
		    				<th>Name</th>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<userpump v-for="upump in userpumps.upumps" v-bind:upump="upump"
		    			v-on:chosen-upump="selectedPump" v-model="chosen"
		    			></userpump>
		    		</tbody>
		    	</table>
		    	
		    	<button class="btn btn-default" @click="modal">Close </button>
		    	<button class="btn btn-success" @click="attachUPump">
		    	<span v-if="isLoading">
					<i class="icon-gr-clockwise animate-spin"></i>
				</span>
				<span v-if="!isLoading">
					Chose pump
				</span>
		    	</button>
		    </div>
		  </div>
		  <button class="modal-close"></button>
		</div>
</div>
</template>

<script>
	import axios from 'axios';
	import userpump from './Userpump';
	export default {
		props: ['clientid', 'userid'],
		components: {userpump},
		data: function (){
			return {
				edit: false,
				formUpdate: {
					name: '',
					address: '',
					phone: '',
					email: '',
					description: ''
				},
				message: '',
				isLoading: false,
				active: false,
				userpumps: [],
				chosen: ''
			}
		}, 
		methods: {
			selectedPump: function (upump) {
				this.chosen = upump.id;
			},
			attachUPump: function () {
				this.isLoading = true;
				axios.post('/client/upump/attach', {'upumpid': this.chosen, 'clientid': this.clientid}).then(response => {
						this.active = false;
						this.isLoading = false;
						this.getClient();
				});
			},
			getClient: function () {
				axios.get('/client/get/' + this.clientid).then(response => {
					this.formUpdate.name = response.data.client.name;
					this.formUpdate.address = response.data.client.address;
					this.formUpdate.phone = response.data.client.phone;
					this.formUpdate.email = response.data.client.email;
					this.formUpdate.description = response.data.client.description;
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
				axios.patch('/client/update/' + this.clientid, this.formUpdate).then(response =>{
						this.message = response.data.message;
						this.edit = false;
						this.isLoading = false;
					});
			},
			modal: function () {
				if(this.active == false){
					this.active = true;
				} else if (this.active == true ){
					this.active = false;
				}
				
			}
		},
		created: function () {
			this.getClient();
			this.getPumps();
		}
	}
</script>
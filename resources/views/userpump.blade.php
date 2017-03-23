<template>
<div class="createForm">
		<section>
			<div>
				<i class="icon-gr-user"></i>
			</div>
			<div>
				<label for="name">Model number</label>
				<input v-if="edit" type="text" name="name" id="name" placeholder="name xx-xx xxx" v-model="formUpdate.name"> 
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
				<input v-if="edit" type="text" name="description" placeholder="at front door, in basement" id="description" v-model="formUpdate.description">
				<h4 v-if="!edit">{{formUpdate.description}}</h4>
			</div>
		</section>

		<section>
			<div>
				<i class="icon-gr-doc-text"></i>
			</div>
			<div>
				<label for="client">client</label>
				<div class="addArea" @click="modal">
					<i class="icon-gr-plus-circle"></i>
					<p>Add pumpt to client</p>
				</div>	
			</div>
		</section>



		<button @click="update" v-if="edit" class="buttonBottom">
			<i v-if="!isLoading" class="icon-gr-check"></i>
			<div v-if="!isLoading">
				Save
			</div>
			<div v-if="isLoading">
				<i class="icon-gr-clockwise animate-spin"></i>
			</div>
		</button>
		<div v-if="message" class="alert success">
			<h4>{{message}}</h4>
		</div>
		<a :href="'/client/delete/'+userid" v-if="!edit">Delete</a>
		<button v-if="!edit" @click="editForm">Edit</button>


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
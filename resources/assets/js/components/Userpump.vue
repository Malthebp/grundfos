<template>
	<tr>
	<input type="radio" v-bind:id="upump.id" name="userpumps" 
	@click="$emit('chosen-upump', upump)">	
	<label :for="upump.id">{{upump.model}}<br>
	{{upump.description}}
	</label>
	</tr>
</template>

<script>
	export default {
		props: ['upump'],
		data: function () {
			return {
				
			}
		},
		methods: {
		}
	}
	
</script>
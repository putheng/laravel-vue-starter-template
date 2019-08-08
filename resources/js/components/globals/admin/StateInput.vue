<template>
	<div class="form-group">
		<div class="form-label-group">
			<input
				:name="inputName"
				:type="inputType"
				v-bind="$attrs"
				:id="id"
				class="form-control placeholder-shown"
				@input="$emit('input', $event.target.value)"
				@keyup="clearValidation"
				:value="value"
				v-model="inputValue"
				v-bind:class="{'is-invalid': validation[inputName]}"
			>
				<label :for="id">{{ label }}</label>
			<div class="invalid-feedback" v-if="validation[inputName]">
				<i class="fa fa-exclamation-circle fa-fw"></i>
				{{ validation[inputName][0] }} 
			</div>
		</div>
	</div>
</template>


<script>
import { mapGetters } from 'vuex'
import store from '.../../vuex'

export default {
	props: {
		name: {
			required: true,
			type: String
		},
		type: {
			required: false,
			type: String,
			default: 'text'
		},
		label: {
			required: false,
			type: String
		},
		value: {
			required: false,
			default: ''
		}
	},
	data(){
		return {
			id: this.formtedInputName(),
			inputType: this.formtedInputType(),
			inputName: this.formtedInputName(),
			inputValue: this.value
		}
	},
	methods: {
		clearValidation(){
			this.$store.dispatch('clearValidateFor', this.inputName)
		},
		formtedInputType(){
			return this.type == 'email' ? 'text' : this.type
		},
		formtedInputName(){
			return this.name.replace(/\s+/g, '_').toLowerCase()
		}
	},
	computed: {
		...mapGetters({
			validation: 'getValidationErrors'
		})
	}
}
</script>
<template>
<div class="form-group">
	<div class="custom-control custom-switch">
		<input 
			:name="inputName"
			v-bind="$attrs"
			type="checkbox"
			class="custom-control-input"
			:id="id"
			@input="$emit('input', $event.target.value)"
			v-model="inputValue"
			@change="clearValidation"
			:value="value"
			v-bind:class="{'is-invalid': validation[inputName]}"

		>
		<label class="custom-control-label" :for="id">{{ label }}</label>
		<div class="invalid-feedback" v-if="validation[inputName]">
            <i class="fa fa-exclamation-circle fa-fw"></i>
            {{ validation[inputName] +'' }}
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
			inputName: this.formtedInputName(),
			inputValue: this.value
		}
	},
	methods: {
		clearValidation(){
			this.$store.dispatch('clearValidateFor', this.inputName)
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
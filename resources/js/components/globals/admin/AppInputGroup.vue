<template>
<div class="form-group">
	<label :for="id">{{ label }}</label>
	<div class="input-group input-group-alt">
		<input
			:name="inputName"
			:type="inputType"
			v-bind="$attrs"
			:id="id"
			class="form-control is-invalid"
			@input="$emit('input', $event.target.value)"
			v-model="inputValue"
			@keyup="clearValidation"
			:value="value"
		>
		<div class="input-group-append">
	    	<span class="input-group-text">{{ append }}</span>
	    </div>
	</div>

	<div class="invalid-feedback">
        <i class="fa fa-exclamation-circle fa-fw"></i>
        {{ validation[inputName] +'' }}
    </div>
</div>
</template>

<script>
import { mapGetters } from 'vuex'

export default{
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
		value: {
			required: false,
			type: String
		},
		label: {
			required: true,
			type: String
		},
		append: {
			required: true,
			type: String
		},
	},
	data(){
		return {
			id: this.formtedInputName(),
			inputType: this.formtedInputType() ,
			inputName: this.formtedInputName(),
			inputValue: this.value
		}
	},
	methods: {
		clearValidation(){
			// store.dispatch('clearValidateFor', this.inputName)
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
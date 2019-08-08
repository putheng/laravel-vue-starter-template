<template>
	<div class="form-group">
		<label :for="id">{{ label }}</label> 
		<select class="custom-select" 
			:name="inputName"
			v-bind="$attrs"
			:id="id"
			@input="$emit('input', $event.target.value)"
			v-model="inputValue"
			@change="clearValidation"
			:value="value"
			v-bind:class="{'is-invalid': validation[inputName]}">
			<option value=""> Choose... </option>
			<option :value="item.id" v-for="item in values">{{ item.name }}</option>
		</select>
		<div class="invalid-feedback">
            <i class="fa fa-exclamation-circle fa-fw"></i>
            {{ validation[inputName] +'' }}
        </div>
	</div>
</template>

<script>
import { mapGetters, mapActions, mapState } from 'vuex'
import store from '.../../vuex'

export default{
	props: {
		name: {
			required: true,
			type: String
		},
		label: {
			required: false,
			type: String
		},
		value: {
			required: false,
			default: ''
		},
		commit: {
			required: false,
			type: String
		}
	},
	data(){
		return {
			id: this.formatedInputName(),
			inputName: this.formatedInputName(),
			inputValue: this.value
		}
	},
	methods: {
		clearValidation(){
			this.$store.dispatch('clearValidateFor', this.inputName)
		},
		formatedInputName(){
			return this.name.replace(/\s+/g, '_').toLowerCase()
		}
	}

}
</script>
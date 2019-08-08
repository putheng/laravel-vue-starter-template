<template>
<div class="custom-control custom-radio mb-4">
	<input
		type="radio"
		v-bind="$attrs"
		:name="inputName"
		:id="id"
		class="custom-control-input"
		@input="$emit('input', $event.target.value)"
		v-model="inputValue"
		@change="clearValidation"
		:value="value"
		v-bind:class="{'is-invalid': validation[inputName]}"
	>
	<label
		class="custom-control-label"
		:for="id">{{ label }}
	</label>
	<div class="invalid-feedback" v-if="validation[inputName]">
        <i class="fa fa-exclamation-circle fa-fw"></i>
        {{ validation[inputName] +'' }}
    </div>
</div>
</template>

<script>
	import { mapGetters } from 'vuex'

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
				id: this.rndStr(),
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
			},
			rndStr(len = 5) {
				let text = " "
				let chars = "abcdefghijklmnopqrstuvwxyz"

				for( let i=0; i < len; i++ ) {
					text += chars.charAt(Math.floor(Math.random() * chars.length))
				}

				return text
			}
		},
		computed: {
			...mapGetters({
				validation: 'getValidationErrors'
			})
		}
	}
</script>
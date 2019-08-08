<template>
<div class="form-group">
	<button 
		class="btn btn-lg btn-primary btn-block" 
		:type="type"
		v-bind="$attrs"
		:disabled="loading"
	>
		<span v-if="loading" 
			class="spinner-border spinner-border-sm"
			role="status" aria-hidden="true"></span>
		Sign In
		<slot/>
	</button>
</div>
</template>

<script>
import { mapGetters } from 'vuex'

export default{
	props: {
		type: {
			required: false,
			type: String,
			default: 'button'
		}
	},
	computed: {
		...mapGetters({
			loading: 'getLoading'
		})
	}
}
</script>
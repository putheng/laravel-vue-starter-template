<template>
	<span>
		<a href="#" class="btn btn-sm btn-icon btn-secondary"
				data-toggle="modal"
				:data-target="target">
			<i class="far fa-trash-alt"></i>
			<span class="sr-only">Remove</span>
		</a>
		<app-modal :id="id" :title="title"></app-modal>
	</span>
</template>

<script>
export default {
	props: {
		label: {
			required: true,
			type: String
		},
		title: {
			required: false,
			type: String
		}
	},
	data(){
		return {
			target: '#'+ this.convertToSlug(),
			id: this.convertToSlug()
		}
	},
	methods: {
		convertToSlug(){
		    return this.label.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'')
		}
	}
}
</script>
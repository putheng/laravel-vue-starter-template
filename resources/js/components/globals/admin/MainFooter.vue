<template>
<footer class="aside-footer border-top p-3 text-center">
	<span>Copyright © {{ date }} Company Technologies</span>
</footer>
</template>

<script>
	export default {
		computed: {
			date(){
				return new Date().getFullYear()
			}
		}
	}
</script>
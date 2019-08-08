<template>
	<header class="aside-header d-block d-md-none">
		<!-- .btn-account -->
		<button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
			<span class="user-avatar user-avatar-lg">
				<img :src="users.avatar" alt="">
			</span>
			<span class="account-icon">
				<span class="fa fa-caret-down fa-lg"></span>
			</span>
			<span class="account-summary">
				<span class="account-name">{{ users.name }}</span>
				<span class="account-description">{{ users.role }}</span>
			</span>
		</button> <!-- /.btn-account -->
		<!-- .dropdown-aside -->
		<div id="dropdown-aside" class="dropdown-aside collapse">
			<!-- dropdown-items -->
			<div class="pb-3">
				<a class="dropdown-item" href="#">
					<span class="dropdown-icon oi oi-person"></span>
					Profile
				</a>
				<a class="dropdown-item" href="#">
					<span class="dropdown-icon oi oi-account-logout"></span>
					Logout
				</a>
			</div>
			<!-- /dropdown-items -->
		</div>
		
	</header>
</template>

<script>
import { mapGetters } from 'vuex'
export default {
	computed: {
		...mapGetters({
			users: 'employer/getUser'
		})
	}
}
</script>
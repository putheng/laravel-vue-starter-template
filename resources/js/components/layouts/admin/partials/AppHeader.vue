<template>
<header class="app-header app-header-dark">
	<!-- .top-bar -->
	<div class="top-bar">
		<!-- .top-bar-brand -->
		<div class="top-bar-brand">
			<a href="index.html">
			<img src="/images/brand-inverse.png" alt="" style="height: 32px;width: auto;">
			</a>
		</div>
		<!-- /.top-bar-brand -->
		<!-- .top-bar-list -->
		<div class="top-bar-list">
			<!-- .top-bar-item -->
			<div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
				<!-- toggle menu -->
				<button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu">
				<span class="hamburger-box">
				<span class="hamburger-inner"></span>
				</span>
				</button>
				<!-- /toggle menu -->
			</div>
			<!-- /.top-bar-item -->
			<top-search-bar />
			<!-- .top-bar-item -->
			<div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
				<!-- .btn-account -->
				<div class="dropdown">
					<button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="user-avatar user-avatar-md">
					<img src="/images/profile.jpg" alt="">
					</span>
					<span class="account-summary pr-lg-4 d-none d-lg-block">
					<span class="account-name">Beni Arisandi</span>
					<span class="account-description">Marketing Manager</span>
					</span>
					</button>
					<div class="dropdown-arrow dropdown-arrow-left"></div>
					<!-- .dropdown-menu -->
					<div class="dropdown-menu">
						<h6 class="dropdown-header d-none d-md-block d-lg-none">Beni Arisandi</h6>
						<a class="dropdown-item" href="user-profile.html">
							<span class="dropdown-icon oi oi-person"></span>
							Profile
						</a>
						<a class="dropdown-item" href="auth-signin-v1.html">
							<span class="dropdown-icon oi oi-account-logout"></span>
							Logout
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Help Center</a>
					</div>
					<!-- /.dropdown-menu -->
				</div>
				<!-- /.btn-account -->
			</div>
			<!-- /.top-bar-item -->
		</div>
		<!-- /.top-bar-list -->
	</div>
	<!-- /.top-bar -->
</header>
</template>

<script>
	export default {

	}
</script>
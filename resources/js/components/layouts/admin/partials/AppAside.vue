<template>
<aside class="app-aside app-aside-expand-md app-aside-light">
	<div class="aside-content">
		<header class="aside-header d-block d-md-none">
			<button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
				<span class="user-avatar user-avatar-lg">
					<img src="/images/profile.jpg" alt="">
				</span>
				<span class="account-icon">
					<span class="fa fa-caret-down fa-lg"></span>
				</span>
				<span class="account-summary">
					<span class="account-name">Beni Arisandi</span>
					<span class="account-description">Marketing Manager</span>
				</span>
			</button>
			<div id="dropdown-aside" class="dropdown-aside collapse">
				<div class="pb-3">
					<a class="dropdown-item" href="#">
						<span class="dropdown-icon oi oi-person"></span>
						Profile
					</a>
					<a class="dropdown-item" href="#">
						<span class="dropdown-icon oi oi-account-logout"></span>
						Logout
					</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Help Center</a>
				</div>
			</div>
		</header>
		<div class="aside-menu overflow-hidden">
			<nav id="stacked-menu" class="stacked-menu">
				<ul class="menu">
					<router-link :to="{name :'dashboard'}" class="menu-link">
						<span class="menu-icon fas fa-home"></span>
						<span class="menu-text">Dashboard</span>
					</router-link>

					<li class="menu-item has-child">
						<a href="#" class="menu-link">
							<span class="menu-icon oi oi-list-rich"></span>
							<span class="menu-text">Home</span>
						</a>
						<ul class="menu">
							<li class="menu-item">
								<router-link class="menu-link" :to="{name:'admin-billing'}">Billing</router-link>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<footer class="aside-footer border-top p-3">
			<button class="btn btn-light btn-block text-primary">
				Night mode <i class="fas fa-moon ml-1"></i>
			</button>
		</footer>
	</div>
</aside>
</template>

<script>
	export default {

	}
</script>
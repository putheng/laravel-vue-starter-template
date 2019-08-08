<template>
	<nav id="stacked-menu" class="stacked-menu">
		<!-- .menu -->
		<ul class="menu">
			<!-- .menu-item -->
			<li class="menu-item">
				<router-link :to="{ name: 'admin' }" class="menu-link">
					<span class="menu-icon fas fa-home"></span>
					<span class="menu-text">{{ $t('general.home') }}</span>
				</router-link>
			</li>
			<!-- /.menu-item -->
			<!-- .menu-item -->
			<li class="menu-item has-child">
				<a href="#" class="menu-link"><span class="menu-icon oi oi-list-rich"></span> <span class="menu-text">Packages</span></a> <!-- child menu -->
				<ul class="menu">
					<li class="menu-item">
						<router-link class="menu-link" :to="{ name: 'create-package' }">
							Create
						</router-link>
						<router-link class="menu-link" :to="{ name: 'all-packages' }">
							Packages
						</router-link>
					</li>
				</ul>
				<!-- /child menu -->
			</li>
			<!-- /.menu-item -->
			<!-- .menu-item -->
			<li class="menu-item has-child">
				<a href="#" class="menu-link"><span class="menu-icon far fa-list-alt"></span> <span class="menu-text">Filters</span></a> <!-- child menu -->
				<ul class="menu">
					<li class="menu-item">
						<router-link class="menu-link" :to="{ name: 'add-company-type' }">
							Company Type
						</router-link>
						<router-link class="menu-link" :to="{ name: 'add-industry' }">
							Industry
						</router-link>
						<router-link class="menu-link" :to="{ name: 'add-education' }">
							Education
						</router-link>
						<router-link class="menu-link" :to="{ name: 'add-category' }">
							Category
						</router-link>
						<router-link class="menu-link" :to="{ name: 'add-experience' }">
							Experience
						</router-link>
						<router-link class="menu-link" :to="{ name: 'add-level' }">
							Level
						</router-link>
						<router-link class="menu-link" :to="{ name: 'add-location' }">
							Location
						</router-link>
						<router-link class="menu-link" :to="{ name: 'add-salary' }">
							Salary
						</router-link>
						<router-link class="menu-link" :to="{ name: 'add-term' }">
							Term
						</router-link>
						<router-link class="menu-link" :to="{ name: 'add-employee-type' }">
							Employee Type
						</router-link>
					</li>
				</ul>
				<!-- /child menu -->
			</li>
			<!-- /.menu-item -->
			<!-- .menu-item -->
			<li class="menu-item has-child">
				<a href="#" class="menu-link"><span class="menu-icon fa fa-tasks"></span> <span class="menu-text">Job</span></a> <!-- child menu -->
				<ul class="menu">
					<li class="menu-item">
						<router-link class="menu-link" :to="{ name:'admin-create-job' }">
							Create
						</router-link>
						<router-link class="menu-link" :to="{ name:'listings' }">
							Publish
						</router-link>
						<router-link class="menu-link" :to="{ name:'unpublish' }">
							Unpublish
						</router-link>
						<router-link class="menu-link" :to="{ name:'expired' }">
							Expired
						</router-link>
					</li>
				</ul>
				<!-- /child menu -->
			</li>
			<!-- /.menu-item -->
			<!-- .menu-item -->
			<li class="menu-item has-child">
				<a href="#" class="menu-link"><span class="menu-icon fas fa-money-check-alt"></span> <span class="menu-text">Payments</span></a> <!-- child menu -->
				<ul class="menu">
					<li class="menu-item">
						<router-link class="menu-link" :to="{ name:'add-payment-gateway' }">
							Gateway
						</router-link>
						<router-link class="menu-link" :to="{ name:'add-payment-pending' }">
							Pending
						</router-link>
						<router-link class="menu-link" :to="{ name:'add-payment-accepted' }">
							Accepted
						</router-link>
						<router-link class="menu-link" :to="{ name:'add-payment-rejected' }">
							Rejected
						</router-link>
					</li>
				</ul>
				<!-- /child menu -->
			</li>
			<!-- /.menu-item -->
			<!-- .menu-item -->
			<li class="menu-item has-child">
				<a href="#" class="menu-link">
					<span class="menu-icon oi oi-people"></span>
					<span class="menu-text">Employer</span>
				</a> <!-- child menu -->
				<ul class="menu">
					<li class="menu-item">
						<router-link class="menu-link" :to="{ name:'admin-employer' }">
							All
						</router-link>
						<router-link class="menu-link" :to="{ name:'admin-featured' }">
							Featured
						</router-link>
						<router-link class="menu-link" :to="{ name:'admin-employer-blocked' }">
							Blocked
						</router-link>
					</li>
				</ul>
				<!-- /child menu -->
			</li>
			<!-- /.menu-item -->
			<!-- .menu-item -->
			<li class="menu-item has-child">
				<a href="#" class="menu-link">
					<span class="menu-icon oi oi-people"></span>
					<span class="menu-text">Seeker</span>
				</a> <!-- child menu -->
				<ul class="menu">
					<li class="menu-item">
						<router-link class="menu-link" :to="{ name:'admin-seeker' }">
							Seeker
						</router-link>
						<router-link class="menu-link" :to="{ name:'admin-resume' }">
							Resume
						</router-link>
					</li>
				</ul>
				<!-- /child menu -->
			</li>
			<!-- /.menu-item -->
			<!-- .menu-item -->
			<li class="menu-item has-child">
				<a href="#" class="menu-link"><span class="menu-icon fas fa-wrench"></span> <span class="menu-text">Setting</span></a> <!-- child menu -->
				<ul class="menu">
					<li class="menu-item">
						<router-link class="menu-link" :to="{ name:'admin-adds' }">
							Advertising
						</router-link>
						<router-link class="menu-link" :to="{ name:'admin-blog' }">
							Tips
						</router-link>
						<router-link class="menu-link" :to="{ name:'admin-answer' }">
							Answer
						</router-link>
						<router-link class="menu-link" :to="{ name:'admin-about' }">
							Page
						</router-link>
						<router-link class="menu-link" :to="{ name:'update-profile' }">
							Profile
						</router-link>
						<router-link class="menu-link" :to="{ name:'admin-change-password' }">
							Password
						</router-link>
					</li>
				</ul>
				<!-- /child menu -->
			</li>
			<!-- /.menu-item -->
		</ul>
		<!-- /.menu -->
	</nav>
</template>
<script>
	export default {
		
	}
</script>
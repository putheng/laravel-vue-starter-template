<template>

<li class="nav-item dropdown header-nav-dropdown has-notified">
	<a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-envelope-open"></span></a>
	<div class="dropdown-arrow"></div>
	<!-- .dropdown-menu -->
	<div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
		<h6 class="dropdown-header stop-propagation">
			<span>Messages</span> <a href="#">Mark all as read</a>
		</h6>
		<!-- .dropdown-scroll -->
		<div class="dropdown-scroll perfect-scrollbar">

			<!-- .dropdown-item -->
			<a href="#" class="dropdown-item unread">
				<div class="user-avatar">
					<img src="/images/avatars/team1.jpg" alt="">
				</div>
				<div class="dropdown-item-body">
					<p class="subject"> Stilearning </p>
					<p class="text text-truncate"> Invitation: Joe's Dinner @ Fri Aug 22 </p>
					<span class="date">2 hours ago</span>
				</div>
			</a>
			<!-- /.dropdown-item -->

		</div>
		<!-- /.dropdown-scroll -->
		<a href="page-messages.html" class="dropdown-footer">All messages <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
	</div>
	<!-- /.dropdown-menu -->
</li>

</template>

<script>
	export default {
		
	}
</script>
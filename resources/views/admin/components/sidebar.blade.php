<aside class="left-sidebar with-vertical">
	<div><!-- ---------------------------------- -->
		<!-- Start Vertical Layout Sidebar -->
		<!-- ---------------------------------- -->
		<!-- Sidebar scroll-->
		<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
			<!-----------Profile------------------>
			<div class="user-profile position-relative" style="background: url(../assets/images/backgrounds/user-info.jpg) no-repeat;">
				<!-- User profile image -->
				<div class="profile-img">
					<img src="{{asset('assets/images/profile/user-1.jpg') }}" alt="user" class="w-100 rounded-circle overflow-hidden">
				</div>
				<!-- User profile text-->
				<div class="profile-text hide-menu pt-1 dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle u-dropdown w-100 text-white
                  d-block
                  position-relative
                " id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Markarn Doe</a>
					<div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item d-flex gap-2" href="page-user-profile.html">
							<i data-feather="user" class="feather-sm text-info "></i>
							My Profile
						</a>
						<a class="dropdown-item d-flex gap-2" href="app-notes.html">
							<i data-feather="credit-card" class="feather-sm text-info "></i>
							My Notes
						</a>
						<a class="dropdown-item d-flex gap-2" href="app-email.html">
							<i data-feather="mail" class="feather-sm text-success "></i>
							Inbox
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item d-flex gap-2" href="page-account-settings.html">
							<i data-feather="settings" class="feather-sm text-warning "></i>
							Account Setting
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item d-flex gap-2" href="{{url('/logout')}}">
							<i data-feather="log-out" class="feather-sm text-danger "></i>
							Logout
						</a>
						<div class="dropdown-divider"></div>
						<div class="px-3 py-2">
							<a href="page-user-profile.html" class="btn d-block w-100 btn-info rounded-pill">View Profile</a>
						</div>
					</div>
				</div>
			</div>
			<!-----------Profile End------------------>
			<!-- SideBar scroll -->
			<ul id="sidebarnav">
				<li class="nav-small-cap">
					<iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
					<span class="hide-menu">Pages</span>
				</li>
				<!-- ---------------------------------- -->
				<!-- Dashboard -->
				<!-- ---------------------------------- -->
				<li class="sidebar-item">
					<a class="sidebar-link" href="{{url('admin/users')}}">
						<iconify-icon icon="solar:screencast-2-linear" class="aside-icon"></iconify-icon>
						<span class="hide-menu">Users Contact</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="{{url('admin/services')}}">
						<iconify-icon icon="solar:atom-linear" class="aside-icon"></iconify-icon>
						<span class="hide-menu">Servies</span>
					</a>
				</li>
				<!-- ---------------------------------- -->
				<li class="sidebar-item">
					<a class="sidebar-link" href="{{url('admin/post')}}">
						<iconify-icon icon="solar:screencast-2-linear" class="aside-icon"></iconify-icon>
						<span class="hide-menu">Post</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="{{url('admin/details')}}">
						<iconify-icon icon="solar:screencast-2-linear" class="aside-icon"></iconify-icon>
						<span class="hide-menu">Details</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="{{url('admin/email')}}">
						<iconify-icon icon="solar:screencast-2-linear" class="aside-icon"></iconify-icon>
						<span class="hide-menu">Email</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a class="sidebar-link" href="{{url('admin/gallery')}}">
						<iconify-icon icon="solar:screencast-2-linear" class="aside-icon"></iconify-icon>
						<span class="hide-menu">Gallery</span>
					</a>
				</li>
				<!-- End Sidebar scroll-->
	</div>
</aside>
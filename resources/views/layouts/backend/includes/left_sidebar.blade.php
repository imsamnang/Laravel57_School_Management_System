<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
	<!-- Sidebar mobile toggler -->
	<div class="sidebar-mobile-toggler text-center">
		<a href="#" class="sidebar-mobile-main-toggle">
			<i class="icon-arrow-left8"></i>
		</a>
		Navigation
		<a href="#" class="sidebar-mobile-expand">
			<i class="icon-screen-full"></i>
			<i class="icon-screen-normal"></i>
		</a>
	</div>
	<!-- /sidebar mobile toggler -->

	<!-- Sidebar content -->
	<div class="sidebar-content">
		<!-- User menu -->
		<div class="sidebar-user">
			<div class="card-body">
				<div class="media">
					<div class="mr-3">
						<a href="#"><img src="{{asset('assets/backend/global_assets/images/placeholders/placeholder.jpg')}}" width="38" height="38" class="rounded-circle" alt=""></a>
					</div>

					<div class="media-body">
						<div class="media-title font-weight-semibold">Victoria Baker</div>
						<div class="font-size-xs opacity-50">
							<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
						</div>
					</div>

					<div class="ml-3 align-self-center">
						<a href="#" class="text-white"><i class="icon-cog3"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- /user menu -->


		<!-- Main navigation -->
		<div class="card card-sidebar-mobile">
			<ul class="nav nav-sidebar" data-nav-type="accordion">
				<!-- Main -->
				<li class="nav-item">
					<a href="{{ route('home') }}" class="nav-link active">
						<i class="icon-home4"></i>
						<span>
							Dashboard
						</span>
					</a>
				</li>
				<!-- Layout -->
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Manage Students</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="{{ route('languages') }}" class="nav-link"><i class="icon-IE"></i> Add Student</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Student Lists</a></li>
					</ul>
				</li>
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Manage Teachers</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="{{ route('languages') }}" class="nav-link"><i class="icon-IE"></i> Add New Teacher</a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Teacher Lists</a></li>
					</ul>
				</li>				
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Settings</span></a>
					<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
						<li class="nav-item"><a href="{{ route('languages') }}" target="_blank" class="nav-link"><i class="icon-IE"></i> Language Translator</a></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
							<ul class="nav nav-group-sub">
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third level</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-html5"></i> Fourth level</a></li>
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i> Fourth level</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third level</a></li>
							</ul>
						</li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a></li>
					</ul>
				</li>
				<!-- /layout -->
			</ul>
		</div>
		<!-- /main navigation -->
	</div>
	<!-- /sidebar content -->	
</div>
<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_200">
		
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
						@guest
						<div class="top_bar_item"><a href="{{ route('register') }}">Register</a></div>
						<div class="top_bar_item"><a href="{{ route('login') }}">Login</a></div>
                        @else
						<div class="top_bar_item" style="color:white;">{{ Auth::user()->name }} &nbsp &nbsp</div>
						@endguest
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav ml-auto">
								<ul>
									<li><a href="/">Home</a></li>
									<li><a href="/about">About us</a></li>
									<li><a href="/joblistings">Job Listings</a></li>
									<li><a href="/home">Dashboard</a></li>
									@guest
									<li><a href="{{ route('register') }}">Register</a></li>
									<li><a href="{{ route('login') }}">Login</a></li>
									@else
									<li>
									<a href="{{ route('logout') }}" style="color:red;"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
									</li>
									@endguest
									<li><a href="/contact">Contact</a></li>
								</ul>
							</nav>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Logo -->
		<div class="logo_container_outer">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="logo_container">
							<a href="/joblistings">
								<div class="logo_content d-flex flex-column align-items-start justify-content-center">
									<div class="logo_line"></div>
									<div class="logo d-flex flex-row align-items-center justify-content-center">
										<div class="logo_text">Med<span>Jobs</span></div>
									</div>
									<div class="logo_sub">Medical-Job-Listings</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>

	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="/">Home</a></li>
					<li class="menu_item menu_mm"><a href="/about">About us</a></li>
					<li class="menu_item menu_mm"><a href="/joblistings">Job Listings</a></li>
					<li class="menu_item menu_mm"><a href="/home">Dashboard</a></li>
					@guest
					<li class="menu_item menu_mm"><a href="{{ route('register') }}">Register</a></li>
					<li class="menu_item menu_mm"><a href="{{ route('login') }}">Login</a></li>
					@else
						<li class="menu_item menu_mm">
						<a href="{{ route('logout') }}" style="color:red;"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
									</li>

						</li>
					@endguest
					<li class="menu_item menu_mm"><a href="/contact">Contact Us</a></li>
				</ul>
			</div>
			<div class="menu_extra">
				<div class="menu_appointment"><a href="/joblistingss">For More Enquiries</a></div>
				<div class="menu_success">Enquiries: +234903709290</div>
			</div>

		</div>

	</div><hr>

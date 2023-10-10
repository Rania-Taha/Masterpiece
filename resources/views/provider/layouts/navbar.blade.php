		<!-- Main Wrapper -->
        <div class="main-wrapper" >
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left" >
                    <a href="index.html" class="logo" >
						
						<h1 class="m-1 display-5 text-capitalize" style="color: black; font-family: 'Liberation Mono', 'Courier New', monospace; font-weight: bold">
							<span style="color: rgb(238, 111, 7);">Vet</span>Hub
						</h1>
						
						
						
						
					</a>
					<a href="index.html" class="logo logo-small">
						<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
					</a> 
                </div>
				<!-- /Logo -->
				
				<!-- <a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				 -->
				<div class="top-nav-search">
					<form style="margin-left: 400px">
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">
<li>
					<form method="POST" action="{{ route('logoutAdmin') }}">
						@csrf
						<button type="submit" class="dropdown-item" href="{{ route('logoutAdmin') }}">Logout</button>
					</form>
					</li>
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets/img/WhatsApp Image 2023-07-02 at 1.26.14 PM.jpg" width="50" height="45" alt="Rania Taha"></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets/img/WhatsApp Image 2023-07-02 at 1.26.14 PM.jpg" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>Rania Taha</h6>
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="settings.html">Settings</a>
							<a class="dropdown-item" href="login.html">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
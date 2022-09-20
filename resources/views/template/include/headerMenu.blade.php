	<!-- header -->
	<header class="site-header header mo-left primary">
			<div class="top-bar">
				<div class="container">
					<div class="row justify-content-between">
						<div class="dez-topbar-left col-auto">
							<ul>
								<li><i class="far fa-envelope m-r5"></i> info@example.com</li>
								<li><i class="fas fa-phone-alt m-r5"></i> +(001) 237 2372</li>
							</ul>
						</div>
						<div class="dez-topbar-right topbar-social col-auto">
							<ul>
								<li>
								Trung tâm chăm sóc sức khỏe hàng đầu về nội khoa - Phòng khám nội khoa Sài Gòn
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- main header -->
			<div class="sticky-header main-bar-wraper">
				<div class="main-bar clearfix  navbar-expand-lg">
					<div class="container clearfix header-custom">
						<!-- website logo -->
						<div class="logo-header mostion">
							<a href="{{URL::to('/')}}"><img src="{{asset('public/frontend/imagesNew/logo-definitivo.svg')}}" alt=""></a>
						</div>
						<!-- nav toggle button -->
						<button data-bs-target=".header-nav" data-bs-toggle="collapse" type="button"
							class="navbar-toggler navicon collapsed" aria-expanded="false">
							<span></span>
							<span></span>
							<span></span>
						</button>

						<!-- main nav -->
						<div class="header-nav navbar-collapse collapse justify-content-end">
							<div class="logo-header d-md-block d-lg-none">
								<a href="{{URL::to('/')}}"><img src="{{asset('public/frontend/imagesNew/logo-definitivo.svg')}}" alt=""></a>
							</div>
							<ul class="nav navbar-nav">
								<li class="active"> <a href="{{URL::to('/')}}">Trang chủ</i></a>

								</li>
								<li> <a href="{{URL::to('ve-chung-toi')}}">Chúng tôi</a>

								</li>
								<li> <a href="{{URL::to('bac-si')}}">Bác sĩ</a>

								</li>
								<li> <a href="{{URL::to('dat-lich-hen')}}">Đặt lịch hẹn</a>

								</li>
								<li> <a href="{{URL::to('bai-viet')}}">Bài viết</a>

								</li>
								<li> <a href="{{URL::to('lien-he')}}">Liên hệ</a>

								</li>
							</ul>
							<div class="dz-social-icon">
								<ul>
									<li><a class="site-button circle fab fa-facebook-f" href="javascript:void(0);"></a>
									</li>
									<li><a class="site-button  circle fab fa-twitter" href="javascript:void(0);"></a>
									</li>
									<li><a class="site-button circle fab fa-linkedin-in" href="javascript:void(0);"></a>
									</li>
									<li><a class="site-button circle fab fa-instagram" href="javascript:void(0);"></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- main header END -->
		</header>
		<!-- header END -->
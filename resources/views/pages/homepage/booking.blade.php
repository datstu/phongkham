<!-- header -->
@include('template.header')
<!-- header END -->
<?php $address = $phone = $email = $linkFB = $pageId = $linkYtb = $linkInsta = '';
if ($info->count() > 0) {
	$address = $info[0]['address'];
	$phone = $info[0]['phone'];
	$email = $info[0]['email'];
	$linkFB = $info[0]['link_fb'];
	$pageId = $info[0]['page_id_fb'];
	$linkYtb = $info[0]['link_youtube'];
	$linkInsta = $info[0]['link_instagram'];
}
$listVendor = Helper::getListVendor();
$listBrand = Helper::getListBrand();
$listFlagship = Helper::getListFlagship();
$listNewsHome = Helper::getNewsHome();
$about = Helper::getAboutUsHome();
$productVip = Helper::getProductVip();


?>
<!-- Content -->

<body id="bg">
	<div class="page-wraper">
		<div id="loading-area"></div>
		<!-- header -->
		@include('template.include.headerMenu')
		<!-- header END -->

		<!-- Content -->
		<div class="page-content">
			<div class=" bg-booking">
				<!-- Left & right section start -->
				<div class="section-full content-inner">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="booking-page">
								<div class="p-a30 clearfix m-b30 ">
									<h4>Đặt lịch hẹn</h4>
									<p>Sử dụng mẫu sau để liên hệ với chúng tôi và yêu cầu một cuộc hẹn.</p>
									<form method="post" class="dzForm" action="script/contact.php">
										<input type="hidden" class="form-control" name="dzToDo" value="Contact">
										<div class="dzFormMsg"></div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<div class="input-group">
														<input name="dzName" type="text" required class="form-control" placeholder="Tên của bạn">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<div class="input-group"> 
														<input name="dzEmail" type="email" class="form-control" required  placeholder="Email của bạn" >
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<div class="input-group">
														<input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Điện thoại">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<div class="input-group">
														<input name="dzOther[Subject]" type="text" required class="form-control" placeholder="Địa chỉ">
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<div class="input-group">
														<textarea name="dzMessage" rows="4" class="form-control" required placeholder="Gửi yêu cầu..."></textarea>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<div class="input-group dz-recaptcha">
														<div class="g-recaptcha" data-sitekey="<!-- Put Your reCaptcha Secret Key -->" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
														<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
													</div>
												</div>
											</div>
											<div class="col-md-12 text-center ">
												<button name="submit" type="submit" value="Submit" class="site-button btn-booking-info"> <span>Gửi </span> </button>
											</div>
										</div>
									</form>
								</div>
							</div>
							</div>
						</div>
					</div>
					<!-- Listing with symbols END -->
				</div>
			</div>

		</div>


		<!-- end flagship product -->


		@include('template.footer')
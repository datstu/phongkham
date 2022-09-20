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
			
			
			<div class="bg-white">
				<!-- Left & right section start -->
				<div class="section-full bg-white content-inner">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="sort-title clearfix text-center">
									<h4>About Us</h4>
								</div>
								<!-- Listing with symbols -->
								<div class="section-content box-sort-in m-b10 p-b0 button-example">
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<div class="content-text">
												<p>The<b> Italian Medical Clinic</b> has been founded in 2019 from the first Italian dental clinic in London which was founded in 2013, the<a href="http://www.centrepointdentalclinic.co.uk/" rel="noopener" target="_blank" data-link="http://www.centrepointdentalclinic.co.uk/">&nbsp;Centre Point Dental Clinic</a>.</p>
												<p>At the Italian Medical Clinic, <b>all of us doctors and specialists are Italian</b>. We pride ourselves of our preventative and evidence-based approach. <b>We take care of our patients in a discreet and welcoming environment.</b></p>
												<p>Our clinic is in the heart of London and is easily accessible (<a href="https://www.google.com/maps/place/24E+Little+Russell+St,+Holborn,+London+WC1A+2HS,+Regno+Unito/@51.5180697,-0.127181,17z/data=!3m1!4b1!4m5!3m4!1s0x48761b33a3a992ab:0x581e130f6d9fea3c!8m2!3d51.5180697!4d-0.1249923?hl=it" rel="noopener" target="_blank" data-link="https://www.google.com/maps/place/24E+Little+Russell+St,+Holborn,+London+WC1A+2HS,+Regno+Unito/@51.5180697,-0.127181,17z/data=!3m1!4b1!4m5!3m4!1s0x48761b33a3a992ab:0x581e130f6d9fea3c!8m2!3d51.5180697!4d-0.1249923?hl=it">map</a>).&nbsp;<span style="color: var(--title); background-color: rgba(0, 0, 0, 0);">We offer last-minute bookings and are also open on Saturdays.</span></p>
												</div>
										</div>
										<hr />
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Listing with symbols END -->
				</div>
			</div>
			<div class="section-full content-inner bg-gray bg-img-fix overlay-black-dark"
				style="background-image:url(imagesNew/book.jpeg);">
				<div class="container">
					<div class="row">
						<div class="col-md-12 post card-container">
							<div class="sort-title clearfix text-white">
								<h4>Book your appointment with your Italian doctor</h4>
								<p>Your Health is Our Top Priority.</p>
							</div>
							<div class="section-content box-sort-in  button-example m-b30">
								<button type="button" class="btn btn-secondary btn-lg btn-block">Book an
									Appointment</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-white">
				<!-- Left & right section start -->
				<div class="section-full bg-white content-inner">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								
								<!-- Listing with symbols -->
								<div class="section-content box-sort-in m-b10 p-b0 button-example">
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<div class="content-text">
												<p><span style="font-size: medium; background-color: rgba(0, 0, 0, 0);">Our team of Consultants and therapists are fully qualified and have been trained both in the UK and in Italy.</span><br></p>
												<p style="color: rgb(27, 27, 29); font-size: medium; --icon-list-line-height: 30px;">At Italian Doctors, we use the safest and most up-to-date diagnostic and therapeutic equipment, such as our 3D-4D ultrasound scanner, our surgical microscope, our Electrocardiograph and our Sterilisation room with its three sterilisation machines. At Italian Doctors, we offer highly specialised medical care to the Italian and International communities in London.</p>
												<p style="color: rgb(27, 27, 29); font-size: medium; --icon-list-line-height: 30px;">Italian Doctors is registered with the Care Quality Commission and operates under the Health and Social Care Act 2008. The Care Quality Commission is the independent regulator of health and social care that is provided by hospitals, nursing homes and other residential units.</p>
												</div>
										</div>
										<hr />
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
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
			<!-- Slider -->
			<div class="main-slider style-two default-banner relative" id="home">
				<div class="tp-banner-container">
					<div class="tp-banner">
						<div id="rev_slider_1175_1_wrapper" class="rev_slider_wrapper" data-alias="duotone192" data-source="gallery" style="background-color:transparent;padding:0px;">
							<!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->
							<div id="rev_slider_1175_1" class="rev_slider" style="display:none;" data-version="5.3.0.2">
								<ul>
									<!-- SLIDE  -->
									<li data-index="rs-100" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{asset('public/frontend/images/main-slider/slide1.jpg')}}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
										<!-- MAIN IMAGE -->
										<img src="{{asset('public/frontend/imagesNew/sliders/banner1.jpeg')}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-offsetstart="-500 0" data-offsetend="500 0" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
										<!-- LAYERS -->
										<div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 2;background-color:rgba(0, 0, 0, 0.0);border-color:rgba(0, 0, 0, 0);border-width:0px;">
										</div>
										<!-- LAYER NR. 1 -->
										<div class="tp-caption   rs-parallaxlevel-4" id="slide-100-layer-2" data-x="['right','right','right','right']" data-hoffset="['0','100','20','40']" data-y="['middle','middle','middle','middle']" data-voffset="['-150','-100','-70','-30']" data-fontsize="['60','40','30','20']" data-lineheight="['70','50','45','30']" data-width="['750','550','480','300']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; min-width: 720px; max-width: 720px; white-space: normal; line-height: 70px;  color: rgba(255, 255, 255, 1.00);font-family:'Nunito',sans-serif;border-width:0px; font-weight:700;">
											<a class="sliders-a" href="about-1.html">Get Better Beauty Results By
												Following Steps</a>
										</div>

										<!-- LAYER NR. 2 -->

										<!-- LAYER NR. 3 -->

										<!-- LAYER NR. 4 -->
										<div class="tp-caption tp-resizeme rs-parallaxlevel-7" id="slide-100-layer-5" data-x="['left','left','left','left']" data-hoffset="['500','500','200','200']" data-y="['top','top','top','top']" data-voffset="['400','400','300','200']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;border-width:0px;">
											<div class="rs-looped rs-wave" data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%">
												<img src="{{asset('public/frontend/images/main-slider/peralax.png')}}" alt="" data-ww="['590px','479px','383px','287px']" data-hh="['616px','500px','400px','300px']" width="590" height="616" data-no-retina>
											</div>
										</div>
										<div class="tp-caption   tp-resizeme rs-parallaxlevel-7" id="slide-100-layer-6" data-x="['left','left','left','left']" data-hoffset="['1100','948','948','948']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":200,"to":"o:5;","delay":200,"ease":"Power2.easeInOut"},{"delay":"wait","speed":2000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;border-width:0px;">
											<div class="rs-looped rs-wave" data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%">
												<img src="{{asset('public/frontend/images/main-slider/peralax2.png')}}" alt="" data-ww="['376px','376px','376px','376px']" data-hh="['331px','331px','331px','331px']" width="376" height="331" data-no-retina>
											</div>
										</div>

										<div class="slider-set">
											<img src="{{asset('public/frontend/images/skew/slider-skew.svg')}}" alt="" />
										</div>
									</li>
									<!-- SLIDE  -->
									<li data-index="rs-200" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{asset('public/frontend/images/main-slider/slide2.jpg')}}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
										<!-- MAIN IMAGE -->
										<img src="{{asset('public/frontend/imagesNew/sliders/banner2.jpg')}}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-offsetstart="-500 0" data-offsetend="500 0" data-bgparallax="10" class="rev-slidebg" data-no-retina="">
										<!-- LAYERS -->
										<div class="tp-caption tp-shape tp-shapewrapper " id="slide-200-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 2;background-color:rgba(0, 0, 0, 0.0);border-color:rgba(0, 0, 0, 0);border-width:0px;">
										</div>
										<!-- LAYER NR. 1 -->
										<div class="tp-caption   rs-parallaxlevel-4" id="slide-200-layer-2" data-x="['right','right','right','right']" data-hoffset="['-50','0','70','40']" data-y="['middle','middle','middle','middle']" data-voffset="['-120','-0','-70','-75']" data-fontsize="['45','45','40','20']" data-lineheight="['70','70','50','30']" data-width="['720','640','480','300']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; min-width: 720px; max-width: 720px; white-space: normal; line-height: 70px;  color: rgba(255, 255, 255, 1.00);font-family:'Nunito',sans-serif;border-width:0px; font-weight:700;">
											<a class="sliders-a" href="about-1.html">Looking For A Beauty Website ?</a>
										</div>

										<!-- LAYER NR. 2 -->

										<!-- LAYER NR. 3 -->

										<!-- LAYER NR. 4 -->
										<div class="tp-caption   tp-resizeme rs-parallaxlevel-7" id="slide-200-layer-5" data-x="['left','left','left','left']" data-hoffset="['500','948','948','948']" data-y="['top','top','top','top']" data-voffset="['400','487','487','487']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;border-width:0px;">
											<div class="rs-looped rs-wave" data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%">
												<img src="{{asset('public/frontend/images/main-slider/peralax.png')}}" alt="" data-ww="['590px','590px','590px','590px']" data-hh="['616px','616px','616px','616px']" width="590" height="616" data-no-retina>
											</div>
										</div>
										<div class="tp-caption   tp-resizeme rs-parallaxlevel-7" id="slide-200-layer-6" data-x="['left','left','left','left']" data-hoffset="['1100','948','948','948']" data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":200,"to":"o:5;","delay":200,"ease":"Power2.easeInOut"},{"delay":"wait","speed":2000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;border-width:0px;">
											<div class="rs-looped rs-wave" data-speed="20" data-angle="0" data-radius="50px" data-origin="50% 50%">
												<img src="{{asset('public/frontend/images/main-slider/peralax2.png')}}" alt="" data-ww="['376px','376px','376px','376px']" data-hh="['331px','331px','331px','331px']" width="376" height="331" data-no-retina>
											</div>
										</div>

										<div class="slider-set">
											<img src="{{asset('public/frontend/images/skew/slider-skew.svg')}}" alt="" />
										</div>
									</li>
									<!-- SLIDE  -->
								</ul>
								<div class="tp-bannertimer" style="height: 8px; background-color: rgba(255, 255, 255, 0.25);"></div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Slider END -->
			<!-- contact area -->
			<div class="content-block">

				<!-- About Us -->
				<div class="section-full">
					<div class="container-fluid">
						<div class="row equal-wraper">
							<div class="col-lg-6 col-md-6 p-a0 equal-col">
								<img src="{{asset('public/frontend/imagesNew/about/home1.jpeg')}}" alt="" class="img-cover equal-col" />
							</div>
							<div class="col-lg-6 col-md-6 bg-primary p-lr0 dis-tbl equal-col">
								<div class="p-a30 dis-tbl-cell">
									<div class="max-w500 m-auto p-tb30">
										<div class="row">
											<div class="col-md-12 text-white">
												<h2 class="font-weight-500">Phòng khám Nội Khoa Hồ Chí Minh</h2>
												<h5 class="font-weight-300 m-b30">RELY ON ESTABLISHED AND COMPETENT
													PROFESSIONALS.</h5>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 m-b30">
												<p class="text-white">Lorem Ipsum is simply dummy text of the printing
													and typesetting industry. Lorem Ipsum has been the industry's
													standard dummy text ever since the 1500s, when an unknown printer
													took a galley.</p>
												<p class="text-white">Lorem Ipsum is simply dummy text of the printing
													and typesetting industry. Lorem Ipsum has been the industry's
													standard dummy text ever since the 1500s, when an unknown printer
													took a galley.</p>
												<a href="#" class="site-button radius-xl outline white">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- About Us End -->

			</div>
			<!-- inner page banner END -->
			<div class="bg-white">
				<!-- Left & right section start -->
				<div class="section-full bg-white content-inner">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="sort-title clearfix text-center">
									<h4>Dịch Vụ</h4>
								</div>
								<!-- Listing with symbols -->
								<div class="section-content box-sort-in m-b10 p-b0 button-example">
									<div class="row">
										<div class="col-md-4">
											<ul class="list-check secondry">
												<li>Lorem ipsum dolor sit amet</li>
												<li>Aorem ipsum dolor sit amet</li>
												<li>Borem ipsum dolor sit amet</li>
												<li>Corem ipsum dolor sit amet</li>
												<li>Dorem ipsum dolor sit amet</li>
												<li>Eorem ipsum dolor sit amet</li>
											</ul>
										</div>
										<div class="col-md-4">
											<ul class="list-check secondry">
												<li>Lorem ipsum dolor sit amet</li>
												<li>Aorem ipsum dolor sit amet</li>
												<li>Borem ipsum dolor sit amet</li>
												<li>Corem ipsum dolor sit amet</li>
												<li>Dorem ipsum dolor sit amet</li>
												<li>Eorem ipsum dolor sit amet</li>
											</ul>
										</div>
										<div class="col-md-4">
											<ul class="list-check secondry">
												<li>Lorem ipsum dolor sit amet</li>
												<li>Aorem ipsum dolor sit amet</li>
												<li>Borem ipsum dolor sit amet</li>
												<li>Corem ipsum dolor sit amet</li>
												<li>Dorem ipsum dolor sit amet</li>
												<li>Eorem ipsum dolor sit amet</li>
											</ul>
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
			<div class="section-full content-inner bg-gray bg-img-fix overlay-black-dark" style="background-image:url('public/frontend/imagesNew/book.jpeg');">
				<div class="container">
					<div class="row">
						<div class="col-md-12 post card-container">
							<div class="sort-title clearfix text-white">
								<h4>Đặt lịch hẹn với bác sĩ</h4>
								<p>Sức khỏe của bạn là ưu tiên hàng đầu của chúng tôi.</p>
							</div>
							<div class="section-content box-sort-in  button-example m-b30">
								<button type="button" class="btn btn-secondary btn-lg btn-block">Đặt lịch hẹn</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section-full bg-gray content-inner">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="sort-title clearfix text-center">
								<h4>Đánh giá của bệnh nhân &amp; khách hàng</h4>
							</div>
							<div class="section-content box-sort-in button-example p-t10 p-b30">
								<div class="dez-tabs border bg-tabs">
									<ul class="nav nav-tabs">
										<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#web-design-4"><i class="fas fa-globe"></i> <span class="title-head"> Về hệ thống làm việc</span></a></li>
										<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#graphic-design-4"><i class="far fa-image"></i> <span class="title-head">Về bác sĩ</span></a></li>
									</ul>

									<div class="tab-content">
										<div id="web-design-4" class="tab-pane active">
											<div class="text-center">
												<div class="text-center">
													<div class="style_tab__info">
														<div class="style_stars">
															<div class="stars_stars"><i class="stars-item_stars-item  stars-item_stars-item--STARS_SIZE_L  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item  stars-item_stars-item--STARS_SIZE_L  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item  stars-item_stars-item--STARS_SIZE_L  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item  stars-item_stars-item--STARS_SIZE_L  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item  stars-item_stars-item--STARS_SIZE_L  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i>
															</div>
														</div>
														<div class="style_mr-1">
															<div><span class=" style_text-bold">4.9 trên 5 </span></div>
														</div>
														<div><span> dựa trên </span><span class="reviews-count_review-count__counts  reviews-count_review-count__counts--bold">195</span><span>
														đánh giá</span></div>
													</div>
												</div>
											</div>
											<!-- slide rating review -->
											<div class="section bg-gray ">
												<div class="container">
													<div class="row">
														<div class="col-md-12">
															<!-- Event post Carousel with no margin -->
															<div class="section-content box-sort-in m-b30 button-example">
																<div id="" class="owl-review-rating blog-carousel mfp-gallery owl-carousel gallery owl-btn-center-lr">

																	<div class="item list-review-rating">
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="item list-review-rating">
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="item list-review-rating">
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- Event post Carousel with no margin END -->
											</div>

										</div>
										<div id="graphic-design-4" class="tab-pane">
											<div class="text-center">
												<div class="d-inline-flex font-size-20 style_tab__info">
													<div class="patient-reviews-count m-r30">
														<div>
															<!-- react-text: 2130 -->
															<!-- /react-text --><span class="reviews-count_review-count">176</span><span>
															Bệnh nhân</span>
														</div>
													</div>
													<div class="dropdown-container">
														<div id="TestDropdown" class="dropdown_dropdown-top-level">
															<div class="dropdown_input-area">
																<div>
																	<div class="dropdown_default-content-renderer">
																		<i class="fas fa-caret-down"></i>
																	</div>
																</div><input type="text" id="TestDropdownInput" class="dropdown_dropdown" placeholder="Tất cả Y/ Bác sĩ" autocomplete="off" readonly="">
															</div>
															<div class="dropdown_hide dropdown_dropdown-list ">
																<div class="dropdown-menu_list-wrapper ">
																	<ul>
																		<li class="text-center dropdown-item_list-item dropdown-item_active">
																			<div class="dropdown-item_list-item-link dropdown-item_desktop-item">
																				<div><span>Tất cả Y/ Bác sĩ</span></div>
																			</div>
																		</li>
																		<li class="text-center dropdown-item_list-item">
																			<div class="dropdown-item_list-item-link dropdown-item_desktop-item">
																				<div><span>Giulia Luciano</span></div>
																			</div>
																		</li>
																		<li class="text-center dropdown-item_list-item">
																			<div class="dropdown-item_list-item-link dropdown-item_desktop-item">
																				<div><span>Kristo Papa</span></div>
																			</div>
																		</li>
																		<li class="text-center dropdown-item_list-item">
																			<div class="dropdown-item_list-item-link dropdown-item_desktop-item">
																				<div><span>Luigi Citarella</span></div>
																			</div>
																		</li>
																		<li class="text-center dropdown-item_list-item">
																			<div class="dropdown-item_list-item-link dropdown-item_desktop-item">
																				<div><span>Luigi Gnudi</span></div>
																			</div>
																		</li>
																		<li class="text-center dropdown-item_list-item">
																			<div class="dropdown-item_list-item-link dropdown-item_desktop-item">
																				<div><span>Roberto Di Febo</span></div>
																			</div>
																		</li>
																		<li class="text-center dropdown-item_list-item ">
																			<div class="dropdown-item_list-item-link dropdown-item_desktop-item">
																				<div><span>Teresa Castiello</span></div>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- slide rating review -->
											<div class="section bg-gray ">
												<div class="container">
													<div class="row">
														<div class="col-md-12">
															<!-- Event post Carousel with no margin -->
															<div class="section-content box-sort-in m-b30 button-example">
																<div class="owl-review-rating blog-carousel mfp-gallery owl-carousel gallery owl-btn-center-lr">

																	<div class="item list-review-rating">
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="item list-review-rating">
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="item list-review-rating">
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																		<div class="style_review-item">
																			<div class="review-item_review-item   review-item_review-item_frame">
																				<div class="review-item_review-item__stars">
																					<div class="stars_stars">
																						<i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--4-4 "></i><i class="stars-item_stars-item stars-item_stars-item--STARS_SIZE_L stars-item_stars-item--review  stars-item_stars-item--filled  stars-item_stars-item--3-4 "></i>
																					</div>
																				</div>
																				<div class="review-item_review-item__content" style="height: 70px;">
																					Dr Luciano helped me to feel relaxed before and during the procedure. She was very good at explaining what was going to happen and what I needed to do post the procedure. An all round excellent experience. I am very happy with the result.</div>
																				<div class="review-item_review-item__info">
																					<div>19/05/2022</div>
																					<div><span>By a verified
																							patient</span></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- Event post Carousel with no margin END -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>



		<!-- end flagship product -->


		@include('template.footer')
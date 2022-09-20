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
		<div class="page-content page-blog">
			<div class="bg-blog">
				<div class="row text-center">
					<div class="col-md-12">

						<div class="p-a30 clearfix text-white ">
							<h4 class="font-30">Bài viết</h4>
						</div>

					</div>
				</div>
			</div>
			<!-- inner page banner END -->
			<div class="content-area bgeffect" style="background-image:url(images/background/bg12.jpg);"
				data-0="background-position:0px 0px;" data-end="background-position:0px 2000px;">
				<div class="container">


					<!-- blog grid -->
					<div id="masonry" class="dez-blog-grid-3 row p-0">

					@if(count($homePost) > 0)
					@foreach($homePost as $post)
						<div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="blog-post blog-grid date-style-2">
								<div class="dez-post-media dez-img-effect zoom-slow"> <a href="#">
									<img
											src="{{asset('public/uploads/post/'.$post->post_image)}}" alt="{{$post->post_title}}"></a> </div>
								<div class="dez-post-info">
									<div class="dez-post-title ">
										<h4 class="post-title"><a href="#">{{$post->post_title}}</a></h4>
									</div>

									<div class="dez-post-text">
										<p><?php echo $post->post_desc;?></p>
									</div>
									<div class="dez-post-readmore"> <a href="#" title="READ MORE" rel="bookmark"
											class="site-button-link">Xem thêm<i
												class="fas fa-angle-double-right"></i></a> </div>

								</div>
							</div>
						</div>
					@endforeach
					@endif
					</div>
					<!-- blog grid END -->
					<!-- Pagination -->
					<div class="pagination-bx col-lg-12 clearfix ">
						<ul class="pagination">
							<li class="previous"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="next"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
						</ul>
					</div>
					<!-- Pagination END -->
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
		</div>
		<!-- end flagship product -->


		@include('template.footer')
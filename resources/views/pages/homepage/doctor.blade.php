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
						<h4>Bác sĩ</h4>
					</div>
					<!-- Listing with symbols -->
					@if(count($categorySkill)>0)
					@foreach($categorySkill as $category)
					<div class="section-content box-sort-in m-b10 p-b0 button-example" >
						<div class="ba-row row-fluid item-doctor" >
							<div class="ba-overlay"></div>
							<div class="column-wrapper">
								<div class="span12 ba-grid-column-wrapper" data-span="12">
									<div class="ba-grid-column column-content-align-middle">
										<div class="ba-overlay"></div>
										<div class="ba-item-headline ba-item" >
											<div class="headline-wrapper">
												<h2>{{$category->name}}</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="section-content box-sort-in button-example section-doctor">
						<div class="row">
							@if(count($doctor) > 0)
							@foreach($doctor as $item)
							@if($item->category_skill_id == $category->id)
							<div class="col-lg-4 col-md-4 col-sm-6 p-b30">
								<div class="dez-box box-doctor p-t40">
									<div class="dez-media dez-img-overlay2 dez-img-effect zoom text-center avatar-doctor"> <a href="javascript:;"> 
										<img width="358" height="460" src="{{asset('/public/uploads/doctor/'.$item->image)}}" alt="{{$item->name}}"> </a>	
									</div>
									<div class="p-a10 text-center">
										<h4 class="dez-title text-uppercase"><a href="javascript:;">{{$item->name}}</a></h4>
										<span class="dez-member-position doctor-descr">{{$item->sort_desc}}</span> 
										<a href="#" class="site-button radius-xl outline read-a ">Xem thêm <i
											class="fas fa-long-arrow-alt-right"></i></a>
									</div>
								</div>
							</div>
							@endif
							@endforeach
							@endif
						</div>
					</div>
					
					
					@endforeach
					@endif
				</div>
			</div>
		</div>
		<!-- Listing with symbols END -->
	</div>
</div>

</div>



		<!-- end flagship product -->


		@include('template.footer')
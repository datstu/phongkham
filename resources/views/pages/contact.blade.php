@include('template.header')
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
?>
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/contact.css')}}">
<script src='https://www.google.com/recaptcha/api.js'></script>
<body id="bg">
    <div class="page-wraper page-about-us contact">
        <div id="loading-area"></div>
        <!-- header -->
        @include('template.include.headerMenu')
        <!-- header END -->

        <div class="box-slider">
            <div class="group-central contact-info ani-item show-text">
                <div class="bg-cover  section-first recruitment-5 on-show bg-screen">

                </div>
                <div class=" content-main">
                    <div class="contact-txt">
                        <h2>Công ty Cổ Phần Đầu Tư Địa Ốc Thiên Phú Tây Ninh</h2>
                        <p><strong>Địa chỉ:</strong> Sô 344 Đường 30/4, Khu Phố 1, Phường 3, TP.Tây Ninh</p>
                        <p><strong>Điện thoại:</strong> <a class="tel" href="tel:02766.525.525">02766.525.525</a></p>
                        <p><strong>Email:</strong> <a class="email" href="mailto:info.thienphutayninh@gmail.com">info.thienphutayninh@gmail.com</a></p>
                        <p><strong>Công ty Cổ phần Đầu Tư Địa ốc Thiên Phú là doanh nghiệp hoạt động chuyên sâu về lĩnh vực Bất Động Sản với nhiều năm kinh nghiệm.</strong></p>
                    </div>
                </div>
            </div>
        </div>

       


    </div>

    <div class="section-full content-inner  contact-style-1 bgeffect skrollable skrollable-between">
			<div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-12">
                        <div class="p-a30 bg-gray clearfix m-b30 ">
							<h2>Liên hệ với chúng tôi</h2>
							<form method="post" class="dzForm" action="">
								<input type="hidden" class="form-control" name="dzToDo" value="Contact">
								<div class="dzFormMsg"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzName" type="text" required="" class="form-control" placeholder="Họ và tên (*)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="dzEmail" type="email" class="form-control" required="" placeholder="Email (*)">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzOther[Phone]" type="text" required="" class="form-control" placeholder="Địa chỉ">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzOther[Subject]" type="text" required="" class="form-control" placeholder="Số điện thoại (*)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="dzMessage" rows="4" class="form-control" required="" placeholder="Nội dung (*)"></textarea>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-12">
                                        <div class="form-group">
											<div class="input-group dz-recaptcha">
												<div class="g-recaptcha" data-sitekey="6LfYPVYhAAAAAKU8wuJJabLrRryc_m5quc-qFHte" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
												<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
											</div>
										</div>
									</div>
                                    
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button submit-btn "> <span>Gửi</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                   
                </div>
				<div class="row">
					<div class="col-md-12">
					<!-- Map part start -->
					<h2>CÔNG TY CỔ PHẦN ĐẦU TƯ ĐỊA ỐC THIÊN PHÚ TÂY NINH</h2>
					<iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=S%C3%B4%20344%20%C4%90%C6%B0%E1%BB%9Dng%2030/4,%20Khu%20Ph%E1%BB%91%201,%20Ph%C6%B0%E1%BB%9Dng%203,%20TP.T%C3%A2y%20Ninh+(My%20BusinesC%C3%94NG%20TY%20C%E1%BB%94%20PH%E1%BA%A6N%20%C4%90%E1%BA%A6U%20T%C6%AF%20%C4%90%E1%BB%8AA%20%E1%BB%90C%20THI%C3%8AN%20PH%C3%9A%20T%C3%82Y%20NINHs%20Name)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0; width:100%; height:400px;" allowfullscreen=""></iframe>
					<!-- Map part END -->
					</div>
				</div>
            </div>
        </div>
     

@include('template.footer')
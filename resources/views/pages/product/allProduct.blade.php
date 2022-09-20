@include('template.ecommerce.header')  

   
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row" style="background: #f1f1f5; ">
                    <div class="col-md-3 header-img-mobile">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="{{asset('public/ecommerce/img/banner/war.jpg')}}" />
                                <a class="img-text" >
                                    <p>Nga Thinkpad xin chào</p>
                                </a>
                            </div>
                            <div class="img-item">
                                <img src="{{asset('public/ecommerce/img/banner/lfp.jpg')}}" />
                                <a class="img-text" >
                                    <p>Theo dõi qua FB để cập nhật khuyến mãi</p>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                  
                    <div class="col-md-6 slider-mobile">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img  src="{{asset('public/ecommerce/img/banner/new1.jpg')}}" alt="Slider Image" />
                               
                            </div>
                            <div class="header-slider-item">
                                <img  src="{{asset('public/ecommerce/img/banner/new2.jpg')}}" alt="Slider Image" />
                               
                            </div>
                            <div class="header-slider-item">
                                <img  src="{{asset('public/ecommerce/img/banner/new5.jpg')}}" alt="Slider Image" />
                               
                            </div>
                            <div class="header-slider-item">
                                <img  src="{{asset('public/ecommerce/img/banner/new4.jpg')}}" alt="Slider Image" />
                               
                            </div>
                            <div class="header-slider-item">
                                <img  src="{{asset('public/ecommerce/img/banner/new3.jpg')}}" alt="Slider Image" />
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category-desktop">
                        <nav class="navbar bg-light">
                            @include('template.ecommerce.category')
                        </nav>
                    </div>

                   
                    
                </div>
            </div>
        </div>
        {{-- category-mobile --}}
        @include('template.ecommerce.categoryMobile') 
             {{--end category-mobile --}}
        <!-- Main Slider End -->      
  
        
   
        
        <!-- Category Start-->

        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1 class="customer-h2">Nga ThinkPad</h1>
                    </div>
                    <div class="col-md-4" style="text-align: end;">
                        <a href="tel:0907799046">(+84) 779 444 222</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
        
        
       
    
        
        <!-- xa hang -->
        <?php echo Helper::renderCatalog($featureProducts, 'Tất cả sản phẩm',999);?>
        <!-- end xa hang -->

        
      
        @include('template.ecommerce.footer')
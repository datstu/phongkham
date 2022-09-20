@include('template.ecommerce.header')  

     
        <!-- Main Slider Start -->
        <!-- header -->
        @include('template.ecommerce.includeHeader') 
        <!-- end header -->

        {{-- category-mobile --}}
        @include('template.ecommerce.categoryMobile') 
             {{--end category-mobile --}}
        <!-- Main Slider End -->      
   
        
    
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
        
        
        
       
        <!-- Newsletter End -->        
        

        
        

        <!-- Review Start -->
      
        <!-- Review End -->     
        
        <!-- xa hang -->
        <?php echo Helper::renderCatalog($productSales,'Xả hàng || Giảm giá',999,'home');?>
        <!-- end xa hang -->

        <!-- duoi 3 trieu -->
        <?php echo Helper::renderCatalog($productBelow3tr, 'Dưới 3 triệu',16,'home');?>
        <!-- duoi 3 trieu -->

         <!-- tu 3 den 5 trieu -->
         <?php echo Helper::renderCatalog($product3trTo5tr, 'Từ 3 đến 5 triệu',15,'home');?>
        <!-- tu 3 den 5 trieu -->

         <!-- tu 5 den 7 trieu -->
         <?php echo Helper::renderCatalog($product5trTo7tr, 'Từ 5 đến 7 triệu',17,'home');?>
        <!-- tu 5 den 7 trieu -->

        <!-- tu 7 den 10 trieu -->
        <?php echo Helper::renderCatalog($product7trTo10tr, 'Từ 7 đến 10 triệu',18,'home');?>
        <!-- tu 7 den 10 trieu -->

        <!-- tren 10 trieu -->
        <?php echo Helper::renderCatalog($productOver10tr, 'Trên 10 triệu',19);?>
        <!-- tren 10 trieu -->
      
        @include('template.ecommerce.footer')
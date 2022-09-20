@include('template.ecommerce.header')

<style>
    @media only screen and (max-width: 426px) {
        .bottom-bar {
            background: #1baf68;
            margin-bottom: unset;
            padding: unset;
            padding-bottom: 100px;
        }
    }
</style>
<!-- Main Slider Start -->
<!-- header -->
@include('template.ecommerce.includeHeader')
<!-- end header -->


<!-- category-mobile -->

@include('template.ecommerce.categoryMobile')

<!-- end category-mobile -->
<!-- Main Slider End -->

<!-- Brand Start -->
{{-- @include('template.ecommerce.brand')    --}}
<!-- Brand End -->



<!-- Call to Action Start -->
<div class="call-to-action">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="">
                <h1 class="customer-h2">Từ khóa: </h1>
            </div>
            <div style="margin-left:5px">
                <a> {{$search}}</a>
                <span style="margin-left:5px;color: #fff;"> Đã tìm thấy: <b>{{$productCategory->total()}}</b> Sản phẩm liên quan</span>
            </div>
        </div>
    </div>
</div>
<!-- Call to Action End -->


<!-- Newsletter End -->





<?php
//    echo "<pre>";
//    print_r($featureProducts);
//    echo "</pre>";
?>

<!-- xa hang -->
<?php echo Helper::renderCatalog($productCategory, 'Tất cả sản phẩm', 999, 'nga thinkpad laptop re hcm'); ?>
<!-- end xa hang -->



@include('template.ecommerce.footer')
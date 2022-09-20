@include('template.header')
<!-- header END -->
<!-- Content -->
<style>
    .top-bar .container-fluid {
        color: black !important;
    }

    .navbar-nav .active a {
        border-color: #00723d !important;
    }

    .navbar-nav li a {
        color: black !important;
    }

    @media only screen and (min-width: 1140px) {
        .bg-list-massage {
            height: 445px;
        }
    }

    .address-massage {
        bottom: -12px;
        position: absolute;
        margin: 20px;
        font-weight: 300;
        right: -11%;
        font-size: 18px;
        color: #000;
        font-family: Arial, Helvetica, sans-serif;
    }

    .address-massage img {
        height: 23px;
        margin-bottom: 10px;
    }

    @media only screen and (max-width: 1024px) {
        .address-massage {
            bottom: -56px;
            right: -43px;
            font-size: 15px;
        }

    }

    @media only screen and (max-width: 768px) {
        .address-massage {
            bottom: -56px;
            right: -15px;
            font-size: 15px;
        }

    }

    @media only screen and (max-width: 426px) {
        .dez-bnr-inr-entry h1 {
            margin-bottom: 100px;
        }

        .dez-bnr-inr-entry ul {
            margin-bottom: -20px;
            font-weight: 500;
        }

        .address-massage {
            width: 100%;
            padding-left: 15px;
            margin-bottom: 60px;
            font-weight: 500;
        }

        .search-not-found {
            margin: 0 auto;
            width: 400px;
        }

        .not-found {
            color: #000;
            font-size: 16px;
            text-align: center;
        }
    }

    @media only screen and (max-width: 336px) {


        .address-massage {

            margin-bottom: 73px;

        }

    }

    @media only screen and (max-width: 320px) {
        .container-fluid .extra-nav {
            padding: 0;
            top: -16px;
        }
    }

    @media only screen and (max-width: 266px) {

        .container-fluid .extra-nav {
            padding: 0;
            top: -16px;
        }

        .address-massage {

            margin-bottom: 83px;

        }

        .dez-bnr-inr-entry ul li:last-child {
            margin-right: 0;
        }

    }

    .background-hover {
        background-color: #f3e0e4ab;
    }
</style>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area"></div>
        <!-- header -->
        <?php $address = $phone = $email = $linkFB = $pageId = $linkYtb = $linkInsta = '';
        if (isset($info) && $info->count() > 0) {
            $address = $info[0]['address'];
            $phone = $info[0]['phone'];
            $email = $info[0]['email'];
            $linkFB = $info[0]['link_fb'];
            $pageId = $info[0]['page_id_fb'];
            $linkYtb = $info[0]['link_youtube'];
            $linkInsta = $info[0]['link_instagram'];
        }
        ?>
        @include('template.include.headerMenu')
        <!-- header END -->
        <div class="page-content bg-white tb">


            <!-- inner page banner END -->
            <div class="content-area bgeffect" style="background-image:url(public/frontend/images/background/bg12.jpg);" data-0="background-position:0px 0px;" data-end="background-position:0px 2000px;">
                <div class="container">
                    <div class="row">
                        <!-- blog grid -->

                        <?php if ($homePost) {
                            foreach ($homePost as $key => $value) {
                                $year = date('Y', strtotime($value->create_at));
                                $month = date('m', strtotime($value->create_at));
                                $day = date('d', strtotime($value->create_at));
                        ?>

                                <div class="post card-container col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="blog-post blog-grid date-style-2">
                                        <div class="dez-post-media dez-img-effect shrink background-hover"> <a href="{{URL::to($value->post_id .'/bai-viet-'.$value->post_slug)}}">
                                                <img class="new-thumb" src="{{asset('public/uploads/post/'.$value->post_image)}}" alt="{{$value->post_desc}}"></a> </div>
                                        <div class="dez-post-info">
                                            <div class="dez-post-title ">
                                                <h4 class="post-title"><a href="{{URL::to($value->post_id .'/bai-viet-'.$value->post_slug)}}">{{$value->post_title}}</a></h4>
                                            </div>
                                            <div class="dez-post-meta ">
                                                <ul>
                                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong>{{$day}}-{{$month}}</strong> <span>{{$year}}</span> </li>
                                                    <li class="post-author"><i class="fa fa-user"></i><a href="{{URL::to($value->post_id .'/bai-viet-'.$value->post_slug)}}">Thiên Phú</a> </li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> <a href="{{URL::to($value->post_id .'/bai-viet-'.$value->post_slug )}}">0 Comments</a> </li>
                                                </ul>
                                            </div>
                                            <div class="dez-post-text">
                                                <p>{{$value->post_desc}}</p>
                                            </div>
                                            <div class="dez-post-readmore"> <a href="{{URL::to($value->post_id .'/bai-viet-'.$value->post_slug)}}" title="READ MORE" rel="bookmark" class="site-button-link">Xem chi tiết <i class="fa fa-angle-double-right"></i></a> </div>
                                        </div>
                                    </div>
                                </div>
                            <?php

                            }
                        } else {
                            ?>
                            <div class="search-not-found">
                                <img src="{{asset('public/frontend/images/search-notfound.png')}}" alt="">
                                <div class="not-found">Không tìm thấy kết quả nào.</div>

                            </div>
                        <?php
                        }
                        ?>

                        <!-- blog grid END -->
                        <!-- Pagination start -->
                        {{-- <div class="pagination-bx col-lg-12 clearfix ">
                        <ul class="pagination">
                            <li class="previous"><a href="{{URL::to('chi-tiet-dich-vu')}}"><i class="fa fa-angle-double-left"></i></a></li>
                        <li class="active"><a href="{{URL::to('chi-tiet-dich-vu')}}">1</a></li>
                        <li><a href="{{URL::to('chi-tiet-dich-vu')}}">2</a></li>
                        <li><a href="{{URL::to('chi-tiet-dich-vu')}}">3</a></li>
                        <li class="next"><a href="{{URL::to('chi-tiet-dich-vu')}}"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div> --}}
                    <!-- Pagination END -->
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<!-- Content END-->
@include('template.footer')
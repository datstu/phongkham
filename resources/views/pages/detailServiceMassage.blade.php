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
        <!-- header -->
        @include('template.include.headerMenu')
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class=" overlay-white-middle tb">
                <div class="container">

                </div>
            </div>
            <?php
            $year = date('Y', strtotime($post->create_at));
            $month = date('m', strtotime($post->create_at));
            $day = date('d', strtotime($post->create_at));
            ?>
            <!-- inner page banner END -->
            <div class="content-area bgeffect" style="background-image:url(images/background/bg12.jpg);" data-0="background-position:0px 0px;" data-end="background-position:0px 2000px;">
                <div class="container" style="max-width: 1500px;">
                    <div class="row">
                        <!-- Left part start -->
                        <div class="col-md-9">
                            <!-- blog start -->
                            <div class="blog-post blog-single">
                                <div class="dez-post-title ">
                                    <h4 class="post-title"><a href="#">{{$post->post_title}}</a></h4>
                                </div>
                                <div class="dez-post-meta m-b20">
                                    <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>Ngày {{$day}} Tháng {{$month}}</strong> <span>Năm {{$year}}</span> </li>
                                        <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Thiên Phú</a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Bình luận</a> </li>
                                    </ul>
                                </div>
                                <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="{{asset('public/uploads/post/'.$post->post_image)}}" alt="{{$post->post_title}}"></a> </div>
                                <div class="dez-post-text">
                                    <?php echo $post->post_content ?>
                                </div>
                                <div class="dez-post-tags clear">

                                </div>
                            </div>
                            <div class="clear" id="comment-list">
                                <div class="comments-area" id="comments">
                                    <h2 class="comments-title">0 bình luận </h2>
                                    <div class="clearfix">
                                        <!-- comment list END -->
                                        <!-- Form -->
                                        <div class="comment-respond" id="respond">
                                            <h4 class="comment-reply-title" id="reply-title">Gửi Ý kiến<small> <a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a> </small> </h4>
                                            <form class="comment-form" id="commentform" method="post" action="http://sedatelab.com/developer/donate/wp-comments-post.php">
                                                <p class="comment-form-author">
                                                    <label for="author">Name <span class="required">*</span></label>
                                                    <input type="text" name="author" placeholder="Tên" id="author">
                                                </p>
                                                <p class="comment-form-email">
                                                    <label for="email">Email <span class="required">*</span></label>
                                                    <input type="text" placeholder="Email" name="email" id="email">
                                                </p>

                                                <p class="comment-form-comment">
                                                    <label for="comment">Comment</label>
                                                    <textarea rows="8" name="comment" placeholder="Ý kiến của bạn" id="comment"></textarea>
                                                </p>
                                                <p class="form-submit">
                                                    <input type="submit" value="Gửi Bình Luận" class="submit" id="submit" name="submit">
                                                </p>
                                            </form>
                                        </div>
                                        <!-- Form END -->
                                    </div>
                                </div>
                            </div>
                            <!-- blog END -->
                        </div>
                        <!-- Left part END -->
                        <!-- Side bar start -->
                        <div class="col-md-3">
                            <aside class="side-bar" style="margin-top: 20px;">

                                <div class="widget recent-posts-entry">
                                    <?php if ($recentPost) { ?>
                                        <h4 class="widget-title">Tin mới nhất</h4>
                                        <div class="widget-post-bx">
                                            @foreach ($recentPost as $item)
                                            <div class="widget-post clearfix">
                                                <div class="dez-post-media">
                                                    <a href="{{URL::to($item->post_id .'/bai-viet-'.$item->post_slug)}}">
                                                        <img class="new-img" src="{{asset('public/uploads/post/'.$item->post_image)}}" alt="{{$item->post_title}}">
                                                    </a>
                                                </div>
                                                <div class="dez-post-info">
                                                    <div class="dez-post-header">
                                                        <a href="{{URL::to($item->post_id .'/bai-viet-'.$item->post_slug)}}">
                                                            <h6 class="post-title">{{$item->post_title}}</h6>
                                                        </a>
                                                    </div>
                                                    <div class="dez-post-meta">
                                                        <ul>
                                                            <li class="post-author">By Thiên Phú</li>
                                                            <li class="post-comment"><i class="fa fa-comments"></i> 0</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach


                                        </div>
                                    <?php } ?>
                                </div>
                                <?php
                                if ($listCate) {

                                ?>
                                    <div class="widget widget_categories">
                                        <h4 class="widget-title">Danh mục bài viết</h4>
                                        <ul>

                                            @foreach ($listCate as $item)
                                            <li><a href="{{URL::to('/'.$item->category_id.'/danh-muc-'.$item->slug)}}">{{$item->category_name}}</a> (<?= Helper::countPostOfCategory($item->category_id) ?>)</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                <?php } ?>

                            </aside>
                        </div>
                        <!-- Side bar END -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Content END-->
@include('template.footer')
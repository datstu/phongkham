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

<body id="bg">
    <div class="page-wraper page-about-us">
        <div id="loading-area"></div>
        <!-- header -->
        @include('template.include.headerMenu')
        <!-- header END -->

        <main id="section-about-us">

            <div class="container">
                <div class="row page-wrapper">
                    <div id="content" class="col-lg-12 col" role="main">

                    </div>
                </div>
            </div>


        </main>
        <section class="section-first recruitment-5 ">
            <div class="box-recruitment">
                <div class="title-4 ani-item on-show">
                    <h2>Thông tin tuyển dụng</h2>
                </div>
                <div class="list-job ani-item on-show">
                    <table class="table-re">
                        <thead>
                            <tr>
                                <th width="50px">STT</th>
                                <th>Vị trí tuyển dụng</th>
                                <th width="130px">Số lượng</th>
                                <th>Địa điểm làm việc</th>
                                <th width="130px">Ngày hết hạn</th>
                                <th>Tình trạng đăng tuyển</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($list))
                            <?php $stt = 1; ?>
                            @foreach($list as $recruit)
                            <?php
                                                $post = Helper::getPostById($recruit->post_id);
                                                $url = '';
                                                if (isset($post->post_id) && $post->post_id > 0) {
                                                    
                                                    $url =  (URL::to('/' . $post->post_id . '/bai-viet-' . $post->post_slug));
                                                } ?>

                            <tr>

                                <td data-label="STT"><?php echo ($stt < 10) ? ('0' . (string)$stt) : $stt ?></td>
                                <td data-label="Vị trí tuyển dụng">
                                    <a href="{{$url}}">{{$recruit->position}}</a>
                                </td>
                                <td data-label="Số lượng"><?php echo ($recruit->qty < 10) ? ('0' . (string)$recruit->qty) : $recruit->qty; ?></td>
                                <td data-label="Địa điểm làm việc"> <a href="{{$url}}">{{$recruit->address}}</a></td>
                                <?php $date = date_create($recruit->date_ex); ?>
                                <td data-label="Ngày hết hạn"><?= date_format($date, "d-m-Y"); ?></td>
                                <td data-label="Tình trạng đăng tuyển"><span class="status hot">
                                        <?php echo ($recruit->status == 2) ? 'Gấp' : ''; ?></span></td>

                            </tr>

                            <?php $stt++; ?>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="join-us ani-item on-show" style="">
                    <h3>Điền thông tin nộp đơn</h3>
                    <form action="http://dev.thienphu.abc/send-recruitment-ajax.html" id="recruitment-send" name="frm_recruitment_send" method="post" enctype="multipart/form-data" target="upload_target">
                        <div class="join-form">
                            <div class="input-text">
                                <input type="text" id="namerecruitment" name="namerecruitment" value="Họ và tên (*)" data-holder="Họ và tên (*)" data-error="Vui lòng nhập tên!" data-default="Họ và tên (*)">
                            </div>
                            <div class="input-text">
                                <input type="text" id="emailrecruitment" name="emailrecruitment" value="Email (*)" data-holder="Email (*)" data-error="Email không hợp lệ!" data-default="Email (*)">
                            </div>
                            <div class="input-text">
                                <input type="text" id="phonerecruitment" name="phonerecruitment" value="Điện thoại (*)" data-holder="Điện thoại (*)" data-error="Điện thoại không hợp lệ!" data-default="Điện thoại (*)">
                            </div>
                            <div class="input-text file-up">
                                <input id="fileInput" type="file" name="myfile" onchange="onChange(this);"><span class="file-name" data-default="File hồ sơ của bạn">

                            </div>
                        </div>
                        <a href="javascript:void(0);" onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');" class="btn-1" id="btn-recruitment-submit">Nộp đơn</a>
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>

@include('template.footer')
@extends('admin')
@section('main')

<?php
$address = $phone = $email = $linkFB = $pageId = $linkYtb = $linkInsta = '';
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

<div class="page-content">
    <div class="row page-left">
        <!-- info ganeral -->
        <a href="{{URL::to('/home-quan-li-thong-tin-chung')}}">
            <div class="head-title header-setting active">
                1. Thông tin chung

            </div>
        </a>
        <!-- banner main -->
        <a href="{{URL::to('/home-quan-li-banner')}}">
            <div class="header-setting head-title">
                2. Home banner
            </div>
        </a>

    </div>
    <?php
    $message = Session::get('message');
    $data = [
        [
            'mess' => 'success_add',
            'class' => 'alert-success',
            'status' => 'Successfully!',
            'value' => 'Thêm danh mục sản phẩm thành công.'
        ],
        [
            'mess' => 'fail_add',
            'class' => 'alert-danger',
            'status' => 'Error!',
            'value' => 'Đã xảy ra lỗi khi thêm danh mục sản phẩm.'
        ],
        [
            'mess' => 'success_edit',
            'class' => 'alert-success',
            'status' => 'Successfully!',
            'value' => 'Cập nhật danh mục sản phẩm thành công.'
        ],
        [
            'mess' => 'fail_edit',
            'class' => 'alert-danger',
            'status' => 'Error!',
            'value' => 'Đã xảy ra lỗi khi cập nhật danh mục sản phẩm.'
        ],
        [
            'mess' => 'success_delete',
            'class' => 'alert-success',
            'status' => 'Successfully!',
            'value' => 'Đã xóa 1 danh mục sản phẩm.'
        ],
        [
            'mess' => 'fail_delete',
            'class' => 'alert-danger',
            'status' => 'Error!',
            'value' => 'Đã xảy ra lỗi khi xóa 1 danh mục sản phẩm.'
        ]
    ];
    ?>

    @foreach ($data as $value)
    @if( $message == $value['mess'])
    <div class="alert {{$value['class']}}">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{$value['status']}}</strong> {{$value['value']}}
    </div>
    <?php Session::put('message', null); ?>
    @endif
    @endforeach
    <div class="page-right">
        <div class="content-setting ">
            <div class="panel panel-primary">
                <form action="{{URL::to('/save-ganeral-info')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="panel-body">
                        <div class="form-group col-lg-12 ">
                            <label>Địa chỉ</label>
                            <input required="" value="<?= $address ?>" type="text" id="address" name="address" class="form-control" placeholder="Nhập địa chỉ...">
                        </div>
                        <div class="form-group col-xs-4">
                            <label>Số điện thoại</label>
                            <input required value="<?= $phone ?>" type="text" name="phone" id="phone" class="form-control " placeholder="Nhập số điện thoại...">
                        </div>
                        <div class="form-group  col-xs-8">
                            <label>Email</label>
                            <input type="text" value="<?= $email ?>" name="email" id="email" class="form-control" placeholder="Nhập email...">
                        </div>
                        <div class="form-group col-xs-6">
                            <label>Link FB</label>
                            <input type="text" value="<?= $linkFB ?>" name="linkFB" id="linkFB" class="form-control" placeholder="Nhập link fb...">
                        </div>
                        <div class="form-group col-xs-6">
                            <label>Page ID FB</label>
                            <input type="text" value="<?= $pageId ?>" name="pageId" id="pageId" class="form-control" placeholder="Nhập page id fb...">
                        </div>
                        <div class="form-group col-xs-12">
                            <label>Link Youtube</label>
                            <input type="text" value="<?= $linkYtb ?>" name="linkYtb" id="linkYtb" class="form-control" placeholder="Nhập link fb...">
                        </div>
                        <div class="form-group col-xs-12">
                            <label>Link Instagram</label>
                            <input type="text" value="<?= $linkInsta ?>" name="linkInsta" id="linkInsta" class="form-control" placeholder="Nhập link Instagram...">
                        </div>
                        <div class="input-submit-setting">
                            <input type="submit" name="submit" value="Cập nhật" class="col-xs-6 btn btn-primary setting-submit btn-update">

                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>

</div>
@endsection()
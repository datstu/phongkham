@extends('admin')
@section('main')

<div class="page-content">
    <div class="row page-left">
        <!-- info ganeral -->
        <a href="{{URL::to('/home-quan-li-thong-tin-chung')}}">
            <div class="head-title header-setting ">
                1. Thông tin chung

            </div>
        </a>
        <!-- banner main -->
        <a href="{{URL::to('/home-quan-li-banner')}}">
            <div class="header-setting active head-title">
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
            <div class="row">
               
                <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Thêm banner
                            </div>
                            <form action="{{URL::to('/save-banner')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                @if(!isset($bannerById) )
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Ảnh</label>
                                        <input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="100" src="{{asset('public/backend/img/new_seo-10-512.png')}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Hiển thị</label>
                                        <select name="status" class="form-control">
                                            <option value="1">Hiện</option>
                                            <option value="0">Ẩn</option>

                                        </select>
                                    </div>
                                    <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                </div>
                                @else
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Ảnh</label>
                                        <input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="100" @if(empty($bannerById->image))

                                        src="{{asset('public/backend/img/new_seo-10-512.png')}}">
                                        @else
                                        src="{{asset('public/uploads/banner/'.$bannerById->image)}}">

                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Hiển thị</label>
                                        <select name="status" class="form-control">
                                            @if($bannerById->status == 1)
                                            <option selected value="1">Hiện</option>
                                            <option value="0">Ẩn</option>
                                            @else
                                            <option value="1">Hiện</option>
                                            <option selected value="0">Ẩn</option>
                                            @endif
                                        </select>
                                    </div>
                                    <input type="hidden" name="id" value="{{$bannerById->id }}" class="btn btn-primary">
                                    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                                </div>
                                @endif

                            </form>
                        </div>
                    </div>
            
            </div>
        </div>

    </div>

</div>
@endsection()
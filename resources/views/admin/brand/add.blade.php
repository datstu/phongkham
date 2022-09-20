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
            'value' => 'Thêm danh mục thương hiệu.'
        ],
        [
            'mess' => 'fail_add',
            'class' => 'alert-danger',
            'status' => 'Error!',
            'value' => 'Đã xảy ra lỗi khi thêm thương hiệu.'
        ],
        [
            'mess' => 'success_edit',
            'class' => 'alert-success',
            'status' => 'Successfully!',
            'value' => 'Cập nhật thương hiệu thành công.'
        ],
        [
            'mess' => 'fail_edit',
            'class' => 'alert-danger',
            'status' => 'Error!',
            'value' => 'Đã xảy ra lỗi khi cập nhật thương hiệu.'
        ],
        [
            'mess' => 'success_delete',
            'class' => 'alert-success',
            'status' => 'Successfully!',
            'value' => 'Đã xóa 1 danh mục thương hiệu.'
        ],
        [
            'mess' => 'fail_delete',
            'class' => 'alert-danger',
            'status' => 'Error!',
            'value' => 'Đã xảy ra lỗi khi xóa 1 thương hiệu.'
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
                <div class="col-xs-12 col-md-8 col-lg-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Thêm thương hiệu
                        </div>
                        <form action="{{URL::to('/save-brand')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @if(isset($brandById) )

                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Tên thương hiệu:</label>
                                    <input value="{{$brandById->brand_name}}" type="text" name="nameBrand" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Miêu tả:</label>
                                    <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
                                    <textarea id="xxx" style="resize: none;" rows="8" class="form-control" placeholder="Nội dung bài viết..." name="descBrand">{{$brandById->brand_desc}}</textarea>
                                    <script type="text/javascript">
                                        var editor = CKEDITOR.replace('xxx');
                                    </script>

                                </div>
                                <div class="form-group">
                                    <label>Ảnh thương hiệu</label>
                                    <input id="img" type="file" name="imgBrand" class="form-control hidden" onchange="changeImg(this)">
                                    <img id="avatar" class="thumbnail" width="100" @if(empty($brandById->brand_image))

                                    src="{{asset('public/backend/img/new_seo-10-512.png')}}">
                                    @else
                                    src="{{asset('public/uploads/brand/'.$brandById->brand_image)}}">

                                    @endif


                                </div>
                                <div class="form-group">
                                    <label>Hiển thị</label>
                                    <select name="statusBrand" class="form-control">
                                        @if($brandById->brand_status == 1)
                                        <option selected value="1">Hiện</option>
                                        <option value="0">Ẩn</option>
                                        @else
                                        <option value="1">Hiện</option>
                                        <option selected value="0">Ẩn</option>
                                        @endif
                                    </select>
                                </div>
                                <input type="hidden" name="id" value="{{$brandById->brand_id }}" class="btn btn-primary">
                                <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                                @else
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Tên thương hiệu:</label>
                                        <input required="" type="text" name="nameBrand" class="form-control" placeholder="Tên danh mục...">
                                    </div>
                                    <div class="form-group">
                                        <label>Miêu tả:</label>
                                        <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
                                        <textarea id="xxx" style="resize: none;" rows="8" class="form-control" placeholder="Nội dung bài viết..." name="descBrand"></textarea>
                                        <script type="text/javascript">
                                            var editor = CKEDITOR.replace('xxx');
                                        </script>

                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh thương hiệu</label>
                                        <input id="img" type="file" name="imgBrand" class="form-control hidden" onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="100" src="{{asset('public/backend/img/new_seo-10-512.png')}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Hiển thị</label>
                                        <select name="statusBrand" class="form-control">
                                            <option value="1">Hiện</option>
                                            <option value="0">Ẩn</option>

                                        </select>
                                    </div>
                                    <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                    @endif
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection()
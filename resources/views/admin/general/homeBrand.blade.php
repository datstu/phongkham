@extends('admin')
@section('main')

<div class="page-content">
    <div class="row page-left">
        <!-- info ganeral -->
        <a href="{{URL::to('/home-quan-li-thong-tin-chung')}}">
            <div class="head-title header-setting">
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
    <div class="page-right">
        <div class="content-setting">
            <div class="manager-banner">
                <?php

                $message = Session::get('message');
                $data = [
                    [
                        'mess' => 'success_add',
                        'class' => 'alert-success',
                        'status' => 'Successfully!',
                        'value' => 'Thêm thương hiệu sản phẩm thành công.'
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
                        'value' => 'Cập nhật thương hiệu.'
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
                        'value' => 'Đã xóa 1 thương hiệu.'
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

                <div class="panel panel-primary">
                    <div class="panel-heading">Quản lý thương hiệu</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <a href="{{URL::to('/them-thuong-hieu')}}" class="btn btn-primary">Thêm thương hiệu</a>
                                <table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>Tên thương hiệu</th>
                                            <th width="20%">Ảnh </th>
                                            <th>Hiển thị</th>
                                            <th>Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($listBrandProduct as $key => $brand)
                                        <tr>
                                            <td>{{$brand->brand_id }}</td>
                                            <td>{{$brand->brand_name}}</td>
                                            <td>
                                                @if(empty($brand->brand_image))
                                                Chưa có hình.
                                                @else
                                                <img width="200px" src="{{asset('public/uploads/brand/'.$brand->brand_image)}}" class="thumbnail">
                                                @endif
                                            </td>
                                            <td>
                                                @if($brand->brand_status == 1)
                                                Hiển thị
                                                @else
                                                Ẩn
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{URL::to('/cap-nhat-thuong-hieu/'.$brand->brand_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                                <a onclick="return confirm('Bạn muốn xóa thương hiệu {{$brand->brand_name}}?')" href="{{URL::to('/xoa-thuong-hieu/'.$brand->brand_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        {{$listBrandProduct->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection()
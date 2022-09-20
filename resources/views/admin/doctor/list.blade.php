@extends('admin')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý Bác sĩ</h1>
    </div>

</div>
<!--/.row-->


<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
        <?php

        $message = Session::get('message');
        $object = [[
            'propertyOne' => 'foo',
            'propertyTwo' => 42,
        ]];

        $data = [
            [
                'mess' => 'success_add',
                'class' => 'alert-success',
                'status' => 'Successfully!',
                'value' => 'Thêm bác sĩ thành công.'
            ],
            [
                'mess' => 'fail_add',
                'class' => 'alert-danger',
                'status' => 'Error!',
                'value' => 'Đã xảy ra lỗi khi thêm bác sĩ.'
            ],
            [
                'mess' => 'success_edit',
                'class' => 'alert-success',
                'status' => 'Successfully!',
                'value' => 'Cập nhật bác sĩ thành công.'
            ],
            [
                'mess' => 'fail_edit',
                'class' => 'alert-danger',
                'status' => 'Error!',
                'value' => 'Đã xảy ra lỗi khi cập nhật bác sĩ.'
            ],
            [
                'mess' => 'success_delete',
                'class' => 'alert-success',
                'status' => 'Successfully!',
                'value' => 'Đã xóa 1 bác sĩ.'
            ],
            [
                'mess' => 'fail_delete',
                'class' => 'alert-danger',
                'status' => 'Error!',
                'value' => 'Đã xảy ra lỗi khi xóa 1 bác sĩ.'
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
            <div class="panel-heading">Quản lý bác sĩ</div>
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="table-responsive">
                        <a href="{{URL::to('/them-bac-si')}}" class="btn btn-primary">Thêm bác sĩ</a>
                        <table class="table table-bordered" style="margin-top:20px;">
                            <thead>
                                <tr class="bg-primary">
                                <th>Ảnh</th>
                                    <th>Tên bác sĩ</th>
                                    <th>Mô tả ngắn</th>
                                   
                                    <th>Hiển thị</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listDoctor as $key => $doctor)
                                <tr>
                                    <td> <img width="200px"
                src="{{asset('public/uploads/doctor/'.$doctor->image)}}"
                class="thumbnail"></td>
                                    <td>{{$doctor->name}}</td>
                                    <td>{{$doctor->sort_desc}}</td>
                                  
                                    <td>
                                        @if($doctor->status == 1)
                                        Hiển thị
                                        @else
                                        Ẩn
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{URL::to('/cap-nhat-bac-si/'.$doctor->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                        <a onclick="return confirm('Bạn muốn xóa bác sĩ {{$doctor->name}}?')" href="{{URL::to('/xoa-bac-si/'.$doctor->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"></div>
                {{$listDoctor->links()}}
            </div>
        </div>
    </div>
</div>
@endsection()
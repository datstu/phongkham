@extends('admin')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý Tin tuyển dụng</h1>
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

        <div class="panel panel-primary">
            <div class="panel-heading">Quản lý Tin tuyển dụng</div>
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="table-responsive">
                        <a href="{{URL::to('/them-tin-tuyen-dung')}}" class="btn btn-primary">Thêm Tin tuyển dụng</a>
                        <table class="table table-bordered" style="margin-top:20px;">
                            <thead>
                                <tr class="bg-primary">
                                    <th>ID</th>
                                    <th>Vị trí tuyển dụng</th>
                                    <th>Số lượng</th>
                                    <th>Địa điểm làm việc</th>
                                    <th>Ngày hết hạn</th>
                                    <th>Tình trạng</th>
                                    <th>Link bài viết</th>
                                    <th>Tùy chọn</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($list as $key => $recruit)
                                <tr>
                                    <td>{{$recruit->id }}</td>
                                    <td>{{$recruit->position }} </td>
                                    <td>{{$recruit->qty }}</td>
                                    <td>{{$recruit->address }}</td>
                                    <?php
                                    $date = date_create($recruit->date_ex); ?>
                                    <td><?= date_format($date, "d-m-Y"); ?></td>

                                    <td style="color:<?= ($recruit->status == 1) ? 'nomal' : 'red'; ?>"><?= ($recruit->status == 1) ? 'Bình thường' : 'Gấp'; ?></td>
                                    <td>
                                    <?php if ($recruit->post_id > 0) {
                                        $post = Helper::getPostById($recruit->post_id);

                                        if(isset($post->post_id) && $post->post_id>0){
                                            $url =Helper::getBaseUrl();
                                            ?>
                                    
                                            <a  target=”_blank” href="<?php echo $url.'/'.$post->post_id.'/bai-viet-'.$post->post_slug; ?>">{{$post->post_title}}</a>
                                            <?php
                                        }
                                    }
                                   
                                    ?>
                                    </td>

                                    <td>
                                        <a href="{{URL::to('/cap-nhat-tin-tuyen-dung/'.$recruit->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                        <a onclick="return confirm('Bạn muốn xóa Tin tuyển dụng {{$recruit->id}}?')" href="{{URL::to('/xoa-tin-tuyen-dung/'.$recruit->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"></div>
                {{$list->links()}}
            </div>
        </div>
    </div>
</div>
@endsection()
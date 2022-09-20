@extends('admin')
@section('main')
<style>
    .display_block {
        display: block;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Cập nhật trang giới thiệu</h1>
    </div>

</div>
<!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Trang giới thiệu
            </div>
            <?php

            $message = Session::get('message');

            $data = [
                [
                    'mess' => 'success_add',
                    'class' => 'alert-success',
                    'status' => 'Successfully!',
                    'value' => 'Thêm trang thành công.'
                ],
                [
                    'mess' => 'fail_add',
                    'class' => 'alert-danger',
                    'status' => 'Error!',
                    'value' => 'Đã xảy ra lỗi khi thêm trang.'
                ],
                [
                    'mess' => 'success_edit',
                    'class' => 'alert-success',
                    'status' => 'Successfully!',
                    'value' => 'Cập nhật trang thành công.'
                ],
                [
                    'mess' => 'fail_edit',
                    'class' => 'alert-danger',
                    'status' => 'Error!',
                    'value' => 'Đã xảy ra lỗi khi cập nhật trang.'
                ],
                [
                    'mess' => 'success_delete',
                    'class' => 'alert-success',
                    'status' => 'Successfully!',
                    'value' => 'Đã xóa 1 trang.'
                ],
                [
                    'mess' => 'fail_delete',
                    'class' => 'alert-danger',
                    'status' => 'Error!',
                    'value' => 'Đã xảy ra lỗi khi xóa 1 trang.'
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
            <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.5.3/dist/cleave.min.js"></script>
            <form name="proForm" onsubmit="return validateForm()" action="{{URL::to('/save-page-aboutus')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @if(isset($about[0]['content']) )

                <div class="panel-body">
                    <div class="form-group">
                        <label>Tiêu đề:</label>
                        <input type="text" name="title" required class="form-control" value="{{$about[0]['title']}}">
                    </div>
                    <div class="form-group">
                        <label>Mô tả ngắn:</label>
                        <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
                        <!-- <input type="text" name="sortDesc" required class="form-control" value="{{$about[0]['desc_sort']}}"> -->
                        <textarea style="" row="80" id="ckeditor12356" class="display_block" name="sortDesc">{{$about[0]['desc_sort']}}</textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('ckeditor12356');
                        </script>
                    </div>

                    <div class="form-group">
                        <label>Nội dung:</label>
                        <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
                        <textarea style="resize: none;" row="100" id="ckeditor1235" class="display_block" name="content">{{$about[0]['content']}}</textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('ckeditor1235');
                        </script>
                    </div>
                    <div class="form-group">
                        <label>Thumbnail:</label>
                        <input id="img" type="file" name="imgProductupdate" class="form-control hidden" onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" width="100" src="{{asset('public/uploads/aboutus/'.$about[0]['image'])}}">
                    </div>
                    <input type="hidden" name="id" value="{{$about[0]['id']}}">
                    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                    @else
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Mô tả ngắn:</label>
                            <input required type="text" name="sortDesc" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Nội dung:</label>
                            <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
                            <textarea id="xxx" style="resize: none;" rows="8" class="form-control" placeholder="Nội dung trang..." name="content"></textarea>
                            <script type="text/javascript">
                                var editor = CKEDITOR.replace('xxx');
                            </script>

                        </div>
                        <div class="form-group">
                            <label>Thumbnail</label>
                            <input id="img" type="file" name="imgProduct" class="form-control hidden" onchange="changeImg(this)">
                            <img id="avatar" class="thumbnail" width="100" src="{{asset('public/backend/img/new_seo-10-512.png')}}">
                        </div>
                        <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                        @endif




                    </div>
            </form>
        </div>
    </div>
</div>
<!--/.row-->
<script>
    document.querySelectorAll('.price_class').forEach(inp => new Cleave(inp, {
        numeral: true,
        numeralThousandsGroupStyle: 'thousand'
    }));

    function validateForm() {
        var x = document.forms["proForm"]["imgProduct"].value;
        if (x == "" || x == null) {
            alert("Vui lòng chọn ảnh.");
            return false;
        }
    }
</script>
@endsection()
@extends('admin')
@section('main')
<style>
    .display_block {
        width: 100%;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý chủ đầu tư</h1>
    </div>

</div>
<!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-8 col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Thêm chủ đầu tư
            </div>
            <form action="{{URL::to('/save-banner')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @if(!isset($vendorById) )
                <div class="panel-body">
                    <div class="form-group">
                        <label>Tên nhà đầu tư:</label>
                        <input id="title" onkeyup="ChangeToSlug();" type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Slug URL:</label>
                        <input required id="slug" type="text" name="slug" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nội dung:</label>
                        <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
                        <textarea id="xxx" style="resize: none;" rows="8" class="form-control" placeholder="Nội dung bài viết..." name="description"></textarea>
                        <script type="text/javascript">
                            var editor = CKEDITOR.replace('xxx');
                        </script>

                    </div>
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
                        <label>Tên nhà đầu tư:</label>
                        <input required type="text" value = "{{$vendorById->name}}" name="name" id="title" onkeyup="ChangeToSlug();" class="form-control" placeholder="Tiêu đề bài viết...">
                    </div>
                    <div class="form-group">
                        <label>Slug URL:</label>
                        <input required type="text" value = "{{$vendorById->slug}}" name="slug" id="slug" class="form-control" placeholder="Hiển thị trên url ...">
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
                        <textarea style="resize: none;" row="8" id="ckeditor1235" class="display_block" name="description">{{$vendorById->description}}</textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('ckeditor1235');
                        </script>
                    </div>
                    <div class="form-group">
                        <label>Ảnh</label>
                        <input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" width="100" @if(empty($vendorById->image))

                        src="{{asset('public/backend/img/new_seo-10-512.png')}}">
                        @else
                        src="{{asset('public/uploads/vendor/'.$vendorById->image)}}">

                        @endif
                    </div>

                    <div class="form-group">
                        <label>Hiển thị</label>
                        <select name="status" class="form-control">
                            @if($vendorById->status == 1)
                            <option selected value="1">Hiện</option>
                            <option value="0">Ẩn</option>
                            @else
                            <option value="1">Hiện</option>
                            <option selected value="0">Ẩn</option>
                            @endif
                        </select>
                    </div>
                    <input type="hidden" name="id" value="{{$vendorById->id }}" class="btn btn-primary">
                    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                </div>
                @endif

            </form>
        </div>
    </div>
</div>
<!--/.row-->
@endsection()
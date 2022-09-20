@extends('admin')
@section('main')

<style>
    .display_block {
        width: 100%;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý Bác sĩ</h1>
    </div>

</div>
<!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-8 col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Thêm Bác sĩ
            </div>
            <form action="{{URL::to('/save-doctor')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @if(isset($doctorById) )
                <div class="panel-body">
                    <div class="form-group">
                        <label>Tên bác sĩ:</label>
                        <input value="{{$doctorById->name}}" id="title" onkeyup="ChangeToSlug();" type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Slug URL:</label>
                        <input required value="{{$doctorById->slug}}" id="slug" type="text" name="slug" class="form-control">
                    </div>
                    <div class="form-group">
                            <label>Mô tả ngắn:</label>
                            <input required="" value="{{$doctorById->sort_desc}}" type="text" name="sort_desc" class="form-control" placeholder="Mô tả ngắn...">
                        </div>

                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea rows=8 class="display_block" name="content">{{$doctorById->content}}</textarea>
                        </div>
                        <div class="form-group ">
                        <label>Danh mục Y:</label>
                        <select name="category_skill_id" class="form-control">

                            @foreach($categoryList as $value)
                            <option value="{{$value->id}}" @if($doctorById->category_skill_id == $value->id)
                                selected
                                @endif
                                >{{$value->name}}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ảnh bác sĩ </label>
                        <input id="img" type="file" name="imgProductupdate" class="form-control hidden" onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" width="100" src="{{asset('public/uploads/doctor/'.$doctorById->image)}}">

                    </div>
                    <div class="form-group">
                        <label>Hiển thị</label>
                        <select name="status" class="form-control">
                            @if($doctorById->status == 1)
                            <option selected value="1">Hiện</option>
                            <option value="0">Ẩn</option>
                            @else
                            <option value="1">Hiện</option>
                            <option selected value="0">Ẩn</option>
                            @endif
                        </select>
                    </div>
                    <input type="hidden" name="id" value="{{$doctorById->id }}" class="btn btn-primary">
                    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                    @else
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Tên bác sĩ:</label>
                            <input required="" type="text" id="title" onkeyup="ChangeToSlug();" name="name" class="form-control" placeholder="Tên bác sĩ...">
                        </div>
                        <div class="form-group">
                            <label>Slug URL:</label>
                            <input required type="text" name="slug" id="slug" class="form-control" placeholder="Hiển thị trên url ...">
                        </div>
                        <div class="form-group">
                            <label>Mô tả ngắn:</label>
                            <input required="" type="text" name="sort_desc" class="form-control" placeholder="Mô tả ngắn...">
                        </div>

                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea rows=8 class="display_block" name="content"></textarea>
                        </div>
                        <div class="form-group col-lg-4 ">
                            <label>Danh mục Y:</label>
                            <select name="category_skill_id" class="form-control">

                                @foreach($categorySkillList as $value)
                                <option value="{{$value->id}}" >{{$value->name}}</option>

                                @endforeach
                            </select>
                        </div>
                       
                        
                        <div class="form-group col-lg-12">
                            <label>Ảnh bác sĩ</label>
                            <input id="img" type="file" name="imgProduct" class="form-control hidden" onchange="changeImg(this)">
                            <img id="avatar" class="thumbnail" width="100" src="{{asset('public/backend/img/new_seo-10-512.png')}}">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Hiển thị</label>
                            <select name="status" class="form-control">
                                <option value="1">Hiện</option>
                                <option value="0">Ẩn</option>

                            </select>
                        </div>
                        <input type="submit" name="submit" value="Thêm" class=" col-lg-12 btn btn-primary">
                        @endif




                    </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    var myFunction = function() {
        var check = document.getElementById("flagship").checked;
        if (check == true) {
            var z = document.getElementById("flagship").value = "1";
        } else {
            var z = document.getElementById("flagship").value = "0";
            document.getElementById("flagship").checked = false;
        }
        //alert( document.getElementById("flagship").value)
    };
    var checkFlag = document.getElementsByClassName('check-flagship');
    checkFlag[0].addEventListener('click', myFunction, false);
</script>
<!--/.row-->
@endsection()
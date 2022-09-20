@extends('admin')
@section('main')
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Thêm bài viết
            </div>
            <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.5.3/dist/cleave.min.js"></script>
            <form name="proForm" onsubmit="return validateForm()" action="{{URL::to('/save-page-aboutus')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @if(isset($content) )
            
                <div class="panel-body">
                    <div class="form-group">
                        <label>Nội dung</label>
                        <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
                        <textarea style="resize: none;" row="8" id="ckeditor1235" class="display_block" name="content">{{$content}}</textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('ckeditor1235');

                        </script>
                    </div>
                    <input type="hidden" name="id" value="{{$idCustom }}">
                    <input type="hidden" name="route" value="{{$route }}" class="btn btn-primary">
                    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                    @else
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Nội dung:</label>
                            <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
                            <textarea id="xxx" style="resize: none;" rows="8" class="form-control" placeholder="Nội dung bài viết..." name="content"></textarea>
                            <script type="text/javascript">
                                var editor = CKEDITOR.replace('xxx');
                            </script>
                        </div>
                        <input type="hidden" name="route" value="Thêm" class="btn btn-primary">
                        <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                        @endif




                    </div>
            </form>
        </div>
    </div>
</div>
@endsection()
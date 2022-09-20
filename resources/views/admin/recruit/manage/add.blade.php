@extends('admin')
@section('main')

<style>
    .display_block {
        width: 100%;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý Tin tuyển dụng</h1>
    </div>

</div>
<!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-8 col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Thêm Tin tuyển dụng
            </div>
            <form action="{{URL::to('/save-recruit')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @if(isset($recruitById) )
                <?php
                $checkFlagship = (((int)$recruitById->active) == 1) ? 1 : 0; ?>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Hiển thị::</label>
                        <div class="check-flagship">
                            <input value="{{$checkFlagship}}" <?php echo ($checkFlagship == 1) ? 'checked' : ''; ?> type="checkbox" id="flagship" name="flagship">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Vị trí tuyển dụng:</label>
                        <input value="{{$recruitById->position}}" required="" type="text" id="title" name="position" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Số lượng:</label>
                        <input value="{{$recruitById->qty}}" style="width: 30%;" required="" type="number" id="title" name="qty" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Địa điểm làm việc:</label>
                        <textarea required="" rows=8 class="display_block" name="address">{{$recruitById->address}}</textarea>
                    </div>


                    <?php
                    $date = date_create($recruitById->date_ex);
                    $dateEx = date_format($date, "Y-m-d");
                    // echo $dateCreateAt ;exit;
                    ?>
                    <div class="form-group date-exit">
                        <label>Ngày hết hạn:</label>
                        <input data-date-format="DD MMMM YYYY" value="{{$dateEx}}" required type="date" name="date_ex">
                    </div>




                 

                    <div class="form-group">
                        <label>Trạng thái:</label>
                        <br>

                       
                        <label class="checkbox-inline">
                            <input type="radio" <?php echo ($recruitById->status == 1) ? 'checked' : ''; ?> name="status" value="1">Bình thường
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" <?php echo ($recruitById->status == 2) ? 'checked' : ''; ?> name="status" value="2">Gấp
                        </label>
                    </div>
                    <div class="form-group post-cruit ">
                            <label>Bài viết tuyển dụng:</label>
                            <input type="hidden" name="id-post">
                            <?php
                            if($recruitById->post_id > 0){
                                $post = Helper::getPostById($recruitById->post_id);
                            }
                            ?>
                            <button type="button" data-toggle="modal" data-target="#myModal" id="open">Duyệt</button> 
                            <label class="no-required">
                                <?php echo (isset($post->post_title)?$post->post_title:'(Không bắt buộc)')?>
                                </label>

                            <!-- Modal -->

                            <div class="modal" tabindex="-1" role="dialog" id="myModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="alert alert-danger" style="display:none"></div>
                                        <div class="modal-header">

                                            <h5 class="modal-title">Danh sách bài viết</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group date-exit">
                                                <label>Tìm kiếm:</label>
                                                <input id="txtSearch" type="text" name="searchPost" class="" placeholder="Tên bài viết...">
                                                <button type="button" id="btnSearch" class="btn btn-secondary">Tìm kiếm</button>
                                            </div>
                                            <table class="table table-bordered record_table" style="margin-top:20px;">
                                                <thead>
                                                    <tr class="bg-primary">
                                                        <th width="10%">Chọn</th>
                                                        <th width="10%">ID</th>
                                                        <th>Tên bài viết</th>
                                                        <th width="20%">Ngày tạo </th>

                                                    </tr>
                                                </thead>
                                                <tbody id="contentBody">
                                                    <?php if($recruitById->post_id > 0){?>
                                                <input type="radio" checked name="post_id" value="{{$recruitById->post_id}}">
                                                <?php } ?>
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success" id="ajaxSubmit">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <input type="hidden" name="id" value="{{$recruitById->id }}" class="btn btn-primary">
                    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                    @else
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Hiển thị:</label>
                            <input class="check-flagship" value="1" type="checkbox" name="flagship" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Vị trí tuyển dụng:</label>
                            <input required="" type="text" id="title" name="position" class="form-control" placeholder="Vị trí tuyển dụng...">
                        </div>
                        <div class="form-group">
                            <label>Số lượng:</label>
                            <input style="width: 30%;" required="" type="number" id="title" name="qty" class="form-control" placeholder="0">
                        </div>
                        <div class="form-group">
                            <label>Địa điểm làm việc:</label>
                            <textarea required="" rows=8 class="display_block" name="address"></textarea>
                        </div>

                        <div class="form-group date-exit">
                            <label>Ngày hết hạn:</label>
                            <input data-date-format="DD MMMM YYYY" required type="date" name="date_ex" class="" placeholder="Tên sản phẩm...">
                        </div>
                        <div class="form-group">
                            <label>Trạng thái:</label>
                            <br>
                          
                            <label class="checkbox-inline">
                                <input type="radio" checked name="status" value="1">Bình thường
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="status" value="2">Gấp
                            </label>
                        </div>


                        <div class="form-group post-cruit ">
                            <label>Bài viết tuyển dụng:</label>
                            <input type="hidden" name="id-post">
                            <button type="button" data-toggle="modal" data-target="#myModal" id="open">Duyệt</button> <label class="no-required">(Không bắt buộc)</label>

                            <!-- Modal -->

                            <div class="modal" tabindex="-1" role="dialog" id="myModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="alert alert-danger" style="display:none"></div>
                                        <div class="modal-header">

                                            <h5 class="modal-title">Danh sách bài viết</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group date-exit">
                                                <label>Tìm kiếm:</label>
                                                <input id="txtSearch" type="text" name="searchPost" class="" placeholder="Tên bài viết...">
                                                <button type="button" id="btnSearch" class="btn btn-secondary">Tìm kiếm</button>
                                            </div>
                                            <table class="table table-bordered record_table" style="margin-top:20px;">
                                                <thead>
                                                    <tr class="bg-primary">
                                                        <th width="10%">Chọn</th>
                                                        <th width="10%">ID</th>
                                                        <th>Tên bài viết</th>
                                                        <th width="20%">Ngày tạo </th>

                                                    </tr>
                                                </thead>
                                                <tbody id="contentBody"></tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success" id="ajaxSubmit">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                        @endif




                    </div>
            </form>
        </div>
    </div>
</div>

<style>
    input[type="date"]::-webkit-datetime-edit,
    input[type="date"]::-webkit-inner-spin-button,
    input[type="date"]::-webkit-clear-button {
        color: #fff;
        position: relative;
    }

    input[type="date"]::-webkit-datetime-edit-year-field {
        position: absolute !important;
        border-left: 1px solid #8c8c8c;
        padding: 2px;
        color: #000;
        left: 56px;
    }

    input[type="date"]::-webkit-datetime-edit-month-field {
        position: absolute !important;
        border-left: 1px solid #8c8c8c;
        padding: 2px;
        color: #000;
        left: 26px;
    }


    input[type="date"]::-webkit-datetime-edit-day-field {
        position: absolute !important;
        color: #000;
        padding: 2px;
        left: 4px;

    }
</style>
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

<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.record_table tr').click(function(event) {
            if (event.target.type !== 'radio') {
                $(':radio', this).trigger('click');
            }
        });

        $.ajax({
            url: '/searchPostAjax',
            type: 'GET',
            dataType: 'html',
            data: {
                value: ''
            }
        }).done(function(data) {
            $('#contentBody').html(data);


        });

        // $("#btnSearch").click(function() {
        $("#ajaxSubmit").click(function() {
            var val = $("input[name='post_id']:checked").val();
            if (typeof val === 'undefined') {
                alert('Bạn chưa chọn bài viết!!!');
                return;
            } else {
                var title = $("input[name='post_id']:checked").data("title");
                // console.log(title);
                $("label.no-required").text(title);

                $("#myModal").modal('hide');
                $(".modal-backdrop.in").remove();
            }

        });
        $("#txtSearch").change(function() {

            var search = $("input[name='searchPost']").val();
            $.ajax({
                url: '/searchPostAjax',
                type: 'GET',
                dataType: 'html',
                data: {
                    value: search
                }
            }).done(function(data) {
                $('#contentBody').html(data);


            });
        });
    });
</script>

<style>
    .record_table tr:hover {
        background-color: #e3caa3;
        cursor: pointer;
    }
</style>
<!--/.row-->
@endsection()
@extends('admin')
@section('main')
<div class='page-aboutus col-12'>
    <div class="header">
        <a href="{{URL::to('/edit-page-gioi-thieu-header')}}">
            <?= $about[0]['header'] ?>
        </a>
    </div>
    <div class="container">
        <div class="content-1">
            <div class="row">
                <a href="{{URL::to('/edit-page-gioi-thieu-row1')}}">
                    <?= $about[0]['row1'] ?>
                </a>
            </div>
            <div class="row"> <a href="{{URL::to('/edit-page-gioi-thieu-row2')}}">
                    <?= $about[0]['row2'] ?>
                </a></div>
            <div class="row"> <a href="{{URL::to('/edit-page-gioi-thieu-row3')}}">
                    <?= $about[0]['row3'] ?>
                </a></div>
        </div>
        <div class="content-2">
            <div class="organi">organi</div>
        </div>
        <div class="content-3">
            <div class="organi">office</div>
        </div>
        <div class="content-4">
            <div class="organi">vendor</div>
        </div>
        <div class="content-5">
            <div class="organi">banks</div>
        </div>
    </div>
    <div class="footer">footer</div>
</div>
@endsection()
@extends('layouts.application')
@section('title', '新規作成')

@section('content')
<form action="" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="sk" value="{{$sk}}">
    <input type="hidden" name="model" value="{{$model}}">
    <input type="hidden" name="itemNo" value="{{$itemNo}}">
    <input type="hidden" name="number" value="{{$number}}">
    <div class="row">
        <label class="col-sm-4 control-label">sk番号</label>
        <div class="col-sm-8">{{$sk}}</div>
    </div>
    <div class="row">
        <label class="col-sm-4 control-label">機種</label>
        <div class="col-sm-8">{{$model}}</div>
    </div>
    <div class="row">
        <label class="col-sm-4 control-label">品番</label>
        <div class="col-sm-8">{{$itemNo}}</div>
    </div>
    <div class="row">
        <label class="col-sm-4 control-label">使用数</label>
        <div class="col-sm-8">{{$number}}</div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-sm-offset-4 col-sm-8">
            <input type="submit" name="button1" value="登録" class="btn btn-primary btn-wide" />
        </div>
    </div>
</form>
@endsection
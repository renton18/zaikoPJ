@extends('layouts.application')
@section('title', '入庫確認')
@section('content')

<form action="" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="productionOrderId" value="{{$productionOrderId}}">
    <input type="hidden" name="itemNo" value="{{$itemNo}}">
    <input type="hidden" name="currentAmount" value="{{$currentAmount}}">
    <div class="row">
        <label class="col-sm-8 control-label">生産指示No</label>
        <div class="col-sm-8">{{$productionOrderId}}</div>
    </div>
    <div class="row">
        <label class="col-sm-8 control-label">品番</label>
        <div class="col-sm-8">{{$itemNo}}</div>
    </div>
    <div class="row">
        <label class="col-sm-8 control-label">数量</label>
        <div class="col-sm-8">{{$currentAmount}}</div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-sm-offset-4 col-sm-8">
            <input type="submit" name="button1" value="登録" class="btn btn-primary btn-wide" />
        </div>
    </div>
</form>

@endsection
@extends('layouts.application')
@section('title', '新規作成')
@section('content')

<form action="" method="post" class="form-horizontal">
  {{ csrf_field() }}
  {{ method_field('patch') }}
  @include('common.errors')
  <div class="form-group @if($errors->has('productionOrderId')) has-error @endif">
    <label for="productionOrderId" class="col-md-9 control-label">生産指示No</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="productionOrderId" name="productionOrderId" value="{{old('productionOrderId')}}">
    </div>
  </div>
  <div class="form-group @if($errors->has('itemNo')) has-error @endif">
    <label for="itemNo" class="col-md-9 control-label">品番</label>
    <div class="col-md-9">
      <input type="text" class="form-control" id="itemNo" name="itemNo" value="{{old('itemNo')}}">
    </div>
  </div>
  <div class="form-group @if($errors->has('currentAmount')) has-error @endif">
    <label for="currentAmount" class="col-md-9 control-label">数量</label>
    <div class="col-md-9">
      <input type="text" class="form-control" id="currentAmount" name="currentAmount" value="{{old('currentAmount')}}">
    </div>
  </div>
  <div class="col-md-offset-3 text-center"><button class="btn btn-primary">確認</button></div>
</form>

@endsection
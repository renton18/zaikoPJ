@extends('layouts.application')
@section('title', '新規作成')

@section('content')
<form action="" method="post" class="form-horizontal">
  {{ csrf_field() }}
  {{ method_field('patch') }}
  <div class="form-group @if($errors->has('sk')) has-error @endif">
    <label for="sk" class="col-md-3 control-label">SK</label>
    <div class="col-sm-9">
      <input type="sk" class="form-control" id="sk" name="sk">
      @if($errors->has('name'))<span class="text-danger">{{ $errors->first('sk') }}</span> @endif
    </div>
  </div>
  <div class="form-group @if($errors->has('model')) has-error @endif">
    <label for="model" class="col-md-3 control-label">機種</label>
    <div class="col-sm-9">
      <input type="model" class="form-control" id="model" name="model">
      @if($errors->has('model'))<span class="text-danger">{{ $errors->first('model') }}</span> @endif
    </div>
  </div>
  <div class="form-group @if($errors->has('itemNo')) has-error @endif">
    <label for="itemNo" class="col-md-3 control-label">品番</label>
    <div class="col-md-9">
      <input type="itemNo" class="form-control" id="itemNo" name="itemNo">
      @if($errors->has('itemNo'))<span class="text-danger">{{ $errors->first('itemNo') }}</span> @endif
    </div>
  </div>
  <div class="form-group @if($errors->has('number')) has-error @endif">
    <label for="number" class="col-md-3 control-label">品番</label>
    <div class="col-md-9">
      <input type="number" class="form-control" id="number" name="number">
      @if($errors->has('number'))<span class="text-danger">{{ $errors->first('number') }}</span> @endif
    </div>
  </div>
  <div class="col-md-offset-3 text-center"><button class="btn btn-primary">確認</button></div>
</form>
@endsection
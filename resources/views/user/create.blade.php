@extends('layouts.application')
@section('title', 'MENU')
@section('content')

<form action="create" method="post" class="form-horizontal" style="margin-top: 50px;">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="userId">社員番号</label>
        <div class="col-sm-9">
            <input type="text" name="userId" class="form-control" id="userId" placeholder="社員番号">
            <!--/.col-sm-10--->
        </div>
        <!--/form-group-->
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label" for="userName">名前</label>
        <div class="col-sm-9">
            <input type="text" name="userName" class="form-control" id="userName" placeholder="名前">
        </div>
        <!--/form-group-->
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <input type="hidden" name="password" class="form-control" id="password" value="" placeholder="パスワード">
            <button type="submit" class="btn btn-primary btn-block">新規登録</button>
        </div>
        <!--/form-group-->
    </div>
    {{ csrf_field() }}
</form>

@endsection
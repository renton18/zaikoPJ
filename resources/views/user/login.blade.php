@extends('layouts.application')
@section('title', 'MENU')
@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Sign In</h1>
        @include('common.errors')
        <form action="create" method="post">
            <div class="form-group">
                <label for="userId">userId</label>
                <input type="text" id="userId" name="userId" class="form-control">
            </div>
            <!-- <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div> -->
            <input type="hidden" name="userName" class="form-control" id="userName" value="" placeholder="パスワード">
            <input type="hidden" name="password" class="form-control" id="password" value="" placeholder="パスワード">
            <button type="submit" class="btn btn-primary">ログイン</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>

@endsection
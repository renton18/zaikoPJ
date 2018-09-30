@extends('layouts.application')
@section('title', 'MENU')

@section('content')
<div class="col-sm-12" style="text-align:center;">
    <h1><small>MENU</small></h1>
    <a href="./zaikos/create" class="btn btn-primary btn-sm" style="margin:5px; padding: 10px 60px; font-size:1.4em;">入庫</a><br>
    <a href="./zaikos/update" class="btn btn-primary btn-sm" style="margin:5px; padding: 10px 60px; font-size:1.4em;">出庫</a><br>
    <a href="./zaikos" class="btn btn-danger btn-sm" style="margin:5px; padding: 10px 40px; font-size:1.4em;">在庫管理</a><br>
    <a href="./history" class="btn btn-danger btn-sm" style="margin:5px; padding: 10px 30px; font-size:1.4em;">入出庫履歴</a><br>
</div>
@endsection
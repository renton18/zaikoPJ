@extends('layouts.application')
@section('title', 'MENU')

@section('script')
<script>
  $(function() {
    $(".btn-dell").click(function() {
      if (confirm("本当に削除しますか？")) {
        //そのままsubmit（削除）
      } else {
        //cancel
        return false;
      }
    });
  });
</script>
@endsection

@section('content')
<div class="container">
  <h1><small>在庫一覧</small></h1>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>SK番号</th>
        <th>機種名</th>
        <th>品番</th>
        <th>数量</th>
        <th>opration</th>
      </tr>
    </thead>
    <tbody>
      　@foreach($zaikos as $zaiko)
      <tr>
        <td>{{$zaiko->id}}</td>
        <td>{{$zaiko->sk}}</td>
        <td>{{$zaiko->model}}</td>
        <td>{{$zaiko->itemNo}}</td>
        <td>{{$zaiko->number}}</td>
        <td>
          <a href="./zaikos/edit/{{$zaiko->id}}" class="btn btn-primary btn-sm">編集</a>
        <!-- </td>
        <td> -->
          <form action="./zaikos/delete/{{$zaiko->id}}" method="POST">
            {{ csrf_field() }}
            <input type="submit" value="削除" class="btn btn-danger btn-sm btn-dell">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="text-center">
{{ $zaikos->links() }}
</div>
@endsection
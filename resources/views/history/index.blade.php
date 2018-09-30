@extends('layouts.application')
@section('title', 'MENU')

@section('script')
<script>
  $(function() {
    $(".btn-dell").click(function() {
      if (confirm("本当に削除しますか？")) {
        //そのままsubmit（削除）
      // } else {お3.
        //cancel
        return false;
      }
    });
  });
</script>
@endsection

@section('content')
<h1><small>履歴</small></h1>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>注文番号</th>
      <th>品番</th>
      <th>処理区分</th>
      <th>数量</th>
      <th>更新者</th>
      <th>更新日時</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($historys as $history)
    <tr>
      <td>{{$history->productionOrderId}}</td>
      <td>{{$history->itemNo}}</td>
      <td>{{$history->orderCategory}}</td>
      <td>{{$history->amount}}</td>
      <td>{{$history->updatteUserId}}</td>
      <td>{{$history->updated_at}}</td>
      <td width="10">
        <div style="display:flex;">
          <a href="./history/edit/{{$history->id}}" class="btn btn-primary btn-sm">編集</a>&nbsp;
          <a href="./history/edit/{{$history->id}}" class="btn btn-primary btn-sm">編集</a>&nbsp;
          <form action="/delete/{{$history->id}}" method="POST">
            {{ csrf_field() }}
            <input type="submit" value="削除" class="btn btn-danger btn-sm btn-dell">
          </form>
        </div>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="text-center">
  {{ $historys->links() }}
</div>
@endsection
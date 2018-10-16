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
<div class="col-sm-12" style="text-align:center;">
  <table class="table table-condensed table-striped table-hover">
    <thead>
      <tr>
        <th>生産指示No</th>
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
        <td>{{$history->updateUserId}}</td>
        <td>{{$history->updated_at}}</td>
        <td width="10">
          <div style="display:flex;">
            <a href="edit/{{$history->id}}" class="btn btn-primary btn-sm">詳細</a>&nbsp;
            <a href="edit/{{$history->id}}" class="btn btn-primary btn-sm">編集</a>&nbsp;
            <form action="delete/{{$history->id}}" method="POST">
              {{ csrf_field() }}
              <input type="submit" value="削除" class="btn btn-danger btn-sm btn-dell">
            </form>
          </div>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="text-center">
  {{ $historys->links() }}
</div>
@endsection
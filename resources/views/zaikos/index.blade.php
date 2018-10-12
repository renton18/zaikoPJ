@extends('layouts.application')
@section('title', '在庫管理')
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

<div class="col-sm-12" style="text-align:center;">

  <!--↓↓ 検索フォーム ↓↓-->
  <div class="col-sm-12" style="padding-left:0px;">
    <form class="form-inline" action="{{url('/zaikos')}}">
      <div class="form-group">
        <input type="text" name="itenNoKeyword" value="{{ $request->itenNoKeyword }}" class="form-control" placeholder="品番">
        <input type="text" name="skKeyword" value="{{ $request->skKeyword }}" class="form-control" placeholder="SK">      
      <input type="submit" value="検索" class="btn btn-info">
    </form>
  </div>
  <!--↑↑ 検索フォーム ↑↑-->

  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>生産指示No</th>
        <th>品番</th>
        <th>在庫量</th>
        <th>ユーザ名</th>
        <th>更新日</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      　@foreach($stocks as $stock)
      <tr>
        <td>{{$stock->productionOrderId}}</td>
        <td>{{$stock->itemNo}}</td>
        <td>{{$stock->currentAmount}}</td>
        <td>{{$stock->updateUserId}}</td>
        <td>{{$stock->updated_at}}</td>
        <td size="10">
          <div style="display:flex;">
            <a href="show/{{$stock->id}}" class="btn btn-primary btn-sm">詳細</a>&nbsp;
            <a href="edit/{{$stock->id}}" class="btn btn-primary btn-sm">編集</a>&nbsp;
            <form action="zaikos/delete/{{$stock->id}}" method="POST">
              {{ csrf_field() }}
              <input type="submit" value="削除" class="btn btn-danger btn-sm btn-dell">
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="text-center">
  {{ $stocks->links() }}
</div>
@endsection
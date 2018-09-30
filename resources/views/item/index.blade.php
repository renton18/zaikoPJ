@extends('layouts.application')
@section('title', '品番マスタ')
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
  <h1><small>品番マスタ</small></h1>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>品番</th>
        <th>図番</th>
        <th>図名</th>
        <th>更新者</th>
        <th>更新日</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($items as $item)
      <tr>
        <td>{{$item->itemNo}}</td>
        <td>{{$item->diagramNo}}</td>
        <td>{{$item->diagramName}}</td>
        <td>{{$item->updateUserId}}</td>
        <td>{{$item->updated_at}}</td>
        <td size="10">
          <div style="display:flex;">
            <a href="/item/{{$item->id}}" class="btn btn-primary btn-sm">詳細</a>&nbsp;
            <a href="/item/{{$item->id}}/edit" class="btn btn-primary btn-sm">編集</a>&nbsp;
            <form action="/item/{{$item->id}}" method="POST">
              {{ csrf_field() }}
              {{ method_field('delete') }}
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
  {{ $items->links() }}
</div>
@endsection
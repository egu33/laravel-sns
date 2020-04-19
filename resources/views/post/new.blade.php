@extends('layouts.app')
@include('navbar')
@section('content')
<div class="panel-body">
<!-- バリデーションエラー表示 --> 
@include('common.errors')

<div class=" d-flex flex-column align-items-center mt-3">
  <div class="col-xs-6 col-lg-8 post-card">
    <div class="card">
      <div class="card-header">
        投稿画面
      </div>
      <div class="card-body">
        <form class="upload-images p-0 border-0" id="new_post" enctype="multipart/form-data" action="{{ url('posts')}}" accept-charset="UTF-8" method="POST">
        {{csrf_field()}} 
          <div class="form-group row mt-2">
            <div class="col pl-0">
              <textarea rows="4" class="form-control border-0" placeholder="オリンピックサッカーへの応援メッセージを投稿しよう" type="text" name="caption" value="{{ old('list_name') }}"/></textarea>
            </div>
          </div>
          <div class="mb-3 ">
            <input type="file" name="photo" accept="image/jpeg,image/gif,image/png" />
          </div>
          <div class="form-group row justify-content-center">
          <input type="submit" name="commit" value="投稿する" class="btn btn-primary " data-disable-with="投稿する"/>
          </div>
          </form>     
       </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('#post_image').bind('change', function() {
    var size_in_megabytes = this.files[0].size/1024/1024;
    if (size_in_megabytes > 1) {
      alert('ファイルサイズの最大は1MBまでです。違う画像を選んでください。');
    }
  });
</script>
@endsection
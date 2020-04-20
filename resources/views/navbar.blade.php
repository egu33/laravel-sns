@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand white_text" href="{{ url('/') }}">
          <h>オリンピックサッカー応援サイト</h>
          <br>
          <font size="2">画像やメッセージを投稿して日本代表を応援しよう</font>
        </a>
        <a class="navbar__brand navbar__mainLogo" href="/"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-md-auto align-items-left">
            <li>
             
            </li>
            <li>
              <a class="btn btn-primary" href="/users/{{ Auth::user()->id }}" style="margin-bottom: 5px; margin-top: 5px;">プロフィール</a>
            </li>
            <li> <a class="btn btn-primary" href="/posts/new" style="margin-bottom: 5px; margin-top: 5px;">投稿</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    
@endsection
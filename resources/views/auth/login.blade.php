@extends('layouts.app')
@include('footer')

@section('content')
<div class="row main" >
  <div class="card devise-card">
    <div class="form-wrap">
      <div class="form-group text-center">
        <h2 class="mx-auto">オリンピックサッカーを応援しよう</h2>
      </div>
      <form class="new_user" id="new_user" action="{{ route('login') }}" accept-charset="UTF-8" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <input id="email" type="email" class="form-control" name="email"  placeholder="メールアドレス" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="form-group">
          <input id="password" type="password" class="form-control" name="password" placeholder="パスワード" required>
        </div>
        
        <div class="actions">
          <input type="submit" name="commit" value="サインインする" class="btn btn-primary w-100">
        </div>
      </form>
    
   <a class="btn btn-block btn-social btn-github" href="{{ url('login/github') }}">
    <span class="fa fa-github"></span> Sign in with github
  </a>

      <br>

      <p class="devise-link">
        アカウントをお持ちでないですか？
        <a href="{{ route('register') }}">登録する</a>
      </p>

    </div>
  </div>
</div>


@endsection

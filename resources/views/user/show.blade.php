@extends('layouts.app')
@include('navbar')
@include('footer')

@section('content')
<div class="profile-wrap">
  <div class="row">
    <div class="col-md-4 text-center">
      @if ($user->profile_photo)
        <p>
          <img class="round-img" src="{{ Storage::disk('s3')->url('public/user_images/' . $user->profile_photo) }}"/>
        </p>
        @else
          <img class="round-img" src="{{ asset('/images/blank_profile.png') }}"/>
      @endif
    </div>
    <div class="col-md-8">
      <div class="row  mx-auto">
        <h1><font color="white">{{ $user->name }}</font></h1>
        </div>
         <div class="row mx-auto">
        <p>
          <font color="white">{{ $user->email }}</font>
        </p>
      </div>
        <div class="row">
        @if ($user->id == Auth::user()->id)
          <a class="btn  common-btn edit-profile-btn btn btn-primary" href="/users/edit">プロフィールを編集</a>
          <a class="btn  common-btn edit-profile-btn btn btn-primary" rel="nofollow" data-method="POST" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        @endif
        
      </div>
     
    </div>
  </div>
</div>
@endsection
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$title ?? 'No Title'}}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="fonts/icons.css">
  <link rel="stylesheet" href= "https://gamma.osirl.com/css/offcanvas.css">

  <link rel="stylesheet" href="https://gamma.osirl.com/css/area-public.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.css" integrity="sha256-ijrUJH7JwgpTBZ+84f2F11EuPv439PfVkxVwDUc5lrI=" crossorigin="anonymous" />
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon.png">
  @yield('headerExtras')

</head>
<body>
<main role="main" class="container main">
  <div class="d-flex align-items-center p-3 text-white-50 bg-purple rounded shadow-sm">
    <img class="mr-3" src="/images/system/dog-treanor-logo-inverse.svg" alt="" width="48" height="48" style="color: white;">
    <div class="brand">Doggy Brand</div>
    {{--        <div class="lh-100">--}}
    {{--          <h6 class="mb-0 text-white text-left lh-100">{{ $title ?? 'Need a title' }}</h6>--}}
    {{--          <small>{{ $slogan ?? 'need a slogan'}}</small>--}}
    {{--        </div>--}}
    <div class="auth-box">
      @auth
        <span style="margin-right: 40px;">Logged in as {{Auth::user()->name}}, {{ Auth::user()->role  }}</span>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
          Logout
        </a>
        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>

      @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
          <a href="{{ route('register') }}">Register</a>
        @endif
      @endauth
    </div>
  </div>

  {{--      @include('navs.nav-top')--}}
  <?php
  use Illuminate\Support\Facades\Auth;
  $user = Auth::user();
  if($user != null){
  $msg = "$user->name";
  $image = "/images/system/logout-sketch-svgrepo-com.svg";
  $role = $user->role;
  switch($role){
  case "ADMIN" : ?> @include('navs.nav-admin') <?php break;
  case "STAFF" : ?> @include('navs.nav-staff') <?php break;
  case "USER"  : ?> @include('navs.nav-user') <?php break;
  }
  }
  if($user == null){
  $msg = "Nobody Logged in." ;
  $image = "/images/system/login-sketch-svgrepo-com.svg";
  ?> @include('pets::navs.nav-user') <?php
  }
  ?>

  {{-- Main page content --}}
  @yield('content')

</main>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.js" integrity="sha256-Ek6PYj94VAye2kY9mqCAQSr72BVD0a3hdPsJJMCD0fo=" crossorigin="anonymous"></script>
<script src="/js/offcanvas.js"></script>
@yield('javaScripts')
</body>
</html>



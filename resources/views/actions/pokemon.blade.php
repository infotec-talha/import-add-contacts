@extends('layouts.master')
@section('page_content')
<form method="post" style="opacity: 0.90;" action="{{route('authenticate')}}">
            <input type="hidden" name="_token" value="{{Session::token()}}">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration" style="background: url('PikachuTransparent.png') center / contain no-repeat;height: 240px;"></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" /></div>
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" /></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Log In</button></div><a class="forgot" href="{{route('resetPasswordPage')}}" style="color: rgb(255,255,255);">reset password?</a>
        </form>
@endsection
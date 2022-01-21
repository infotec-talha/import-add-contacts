@extends('layouts.master')
@section('page_content')
    
            <form method="post" style="background: rgb(30,40,51);opacity: 0.90;" action="{{route('resetPasswordPage')}}">
                <input type="hidden" name="_token" value="{{Session::token()}}">
                <h2 class="text-center" style="color: rgb(255,255,255);"><strong>Reset</strong> an account password.</h2>
                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" /></div>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" /></div>
                <div class="mb-3"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)" /></div>
                <div class="mb-3">
                    
                </div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(33,74,128);">Reset</button></div><a class="already" href="Login.html" style="color: rgb(255,255,255);">You already have an account? Login here.</a>
            </form>
        
    
@endsection

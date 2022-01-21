<html lang="en">

@include('includes.header')

<body>
    @include('includes.topMenu')
   
    <section class="register-photo" style="background: url('PokemonWallpaper3.png');background-size: cover;">
        <div class="form-container" style="width: 400px;">
            <form method="post" style="background: rgb(30,40,51);opacity: 0.90;" action="{{route('signUp')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <h2 class="text-center" style="color: rgb(255,255,255);"><strong>Create</strong> an account.</h2>
                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" /></div>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" /></div>
                <div class="mb-3"><input class="form-control" type="password" name="passwordRepeat" placeholder="Password (repeat)" /></div>
                <div class="mb-3">
                    <div class="form-check"><label class="form-check-label" style="color: rgb(255,255,255);"><input class="form-check-input" type="checkbox" />I agree to the license terms.</label></div>
                </div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(33,74,128);">Sign Up</button></div><a class="already" href="{{route('getLoginPage')}}" style="color: rgb(255,255,255);">You already have an account? Login here.</a>
            </form>
        </div>
    </section>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>


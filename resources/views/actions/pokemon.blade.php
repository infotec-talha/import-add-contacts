
<html lang="en">



<body>
    @include('includes.header')
    <header class="header-dark">
        <nav class="navbar navbar-dark navbar-expand-lg navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="index.html">CollectPokemon</a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div id="navcol-1" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="Collections.html">Collections</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Pokemon</a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Generation I</a><a class="dropdown-item" href="#">Generation II</a><a class="dropdown-item" href="#">Generation III</a><a class="dropdown-item" href="#">Generation IV</a><a class="dropdown-item" href="#">Generation V</a><a class="dropdown-item" href="#">Generation VI</a><a class="dropdown-item" href="#">Generation VII</a><a class="dropdown-item" href="#">Generation VIII</a></div>
                        </li>
                    </ul>
                    <form class="me-auto" target="_self">
                        <div class="d-flex align-items-center"><label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search"></i></label><input id="search-field" class="form-control search-field" type="search" name="search" /></div>
                    </form><span class="navbar-text"><a class="login" href>Log In</a></span><a class="btn btn-light action-button" role="button" href="{{URL::to('/signup-poke')}}" style="background: #cec909;">Sign Up</a>
                </div>
            </div>
        </nav>
    </header>
    <section class="login-dark" style="background: url('Toxtricity.jpg') left / cover no-repeat;">
        <form method="post" style="opacity: 0.90;" action="{{route('authenticate')}}">
            <input type="hidden" name="_token" value="{{Session::token()}}">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration" style="background: url('PikachuTransparent.png') center / contain no-repeat;height: 240px;"></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" /></div>
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" /></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Log In</button></div><a class="forgot" href="{{URL::to('/poke_pass_rest')}}" style="color: rgb(255,255,255);">Forgot your email or password?</a>
        </form>
    </section>
    <script src="{{'js/bootstrap.min.js'}}"></script>
</body>

</html>
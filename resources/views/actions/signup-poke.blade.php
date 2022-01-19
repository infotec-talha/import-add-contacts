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
                    </form><span class="navbar-text"><a class="login" href="LogIn.html">Log In</a></span><a class="btn btn-light action-button" role="button" href="#" style="background: rgb(206,201,9);">Sign Up</a>
                </div>
            </div>
        </nav>
    </header>
    <section class="register-photo" style="background: url('PokemonWallpaper2.png');background-size: cover;">
        <div class="form-container" style="width: 400px;">
            <form method="post" style="background: rgb(30,40,51);opacity: 0.90;">
                <h2 class="text-center" style="color: rgb(255,255,255);"><strong>Create</strong> an account.</h2>
                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" /></div>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" /></div>
                <div class="mb-3"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)" /></div>
                <div class="mb-3">
                    <div class="form-check"><label class="form-check-label" style="color: rgb(255,255,255);"><input class="form-check-input" type="checkbox" />I agree to the license terms.</label></div>
                </div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(33,74,128);">Sign Up</button></div><a class="already" href="Login.html" style="color: rgb(255,255,255);">You already have an account? Login here.</a>
            </form>
        </div>
    </section>
</body>

</html>


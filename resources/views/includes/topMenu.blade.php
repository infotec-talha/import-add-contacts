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
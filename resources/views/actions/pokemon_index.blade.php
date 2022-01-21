
<html lang="en">
@include('includes.header')

<body>
   @include('includes.topMenu')
    <div id="carousel-1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active"><img class="w-100 d-block" src="EvolvingSkiesBanner4.jpg" alt="Slide Image" /></div>
            <div class="carousel-item"><img class="w-100 d-block" src="ChillingReignBanner6.png" alt="Slide Image" /></div>
            <div class="carousel-item"><img class="w-100 d-block" src="BattleStylesBanner3.png" alt="Slide Image" /></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
        <ol class="carousel-indicators">
            <li class="active" data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
        </ol>
    </div>
   <script src="js/bootstrap.min.js"></script>
</body>

</html>



<html lang="en">
@include('includes.header')
<body> 
   @include('includes.topMenu')
    <section class="login-dark" style="background: url('Toxtricity.jpg') left / cover no-repeat;">
        @yield('page_content')
    </section>
    <script src="{{'js/bootstrap.min.js'}}"></script>
</body>
</html>
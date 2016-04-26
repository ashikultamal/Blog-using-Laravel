<!DOCTYPE html>
<html lang="en">
@include('partials._header')

<body>



<!-- Default Bootstrap Navbar -->
@include('partials._nav')

<div class="container">
    @include('partials._messages')
    @yield('content')

    @include('partials._footer')

</div>
<!-- end of .container -->

@include('partials._js')

</body>

</html>
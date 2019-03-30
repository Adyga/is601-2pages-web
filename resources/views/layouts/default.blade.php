<!doctype html>
<html lang="en">

@include('includes.header')
<body>
<div class="container">
    <header>
        @include('includes.header')
    </header>

    <main role="main">
        @yield('content')
    </main>


    @include('includes.jsfooter')

    <footer>
        @include('includes.footer')
    </footer>
</div>
</body>
</html>
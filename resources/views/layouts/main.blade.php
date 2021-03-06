<!doctype html>
<html lang="id">

<head>
    @include('partials.head')
    <title>{{ $title }}</title>
</head>

<body>
    <header>
        @yield('header')
    </header>

    <main>
        @yield('main_body')
    </main>

    <footer>
        @yield('footer')
    </footer>

    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
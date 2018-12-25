<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
        @yield('css')

    </head>
    <body>
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="text-muted" href="#">แฟนเพจเฟสบุ๊ค</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">องุ่นบ้านบ้าน</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
            </div>
        </header>
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="#">หน้าหลักร้านค้า</a>
                <a class="p-2 text-muted" href="#">วิธีชำระเงิน</a>
                <a class="p-2 text-muted" href="#">เกี่ยวกับเรา</a>
                <a class="p-2 text-muted" href="#">ติดต่อเรา</a>
                <a class="p-2 text-muted" href="#">ตะกร้าสินค้า</a>
            </nav>
        </div>

        <div class="container">
            @yield('content')
        </div>

        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                <a href="#">Back to top</a>
                </p>
                <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
                <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
            </div>
        </footer>

        <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
        @yield('js')
    </body>
</html>
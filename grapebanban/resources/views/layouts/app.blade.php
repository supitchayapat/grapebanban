<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/4.0/examples/pricing/pricing.css" rel="stylesheet">
        @yield('css')

    </head>
    <body bgcolor="#CC99EE">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">หน้าหลักร้านค้า</a>
            <a class="p-2 text-dark" href="#">วิธีการสั่งซื้อสินค้า</a>
            <a class="p-2 text-dark" href="#">วิธีชำระเงิน</a>
            <a class="p-2 text-dark" href="#">เกี่ยวกับเรา</a>
            <a class="p-2 text-dark" href="#">ติดต่อเรา</a>
            <a class="p-2 text-dark" href="#">ตะกร้าสินค้า</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Sign up</a>
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
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/4.0/examples/pricing/pricing.css" rel="stylesheet">
         
        {{ csrf_field() }}   
        @yield('css')
     

    </head>
    <body style="background-color:#CC9933">
      <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal">องุ่นบ้านบ้าน.ไทย</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#">หน้าหลักร้านค้า</a>
            <a class="p-2 text-dark" href="#">วิธีการสั่งซื้อสินค้า</a>
            <a class="p-2 text-dark" href="#">วิธีชำระเงิน</a>
            <a class="p-2 text-dark" href="#">เกี่ยวกับเรา</a>
            <a class="p-2 text-dark" href="#">ติดต่อเรา</a>
            <a class="p-2 text-dark" href="/ตะกร้าสินค้า">ตะกร้าสินค้า</a>
        </nav>
        <a class="btn btn-outline-warning" href="#">เข้าสู่ระบบ</a>
        </div>

        @yield('content')

        <footer style="background-color:white" class="pt-4 my-md-5 pt-md-5 border-top">
        	<div class="row">
			<div style="text-align: center" class="col-12 col-md">
				<img src="https://scontent.fbkk7-3.fna.fbcdn.net/v/t1.0-9/48422267_307975089925028_5708070901421965312_n.jpg?_nc_cat=103&_nc_ht=scontent.fbkk7-3.fna&oh=13a6c44f5ef17a2ef850570a47e14d56&oe=5C978133" alt="" width="50" height="50">
				<small class="d-block mb-3 text-muted">&copy; 2018 องุ่นบ้านบ้าน.ไทย</small>
				<ul class="list-inline">
					<li class="list-inline-item"><a href="#">ความเป็นส่วนต้ว</a></li>
					<li class="list-inline-item"><a href="#">วิธีใช้งาน</a></li>
					<li class="list-inline-item"><a href="#">ติดต่อเรา</a></li>
				</ul>
			</div>
			</div>
		</footer>
        <script	>

<<<<<<< HEAD
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
});


</script>
=======
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
>>>>>>> 28342b4ef271d7912afc3127963c7cf63f6983a0
        <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
        @yield('js')
    </body>
</html>

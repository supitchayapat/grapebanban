@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container-fluid">
    <div class="jumbotron" style="margin-top: 10px;">
        <h1 class="display-5">สินค้าทั้งหมด</h1>
    </div>
    <div class="row">
    @foreach ($Product as $product)
        <div class="col-12 col-sm-6 col-md-4" style="margin-bottom: 20px;">
            <div class="card text-center">
            <img class="card-img-top" style="height: 300px;" src={{ $product['img_path'] }} alt={{ $product['product_name'] }}>
                <div class="card-body">
                    <h5 class="card-title">{{ $product['product_name'] }}</h5>
                    <p class="card-text">ราคา {{ $product['cost'] }} บาท/{{ $product['unit'] }}</p>
                    @if ($product['number_stock'] == 0)
                        <p class="card-text text-danger">สินค้าหมดชั่วคราว</p>
                        <button type="button" class="btn btn-primary" disabled><i class="fas fa-shopping-cart"></i> หยิบใส่ตะกร้า</button>
                    @else
                    @auth
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-danger minusBtn" id={{ $product['product_id'] }} onclick="decrease(this.id)"><i class="fas fa-minus"></i></button>
                            <input type="text" class="form-control" value="1" id="numberText{{ $product['product_id'] }}" readonly/>
                            <button type="button" class="btn btn-success plusBtn" id={{ $product['product_id'] }} onclick="increase(this.id, {{ $product['number_stock'] }})"><i class="fas fa-plus"></i></button>
                        </div>
                       
                        <div>
                            <button type="button" class="btn btn-primary" style="margin-top: 10px;"><i class="fas fa-shopping-cart"></i> หยิบใส่ตะกร้า</button>
                        </div>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <div class="container">
        <!--check feedback -->



    </div>
</div>
@endsection


@section('js')
<script>
    function increase(id, bound) {
        now = parseInt($('#numberText' + id).val());
        if (now < parseInt(bound)) {
            next = now + 1;
            $('#numberText' + id).val(next)
        }
    }

    function decrease(id) {
        if (parseInt($('#numberText' + id).val()) > 1) {
            now = parseInt($('#numberText' + id).val());
            next = now - 1;
            $('#numberText' + id).val(next)
        }
    }
</script>
@endsection

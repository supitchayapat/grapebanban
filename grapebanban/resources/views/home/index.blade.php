@extends('layouts.app')

@section('content')
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
<div class="container">
    <div class="row">
    @foreach ($Product as $product)
        <div class="card-deck">
            <div class="card text-center">
            <img class="card-img-top" src="{{ $product['imagePath'] }}" alt="{{ $product['name'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p class="card-text">ราคา {{ $product['cost'] }} บาท/{{ $product['unit'] }}</p>
                    @if ($product['numberInStock'] == 0)
                        <p class="card-text text-danger">สินค้าหมดชั่วคราว</p>
                        <button type="button" class="btn btn-primary" disabled><i class="fas fa-shopping-cart"></i> หยิบใส่ตะกร้า</button>
                    @else
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-danger" id="minusBtn"><i class="fas fa-minus"></i></button>
                            <input type="text" class="form-control" value="1" id="numberText" />
                            <button type="button" class="btn btn-success" id="plusBtn"><i class="fas fa-plus"></i></button>
                        </div>
                        <button type="button" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> หยิบใส่ตะกร้า</button>
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

@push('script')
<script>
$('#minusBtn').click(function() {
    if (parseInt($('#numberText')) > 1) {
        now = $('#numberText').val();
        next = now - 1;
        $('#numberText').val(next)
    }
});

$('#plusBtn').click(function() {
    if (parseInt($('#numberText')) > 1) {
        now = $('#numberText').val();
        next = now + 1;
        $('#numberText').val(next)
    }
});
</script>
@endpush
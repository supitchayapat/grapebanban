@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            ตะกร้าสินค้าของคุณ
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach ($products as $product)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span>
                        <img src="{{ $product['imagePath'] }}"/>
                        <div>
                            <h3>{{ $product['name'] }}</h3>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-danger" id="minusBtn"><i class="fas fa-minus"></i></button>
                                <input type="text" class="form-control" value="1" id="numberText" />
                                <button type="button" class="btn btn-success" id="plusBtn"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </span>
                </li>
            </ul>
        </div>
        <div class="card-footer">
            2 days ago
        </div>
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
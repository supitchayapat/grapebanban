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
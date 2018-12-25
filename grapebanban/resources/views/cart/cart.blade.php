@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            ตะกร้าสินค้าของคุณ
        </div>
        <div class="card-body">
            <ul class="list-group">
                {{-- @foreach ($products as $product) --}}
                @for ($i = 0; $i < 5; $i++)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                                <img src="" style="height: 100px; width: 90%;"/>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <h3>name</h3>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-danger minusBtn" id={{ $i }} onclick="decrease(this.id)"><i class="fas fa-minus"></i></button>
                                    <input type="text" class="form-control" value="1" id="numberText{{ $i }}" readonly />
                                    <button type="button" class="btn btn-success plusBtn" id={{ $i }} onclick="increase(this.id, 10)"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                <p>ราคา <span>100</span> บาท</p>
                            </div>
                        </div>
                    </div>
                </li>
                {{-- @endforeach --}}
                @endfor
            </ul>
        </div>
        <div class="card-body text-right">
            รวมราคาทั้งสิ้น <span>100</span> บาท
        </div>
        <div class="card-footer text-right" style="margin-bottom: 20px;">
            <button type="submit" class="btn btn-danger">ยกเลิกตะกร้าสินค้า</button>
            <button type="submit" class="btn btn-primary"><i class="fas fa-shopping-bag"></i> สั่งซื้อสินค้า</button>
        </div>
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
        if (parseInt($('#numberText' + id).val()) > 0) {
            now = parseInt($('#numberText' + id).val());
            next = now - 1;
            $('#numberText' + id).val(next)
        }
    }
</script>
@endsection
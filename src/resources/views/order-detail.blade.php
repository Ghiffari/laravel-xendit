@extends('LaraXendit::template')
@section('title', 'Order Detail')

@section('content')
<h2 class="text-center">Order</h2>
<h6 class="mb-5 text-center">Order detail</h6>
<form action="{{ url('ui/payment') }}">
    <div class="form-group">
        <label for="">Nama</label>
        <input class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">Nominal Pembayaran</label>
        <input class="form-control" required>
    </div>
    <button class="btn btn-primary btn-lg btn-block">Selanjutnya</button>
</form>
@endsection
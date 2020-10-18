@extends('LaraXendit::template')
@section('title', 'Retail Outlet')

@section('content')
<h2 class="text-center">Retail Outlet</h2>
<h6 class="mb-5 text-center">Alfamart</h6>
<table class="table table-striped">
    <tr>
        <td>Nama</td>
        <td class="text-right">John Doe</td>
    </tr>
    <tr>
        <td>Email</td>
        <td class="text-right">john@gmail.com</td>
    </tr>
    <tr>
        <td>Nominal Pembayaran</td>
        <td class="text-right">Rp 450.000</td>ev
    </tr>
</table>
<button class="btn btn-primary btn-lg btn-block">Bayar</button>
@endsection
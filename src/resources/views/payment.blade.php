@extends('LaraXendit::template')
@section('title', 'Payment Method')

@section('content')
<h2 class="text-center">Payment Method</h2>
        <h6 class="mb-5 text-center">Choose payment method</h6>
        <h5>Virtual Account</h5>
        <a href="{{ url('ui/virtual-account') }}"><button class="btn btn-dark btn-lg btn-block text-left mb-1">BCA</button></a>
        <a href="{{ url('ui/virtual-account') }}"><button class="btn btn-dark btn-lg btn-block text-left mb-1">BRI</button></a>
        <a href="{{ url('ui/virtual-account') }}"><button class="btn btn-dark btn-lg btn-block text-left mb-1">BNI</button></a>
        <a href="{{ url('ui/virtual-account') }}"><button class="btn btn-dark btn-lg btn-block text-left mb-1">Mandiri</button></a>
        <a href="{{ url('ui/virtual-account') }}"><button class="btn btn-dark btn-lg btn-block text-left mb-1">Permata</button></a>
        <hr>
        <h5>Credit Card</h5>
        <a href=""><button class="btn btn-dark btn-lg btn-block text-left mb-1">Visa</button></a>
        <a href=""><button class="btn btn-dark btn-lg btn-block text-left mb-1">Mastercard</button></a>
        <a href=""><button class="btn btn-dark btn-lg btn-block text-left mb-1">JCB</button></a>
        <hr>
        <h5>Retail Outlets</h5>
        <a href="{{ url('ui/retail-outlet') }}">
            <button class="btn btn-dark btn-lg btn-block text-left mb-1">Alfamart</button>
        </a>
        <a href="{{ url('ui/retail-outlet') }}">
            <button class="btn btn-dark btn-lg btn-block text-left mb-1">Indomaret</button>
        </a>
        <div class="mb-3 text-left"><small>Nominal min. 10.000 dan maks. 5.000.000</small></div>
        <hr>
        <h5>eWallets</h5>
        <a href="ewallets.html"><button class="btn btn-dark btn-lg btn-block text-left mb-1">OVO</button></a>
        <a href="ewallets.html"><button class="btn btn-dark btn-lg btn-block text-left mb-1">Dana</button></a>
        <a href="ewallets.html"><button class="btn btn-dark btn-lg btn-block text-left mb-1">LinkAja</button></a>
        <hr>
        <h5>Cardless Credit</h5>
        <a href="cardless.html"><button class="btn btn-dark btn-lg btn-block text-left mb-1">Kredivo</button></a>
@endsection
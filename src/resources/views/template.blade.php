<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Pixelpay</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('pixelpay/style.css') }}"> --}}
    <style type="text/css">
    	.wrapper{
    	    width: 400px;
    	    margin: 50px auto;
    	}
    	small{
    	    font-size: 12px;
    	}
    	button{
    	    line-height: 1em!important;
    	}
    	.btn-lg{
    	    padding: 15px!important;
    	}
    	a, a:hover{
    	    text-decoration: none;
    	}
    </style>
</head>
<body>
    <div class="wrapper">
        @yield('content')
    </div>
</body>
</html>
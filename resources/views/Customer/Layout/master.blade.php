<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <base href="{{asset('')}}">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <title>Document</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <link href="natucam/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
   <link href="css/style1.css" rel="stylesheet" type="text/css" media="all">
   <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
</head>
<body id="top">
@include('Customer.Layout.header') 
@yield('precontent') 
</div>
@yield('content')
@include('Customer.Layout.footer') 
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
@include('Customer.Layout.script') 

</body>
</html>

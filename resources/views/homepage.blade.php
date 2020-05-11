@extends('app')
@section('title', 'Homepage')
@section('content')

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
  
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .a {
    font-weight:normal;
    margin-left:250px;
    font-family: Poppins;
  }
  body {
    font-family: Rubik;
    font-style:normal;
    font-weight:normal;
  }
	

  </style>
</head>
<body>


<div class="jumbotron jumbotron-fluid">
    <div class="container" style="height: 200px;">
    <span class="a" style="font-size:48px;font-weight:bold">Learn Something New</span><br>
    <span class="a" style="color:rgba(255,190,88,1);font-size:38px">Everyday Anywhere Anytime</span>
    <br>
    <br>
        <p style="font-family: Rubik;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 30px;
            margin-top: -6px;
            text-align: left;
            position: absolute;
            
            overflow: visible;
            width: 614px;
            height: 86px;
            line-height: 30px;
            margin-top: -6px;" class="a">Telah banyak orang yang membuktikan bahwa belajar Bahasa inggris langsung di kampung inggris bias memaksimalkan kemampuan Bahasa mereka</p>
    </div>  
</div>

@stop
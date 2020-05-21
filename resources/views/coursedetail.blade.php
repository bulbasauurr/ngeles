@extends('app')
@section('title', 'Homepage')
@section('content')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>Course Detail</title>

    <style>
        .form{
                margin-left: 850px;
                margin-bottom: 100px;
        }
        .card-subtitle{
                margin-bottom: 5px;
                font-size: 36x;
        }
        .text-truncate{
                margin-top: 40px;
                margin-bottom: 40px;
                font-family: 'Alegreya Sans SC';
                font-size: 56x;
        }

        .btn-primary,
        .btn-warning{
            border-radius: 30px;
            width:150px;
            margin-left: 50px;
            margin-top: 50px;
            margin-bottom: 100px;
        }
        .img-fluid{
            width: 600px;
            margin-top: 40px;
            margin-right: 80px;
        }

        .rating {
            margin-left: 20px;
        }
        
        .rating:not(:checked) > input {
        position:absolute;
        top:-9999px;
        clip:rect(0,0,0,0);
    }

    .rating:not(:checked) > label {
        float:right;
        width:1em;
        /* padding:0 .1em; */
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:300%;
        /* line-height:1.2; */
        color:#ddd;
    }

    .rating:not(:checked) > label:before {
        content: '★ ';
    }

    .rating > input:checked ~ label {
        color: yellow;
        
    }

    .rating:not(:checked) > label:hover,
    .rating:not(:checked) > label:hover ~ label {
        color: yellow;
        
    }

    .rating > input:checked + label:hover,
    .rating > input:checked + label:hover ~ label,
    .rating > input:checked ~ label:hover,
    .rating > input:checked ~ label:hover ~ label,
    .rating > label:hover ~ input:checked ~ label {
        color: yellow;
        
    }

    .rating > label:active {
        position:relative;
        top:2px;
        right:2px;
    }

        
    </style>
</head>

<body>
    <div class="container">
        <br>
        <br>
        <h2>Course Detail</h2><br/>

        <div class="row">
                <form class="form" >
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search" style="padding-left: 20px; border-radius: 40px;" id="mysearch">
                        <div class="input-group-addon" style="margin-left: -50px; z-index: 3; border-radius: 40px; background-color: transparent; border:none;">
                            <button type="button" class="btn btn-link" type="submit" style="border-radius: 20px;" id="search-btn"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
        </div>

            <div class="row">
                <div class="col-7">
                <img src="uploads/les5.jpg" class="img-fluid rounded" alt="Bahasa Iggris">
                </div>

                <div class="col-5">
                <h2>Praktekkan Bahasa Inggrismu di Kampung Inggris</h2>

                    <div class="row">
                    <div class="rating">
                        <input type="radio" id="star10" name="rating" value="10" /><label for="star10" title="Rocks!">5 stars</label>
                        <input type="radio" id="star9" name="rating" value="9" /><label for="star9" title="Rocks!">4 stars</label>
                        <input type="radio" id="star8" name="rating" value="8" /><label for="star8" title="Pretty good">3 stars</label>
                        <input type="radio" id="star7" name="rating" value="7" /><label for="star7" title="Pretty good">2 stars</label>
                        <input type="radio" id="star6" name="rating" value="6" /><label for="star6" title="Meh">1 star</label>
                    </div>
                        <div class="col-6">
                            <h6 class="text-muted">Grammar</h6>
                        </div>
                        <div class="col-6">
                            <span class="badge badge-pill badge-success">1 year(s)</span>
                        </div>
                    </div>

                    <div class="text-truncate">
                        <h1 class="text-muted">IDR 500.000,00 - 700.000,00 </h1>
                        <br>
                    </div>

                    <h6 class="text-muted">FACILITIES</h6>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Penginapan</li>
                        <li class="list-group-item">Laundry</li>
                        <li class="list-group-item">Catering</li>
                        <li class="list-group-item">5 orang/Kelas</li>
                        <li class="list-group-item">Lingkungan Berbahasa Inggris</li>
                    </ul>

                    <div class="row">
                        <div class="col-6">
                        <a href="#" class="btn btn-primary active" role="button" aria-pressed="true">Ask Question</a>
                        </div>
                        
                        <div class="col-6">
                        <a href="{{action('PlanController@index')}}" class="btn btn-warning  active" role="button" aria-pressed="true">Book</a>
                        </div>
                    </div>
                
                
                    
                </div>
            
            </div>
             
                       
            </div>
        </div>
    </div>
</body>

@stop

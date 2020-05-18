@extends('app')
@section('title', 'Homepage')
@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>Course</title>

    <style>
        .badge{
           margin-left:80px;
        }

        .card{
            margin-bottom: 30px;
        }

        .form{
            margin-left: 850px;
            margin-bottom: 50px;
        }
        
        .btn{
            margin-left: 85px;
        }

        
        </style>
</head>

<body>
    <div class="container">
        <br>
        <br>
        <h2>Course</h2><br/>

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
        
            <div class="row row-cols-3">
                <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <img src="uploads/les1.png" class="card-img-top" alt="Mr.BOB">
                    <div class="card-body">
                            <div class="row row-cols-2">
                                <div class="col-lg-6 d-flex align-items-stretch">
                                <h6 class="card-subtitle text-muted">Grammar</h6>
                                </div>
                                <div class="col-lg-6 d-flex align-items-stretch">
                                <span class="badge badge-pill badge-success">3 day(s)</span>
                                </div>
                            </div>
                            <br>
                        <h5 class="card-title">Belajar Grammar Bahasa Inggris Kilat dengan Mr.BOB</h5>
                        <p class="card-text">Nikmati belajar Bahasa Inggris yang menyenangkan dengan tutor handal.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <a href="#" class="btn btn-primary btn btn-primary btn-sm active" role="button" aria-pressed="true">See More</a>
                    </div>
                </div>
                </div>

                <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <img src="uploads/les2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                            <div class="row row-cols-2">
                                <div class="col-lg-6 d-flex align-items-stretch">
                                <h6 class="card-subtitle text-muted">Speaking</h6>
                                </div>
                                <div class="col-lg-6 d-flex align-items-stretch">
                                <span class="badge badge-pill badge-success">12 day(s)</span>
                                </div>
                            </div>
                            <br>
                    <h5 class="card-title">Praktekkan Bahasa Inggrismu di Kampung Inggris</h5>
                    <p class="card-text">Belajar Bahasa Iggris dengan Mudah dan Cepat.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 1 week ago</small>
                    <a href="{{action('PlanController@index')}}" class="btn btn-primary btn btn-primary btn-sm active" role="button" aria-pressed="true">See More</a>
                    </div>
                </div>
                </div>

                <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <img src="uploads/les4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                            <div class="row row-cols-2">
                                <div class="col-lg-6 d-flex align-items-stretch">
                                    <h6 class="card-subtitle text-muted">Grammar</h6>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-stretch">
                                    <span class="badge badge-pill badge-success" >6 day(s)</span>
                                    </div>
                                </div>
                                <br>
                    <h5 class="card-title">Belajar Grammar Bahasa Inggris Lanjutan dengan Mr.BOB</h5>
                    <p class="card-text">Belajar berkelajutan tanpa henti buatmu menjadi ahli.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 1 day ago</small>
                    <a href="#" class="btn btn-primary btn btn-primary btn-sm active" role="button" aria-pressed="true">See More</a>
                    </div>
                </div>
                </div>
                
                <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <img src="uploads/les4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                            <div class="row row-cols-2">
                                <div class="col-lg-6 d-flex align-items-stretch">
                                    <h6 class="card-subtitle text-muted">Grammar</h6>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-stretch">
                                    <span class="badge badge-pill badge-success">3 day(s)</span>
                                    </div>
                                </div>
                                <br>
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                    <a href="#" class="btn btn-primary btn btn-primary btn-sm active" role="button" aria-pressed="true">See More</a>
                    </div>
                </div>
                </div>

                <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <img src="uploads/les1.png" class="card-img-top" alt="English Success">
                    <div class="card-body">
                            <div class="row row-cols-2">
                                <div class="col-lg-6 d-flex align-items-stretch">
                                <h6 class="card-subtitle text-muted">Listening</h6>
                                </div>
                                <div class="col-lg-6 d-flex align-items-stretch">
                                <span class="badge badge-pill badge-success">3 day(s)</span>
                                </div>
                            </div>
                            <br>
                        <h5 class="card-title">Belajar Mendengarkan Bahasa Inggris Kilat dengan English Success</h5>
                        <p class="card-text">Nikmati belajar Bahasa Inggris yang menyenangkan dengan tutor handal.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <a href="#" class="btn btn-primary btn btn-primary btn-sm active" role="button" aria-pressed="true">See More</a>
                    </div>
                </div>
                </div>

                <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <img src="uploads/les2.png" class="card-img-top" alt="English Success">
                    <div class="card-body">
                            <div class="row row-cols-2">
                                <div class="col-lg-6 d-flex align-items-stretch">
                                <h6 class="card-subtitle text-muted">Speaking</h6>
                                </div>
                                <div class="col-lg-6 d-flex align-items-stretch">
                                <span class="badge badge-pill badge-success">12 day(s)</span>
                                </div>
                            </div>
                            <br>
                    <h5 class="card-title">Praktekkan Bahasa Inggrismu di English Success</h5>
                    <p class="card-text">Belajar Bahasa Iggris dengan Mudah dan Cepat.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-muted">Last updated 1 week ago</small>
                    <a href="#" class="btn btn-primary btn btn-primary btn-sm active" role="button" aria-pressed="true">See More</a>
                    </div>
                </div>
                </div>

            </div>
    </div>
</body>

@stop

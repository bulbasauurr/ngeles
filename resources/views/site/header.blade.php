<header class="section-header">
    <section class="header-main">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Ngeles</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        

        <div class="collapse navbar-collapse w-100 order-3 dual-collapse2" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
            <form class="form-inline">
                    <div class="input-group">                    
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>  
            <li class="nav-item">
                <a class="nav-link" href="{{action('AuthController@homepage')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{action('AuthController@course')}}">Course</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Lembaga</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Feedback</a>
            </li>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">ENG</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">ID</a>
                    <a href="#" class="dropdown-item">SPA</a>
                </div>
            </div>      
            </ul>
        </div>  
        </nav>
        </section>

</header>

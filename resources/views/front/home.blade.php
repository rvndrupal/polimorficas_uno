<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>F-Seguridad.</title>

  

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('front/img/core-img/favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link href="{{ asset('front/style.css') }}" rel="stylesheet">



    <link href="{{ asset('front/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/others/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/others/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/others/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/others/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/others/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/estilos.css') }}" rel="stylesheet">
    

    <!-- Responsive CSS -->
    <link href="{{ asset('front/css/responsive/responsive.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="fplus-load"></div>
        <img src="{{ asset('front/img/core-img/h-logo.png') }}" alt="logo">
    </div>

 

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="logo_area">
                        <a class="d-flex align-items-center justify-content-center" href="index.html"><img src="{{ asset('front/img/core-img/h-logo.png') }}" alt="logo"></a>
                    </div>
                    <div class="menu-open-close d-flex align-items-center justify-content-center">
                        <div id="nav-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header Area End ****** -->

    <!-- ****** Menu Area Start ****** -->
    <div class="fplus-menu-area">
        <!-- Menu -->
        <div class="fplus-main-menu h-100 d-flex align-items-center">
            <nav class="navbar navbar-expand-lg">
                <div class="" id="fplus-nav">
                    <ul class="navbar-nav" id="fplusNav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Sobre Nosotros</a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="fplusDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="fplusDropdown">
                                <a class="dropdown-item" href="index.html">Home</a>
                                <a class="dropdown-item" href="single-portfolio.html">Single Portfolio</a>
                                <a class="dropdown-item" href="static-page.html">Static Page</a>
                            </div>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#clients">Videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#news">Noticias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contacto</a>
                        </li>
                        @can('masters.index')
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin') }}">Panel de Control</a>
                        </li>
                        @endcan
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Header Social Icon -->
        {{-- Redes sociales menu  https://github.com/bradvin/social-share-urls#facebook--}}
        <div class="header-social-info d-flex align-items-center justify-content-end">
            <div class="h-social-icon">
                <a href="https://www.facebook.com/sharer.php?u={{ request()->fullUrl() }} title="Compartir en Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={title}&via={user_id}&hashtags=Compartir"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- ****** Menu Area End ****** -->

    <!-- ****** Welcome Area Start ****** -->
    @foreach ($secciones as $seccion)
    <section class="fplus-hero-area" style="background-image: url({{ $seccion->banner }} );" id="home">
    @endforeach
    {{--  <section class="fplus-hero-area" style="background-image: url({{ asset('front/img/bg-img/hero-1.jpg') }});" id="home">  --}}       
        <div class="hero-content-area d-flex justify-content-end">
            <div class="hero-text">
                @foreach ($masters as $master )
                <h2 class="titulo">{{ $master->titulo }}</h2>
                 @endforeach  

                {{-- Subscripción notificación --}}
                @if(session('info'))
                <div class="container">
                    <div class="row">
                        <div class="col-8 ">
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        </div>
            
                    </div>
                </div>
            
              @endif

                {{-- notificación --}}



                @can('masters.update')                        
                <button type="button" class="btn btn-primary btn-editar">Actualizar</button>
               
                 @endcan  
                {{ csrf_field() }}
                <a href="#projects" class="view-portfolio-btn" id="scrollDown"><i class="fa fa-plus" aria-hidden="true"></i> View Portfolio</a>
            </div>
        </div>
    </section>
    <!-- ****** Welcome Area End ****** -->

    <!-- ****** About Us Area Start ****** -->
    <section class="fplus-about-us-area bg-gray section-padding-120" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                            @foreach ($masters as $master )
                            <h4 class="nosotros">{{ $master->nosotros }}</h4>
                             @endforeach                          
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="about-us-content wow fadeInLeftBig" data-wow-delay="0.5">
                <div class="row no-gutters align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="about-us-thumb wow fadeIn" data-wow-delay="1s">
                            {{-- <img src="front/img/bg-img/about-1.jpg" alt=""> --}}
                        
                        <img src="{{ $seccion->imguno }}" class="seccion_home">
                        
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="about-us-text wow fadeIn" data-wow-delay="1.5s">
                                @foreach ($masters as $master )
                                <h4 class="noso_titulo">{{ $master->noso_titulo }}</h4>
                                 <p class="noso_descri">{{ $master->noso_descri }}</p>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- Single Feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fplus-single-feature wow fadeInUp" data-wow-delay="1s">
                        <div class="feature-title d-flex align-items-center">
                            <img src="front/img/icons/wallet.svg" alt="">
                            @foreach ($masters as $master )
                            <h5 class="b1">{{ $master->b1 }}</h5>
                        </div>
                        <p class="b2">{{ $master->b2 }}</p>

                    </div>
                </div>
                <!-- Single Feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fplus-single-feature wow fadeInUp" data-wow-delay="1.5s">
                        <div class="feature-title d-flex align-items-center">
                            <img src="front/img/icons/credit-card.svg" alt="">
                            <h5 class="b3">{{ $master->b3 }}</h5>
                        </div>
                        <p class="b4">{{ $master->b4 }}</p>
                    </div>
                </div>
                <!-- Single Feature -->
                <div class="col-12 col-lg-4">
                    <div class="fplus-single-feature wow fadeInUp" data-wow-delay="2s">
                        <div class="feature-title d-flex align-items-center">
                            <img src="front/img/icons/credit-card.svg" alt="">
                            <h5 class="b5">{{ $master->b5 }}</h5>
                        </div>
                        <p class="b6">{{ $master->b6 }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="parallaxuno" data-stellar-background-ratio="0.5">
                        <p>
                           
                        </p>
                    </div>  
                </div>
            </div>
        </div>
    <!-- ****** About Us Area End ****** -->

    <!-- ****** Gallery Area Start ****** -->
    <p class="espacio"></p>
    <section class="fplus-projects-area bg-gray section-padding-0-120" id="projects">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                         @foreach ($masters as $master )
                        <h4 class="b7">{{ $master->b7 }}</h4>
                        @endforeach
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>
        </div>

        {{--  <div class="fplus-projects-menu">
            <div class="text-center portfolio-menu">
                <button class="btn active" data-filter="*">Todos</button>
                <button class="btn" data-filter=".camaras">Camaras</button>
                <button class="btn" data-filter=".seguridad">Seguridad</button>
                <button class="btn" data-filter=".alarmas">Alarmas</button>
                <button class="btn" data-filter=".hogar">Hogar</button>
            </div>
        </div>  --}}
        

        <div class="fplus-projects-menu">          
            <div class="text-center portfolio-menu">
                    <button class="btn active" data-filter="*">Todos</button>
                    @foreach ($lista as  $lis )
                    <button class="btn" data-filter=".{{ $lis->nombre }}">{{ $lis->nombre }}</button>
                    @endforeach
             </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutters fplus-portfolio">
                <!-- Single gallery Item Start -->

                 @foreach ($todos as $todo )
                
                 <div class="col-12 col-sm-6 col-md-4 single_gallery_item {{ $todo->category->nombre }} wow fadeInUp" data-wow-delay="0.2s">
                     @if($todo->fotos->count()==0)
                     {{ "" }}
                     @else
                    <img src="{{  $todo->fotos->first()->url }}" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="single-portfolio.html"><img src="{{  Request::root()}}/{{ $todo->fotos->first()->url }}" alt=""></a>
                        </div>
                        <div class="port-hover-text">                         
                                <a href="detalle/{{ $todo->id }}">{{ $todo->nombre }}</a>
                                <h3>{!! $todo->descripcion !!}</h3>
                        </div>
                    </div>
                    @endif
                </div>
                   @endforeach
                 
            </div> 

            <div class="row">
                <div class="col-12">
                    <a href="{{ route('master.todos') }}" class="load-more-btn text-center d-block mt-50"><i class="fa fa-plus" aria-hidden="true"></i> Todos los Productos</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Gallery Area End ****** -->

    <!-- ****** Method Area Start ****** -->
    <div class="fplus-method-area bg-gray" id="method">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        {{-- @foreach ($masters as $master )
                        <h4 class="b8">{{ $master->b8 }}</h4>
                        
                        @endforeach --}}
                      
                    </div>
                </div>               
            </div>
        </div>

       

        <div class="fplus-method-content bg-white text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="fplus-method-text">
                            @foreach ($masters as $master )
                             {{-- <h4 class="b9">{{ $master->b9 }}</h4>                             --}}
                            <h4 class="b10">{{ $master->b10 }}</h4> 
                            <div class="section-heading-line"></div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-md-10">
                        <div class="fplus-method-video wow fadeInUp" data-wow-delay="1s" style="background-image: url(front/img/bg-img/video.jpg);">
                            <div class="video-play-btn">
                                @foreach ($videos as $v )
                                    @if($v->iframe)
                                        @if( $loop->iteration ==1)
                                        <div class="video"><i class="pe-7s-play" aria-hidden="true">{!! $v->iframe !!}</i></div>
                                        <p>{{  $loop->iteration }}</p>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Method Area End ****** -->

    <!-- ****** Clients Area Start ****** -->
    <section class="fplus-clients-area bg-gray section-padding-120" id="clients">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                            @foreach ($masters as $master )
                            <h4 class="b11">{{ $master->b11 }}</h4>
                            @endforeach
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                        @foreach ($videos as $v )
                        @if($v->iframe)
                            @if( $loop->iteration == 2)
                            <div class="video_tres"><i class="pe-7s-play" aria-hidden="true">{!! $v->iframe !!}</i></div>
                            
                            @endif
                        @endif
                        @endforeach
                </div>
                        
                 <div class="col-6">
                        @foreach ($videos as $v )
                        @if($v->iframe)
                            @if( $loop->iteration == 3)
                            <div class="video_tres"><i class="pe-7s-play" aria-hidden="true">{!! $v->iframe !!}</i></div>
                            
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Parallax dos --}}

    <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="parallaxdos" data-stellar-background-ratio="0.5">
                        <p>
                           
                        </p>
                    </div>  
                </div>
            </div>
        </div>



    <!-- ****** Clients Area End ****** -->

    <!-- ****** Blog Area Start ****** -->
    <section class="fplus-blog-area bg-gray section-padding-0-120" id="news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <p class="espacio"></p>
                    <div class="section-heading text-center">
                            @foreach ($masters as $master )
                            <h4 class="b12">{{ $master->b12 }}</h4>
                            @endforeach
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Post Area -->
                @foreach ($personas as $per )
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fplus-single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Blog Thumbnail -->
                        <img style="width:350px; height:350px;" src="{{ $per->imguno }}" alt="">
                        <!-- Blog Content -->
                        
                        <div class="fplus-blog-content">
                            <h5>{{ $per->descripcion }}</h5>
                            <div class="post-meta-data d-flex align-items-center">
                                <div class="post-author-img">
                                    <img src="{{ $per->imgdos }}" alt="">
                                </div>
                                <div class="post-author-name-date">
                                    <h6>{{ $per->nombre }}</h6>
                                    <p>{{ $per->apellidos }}</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @endforeach
                <!-- Single Blog Post Area -->
                {{-- <div class="col-12 col-md-6 col-lg-4">
                    <div class="fplus-single-blog-area wow fadeInUp" data-wow-delay="1s">
                        <!-- Blog Thumbnail -->
                        <img src="front/img/blog-img/blog-2.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="fplus-blog-content">
                            <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            <div class="post-meta-data d-flex align-items-center">
                                <div class="post-author-img">
                                    <img src="front/img/blog-img/post-author.jpg" alt="">
                                </div>
                                <div class="post-author-name-date">
                                    <h6>Lora Palmer</h6>
                                    <p>on <a href="#">Sep 29, 2017</a> at <a href="#">9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Post Area -->
                <div class="col-12 col-lg-4">
                    <div class="fplus-single-blog-area wow fadeInUp" data-wow-delay="1.5s">
                        <!-- Blog Thumbnail -->
                        <img src="front/img/blog-img/blog-3.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="fplus-blog-content">
                            <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            <div class="post-meta-data d-flex align-items-center">
                                <div class="post-author-img">
                                    <img src="front/img/blog-img/post-author.jpg" alt="">
                                </div>
                                <div class="post-author-name-date">
                                    <h6>Lora Palmer</h6>
                                    <p>on <a href="#">Sep 29, 2017</a> at <a href="#">9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- ****** Blog Area End ****** -->

    <!-- ****** Contact Area Start ****** -->
    <section class="fplus-contact-area bg-gray" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                            @foreach ($masters as $master )
                            <h4 class="b13">{{ $master->b13 }}</h4>
                            @endforeach
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fplus-contact-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="contact_from wow fadeInDown" data-wow-delay="1.5s">
                            <form action="mail" method="POST" >
                                    {!! csrf_field() !!}
                                <!-- Message Input Area Start -->
                                <div class="contact_input_area">
                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Título" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="number" id="number" placeholder="Cel" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="mensaje" class="form-control"  cols="30" rows="10" placeholder="Mensaje" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Google Maps -->
        {{--  <div id="googleMap" class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s"></div>  --}}
        <div class="row maps wow fadeInDown" data-wow-delay="2.3s"">
            <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1880.9418472132345!2d-99.07922796612338!3d19.460580685662467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fbf49223df07%3A0x3d8b2c76d4ab20f0!2sBosque+de+San+Juan+de+Arag%C3%B3n!5e0!3m2!1ses!2smx!4v1543879210398" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        
    </section>
    <!-- ****** Contact Area End ****** -->

    <!-- ****** Footer Area Start ****** -->
   
    @include('front.footer')
    <!-- ****** Footer Area End ****** -->

    <!-- Jquery-2.2.4 js -->
    <script src="{{ asset('front/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('front/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap-4 js -->
    <script src="{{ asset('front/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('front/js/others/plugins.js') }}"></script>
    <!-- Google Maps js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk"></script>
    <script src="{{ asset('front/js/google-map/map-active.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('front/js/active.js') }}"></script>

    <script src="{{ asset('front/js/master.js') }}"></script>

    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/efecto.js"></script>
</body>
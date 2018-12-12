<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>F-plus Portfolio Template | Single Portfolio</title>

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
        <img src="img/core-img/h-logo.png" alt="logo">
    </div>

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="logo_area">
                        <a class="d-flex align-items-center justify-content-center" href="index.html"><img src="{{  asset('front/img/core-img/h-logo.png') }}" alt="logo"></a>
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
    @include('front.menu')
    <!-- ****** Menu Area End ****** -->

    <!-- ****** Hero Area Start ****** -->
   @foreach ($producto as  $pro)
   <div class="fplus-hero-area" style="background-image: url({{  Request::root()}}/{{ $pro->fotos[0]->url }})"></div>
   @endforeach
   
    <!-- ****** Hero Area End ****** -->

    <!-- ****** Single Portfolio Area Start ****** -->
    <div class="fplus-single-portfolio-area bg-gray section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="fplus-portfolio-share">
                        <a href="#">Share</a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="fplus-portfolio-content-area">
            <div class="single-portfolio-text">
                <p>Producto</p>
                @foreach ($producto as  $pro)
                <h2>{{ $pro->nombre }}</h2>
                
                <div class="project-meta-data d-sm-flex">
                    <div class="project-client">
                        <p>Peso</p>
                        <p>{{ $pro->peso }}</p>
                    </div>
                    <div class="project-year">
                        <p>Tamaño</p>
                        <p>{{ $pro->tamano }}</p>
                    </div>
                    <div class="project-website">
                        <p>Color</p>
                        <p>{{ $pro->color }}</p>
                    </div>
                    <div class="project-website">
                            <p>Precio</p>
                            <p>{{ $pro->precio }}</p>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ****** Single Portfolio Area End ****** -->

    <!-- ****** About Us Area Start ****** -->
    <section class="fplus-about-us-area bg-gray">
        <div class="container">
            <div class="about-us-content">
                <div class="row no-gutters align-items-center">
                    <div class="col-12 col-md-6">
                      
                        <div class="about-us-text">
                            @foreach ($producto as  $pro)
                            <h2 style="text-align:center">{{ $pro->nombre }}</h2>
                            <p>{!! $pro->descripcion !!}</p>
                            <hr>
                            <h5 style="text-align:right">Categoría: {{ $pro->category->nombre }}</h5>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="about-us-thumb">                         
                            <img src="{{ Request::root()}}/{{ $pro->fotos[1]->url }}  " alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** About Us Area End ****** -->

    <!-- ****** Project Single Thumb ****** -->
    <div class="fplus-project-single-thumb bg-gray section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-4">
                        @foreach ($producto as  $pro)
                        <img src="{{ Request::root()}}/{{ $pro->fotos[2]->url }}" alt="">
                        
                </div>
           

                <div class="col-8">
                    <div class=" wow fadeInUp" data-wow-delay="1s" style="">
                        <div class="video-play-btn">
                        
                                @if($pro->iframe)
                                <div class="video_detalle"><i class="pe-7s-play" aria-hidden="true">{!! $pro->iframe !!}</i></div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ****** Gallery Area Start ****** -->
    <section class="fplus-projects-area bg-gray" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>  Más Productos</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutters fplus-portfolio">
                <!-- Single gallery Item Start -->
                @foreach ($relacionadas as $rel )
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item branding">
                    <img src="{{ Request::root()}}/{{ $rel->fotos->first()->url }}" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="#"><img src="{{ Request::root()}}/{{ $rel->fotos->first()->url }}" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="../detalle/{{ $rel->id }}">{{ $rel->nombre }}</a>
                            <h3>{!! $rel->descripcion !!}</h3>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Single gallery Item Start -->
                {{-- <div class="col-12 col-sm-6 col-md-4 single_gallery_item branding">
                    <img src="{{ asset('front/img/portfolio-img/p-2.jpg') }}" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="#"><img src="{{ asset('front/img/icons/plus.png') }}" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">branding</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div> --}}

                <!-- Single gallery Item Start -->
                {{-- <div class="col-12 col-sm-6 col-md-4 single_gallery_item design">
                    <img src="{{ asset('front/img/portfolio-img/p-3.jpg') }}" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="#"><img src="{{ asset('front/img/icons/plus.png') }}" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">design</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <hr>

        <div class="row">
                <div class="col-12">
                    <a href="{{ route('master.todos') }}" class="load-more-btn text-center d-block mt-50"><i class="fa fa-plus" aria-hidden="true"></i> Todos los Productos</a>
                </div>
            </div>
        
            <hr><p></p>


    </section>
    <!-- ****** Gallery Area End ****** -->

    <!-- ****** Footer Area Start ****** -->
    @include('front.footer2')
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
</body>
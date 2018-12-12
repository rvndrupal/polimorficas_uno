<footer class="fplus-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="about-us-widget">
                        <img src="front/img/core-img/logo.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="footer-nav-widget">
                        <nav>
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#projects">Productos</a></li>
                                <li><a href="#news">Noticias</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="footer-nav-widget">
                        <nav>
                            <ul>
                                <li><a href="{{ asset('master.todos') }}">Todos los Productos</a></li>
                                <li><a href="#clients">Videos</a></li>
                                <li><a href="#contact">Contacto</a></li>
                                @can('masters.index')
                                <li><a href="{{ route('admin') }}">Panel de Control</a></li>
                                @endcan
                                
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="subscribe-widget">
                        <p>Subscribe</p>
                        <form action="/subscribete" method="POST">
                            {!! csrf_field() !!}
                           
                            <input type="email" name="email" id="subscribeEmail" placeholder="Ingresa tu Email">
                            <button type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        </form>
                    </div>


                    <div class="footer-social-widget">
                        <a href="#" title="Compartir en Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-12 text-center text-white"><small><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Ing. Rodrigo Villanueva Nieto (55-40-78-31-88) <i class="" aria-hidden="true"></i>  <a href="https://colorlib.com" target="_blank"></a> &amp;  <a href="https://themewagon.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></div>
            </div>
        </div>
    </footer>
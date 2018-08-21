@if ($sections->contains('href','#hero-area'))
        <header id="hero-area" data-stellar-background-ratio="0.5">    
            <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand"><img class="img-fulid" src="{{ asset('theme2/images/logo.png') }}" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                          <i class="lnr lnr-menu"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main-navbar">
                        <ul class="navbar-nav mr-auto w-100 justify-content-end">
                            @foreach($sections as $section)
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="{{ $section->href }}">{{ $section->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <ul class="mobile-menu">
                    @foreach($sections as $section)
                        <li><a class="page-scroll" href="{{ $section->href }}">{{ $section->name }}</a></li>
                    @endforeach
                </ul>
            </nav>

            <div class="container">      
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <div class="contents text-center">
                            @if ($user->getComponentValue('Inicio','Intro'))
                                <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">{{$user->getComponentValue('Inicio','Intro')->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE}}</h1>
                                <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">{{$user->getComponentValue('Inicio','Intro')->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE}}</p>
                            @endif
                            <a href="#contact" class="btn btn-common nav-link page-scroll">{{$user->getComponentValue('Inicio','Botón')}}</a>
                        </div>
                    </div>
                </div> 
            </div>           
        </header>
        @endif

        @if ($sections->contains('href','#services'))
        <section id="services" class="section">
            <div class="container">
                <div class="section-header">          
                    <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">{{$user->getComponentValue('Servicios','Intro')->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE}}</h2>
                    <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                    <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">{{$user->getComponentValue('Servicios','Intro')->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE}}</p>
                </div>
                <div class="row">
                    @foreach ($user->getComponentValuesGroup('Servicios','Servicios',3) as $campo)
                        <div class="col-md-4 col-sm-6">
                            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
                                <div class="icon">
                                    <i class="lnr lnr-{{ $campo->where('COMPONENT_TYPE_NAME','Icono')->first()->VALUE }}"></i>
                                </div>
                                <h4>{{ $campo->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE }}</h4>
                                <p>{{ $campo->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE }}</p>
                            </div>
                        </div>    
                    @endforeach
                </div>
            </div>
        </section>
        @endif

        @if ($sections->contains('href','#features'))
        <section id="features" class="section" data-stellar-background-ratio="0.2">
            <div class="container">
                <div class="section-header">          
                  <h2 class="section-title">{{$user->getComponentValue('Características','Intro')->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE}}</h2>
                  <hr class="lines">
                  <p class="section-subtitle">{{$user->getComponentValue('Características','Intro')->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE}}</p>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-xs-12">
                        <div class="container">
                            <div class="row">
                                @foreach ($user->getComponentValuesGroup('Características','Características',3) as $campo)
                                    <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                                        <span class="icon">
                                            <i class="lnr lnr-{{ $campo->where('COMPONENT_TYPE_NAME','Icono')->first()->VALUE }}"></i>
                                        </span>
                                        <div class="text">
                                            <h4>{{ $campo->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE }}</h4>
                                            <p>{{ $campo->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-12">
                        <div class="show-box">
                            <img class="img-fulid" src="{{ asset('theme2/images/features/feature.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif

        @if ($sections->contains('href','#portfolios'))
        <section id="portfolios" class="section">
            <div class="container">
                <div class="section-header">          
                    <h2 class="section-title">{{$user->getComponentValue('Trabajos','Intro')->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE}}</h2>
                    <hr class="lines">
                    <p class="section-subtitle">{{$user->getComponentValue('Trabajos','Intro')->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE}}</p>
                </div>
                <div class="row">          
                    <div class="col-md-12">
                        <div class="controls text-center">
                            <a class="filter active btn btn-common" data-filter="all">All</a>
                            @foreach ($user->getComponentKeys('Trabajos','Galería','Título') as $valor)
                                <a class="filter btn btn-common" data-filter=".{{ $valor }}">{{ $valor }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div id="portfolio" class="row">
                        @foreach ($user->getComponentValuesGroup('Trabajos','Galería',3) as $campo)
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix {{ $campo->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE }}">
                                <div class="portfolio-item">
                                    <div class="shot-item">
                                        <img src="{{ asset('theme2/'.$campo->where('COMPONENT_TYPE_NAME','Imagen')->first()->VALUE) }}" alt="" />  
                                        <a class="overlay lightbox" href="{{ asset('theme2/'.$campo->where('COMPONENT_TYPE_NAME','Imagen')->first()->VALUE) }}">
                                            <i class="lnr lnr-eye item-icon"></i>
                                        </a>
                                    </div>               
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="video-promo section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="video-promo-content text-center">
                            <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">{{$user->getComponentValue('Trabajos','Intro2')->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE}}</h2>
                            <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">{{$user->getComponentValue('Trabajos','Intro2')->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE}}</p>
                            <a href="{{$user->getComponentValue('Trabajos','Video')}}" class="video-popup wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s"><i class="lnr lnr-film-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif

        @if ($sections->contains('href','#pricing'))
        <div id="pricing" class="section pricing-section">
            <div class="container">
                <div class="section-header">          
                    <h2 class="section-title">{{$user->getComponentValue('Planes','Intro')->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE}}</h2>
                    <hr class="lines">
                    <p class="section-subtitle">{{$user->getComponentValue('Planes','Intro')->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE}}</p>
                </div>

                <div class="row pricing-tables">
                    @foreach ($user->getComponentValuesGroup('Planes','Planes',4) as $campo)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="pricing-table">
                                <div class="pricing-details">
                                    <h2>{{ $campo->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE }}</h2>
                                    <span>{{ $campo->where('COMPONENT_TYPE_NAME','Monto')->first()->VALUE }}</span>
                                    <ul>{{ $campo->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE }}</ul>
                                </div>
                                <div class="plan-button">
                                    <a href="#" class="btn btn-common">{{ $campo->where('COMPONENT_TYPE_NAME','Botón')->first()->VALUE }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="counters section" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row"> 
                    @foreach ($user->getComponentValuesGroup('Planes','Info',3) as $campo)
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="facts-item">   
                                <div class="icon">
                                    <i class="lnr lnr-{{ $campo->where('COMPONENT_TYPE_NAME','Icono')->first()->VALUE }}"></i>
                                </div>             
                                <div class="fact-count">
                                    <h3><span class="counter">{{ $campo->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE }}</span></h3>
                                    <h4>{{ $campo->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE }}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        @if ($sections->contains('href','#team'))
        <section id="team" class="section">
            <div class="container">
                <div class="section-header">          
                    <h2 class="section-title">{{$user->getComponentValue('Equipo','Intro')->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE}}</h2>
                    <hr class="lines">
                    <p class="section-subtitle">{{$user->getComponentValue('Equipo','Intro')->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE}}</p>
                </div>
                <div class="row">
                    @foreach ($user->getComponentValuesGroup('Equipo','Equipo',8) as $campo)
                        <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="single-team">
                                <img src="{{ asset('theme2/'.$campo->where('COMPONENT_TYPE_NAME','Imagen')->first()->VALUE) }}" alt="">
                                <div class="team-details">
                                    <div class="team-inner">
                                        <h4 class="team-title">{{ $campo->where('COMPONENT_TYPE_NAME','Nombre')->first()->VALUE }}</h4>
                                        <p>{{ $campo->where('COMPONENT_TYPE_NAME','Puesto')->first()->VALUE }}</p>
                                        <ul class="social-list">
                                            <li class="facebook"><a href="{{ $campo->where('COMPONENT_TYPE_NAME','Red Social 1')->first()->VALUE }}"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="{{ $campo->where('COMPONENT_TYPE_NAME','Red Social 2')->first()->VALUE }}"><i class="fa fa-twitter"></i></a></li>
                                            <li class="google-plus"><a href="{{ $campo->where('COMPONENT_TYPE_NAME','Red Social 3')->first()->VALUE }}"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="{{ $campo->where('COMPONENT_TYPE_NAME','Red Social 4')->first()->VALUE }}"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    @endforeach
                </div>
            </div>
        </section>
        @endif

        @if ($sections->contains('href','#contact'))
        <section id="contact" class="section" data-stellar-background-ratio="-0.2">      
            <div class="contact-form">
                <div class="container">
                    <div class="row">     
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="contact-us">
                                <h3>{{$user->getComponentValue('Contacto','Título')}}</h3>
                                <div class="contact-address">
                                    <p>{{$user->getComponentValue('Contacto','Dirección')}}</p>
                                    <p class="phone">Teléfono: <span>{{$user->getComponentValue('Contacto','Teléfono')}}</span></p>
                                    <p class="email">E-mail: <span>{{$user->getComponentValue('Contacto','Email')}}</span></p>
                                </div>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>     
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="contact-block">
                                <form id="contactForm">
                                    <div class="row">
                                        @foreach ($user->getComponentValuesGroup('Contacto','Formulario') as $campo)
                                            <div class="col-md-12">
                                                <div class="form-group"> 
                                                    @if ($campo->COMPONENT_TYPE_NAME == 'Mensaje')
                                                        <textarea class="form-control" id="{{$campo->VALUE}}" placeholder="{{$campo->VALUE}}" rows="8" data-error="Escribe tu {{$campo->VALUE}}" required></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    @endif
                                                    @if ($campo->COMPONENT_TYPE_NAME == 'Botón')
                                                        <div class="submit-button text-center">
                                                            <button class="btn btn-common" id="submit" type="submit">{{$campo->VALUE}}</button>
                                                            <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                                            <div class="clearfix"></div> 
                                                        </div>
                                                    @endif
                                                    @if ($campo->COMPONENT_TYPE_NAME != 'Mensaje' && $campo->COMPONENT_TYPE_NAME != 'Botón')
                                                        <input type="text" class="form-control" id="{{$campo->VALUE}}" name="{{$campo->VALUE}}" placeholder="{{$campo->VALUE}}" required data-error="Por favor ingrese su {{$campo->VALUE}}">
                                                        <div class="help-block with-errors"></div>
                                                    @endif
                                                </div>                                   
                                            </div>
                                        @endforeach
                                        {{-- <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                                <div class="help-block with-errors"></div>
                                            </div>                                 
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                                <div class="help-block with-errors"></div>
                                            </div> 
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group"> 
                                                <textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="submit-button text-center">
                                                <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                                <div class="clearfix"></div> 
                                            </div>
                                        </div> --}}
                                    </div>            
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </section>
        @endif

        {{-- TODO: AGREGAR INFORMACIÓN DE INFINIT --}}
        <footer>          
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <ul class="footer-links">
                            <li>
                             <a href="#">Homepage</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="copyright">
                            <p>© Copyright InfinIT 2018.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </footer>

        <a href="#" class="back-to-top">
            <i class="lnr lnr-arrow-up"></i>
        </a>
        
        <div id="loader">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>     

        <script src="{{ asset('theme2/app.js') }}"></script>
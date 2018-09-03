<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="author" content="Grayrids">
        
        @if($user->getComponentValue('Inicio','Intro'))
            <title>{{$user->getComponentValue('Inicio','Intro')->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE}}</title>
        @endif

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('theme2/app.css') }}">  
    </head>
    <body>
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
                            
                            @if ($user->getComponentValue('Inicio','Botón'))
                                <a href="#contact" class="btn btn-common nav-link page-scroll">{{$user->getComponentValue('Inicio','Botón')}}</a>
                            @endif
                        </div>
                    </div>
                </div> 
            </div>           
        </header>
        @endif

        @if ($sections->contains('href','#services') && ($user->getComponentValue('Servicios','Intro') || $user->getComponentValue('Servicios','Servicios')))
        <section id="services" class="section">
            <div class="container">
                @if ($user->getComponentValue('Servicios','Intro'))
                    <div class="section-header">          
                        <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">{{$user->getComponentValue('Servicios','Intro')->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE}}</h2>
                        <hr class="lines wow zoomIn" data-wow-delay="0.3s">
                        <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">{{$user->getComponentValue('Servicios','Intro')->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE}}</p>
                    </div>
                @endif
                <div class="row">
                    @foreach ($user->getComponentValuesGroup('Servicios','Servicios',3) as $campo)
                        @if($campo->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE)
                            <div class="col-md-4 col-sm-6">
                                <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
                                    <div class="icon">
                                        <i class="lnr lnr-{{ $campo->where('COMPONENT_TYPE_NAME','Icono')->first()->VALUE }}"></i>
                                    </div>
                                    <h4>{{ $campo->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE }}</h4>
                                    <p>{{ $campo->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE }}</p>
                                </div>
                            </div>    
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        @endif

        @if ($sections->contains('href','#features') && ($user->getComponentValue('Características','Intro') || $user->getComponentValue('Características','Características')))
        <section id="features" class="section" data-stellar-background-ratio="0.2">
            <div class="container">
                @if ($user->getComponentValue('Características','Intro'))
                    <div class="section-header">          
                        <h2 class="section-title">{{$user->getComponentValue('Características','Intro')->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE}}</h2>
                        <hr class="lines">
                        <p class="section-subtitle">{{$user->getComponentValue('Características','Intro')->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE}}</p>
                    </div>
                @endif

                @if ($user->getComponentValue('Características','Características'))
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
                @endif
            </div>
        </section>
        @endif

        @if ($sections->contains('href','#portfolios') && ($user->getComponentValue('Trabajos','Intro') || $user->getComponentValue('Trabajos','Galería')))
        <section id="portfolios" class="section">
            <div class="container">
                @if ($user->getComponentValue('Trabajos','Intro'))
                    <div class="section-header">          
                        <h2 class="section-title">{{$user->getComponentValue('Trabajos','Intro')->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE}}</h2>
                        <hr class="lines">
                        <p class="section-subtitle">{{$user->getComponentValue('Trabajos','Intro')->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE}}</p>
                    </div>
                @endif
                
                @if ($user->getComponentValue('Trabajos','Galería'))
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
                                        <img src="{{ asset($campo->where('COMPONENT_TYPE_NAME','Imagen')->first()->VALUE) }}" alt="" />  
                                        <a class="overlay lightbox" href="{{ asset($campo->where('COMPONENT_TYPE_NAME','Imagen')->first()->VALUE) }}">
                                            <i class="lnr lnr-eye item-icon"></i>
                                        </a>
                                    </div>               
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </section>

            @if ($user->getComponentValue('Trabajos','Intro2'))
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
        @endif

        @if ($sections->contains('href','#pricing') && ($user->getComponentValue('Planes','Intro') || $user->getComponentValue('Planes','Planes') || $user->getComponentValue('Planes','Info')))
        <div id="pricing" class="section pricing-section">
            <div class="container">
                @if ($user->getComponentValue('Planes','Intro'))
                <div class="section-header">          
                    <h2 class="section-title">{{$user->getComponentValue('Planes','Intro')->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE}}</h2>
                    <hr class="lines">
                    <p class="section-subtitle">{{$user->getComponentValue('Planes','Intro')->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE}}</p>
                </div>
                @endif

                @if ($user->getComponentValue('Planes','Planes'))
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
                @endif
            </div>
        </div>

            @if ($user->getComponentValue('Planes','Info'))
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
        @endif

        @if ($sections->contains('href','#team') && ($user->getComponentValue('Equipo','Intro') || $user->getComponentValue('Equipo','Equipo')))
        <section id="team" class="section">
            <div class="container">
                @if ($user->getComponentValue('Equipo','Intro'))
                <div class="section-header">          
                    <h2 class="section-title">{{$user->getComponentValue('Equipo','Intro')->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE}}</h2>
                    <hr class="lines">
                    <p class="section-subtitle">{{$user->getComponentValue('Equipo','Intro')->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE}}</p>
                </div>
                @endif
                
                @if ($user->getComponentValue('Equipo','Equipo'))
                <div class="row">
                    @foreach ($user->getComponentValuesGroup('Equipo','Equipo',8) as $campo)
                        <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="single-team">
                                <img src="{{ asset($campo->where('COMPONENT_TYPE_NAME','Imagen')->first()->VALUE) }}" alt="">
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
                @endif
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
                                @if ($user->getComponentValue('Contacto','Título'))
                                <h3>{{$user->getComponentValue('Contacto','Título')}}</h3>
                                @endif
                                
                                <div class="contact-address">
                                    @if ($user->getComponentValue('Contacto','Dirección'))
                                        <p>{{$user->getComponentValue('Contacto','Dirección')}}</p>
                                    @endif
                                    @if ($user->getComponentValue('Contacto','Teléfono'))
                                        <p class="phone">Teléfono: <span>{{$user->getComponentValue('Contacto','Teléfono')}}</span></p>
                                    @endif
                                    @if ($user->getComponentValue('Contacto','Email'))
                                        <p class="email">E-mail: <span>{{$user->getComponentValue('Contacto','Email')}}</span></p>
                                    @endif
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
                        
                        @if ($user->getComponentValue('Contacto','Formulario'))
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
                                    </div>            
                                </form>
                            </div>
                        </div>
                        @endif
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
    </body>
</html>
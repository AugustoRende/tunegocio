<!DOCTYPE html>
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <!--- basic page needs ================================================== -->
    <meta charset="utf-8">
	<title>{{ $user->title }}</title>
	<meta name="description" content="">  
	<meta name="author" content="">

    <!-- mobile specific metas ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS ================================================== -->
    <link rel="stylesheet" href="{{ asset('theme1/app.css') }}">  

    <!-- script ================================================== -->   
	<script src="{{ asset('theme1/app.js') }}"></script>

    <!-- favicons ================================================== -->
	<link rel="icon" type="image/png" href="{{ asset('theme1/favicon.png') }}">

	<style type="text/css">
		/* THEME */
		#loader:before {border-left: 11px solid {{ $user->primary_color }}}
		.pace .pace-progress {background: {{ $user->primary_color }}}
		#go-top a, .menu-toggle span, .menu-toggle.is-clicked span::before, .menu-toggle.is-clicked span::after {background-color: {{ $user->primary_color }}}
		.main-navigation li.current > a, .main-navigation li a:hover {color: {{ $user->primary_color }} }

		/* LOGO */
		@if ($user->logo)
			header .logo a {background: url({{ ($user->logo)}}) no-repeat center; background-size: 92px 15px;}
		@endif

		/* SECTIONS */
		@foreach ($sections as $section)
			@if ($section->href == '#intro')
				.intro-content h5, .intro-social li a:hover, .intro-social li a:focus, button.stroke, a .smoothscroll {color: {{ $user->primary_color }}}
				.intro-content .button:hover, .intro-content .button:focus, button.stroke, .button.stroke, button.stroke:hover, .button.stroke:hover {border: 3px solid {{ $user->primary_color }}; color: {{ $user->primary_color }} }
			@endif

			@if ($section->href == '#about')
				#about .section-intro h5 {color: {{$user->primary_color}} }
			@endif

			@if ($section->href == '#resume')
				#resume .section-intro h5 {color: {{$user->primary_color}} }
				#resume .resume-header h2 {color: {{$user->primary_color}} }
			@endif

			@if ($section->href == '#portfolio')
				#portfolio .section-intro h5 {color: {{$user->primary_color}} } 
			@endif

			@if ($section->href == '#services')
				#services .section-intro h5, .services-list .icon i {color: {{$user->primary_color}} }
				.owl-theme .owl-controls .owl-page.active span {background-color: {{$user->primary_color}} }
			@endif

			@if ($section->href == '#contact')
				#contact .section-intro h5, .contact-info h5 {color: {{$user->primary_color}} }
				#contact button.submitform, #contact button.submitform:hover, #contact form .form-field label {background-color: {{$user->primary_color}} }
				#contact form .form-field label::after {border-right: 5px solid {{$user->primary_color}} }
				#contact input[type="text"]:focus, #contact input[type="password"]:focus, #contact input[type="email"]:focus, #contact textarea:focus {border-color: {{$user->primary_color}} }
			@endif

			/* IMÁGENES Y COLOR DE FONDO */
			/* TODO: RESOLVER PROBLEMA CON LAS SECCIONES QUE ADMITEN IMÁGENES Y SE LE QUIERE DEJAR CON COLOR*/
			@if ($user->secondary_color != '')
				{{$section->href}} {background: {{$user->secondary_color}} no-repeat center bottom; }
			@endif
			
			/* Si la sección acepta imagen y fue seteada */
			/* TODO: VER DE DONDE SACAR ESTOS VALORES */
			/* PONGO ESTE IF PARA QUE NO EXPLOTE EN EL DE ADENTRO*/
			@if (1==0)
				@if ($section->allow_image==1 && $section->pivot->background_img != '')
					{{$section->href}} {background: {{$user->secondary_color}} url({{($section->pivot->background_img)}}) no-repeat center bottom;}
				@endif
			@endif
		@endforeach
	</style>
</head>

<body id="top">
	<!-- header ================================================== -->
   	<header>   	
   		<div class="row">
	   		<div class="top-bar">
   				<a class="menu-toggle" href="#"><span>Menu</span>
		   			<div class="logo">
			        	<a href="index.html"></a>
			    	</div>		      
   				</a>

		   		<nav id="main-nav-wrap">
					<ul class="main-navigation">
						@foreach($sections as $section)
							@if ($section==$sections->first())
								<li class="current"><a class="smoothscroll"  href="{{ $section->href }}" title="">{{ $section->name }}</a></li>
							@else
								<li><a class="smoothscroll"  href="{{ $section->href }}" title="">{{ $section->name }}</a></li>
							@endif
						@endforeach
					</ul>
				</nav>    		
   			</div> 
   		</div> 		
    </header>

	<!-- intro section ================================================== -->
	@if ($sections->contains('href','#intro'))
    <section id="intro">
	   	<div class="intro-overlay"></div>	
		<div class="intro-content">
   			<div class="row">
	   			<div class="col-twelve">
	   				@if ($user->getComponentValue('Inicio','Intro'))
		   				<h5>{{$user->getComponentValue('Inicio','Intro')}}</h5>
		   			@endif
	
	   				@if ($user->getComponentValue('Inicio','Título'))
		   				<h1>{{$user->getComponentValue('Inicio','Título')}}</h1>
		   			@endif
	
	   				@if ($user->getComponentValue('Inicio','Subtítulo'))
			   			<p class="intro-position">
			   				<span>{{$user->getComponentValue('Inicio','Subtítulo')}}</span>
			   			</p>
		   			@endif

	   				@if ($user->getComponentValue('Inicio','Botón'))
			   			<a class="button stroke smoothscroll" href="#about" title="">{{$user->getComponentValue('Inicio','Botón')}}</a>
		   			@endif
		   		</div>  
	   		</div>   		 		
	   	</div>

   		<ul class="intro-social">
   			@foreach ($user->getComponentValuesGroup('Inicio','Red Social') as $social)
         		<li><a href="{{$social->VALUE}}" target="_blank"><i class="fa fa-{{explode('.', $social->VALUE)[1]}}"></i></a></li>
         	@endforeach
      	</ul>
	</section>
	@endif


    <!-- about section ================================================== -->
	@if ($sections->contains('href','#about'))
    <section id="about">  
	   	<div class="row section-intro">
	   		<div class="col-twelve">
   				@if ($user->getComponentValue('Sobre mi','Intro'))
	   				<h5>{{$user->getComponentValue('Sobre mi','Intro')}}</h5>
   				@endif
   				
   				@if ($user->getComponentValue('Sobre mi','Título'))
	   				<h1>{{$user->getComponentValue('Sobre mi','Título')}}</h1>
   				@endif

   				@if ($user->getComponentValue('Sobre mi','Descripción'))
		   			<div class="intro-info">
		   				<img src="{{ asset('theme1/'.$user->getComponentValue('Sobre mi','Imagen')) }}" alt="Profile Picture">
		   				<p class="lead">{{$user->getComponentValue('Sobre mi','Descripción')}}</p>
		   			</div>   			
   				@endif
	   		</div>   		
	   	</div> <!-- /section-intro -->

	   	<div class="row about-content">
	   		<div class="col-six tab-full">
	   			@if ($user->getComponentValue('Sobre mi','Intro Perfil'))
   					<h3>{{$user->getComponentValue('Sobre mi','Intro Perfil')->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE}}</h3>
	   				<p>{{$user->getComponentValue('Sobre mi','Intro Perfil')->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE}}</p>
	   			@endif

	   			<ul class="info-list">
	   				@foreach ($user->getComponentValuesGroup('Sobre mi','Perfil',2) as $campo)
	   					<li>
		   					<strong>{{ $campo->where('COMPONENT_TYPE_NAME','Clave')->first()->VALUE }}</strong>
		   					<span>{{ $campo->where('COMPONENT_TYPE_NAME','Valor')->first()->VALUE }}</span>
		   				</li>
	   				@endforeach
	   			</ul> <!-- /info-list -->
	   		</div>

	   		<div class="col-six tab-full">
	   			@if ($user->getComponentValue('Sobre mi','Intro Skills'))
	   				<h3>{{$user->getComponentValue('Sobre mi','Intro Skills')->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE}}</h3>
	   				<p>{{$user->getComponentValue('Sobre mi','Intro Skills')->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE}}</p>
				@endif

				<ul class="skill-bars">
	   				@foreach ($user->getComponentValuesGroup('Sobre mi','Skills',2) as $campo)
					    <li>
						   	<div class="progress percent{{ $campo->where('COMPONENT_TYPE_NAME','Porcentaje')->first()->VALUE }}">
						   		<span>{{ $campo->where('COMPONENT_TYPE_NAME','Porcentaje')->first()->VALUE }}%</span>
						   	</div>
						   	<strong>{{ $campo->where('COMPONENT_TYPE_NAME','Clave')->first()->VALUE }}</strong>
						</li>
	   				@endforeach
				</ul> <!-- /skill-bars -->		
	   		</div>
	   	</div>

	   	<div class="row button-section">
   			@if ($user->getComponentValue('Sobre mi','Botón'))
		   		<div class="col-twelve">
		   			<a href="#contact" title="Contacteme" class="button stroke smoothscroll">{{$user->getComponentValue('Sobre mi','Botón')}}</a>
		   			<!--a href="#" title="Descargar CV" class="button button-primary">Descargar CV</a-->
		   		</div>   		
   			@endif
	   	</div>
    </section> <!-- /process-->    
	@endif


   	<!-- resume Section ================================================== -->
	@if ($sections->contains('href','#resume'))
	<section id="resume" class="grey-section">
		<div class="row section-intro">
	   		<div class="col-twelve">
	   			@if ($user->getComponentValue('Experiencias','Intro'))
	   				<h5>{{$user->getComponentValue('Experiencias','Intro')}}</h5>
   				@endif

   				@if ($user->getComponentValue('Experiencias','Título'))
	   				<h1>{{$user->getComponentValue('Experiencias','Título')}}</h1>
   				@endif

   				@if ($user->getComponentValue('Experiencias','Descripción'))
   					<p class="lead">{{$user->getComponentValue('Experiencias','Descripción')}}</p>
   				@endif
   			</div>   		
   		</div> <!-- /section-intro--> 

   		<div class="row resume-timeline">
			@if ($user->getComponentValue('Experiencias','Subtítulo1'))
	   			<div class="col-twelve resume-header">
		   			<h2>{{$user->getComponentValue('Experiencias','Subtítulo1')}}</h2>
		   		</div> <!-- /resume-header -->
			@endif

	   		<div class="col-twelve">
	   			<div class="timeline-wrap">
	   				@foreach ($user->getComponentValuesGroup('Experiencias','Estudios',4) as $campo)
		   				<div class="timeline-block">
			   				<div class="timeline-ico">
			   					<i class="fa fa-graduation-cap"></i>
			   				</div>
			   				
			   				<div class="timeline-header">
			   					<h3>{{ $campo->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE }}</h3>
			   					<p>{{ $campo->where('COMPONENT_TYPE_NAME','Fecha')->first()->VALUE }}</p>
			   				</div>

			   				<div class="timeline-content">
			   					<h4>{{ $campo->where('COMPONENT_TYPE_NAME','Subtítulo')->first()->VALUE }}</h4>
			   					<p>{{ $campo->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE }}</p>
			   				</div>
			   			</div> <!-- /timeline-block -->
	   				@endforeach
	   			</div> <!-- /timeline-wrap -->   			
	   		</div> <!-- /col-twelve -->
	   	</div> <!-- /resume-timeline -->
		
   		<div class="row resume-timeline">
		   	@if ($user->getComponentValue('Experiencias','Subtítulo2'))
	   			<div class="col-twelve resume-header">
		   			<h2>{{$user->getComponentValue('Experiencias','Subtítulo2')}}</h2>
		   		</div> <!-- /resume-header -->
			@endif

   			<div class="col-twelve">
	   			<div class="timeline-wrap">
	   				@foreach ($user->getComponentValuesGroup('Experiencias','Trabajos',4) as $campo)
		   				<div class="timeline-block">
			   				<div class="timeline-ico">
			   					<i class="fa fa-briefcase"></i>
			   				</div>
			   				
			   				<div class="timeline-header">
			   					<h3>{{ $campo->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE }}</h3>
			   					<p>{{ $campo->where('COMPONENT_TYPE_NAME','Fecha')->first()->VALUE }}</p>
			   				</div>

			   				<div class="timeline-content">
			   					<h4>{{ $campo->where('COMPONENT_TYPE_NAME','Subtítulo')->first()->VALUE }}</h4>
			   					<p>{{ $campo->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE }}</p>
			   				</div>
			   			</div> <!-- /timeline-block -->
	   				@endforeach
	   			</div> <!-- /timeline-wrap -->   			
	   		</div> <!-- /col-twelve -->
	   	</div> <!-- /resume-timeline -->
	</section> <!-- /features -->
	@endif


	<!-- Portfolio Section ================================================== -->
	@if ($sections->contains('href','#portfolio'))
	<section id="portfolio">
		<div class="row section-intro">
   			<div class="col-twelve">
				@if ($user->getComponentValue('Hobbies','Intro'))
	   				<h5>{{$user->getComponentValue('Hobbies','Intro')}}</h5>
   				@endif

   				@if ($user->getComponentValue('Hobbies','Título'))
	   				<h1>{{$user->getComponentValue('Hobbies','Título')}}</h1>
   				@endif
	   			<!--p class="lead">LOREM</p-->
	   		</div>   		
   		</div> <!-- /section-intro--> 

   		<div class="row portfolio-content">
   			<div class="col-twelve">
	        	<div id="folio-wrapper" class="block-1-2 block-mob-full stack">
	        		{{ $i = 1}}
	        		@foreach ($user->getComponentValuesGroup('Hobbies','Galería',3) as $campo)
	        			<div class="bgrid folio-item">
			               	<div class="item-wrap">
			               		<img src="{{ asset('theme1/'.$campo->where('COMPONENT_TYPE_NAME','Imagen')->first()->VALUE) }}" alt="Fútbol">
			                  	<a href="#modal-{{ $i }}" class="overlay">	                  	           
			                     	<div class="folio-item-table">
			                     		<div class="folio-item-cell">
			     					        <h3 class="folio-title">{{ $campo->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE }}</h3>
				     					</div>	                      	
			                     	</div>                    
			                  	</a>
			               	</div>	               
		        		</div>

		        		<div id="modal-{{ $i }}" class="popup-modal slider mfp-hide">	
					     	<div class="media">
					     		<img src="{{ asset('theme1/'.$campo->where('COMPONENT_TYPE_NAME','Imagen')->first()->VALUE) }}" alt="" />
					     	</div>      	
						   	<div class="description-box">
						    	<h4>{{ $campo->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE }}</h4>		      
						      	<p>{{ $campo->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE }}</p>
						   	</div>
						</div>
						{{ $i++ }}
	        		@endforeach
	        	</div> <!-- /portfolio-wrapper --> 
	   		</div>  <!-- /twelve -->   
	   	</div> <!-- /portfolio-content --> 
	</section> <!-- /portfolio --> 
	@endif

	
	<!-- services Section ================================================== -->
	@if ($sections->contains('href','#services'))
	<section id="services">
		<div class="overlay"></div>
		<div class="row section-intro">
	   		<div class="col-twelve">
	   			@if ($user->getComponentValue('Servicios','Intro'))
	   				<h5>{{$user->getComponentValue('Servicios','Intro')}}</h5>
   				@endif

   				@if ($user->getComponentValue('Servicios','Título'))
	   				<h1>{{$user->getComponentValue('Servicios','Título')}}</h1>
   				@endif
	   		</div>   		
	   	</div>

	   	<div class="row services-content">
	   		<div id="owl-slider" class="owl-carousel services-list">
        		@foreach ($user->getComponentValuesGroup('Servicios','Carrousel',3) as $campo)
        			<div class="service">	
			      		<span class="icon"><i class="{{ $campo->where('COMPONENT_TYPE_NAME','Icono')->first()->VALUE }}"></i></span>            
			            <div class="service-content">	
			            	<h3>{{ $campo->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE }}</h3>
				            <p class="desc">{{ $campo->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE }}</p>
			         	</div> 	         	 
					</div>
        		@endforeach
	        </div>
	   	</div>
	</section> <!-- /services -->	
	@endif

	
   <!-- contact ================================================== -->
	@if ($sections->contains('href','#contact'))
	<section id="contact">
		<div class="row section-intro">
	   		<div class="col-twelve">
	   			@if ($user->getComponentValue('Contacto','Intro'))
	   				<h5>{{$user->getComponentValue('Contacto','Intro')}}</h5>
   				@endif

   				@if ($user->getComponentValue('Contacto','Título'))
	   				<h1>{{$user->getComponentValue('Contacto','Título')}}</h1>
   				@endif
	   		</div> 
	   	</div>

	   	<div class="row contact-form">
	   		<div class="col-twelve">
	            <form name="contactForm" id="contactForm" method="post" action="">
	      			<fieldset>
        				@foreach ($user->getComponentValuesGroup('Contacto','Formulario') as $campo)
	                  		<div class="form-field">
	        					@if ($campo->COMPONENT_TYPE_NAME == 'Mensaje')
		                 			<textarea name="contact{{$campo->VALUE}}" id="contact{{$campo->VALUE}}" placeholder="{{$campo->VALUE}}" rows="10" cols="50" required=""></textarea>
	        					@endif
	        					@if ($campo->COMPONENT_TYPE_NAME == 'Botón')
	        						<button class="submitform">{{$campo->VALUE}}</button>
			                     	<div id="submit-loader">
			                        	<div class="text-loader">Enviando...</div>                             
		       				      		<div class="s-loader">
										  	<div class="bounce1"></div>
										  	<div class="bounce2"></div>
										  	<div class="bounce3"></div>
										</div>
									</div>
	        					@endif
	        					@if ($campo->COMPONENT_TYPE_NAME != 'Mensaje' && $campo->COMPONENT_TYPE_NAME != 'Botón')
			 					    <input name="contact{{$campo->VALUE}}" type="text" id="contact{{$campo->VALUE}}" placeholder="{{$campo->VALUE}}" value="" minlength="2" required="">
	        					@endif
	                  		</div>
        				@endforeach
	      			</fieldset>
	      		</form>

	            <div id="message-warning"></div>            
	      		<div id="message-success">
	               <i class="fa fa-check"></i>Su mensaje fue enviado, Muchas Gracias!<br>
	      		</div>
	        </div>
	   	</div>

	   	<div class="row contact-info">
			@foreach ($user->getComponentValuesGroup('Contacto','Info',3) as $campo)
				<div class="col-four tab-full">
	   			<div class="icon">
	   				<i class="{{ $campo->where('COMPONENT_TYPE_NAME','Icono')->first()->VALUE }}"></i>
	   			</div>

	   			<h5>{{ $campo->where('COMPONENT_TYPE_NAME','Título')->first()->VALUE }}</h5>
	   			<p>{{ $campo->where('COMPONENT_TYPE_NAME','Descripción')->first()->VALUE }}</p>
	   		</div>
			@endforeach
	   	</div>
	</section>
	@endif


    <!-- footer ================================================== -->
	@if ($sections->isNotEmpty())
    <footer>
     	<div class="row">
     		<div class="col-six tab-full pull-right social">
     			<ul class="footer-social">
     				{{-- //TODO: CABLEAR LOS DATOS DE INFINIT --}}
     				@foreach ($user->getComponentValuesGroup('Inicio','Red Social') as $social)
		         		<li><a href="{{$social->VALUE}}" target="_blank"><i class="fa fa-{{explode('.', $social->VALUE)[1]}}"></i></a></li>
		         	@endforeach
			   </ul> 
	        </div>

	      	<div class="col-six tab-full">
		      	<div class="copyright">
		        	<span>© Copyright InfinIT 2018.</span> 
		        </div>		                  
	      	</div>

	      	<div id="go-top">
	         	<a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		    </div>
      	</div> <!-- /row -->     	
    </footer>  
	@endif

    <div id="preloader"> 
    	<div id="loader"></div>
    </div> 

	<script src="{{ asset('theme1/main.js') }}"></script>
</body>

</html>
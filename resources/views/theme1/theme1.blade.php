<!DOCTYPE html>
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <!--- basic page needs ================================================== -->
    <meta charset="utf-8">
	<title>{{ $user->tittle }}</title>
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
			header .logo a {background: url({{($user->logo)}}) no-repeat center; background-size: 92px 15px;}
		@endif

		/* SECTIONS */
		@foreach ($sections as $section)
			@if ($section->href == '#intro')
				.intro-content h5, .intro-social li a:hover, .intro-social li a:focus, button.stroke, a .smoothscroll {color: {{ $section->pivot->primary_color }}}
				.intro-content .button:hover, .intro-content .button:focus, button.stroke, .button.stroke, button.stroke:hover, .button.stroke:hover {border: 3px solid {{ $section->pivot->primary_color }}; color: {{ $section->pivot->primary_color }} }
			@endif

			@if ($section->href == '#about')
				#about .section-intro h5 {color: {{$section->pivot->primary_color}} }
			@endif

			@if ($section->href == '#resume')
				#resume .section-intro h5 {color: {{$section->pivot->primary_color}} }
				#resume .resume-header h2 {color: {{$section->pivot->primary_color}} }
			@endif

			@if ($section->href == '#portfolio')
				#portfolio .section-intro h5 {color: {{$section->pivot->primary_color}} } 
			@endif

			@if ($section->href == '#services')
				#services .section-intro h5, .services-list .icon i {color: {{$section->pivot->primary_color}} }
				.owl-theme .owl-controls .owl-page.active span {background-color: {{$section->pivot->primary_color}} }
			@endif

			@if ($section->href == '#contact')
				#contact .section-intro h5, .contact-info h5 {color: {{$section->pivot->primary_color}} }
				#contact button.submitform, #contact button.submitform:hover, #contact form .form-field label {background-color: {{$section->pivot->primary_color}} }
				#contact form .form-field label::after {border-right: 5px solid {{$section->pivot->primary_color}} }
				#contact input[type="text"]:focus, #contact input[type="password"]:focus, #contact input[type="email"]:focus, #contact textarea:focus {border-color: {{$section->pivot->primary_color}} }
			@endif

			/* IMÁGENES Y COLOR DE FONDO */
			/* TODO: RESOLVER PROBLEMA CON LAS SECCIONES QUE ADMITEN IMÁGENES Y SE LE QUIERE DEJAR CON COLOR*/
			@if ($section->pivot->background_color != '')
				{{$section->href}} {background: {{$section->pivot->background_color}} no-repeat center bottom; }
			@endif
			
			/* Si la sección acepta imagen y fue seteada */
			@if ($section->allow_image==1 && $section->pivot->background_img != '')
				{{$section->href}} {background: {{$section->pivot->background_color}} url({{($section->pivot->background_img)}}) no-repeat center bottom;}
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
   			</div> <!-- /top-bar --> 
   		</div> <!-- /row --> 		
    </header> <!-- /header -->

	<!-- intro section ================================================== -->
	@if ($sections->contains('href','#intro'))
    <section id="intro">
	   	<div class="intro-overlay"></div>	
		<div class="intro-content">
   			<div class="row">
	   			<div class="col-twelve">
		   			<h5>{{$user->getComponentValue('Inicio','Intro')}}</h5>
		   			<h1>{{$user->getComponentValue('Inicio','Título')}}</h1>

		   			<p class="intro-position">
		   				<span>{{$user->getComponentValue('Inicio','Subtítulo')}}</span>
		   			</p>

		   			<a class="button stroke smoothscroll" href="#about" title="">{{$user->getComponentValue('Inicio','Botón')}}</a>
		   		</div>  
	   		</div>   		 		
	   	</div> <!-- /intro-content --> 

   		<ul class="intro-social">
   			@foreach ($user->getComponentValuesGroup('Inicio','Red Social') as $social)
         		<li><a href="{{$social->VALUE}}" target="_blank"><i class="fa fa-{{explode('.', $social->VALUE)[1]}}"></i></a></li>
         	@endforeach
      	</ul> <!-- /intro-social -->      	
	</section> <!-- /intro -->
	@endif


    <!-- about section ================================================== -->
	@if ($sections->contains('href','#about'))
    <section id="about">  
	   	<div class="row section-intro">
	   		<div class="col-twelve">
	   			<h5>{{$user->getComponentValue('Sobre mi','Intro')}}</h5>
	   			<h1>{{$user->getComponentValue('Sobre mi','Titulo')}}</h1>

	   			<div class="intro-info">
	   				<img src="{{ asset('theme1/'.$user->getComponentValue('Sobre mi','Imagen')) }}" alt="Profile Picture">
	   				<p class="lead">{{$user->getComponentValue('Sobre mi','Descripción')}}</p>
	   			</div>   			
	   		</div>   		
	   	</div> <!-- /section-intro -->

	   	<div class="row about-content">
	   		<div class="col-six tab-full">
	   			<h3>{{$user->getComponentValue('Sobre mi','Intro Perfil')->where('TYPE_ATTRIBUTE_NAME','Título')->first()->VALUE}}</h3>
	   			<p>{{$user->getComponentValue('Sobre mi','Intro Perfil')->where('TYPE_ATTRIBUTE_NAME','Descripción')->first()->VALUE}}</p>

	   			<ul class="info-list">
	   				@foreach ($user->getComponentValuesGroup('Sobre mi','Perfil',2) as $campo)
	   					<li>
		   					<strong>{{ $campo->where('TYPE_ATTRIBUTE_NAME','Clave')->first()->VALUE }}</strong>
		   					<span>{{ $campo->where('TYPE_ATTRIBUTE_NAME','Valor')->first()->VALUE }}</span>
		   				</li>
	   				@endforeach
	   			</ul> <!-- /info-list -->
	   		</div>

	   		<div class="col-six tab-full">
	   			<h3>{{$user->getComponentValue('Sobre mi','Intro Skills')->where('TYPE_ATTRIBUTE_NAME','Título')->first()->VALUE}}</h3>
	   			<p>{{$user->getComponentValue('Sobre mi','Intro Skills')->where('TYPE_ATTRIBUTE_NAME','Descripción')->first()->VALUE}}</p>
				
				<ul class="skill-bars">
	   				@foreach ($user->getComponentValuesGroup('Sobre mi','Skills',2) as $campo)
					    <li>
						   	<div class="progress percent{{ $campo->where('TYPE_ATTRIBUTE_NAME','Porcentaje')->first()->VALUE }}">
						   		<span>{{ $campo->where('TYPE_ATTRIBUTE_NAME','Porcentaje')->first()->VALUE }}%</span>
						   	</div>
						   	<strong>{{ $campo->where('TYPE_ATTRIBUTE_NAME','Clave')->first()->VALUE }}</strong>
						</li>
	   				@endforeach
				</ul> <!-- /skill-bars -->		
	   		</div>
	   	</div>

	   	<div class="row button-section">
	   		<div class="col-twelve">
	   			<a href="#contact" title="Contacteme" class="button stroke smoothscroll">Contácteme</a>
	   			<!--a href="#" title="Descargar CV" class="button button-primary">Descargar CV</a-->
	   		</div>   		
	   	</div>
    </section> <!-- /process-->    
	@endif


   	<!-- resume Section ================================================== -->
	@if ($sections->contains('href','#resume'))
	<section id="resume" class="grey-section">
		<div class="row section-intro">
	   		<div class="col-twelve">
   				<h5>Experiencias</h5>
   				<h1>Mis Acreditaciones.</h1>

   				<p class="lead">A continuación se puede observar la formación que he obtenido tanto en el ámbito académico como en el laboral.</p>
   			</div>   		
   		</div> <!-- /section-intro--> 

   		<div class="row resume-timeline">
   			<div class="col-twelve resume-header">
	   			<h2>Estudios Realizados</h2>
	   		</div> <!-- /resume-header -->

	   		<div class="col-twelve">
	   			<div class="timeline-wrap">
		   			<div class="timeline-block">
		   				<div class="timeline-ico">
		   					<i class="fa fa-graduation-cap"></i>
		   				</div>
		   				
		   				<div class="timeline-header">
		   					<h3>Bachiller en Ecionomía y Gestión de las Organizaciones</h3>
		   					<p>Enero 2008 - Diciembre 2010</p>
		   				</div>

		   				<div class="timeline-content">
		   					<h4>Escuela Normal N°1 - Mary O. Graham - Argentina, Buenos Aires, La Plata</h4>
		   					<p>En esta institución pasé gran parte de mi infancia y adolescencia. Sin dudas me queda un gran recuerdo de aquel lugar en el que supe recibir todas las herramientas necesarias para iniciar mi carrera universitaria.</p>
		   				</div>
		   			</div> <!-- /timeline-block -->
	   				
	   				<div class="timeline-block">
		   				<div class="timeline-ico">
		   					<i class="fa fa-graduation-cap"></i>
		   				</div>

		   				<div class="timeline-header">
		   					<h3>Ingeniería en Sistemas de Información</h3>
		   					<p>Febrero 2011 - Marzo 2017</p>
		   				</div>

		   				<div class="timeline-content">
		   					<h4>Universidad Tecnológica Nacional - Argentina, Buenos Aires, La Plata</h4>
		   					<p>Un gran desafío en mi vida. Con altibajos y mucho esfuerzo logré llevar adelante la carrera de grado. Un lugar muy propocio para el crecimiento personal y profesional.</p>
		   				</div>
		   			</div> <!-- /timeline-block -->
	   			</div> <!-- /timeline-wrap -->   			
	   		</div> <!-- /col-twelve -->
	   	</div> <!-- /resume-timeline -->
		
   		<div class="row resume-timeline">
	   		<div class="col-twelve resume-header">
	   			<h2>Trabajos</h2>
	   		</div> <!-- /resume-header -->

   			<div class="col-twelve">
	   			<div class="timeline-wrap">
	   				<div class="timeline-block">
		   				<div class="timeline-ico">
		   					<i class="fa fa-briefcase"></i>
		   				</div>

		   				<div class="timeline-header">
		   					<h3>Desarrollador (C# - .Net)</h3>
		   					<p>Junio 2014 - Octubre 2014</p>
		   				</div>

		   				<div class="timeline-content">
		   					<h4>Accenture - Argentina, Buenos Aires, La Plata</h4>
		   					<p>Mi primer experiencia laboral en el ámbito informático. Una linda pero corta experiencia. Me gustaría haber trabajado un tiempo más en este lugar, pero una mejor oportunidad se cruzó en mi camino y decidí cambiar de rumbo.</p>
		   				</div>
		   			</div> <!-- /timeline-block -->

		   			<div class="timeline-block">
		   				<div class="timeline-ico">
		   					<i class="fa fa-briefcase"></i>
		   				</div>

		   				<div class="timeline-header">
		   					<h3>Analista, Diseñador, Desarrollador (Oracle, Visual Basic 6.0)</h3>
		   					<p>Octubre 2014 - Septiembre 2017</p>
		   				</div>

		   				<div class="timeline-content">
		   					<h4>Ministerio de Economía - Argentina, Buenos Aires, La Plata</h4>
		   					<p>Una oportunidad que llegó casi sin buscarla. Un lindo recorrido de 3 años en el cual pude generar buenas bases de conocimiento. Pude profundizar todo lo necesario en tecnologías de hace algún tiempo. Uno de los puntos a destacar es el trabajo con bases de datos Oracle de gran tamaño y complejidad.</p>
		   				</div>
		   			</div> <!-- /timeline-block -->

		   			<div class="timeline-block">
		   				<div class="timeline-ico">
		   					<i class="fa fa-briefcase"></i>
		   				</div>

		   				<div class="timeline-header">
		   					<h3>Ingeniero DevOps</h3>
		   					<p>Septiembre 2017 - Actualidad</p>
		   				</div>

		   				<div class="timeline-content">
		   					<h4>Ministerio de Economía - Argentina, Buenos Aires, La Plata</h4>
		   					<p>Un gran paso en mi carrera profesional. Un punto de partida para comenzar a ver el software desde un lugar más macro. Teniendo en cuenta temas como infraestructura, planificación, automatización, monitoreo, gestión.</p>
		   				</div>
		   			</div> <!-- /timeline-block -->

		   			<div class="timeline-block">
		   				<div class="timeline-ico">
		   					<i class="fa fa-briefcase"></i>
		   				</div>

		   				<div class="timeline-header">
		   					<h3>Líder de Proyecto</h3>
		   					<p>Febrero 2015 - Actualidad</p>
		   				</div>

		   				<div class="timeline-content">
		   					<h4>Julasoft SA - Argentina, Buenos Aires, La Plata</h4>
		   					<p>Siempre sostuve que no quería ser toda mi vida un desarrollador que va de un framework en otro, sino que quería ir un paso más allá. Una gran oportunidad se me presentó y no podía dejarla pasar. Así es que comencé de a poco a gestionar proyectos tanto hacia adentro de la empresa, como hacia afuera en la relación con los clientes.</p>
		   				</div>
		   			</div> <!-- /timeline-block -->

		   			<div class="timeline-block">
		   				<div class="timeline-ico">
		   					<i class="fa fa-briefcase"></i>
		   				</div>

		   				<div class="timeline-header">
		   					<h3>Co-Fundador</h3>
		   					<p>Enero 2018 - Actualidad</p>
		   				</div>

		   				<div class="timeline-content">
		   					<h4>InfinIT - Soluciones de Software</h4>
		   					<p>El sueño de todo estudiante de Sistemas de Información. Comenzar un emprendimiento personal junto con un amigo de toda la vida, y completarlo con personas de confianza con las que te ha tocado trabajar a lo largo de tu formación profesional parece una ecuación ideal. Estamos al inicio del camino, con muchas energías y recorrido por delante.</p>
		   				</div>
		   			</div> <!-- /timeline-block -->
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
	   			<h5>Mis Hobbies</h5>
	   			<h1>Algo de lo que me apasiona.</h1>
	   			<!--p class="lead">LOREM</p-->
	   		</div>   		
   		</div> <!-- /section-intro--> 

   		<div class="row portfolio-content">
   			<div class="col-twelve">
	        	<div id="folio-wrapper" class="block-1-2 block-mob-full stack">

		         	<div class="bgrid folio-item">
		               	<div class="item-wrap">
		               		<img src="{{ asset('theme1/images/portfolio/futbol.jpg') }}" alt="Fútbol">
		                  	<a href="#modal-01" class="overlay">	                  	           
		                     	<div class="folio-item-table">
		                     		<div class="folio-item-cell">
		     					        <h3 class="folio-title">Fútbol</h3>	     					    
			     					    <!--span class="folio-types">Jugar al Fútbol</span-->
			     					</div>	                      	
		                     	</div>                    
		                  	</a>
		               	</div>	               
	        		</div> <!-- /folio-item -->

	        		<div class="bgrid folio-item">
	                	<div class="item-wrap">
	               			<img src="{{ asset('theme1/images/portfolio/photo.jpg') }}" alt="Fotografía">
	               			<a href="#modal-02" class="overlay">              		                  
	                     		<div class="folio-item-table">
	                     			<div class="folio-item-cell">
	                     				<h3 class="folio-title">Fotografía</h3>	     					    
		     					    		<!--span class="folio-types">Tomar Fotografías</span-->		     		
		     					    </div> 	                      	
	                     		</div>                    
	                  		</a>
	               		</div>
	        		</div> <!-- /folio-item -->

		            <div class="bgrid folio-item">
		               	<div class="item-wrap">
		               		<img src="{{ asset('theme1/images/portfolio/travel.jpg') }}" alt="Viajar">
		                  	<a href="#modal-04" class="overlay">                  	                 
		                     	<div class="folio-item-table">
		                     		<div class="folio-item-cell">
		                     			<h3 class="folio-title">Viajar</h3>	     					    
	     					    		<!--span class="folio-types">Viajar</span-->		     		
	     					   		</div>  	                      	
		                     	</div>                    
		                  	</a>
		               	</div>
	        		</div> <!-- /folio-item -->   

		            <div class="bgrid folio-item">
		                <div class="item-wrap">
		               		<img src="{{ asset('theme1/images/portfolio/piano.jpg') }}" alt="Piano">
		                  	<a href="#modal-03" class="overlay">             		                  
		                     	<div class="folio-item-table">
		                     		<div class="folio-item-cell">
		                     			<h3 class="folio-title">Piano</h3>	     					    
			     					    <!--span class="folio-types">Tocar el Piano</span-->	
			     					</div> 	                      	
		                     	</div>                    
		                  	</a>
		                </div>
	        		</div> <!-- /folio-item -->

		            <!-- modal popups - begin ============================================================= -->
		            <div id="modal-01" class="popup-modal slider mfp-hide">	
				     	<div class="media">
				     		<img src="{{ asset('theme1/images/portfolio//modals/m-futbol.jpg') }}" alt="" />
				     	</div>      	
					   	<div class="description-box">
					    	<h4>Fútbol</h4>		      
					      	<p>Sin dudas el fútbol es mi cable a tierra. Practico este deporte desde los 4 años, y es el momento en el que todos los problemas se borran de mi cabeza y se llena de puro disfrute.</p>
					      	<!--div class="categories">Jugar al Fútbol</div-->			               
					   	</div>

			         	<!--div class="link-box">
				            <a href="http://www.behance.net">Detalles</a>
						    <a href="#" class="popup-modal-dismiss">Cerrar</a>
	    		        </div-->		      
					</div> <!-- /modal-01 -->

				    <div id="modal-02" class="popup-modal slider mfp-hide">	
				     	<div class="media">
				     		<img src="{{ asset('theme1/images/portfolio//modals/m-photo.jpg') }}" alt="" />
				     	</div>      	
 					    <div class="description-box">
						    <h4>Fotografía</h4>		      
						    <p>La fotografía es otra de mis pasatiempos favoritos. En mis tardes libres suelo salir a tomar un poco de aire fresco, y nunca olvido llevar mi cámara. Siempre se encuentra alguna buena imagen para retratar.</p>
   					        <!--div class="categories">Fotografía</div-->
						</div>

				        <!--div class="link-box">
				            <a href="http://www.behance.net">Detalles</a>
						    <a href="#" class="popup-modal-dismiss">Cerrar</a>
				        </div-->		      
				    </div> <!-- /modal-02 -->

					<div id="modal-03" class="popup-modal slider mfp-hide">	
				     	<div class="media">
				     		<img src="{{ asset('theme1/images/portfolio//modals/m-piano.jpg') }}" alt="" />
				     	</div>      	
						<div class="description-box">
						    <h4>Piano</h4>		      
						    <p>Desde chico me sentí atraído por la música, y siempre tuve ganas de poder tocarla yo mismo. El año pasado pude hacer un espacio en mi día a día para comenzar a tocar el piano. Todavía soy un principiante, pero de a poco iré mejorando.</p>
  					        <!--div class="categories">Piano</div-->
						</div>

				        <!--div class="link-box">
				            <a href="http://www.behance.net">Detalles</a>
						    <a href="#" class="popup-modal-dismiss">Cerrar</a>
				        </div-->		      
 				    </div> <!-- /modal-03 -->

					<div id="modal-04" class="popup-modal slider mfp-hide">	
				     	<div class="media">
				     		<img src="{{ asset('theme1/images/portfolio//modals/m-travel.jpg') }}" alt="" />
				     	</div>      	
 					    <div class="description-box">
					        <h4>Viajar</h4>		      
						    <p>Y claro, no podía faltar VIAJAR. Cada vez que voy a salir a la ruta paso horas analizando los caminos a realizar y las atracciones por visitar. Tengo planeado recorrer todo el país. Para esto, voy marcando en un mapa a medida que conozco los distintos lugares de mi país.</p>
						    <!--div class="categories">Viajar</div-->
						</div>

				        <!--div class="link-box">
				            <a href="http://www.behance.net">Detalles</a>
						    <a href="#" class="popup-modal-dismiss">Cerrar</a>
				        </div-->		      
			    	</div> <!-- /modal-04 -->

					<!-- modal popups - end ============================================================= -->

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
	   			<h5>Servicios</h5>
	   			<h1>Qué puedo hacer por vos?</h1>

	   			<!--p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p-->
	   		</div>   		
	   	</div> <!-- /section-intro -->

	   	<div class="row services-content">
	   		<div id="owl-slider" class="owl-carousel services-list">

		      	<div class="service">	
		      		<span class="icon"><i class="icon-earth"></i></span>            
		            <div class="service-content">	
		            	<h3>Soluciones de Software</h3>
			            
			            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
		         	</div> 	         	 
				</div> <!-- /service -->

				<div class="service">	
					<span class="icon"><i class="icon-window"></i></span>                          
		            <div class="service-content">	
		            	<h3>Desarrollo Web</h3>  

			            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
		            </div>	                          
 			    </div> <!-- /service -->

				<div class="service">
				   	<span class="icon"><i class="fa fa-plug" aria-hidden="true"></i></span>		            
		            <div class="service-content">
		            	<h3>DevOps</h3>

			            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p> 
		            </div> 	            	               
			    </div> <!-- /service -->

				<div class="service">
					<span class="icon"><i class="fa fa-database" aria-hidden="true"></i></span>	              
		            <div class="service-content">
		            	<h3>Administrador de Bases de Datos</h3>

			            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p> 
		            </div>                
				</div> 

 			    <div class="service">
				   	<span class="icon"><i class="icon-chat"></i></span>	   	           
		            <div class="service-content">
		            	<h3>Consultoría</h3>

			            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p> 
		            </div>	               
			    </div> <!-- /service -->
	        </div> <!-- /services-list -->
	   	</div> <!-- /services-content -->
	</section> <!-- /services -->	
	@endif

	
   <!-- contact ================================================== -->
	@if ($sections->contains('href','#contact'))
	<section id="contact">
		<div class="row section-intro">
	   		<div class="col-twelve">
	   			<h5>Contacto</h5>
	   			<h1>Estoy esperando a que me contactes.</h1>

	   			<!--p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p-->
	   		</div> 
	   	</div> <!-- /section-intro -->

	   	<div class="row contact-form">
	   		<div class="col-twelve">
	            <!-- form -->
	            <form name="contactForm" id="contactForm" method="post" action="">
	      			<fieldset>
	                  	<div class="form-field">
	 					    <input name="contactName" type="text" id="contactName" placeholder="Nombre" value="" minlength="2" required="">
	                  	</div>
	                  	<div class="form-field">
		      			   	<input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
		               	</div>
	                  	<div class="form-field">
		     				<input name="contactSubject" type="text" id="contactSubject" placeholder="Asunto" value="">
		               	</div>                       
	                  	<div class="form-field">
		                 	<textarea name="contactMessage" id="contactMessage" placeholder="Mensaje" rows="10" cols="50" required=""></textarea>
		               	</div>                      
	                 	<div class="form-field">
	                     	<button class="submitform">Enviar</button>
	                     	<div id="submit-loader">
	                        	<div class="text-loader">Enviando...</div>                             
	       				      		<div class="s-loader">
									  	<div class="bounce1"></div>
									  	<div class="bounce2"></div>
									  	<div class="bounce3"></div>
									</div>
								</div>
	                    </div>
	      			</fieldset>
	      		</form> <!-- Form End -->

	            <!-- contact-warning -->
	            <div id="message-warning"></div>            
	            <!-- contact-success -->
	      		<div id="message-success">
	               <i class="fa fa-check"></i>Su mensaje fue enviado, Muchas Gracias!<br>
	      		</div>
	        </div> <!-- /col-twelve -->
	   	</div> <!-- /contact-form -->

	   	<div class="row contact-info">
	   		<div class="col-four tab-full">
	   			<div class="icon">
	   				<i class="icon-pin"></i>
	   			</div>

	   			<h5>Dónde me encuentro</h5>
	   			<p>
	            	La Plata 1900,<br>
	            	Buenos Aires,<br>
	            	Argentina.
	            </p>
	   		</div>

	   		<div class="col-four tab-full collapse">
	   			<div class="icon">
	   				<i class="icon-mail"></i>
	   			</div>

	   			<h5>Enviame un email a</h5>
	   			<p>augustorendegiacomelli@gmail.com</p>
	   		</div>

	   		<div class="col-four tab-full">
	   			<div class="icon">
	   				<i class="icon-phone"></i>
	   			</div>

	   			<h5>Llamame al</h5>
	   			<p>Mobile: (+54) 9 221 435 3738</p>
	   		</div>
	   	</div> <!-- /contact-info -->
	</section> <!-- /contact -->
	@endif


    <!-- footer ================================================== -->
	@if ($sections->isNotEmpty())
    <footer>
     	<div class="row">
     		<div class="col-six tab-full pull-right social">
     			<ul class="footer-social">        
			      <li><a href="https://www.facebook.com/augustorendegiacomelli" target="_blank"><i class="fa fa-facebook"></i></a></li>
			      <li><a href="https://www.linkedin.com/in/augusto-rende-giacomelli" target="_blank"><i class="fa fa-linkedin"></i></a></li>
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
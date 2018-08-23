<div id="themeSelection">
	 <section class="gallery-block cards-gallery">
	    <div class="container">
	        <div class="heading">
	          <h2>Por favor, seleccione un tema del listado</h2>
	        </div>
	        <div class="row">
	        	{{-- @for($i=0; $i<10; $i++) --}}
		    	@foreach ($themes as $theme)
		            <div class="col-md-6 col-lg-4">
		                <div class="card border-0 transform-on-hover" id="theme{{ $theme->id }}" onclick="saveTheme({{ $theme->id }})">
		                	<a class="lightbox">
		                		<img src="{{ asset('images/'.$theme->img) }}" alt="{{ $theme->name }}" class="card-img-top">
		                	</a>
		                    <div class="card-body row align-items-center">
	    						<div class="col-8">
			                        <h6>{{ $theme->name }}</h6>
		                    	</div>
	    						<div class="col-4">
					                <h7><a href="sites/{{ $theme->demo_url }}" class="btn btn-outline-info" target="_blank" title="Ver Demo">Ver Demo</a></h7>
		                    	</div>
		                    </div>
		                </div>
		            </div>
		    	@endforeach
		    	{{-- @endfor --}}
	        </div>
	    </div>
    </section>
    
    <div class="row justify-content-end">
	    <div class="col-3">
	    	<button id="next" type="button" class="btn btn-outline-success" disabled>Continuar</button>
	    </div>
    </div>
</div>
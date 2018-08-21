<div id="themeSelection">
	<div class="row">
	    <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        <h2 class="gallery-title">Por favor, seleccione un tema del listado</h2>
	    </div>

	    <div align="center">
	        <button class="btn btn-default filter-button" data-filter="all">All</button>
	        <button class="btn btn-default filter-button" data-filter="hdpe">HDPE Pipes</button>
	        <button class="btn btn-default filter-button" data-filter="sprinkle">Sprinkle Pipes</button>
	        <button class="btn btn-default filter-button" data-filter="spray">Spray Nozzle</button>
	        <button class="btn btn-default filter-button" data-filter="irrigation">Irrigation Pipes</button>
	    </div>
	    <br/>

	    {{-- @for ($i = 0; $i < 10; $i++) --}}
		    @foreach ($themes as $theme)
		    	<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
			    	<div class="thumbnail" id="theme{{ $theme->id }}">
			    		<div class="caption" onclick="saveTheme({{ $theme->id }})">
			    			<div class="cuerpo">
				                <h3>{{ $theme->name }}</h3>
				                {{-- <p>short thumbnail description</p> --}}
				                <h4><a href="sites/{{ $theme->demo_url }}" class="label label-default" target="_blank" rel="tooltip" title="Ver Demo">Ver Demo</a></h4>
			            	</div>
			            </div>
			        	<img src="{{ asset('images/'.$theme->img) }}" class="img-responsive">
			        </div>
			    </div>
		    @endforeach
		{{-- @endfor --}}
	</div>

	<div class="row">
	    <div class="gallery col-lg-offset-8 col-md-offset-8 col-sm-offset-8 col-xs-offset-6">
            <h2><a href="#" id="next" class="label label-default" rel="tooltip" title="Continuar" disabled>Continuar</a></h2>
		</div>
	</div>
</div>
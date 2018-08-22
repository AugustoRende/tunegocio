<div id="themeEdition">
	<div class="row">
		<div class="col-md-4">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			    <div class="accordion" id="accordionExample">
					@php ($i = 0)
					@foreach($sections as $section)
					@php ($i++)
					    <div class="card">
						    <div class="card-header" id="heading{{$section->name}}">
						        <h5 class="mb-0">
							        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$section->name}}" aria-expanded="true" aria-controls="collapse{{$section->name}}">
							          	{{$section->name}}
							        </button>
							    </h5>
						    </div>

						    @if($i==1)
					    		<div id="collapse{{$section->name}}" class="collapse show" aria-labelledby="heading{{$section->name}}" data-parent="#accordionExample">
			    			@else
					    		<div id="collapse{{$section->name}}" class="collapse" aria-labelledby="heading{{$section->name}}" data-parent="#accordionExample">
				    		@endif
							    <div class="card-body">
							    	<form>
							      		@foreach($user->getSectionValues($section->name) as $item)
										  	<div class="form-group row">
											    <label for="{{$section->name.'-'.$item->COMPONENT_TYPE_NAME}}" class="col-sm-3 control-label">{{$item->COMPONENT_TYPE_NAME}}</label>
											    <div class="col-sm-9">
											      	<input type="text" class="form-control save{{$section->name}}" id="{{$section->name.'-'.$item->COMPONENT_TYPE_NAME}}" value="{{$item->VALUE}}" title="{{$item->csua_id}}">
											    </div>
											</div>
										@endforeach
											
										<div class="form-group row justify-content-end">
										    <div class="col-4">
										      	<button id="save{{$section->name}}" type="button" class="btn btn-default saveChanges">Guardar Cambios</button>
										    </div>
									 	</div>
									</form>
							    </div>
						    </div>
			    		</div>
					@endforeach
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="embed-container">
				    <iframe id="themePreview" width="560" height="315" src="http://localhost:8000/sites/infinit" frameborder="0" allowfullscreen></iframe>
				</div>
				{{-- @include('theme2.body') --}}
			</div>
		</div>
	</div>
</div>

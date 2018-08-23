<div id="themeEdition">
	<div class="row">
		<div class="col-md-4">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			    <div class="accordion" id="accordionExample">
					@php ($i = 0)
					@foreach($sections as $section)
					@php ($i++)
					    <div class="card">
						    <div class="card-header" id="heading{{$section->code}}">
						        <h5 class="mb-0">
							        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$section->code}}" aria-expanded="true" aria-controls="collapse{{$section->code}}">
							          	{{$section->name}}
							        </button>
							    </h5>
						    </div>

						    @if($i==1)
					    		<div id="collapse{{$section->code}}" class="collapse show" aria-labelledby="heading{{$section->code}}" data-parent="#accordionExample">
			    			@else
					    		<div id="collapse{{$section->code}}" class="collapse" aria-labelledby="heading{{$section->code}}" data-parent="#accordionExample">
				    		@endif
							    <div class="card-body">
							    	<form>
							      		@foreach($user->getSectionValues($section->name) as $item)
										  	<div class="form-group row">
											    <label for="{{$section->code.'-'.$item->COMPONENT_TYPE_NAME}}" class="col-sm-3 control-label">{{$item->COMPONENT_TYPE_NAME}}</label>
											    <div class="col-sm-9">
											      	<input type="text" class="form-control save{{$section->code}} campo" name="save{{$section->code}}" id="{{$section->code.'-'.$item->COMPONENT_TYPE_NAME}}" value="{{$item->VALUE}}" title="{{$item->csua_id}}">
											    </div>
											</div>
										@endforeach
											
										<div class="form-group row justify-content-end">
										    <div class="col-4">
										      	<button id="save{{$section->code}}" type="button" class="btn btn-outline-default saveChanges" disabled>Guardar Cambios</button>
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
				<div class="embed-responsive embed-responsive-16by9">
				  	<iframe id="themePreview" class="embed-responsive-item" src="http://localhost:8000/sites/{{$user->url}}" allowfullscreen></iframe>
				</div>
				{{-- @include('theme2.body') --}}
			</div>
		</div>
	</div>
</div>

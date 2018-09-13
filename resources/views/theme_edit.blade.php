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
						    	<div class="row align-items-center justify-content-between">
						    		<div class="col-md-6">
								        <h5 class="mb-0">
									        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$section->code}}" aria-expanded="true" aria-controls="collapse{{$section->code}}">
									          	{{$section->name}}
									        </button>
									    </h5>
						    		</div>
						    		<div class="col-md-1">
								        <label class="switch">
								        	@if ($section->visible == '1')
										  		<input id="big-slider-{{$section->code}}" class="big-slider" type="checkbox" checked title="{{$section->id}}">
										  	@else
										  		<input id="big-slider-{{$section->code}}" class="big-slider" type="checkbox" title="{{$section->id}}">
										  	@endif
										  	<span class="slider round"></span>
										</label>
						    		</div>
						    	</div>
						    </div>

						    @if($i==1)
					    		<div id="collapse{{$section->code}}" class="collapse show" aria-labelledby="heading{{$section->code}}" data-parent="#accordionExample">
			    			@else
					    		<div id="collapse{{$section->code}}" class="collapse" aria-labelledby="heading{{$section->code}}" data-parent="#accordionExample">
				    		@endif
							    <div class="card-body">
							    	<form enctype="multipart/form-data">
							    		@php ($first = true)
							      		@foreach($user->getSectionValuesToEdit($section->name) as $item)
											@if($item->order == 1 && !$first)
										    	</div>
										    	<div class="shadow p-3 mb-3 bg-white rounded">
											@endif
											@if($item->order == 1 && $first)
							    				@php ($first = false)
										    	<div class="shadow p-3 mb-3 bg-white rounded">
											@endif
												  	<div class="form-group row align-items-center">
													    <div class="col-md-3">
													    	<label for="{{$section->code.'-'.$item->COMPONENT_TYPE_NAME}}" class="control-label">{{$item->COMPONENT_TYPE_NAME}}</label>
													    </div>
													    <div class="col-md-8">
													    	@if ($item->COMPONENT_TYPE != 'LONG_TEXT' && $item->COMPONENT_TYPE != 'IMG')
													    	{{-- @if ($item->COMPONENT_TYPE == 'TEXT') --}}
													      		<input type="text" class="form-control save{{$section->code}} campo" name="save{{$section->code}}" id="{{$section->code.'-'.$item->COMPONENT_TYPE_NAME.'-'.$item->csua_id}}" value="{{$item->VALUE}}" title="{{$item->csua_id}}">
													      	@endif
													    	@if ($item->COMPONENT_TYPE == 'LONG_TEXT')
													      	    <textarea class="form-control save{{$section->code}} campo" name="save{{$section->code}}" id="{{$section->code.'-'.$item->COMPONENT_TYPE_NAME.'-'.$item->csua_id}}" rows="3" title="{{$item->csua_id}}">{{$item->VALUE}}</textarea>
													      	@endif
													    	@if ($item->COMPONENT_TYPE == 'IMG')
													    	 	<div class="row">
													    			<div class="col-md-3">
												    					<img src="{{ asset($item->VALUE) }}" alt="" style="width: 100%;">
													    	 		</div>
													    	 		<div class="col-md-9">
														    	 		<form method="post" action="{{url('/uploadImage')}}" enctype="multipart/form-data">
																		    {{ csrf_field() }}
																		    <div class="form-group">
																		        <input type="hidden" name="csua_id" value="{{$item->csua_id}}"/>
																		        <input type="file" class="form-control uploadImage" name="image"/>
																		    </div>
																		</form>
																	</div>
													    		    	{{-- <input type="file" class="form-control-file save{{$section->code}} campo" name="save{{$section->code}}" id="{{$section->code.'-'.$item->COMPONENT_TYPE_NAME.'-'.$item->csua_id}}" title="{{$item->csua_id}}"> --}}
													    	 	</div>
													      	@endif
													    </div>
													    <div class="col-md-1">
													        <label class="switch small">
													        	@if ($item->visible == '1')
																  	<input class="big-slider-{{$section->code}}" type="checkbox" checked title="{{$item->csua_id}}">
															  	@else
																  	<input class="big-slider-{{$section->code}}" type="checkbox" title="{{$item->csua_id}}">
															  	@endif
															  	<span class="slider round small"></span>
															</label>
											    		</div>
													</div>
										@endforeach
												</div> {{-- Cierro el último agrupamiento --}}
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

<div id="themeEdition">
	<div class="row">
		<div class="col-md-4">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				@foreach($sections as $section)
					<div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="heading{{$section->name}}">
					        <h4 class="panel-title">
					        	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$section->name}}" aria-expanded="false" aria-controls="{{$section->name}}">
					          		{{$section->name}}
					        	</a>
					      	</h4>
					    </div>
					    <div id="{{$section->name}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$section->name}}">
					      	<div class="panel-body">
					      		<form class="form-horizontal">
						      		@foreach($user->getSectionValues($section->name) as $item)
									  	<div class="form-group">
										    <label for="{{$section->name.'-'.$item->COMPONENT_TYPE_NAME}}" class="col-sm-2 control-label">{{$item->COMPONENT_TYPE_NAME}}</label>
										    <div class="col-sm-10">
										      	<input type="text" class="form-control save{{$section->name}}" id="{{$section->name.'-'.$item->COMPONENT_TYPE_NAME}}" value="{{$item->VALUE}}" title="{{$item->csu_id.'-'.$item->ca_id.'-'.$item->VALUE}}">
										    </div>
										</div>
									@endforeach
										
									<div class="form-group">
									    <div class="col-sm-offset-2 col-sm-10">
									      <button id="save{{$section->name}}" type="submit" class="btn btn-success saveChanges">Guardar Cambios</button>
									    </div>
								 	</div>
								</form>
					      	</div>
					    </div>
				  	</div>
				@endforeach
			</div>
		</div>
		<div class="col-md-8">
			<div class="row">
				{{-- @include('theme2.body') --}}
			</div>
		</div>
	</div>
</div>

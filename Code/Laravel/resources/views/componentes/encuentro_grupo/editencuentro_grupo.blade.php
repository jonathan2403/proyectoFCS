@extends('layaouts.tablas')
@section('scripts')
   {!!Html::script('/assets/js/load_views.js')!!}
@endsection
@section('content')
  <section class="content">
   <div class="row">
      <div class="col-md-9">
      @include('errors.partials.requesterror')
        <div class="box box-solid box-danger">
        	<div class="box-header with-border">
        		<h3 class="box-title">Editar Encuentro de Grupos</h3>
        		<div class="box-tools">
        			<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        		</div>
        	</div>
        	<div class="box-body">
	        	<div class="row">
	        		<div class="pad">
	        			{!! Form::model($encuentro , $route) !!}
	        			@include('componentes.encuentro_grupo.partials.form')
	        			{!! Form::submit('Editar', ['class' => 'btn btn-danger']) !!}
	        			{!! Form::close() !!}
	        		</div>
	        	</div>
        	</div>
        </div> 	
      </div>
   </div>
  </section>
@endsection
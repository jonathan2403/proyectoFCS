@extends('layaouts.tablas')
@section('scripts')  
	{!!Html::script('/assets/js/base/profesor_modal.js')!!} 
   {!!Html::script('/assets/js/load_views.js')!!}
   {!!Html::script('/assets/js/buscarPersona.js')!!}
   {!!Html::script('/assets/js/componentes/jovenInvestigador/validaJovenInvestigador.js')!!}
@endsection
@section('content')
  <section class="content">
  	<div class="row">
  		<div class="col-md-9">
  		@include('errors.partials.requesterror')
  			<div class="box box-solid box-danger">
  				<div class="box-header with-border">
		              <h3 class="box-title">Registrar Joven Investigador</h3>
		                <div class="box-tools pull-right">
		                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		                </div>
		        </div>
		        <div class="box-body">
		        	<div class="row">
		        		<div class="pad">
		        			{!! Form::open($route + ['id' => 'joven-investigador-form', 'class' => 'formulario_validado']) !!}
		        			 @include('componentes.joven_investigador.partials.form')
		        			{!! Form::submit('Crear', ['class' => 'btn btn-warning']) !!}&nbsp<a href="{{URL('/joven-investigador')}}" class="btn btn-danger" >Cancelar</a>
		        			{!! Form::close() !!}
		        		</div>
		        	</div>
		        </div>
  			</div>
  		</div>
  	</div>
  </section>
@endsection
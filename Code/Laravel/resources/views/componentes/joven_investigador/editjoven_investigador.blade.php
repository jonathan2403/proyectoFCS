@extends('layaouts.tablas')
@section('scripts')  
	{!!Html::script('/assets/js/base/profesor_modal.js')!!} 
	{!!Html::script('/assets/js/base/estudiante_modal.js')!!} 
	<!--{!!Html::script('/assets/js/load_views.js')!!}-->
	{!!Html::script('/assets/js/buscarPersona.js')!!}
@endsection
@section('content')
  <section class="content">
  	<div class="row">
  		<div class="col-md-9">
  			<div class="box box-solid box-danger">
  				<div class="box-header with-border">
		              <h3 class="box-title">Editar Joven Investigador</h3>
		                <div class="box-tools pull-right">
		                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		                </div>
		        </div>
		        <div class="box-body">
		        	<div class="row">
		        		<div class="pad">
		        			{!! Form::model($joven_investigador, $route) !!}
		        			 @include('componentes.joven_investigador.partials.form')
		        			{!! Form::submit('Editar', ['class' => 'btn btn-warning']) !!}&nbsp<a href="{{URL('/joven-investigador')}}" class="btn btn-danger" >Cancelar</a>
		        			{!! Form::close() !!}
		        		</div>
		        	</div>
		        </div>
  			</div>
  		</div>
  	</div>
  </section>
@endsection
@extends('layaouts.tablas')
@section('content')
  <section class="content">
  	<div class="row">
  		<div class="col-md-9">
  			<div class="box box-solid box-danger">
  				<div class="box-header with-border">
		              <h3 class="box-title">Agregar Joven Investigador</h3>
		                <div class="box-tools pull-right">
		                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		                </div>
		        </div>
		        <div class="box-body">
		        	<div class="row">
		        		<div class="pad">
		        			{!! Form::open($route) !!}
		        			 @include('componentes.joven_investigador.partials.form')
		        			{!! Form::submit('Crear', ['class' => 'btn btn-danger']) !!}
		        			{!! Form::close() !!}
		        		</div>
		        	</div>
		        </div>
  			</div>
  		</div>
  	</div>
  </section>
@endsection
@section('scripts')
  <script type="text/javascript">
  	<script type="text/javascript" src="{{URL::to('js/modulos/saldos/buscarPersona.js')}}"></script>
  </script>
@endsection
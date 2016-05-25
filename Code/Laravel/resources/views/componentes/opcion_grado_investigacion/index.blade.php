@extends('layaouts.tablas')
@section('content')
	<section class="content">
	    @include('componentes.opcion_grado_investigacion.partials.modal')
		<div class="row">
			<div class="col-xs-13">
				<div class="box">
					<div class="box-header">
						@include('layaouts.partials.mensaje')
					</div><!-- /.box-header -->
					<div class="box-body">
						<div class="row form-group">
							<div class="col-md-3">
								{!! Form::open(array('route' => 'opcion-grado-investigacion.create', 'method' => 'GET')) !!}
								{!! Form::select('tipo', array('mr' => 'Monografía de Revisión', 'mi' => 'Monografía Investigativa', 'epi' => 'Proyecto EPI'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
							</div>
							<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Registro</button>
          			{!! Form::close() !!}
						</div>
						<table id="example3" class="table table-bordered table-striped">
								<thead>
									<th>Título</th>
									<th>Tipo</th>
									<th>Aprobación</th>
									<th>Informe Final</th>
									<th>Finalizado</th>
									<th>Acción</th>
								</thead>
								<tbody>
									@foreach($opciongrados as $opciongrado)
											<?php $today = date('Y-m-d');
											      $dias = (strtotime($opciongrado->fecha_aprobacion) - strtotime($today))/86400;
											      $dias = floor($dias);
												?>
										@if($opciongrado->finalizado == "Si")
										  <tr>
										@else
										  @if($dias < 0)
										  <tr class="danger">
										  @endif
										  @if($dias < 30 && $dias >= 0)
										  <tr class="info">
										  @endif
										@endif
										 	<td>{!!link_to_route('opcion-grado-investigacion.show', ucfirst($opciongrado->descripcion), $parameters=$opciongrado->id)!!}</td>
											<td>{{$opciongrado->tipo_opcion_grado}}</td>									  
											<td>{{$opciongrado->fecha_aprobacion}} - Acta: {{$opciongrado->numero_acta}}</td>
											<td>{{$opciongrado->fecha_entrega_informe_final}} - Acta: {{$opciongrado->numero_acta_2}}</td>
											<td><center>{{$opciongrado->finalizado}}</center></td>
											<td><center>
													 {!! link_to_route('opcion-grado-investigacion.edit', $title="Editar", $parameters=[$opciongrado->id, $opciongrado->tipo_opcion_grado], $atrributes=['class'=>'btn btn-warning btn-sm']) !!}
												 </center>
											</td>	
										 </tr>
									@endforeach
								</tbody>
							</table>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div><!-- /.col -->
		</div><!-- /.row -->
		<a href="{{URL('/excel/opcion/grado/investigacion')}}" class="btn btn-default" role="button"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel</a>|<a href="{{URL('/pdf/opcion/grado/investigacion')}}" class="btn btn-default" role="button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
	</section><!-- /.content -->
@endsection

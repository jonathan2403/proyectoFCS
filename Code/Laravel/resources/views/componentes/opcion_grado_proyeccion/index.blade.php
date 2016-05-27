@extends('layaouts.tablas')
@section('content')
	<section class="content">
	    @include('componentes.opcion_grado_proyeccion.partials.modal')
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						@include('layaouts.partials.mensaje')
					</div><!-- /.box-header -->
					<div class="box-body">
						<div class="row form-group">
							<div class="col-md-3">
								{!! Form::open(array('route' => 'opcion-grado-proyeccion.create', 'method' => 'GET')) !!}
								{!! Form::select('tipo', array('epps' => 'Proyecto EPPS', 'pas' => 'Pasantía', 'pos' => 'Curso de Posgrado'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
							</div>
							<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> <b>Nueva</b></button>
          			{!! Form::close() !!}
						</div>
						<table id="example3" class="table table-bordered table-striped" style="text-align:center">
								<thead>
									<th>Título</th>
									<th>Tipo</th>
									<th>Entrega al Comité</th>
									<th>Concepto</th>
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
											<td>{!!link_to_route('opcion-grado-proyeccion.show', ucfirst($opciongrado->descripcion), $parameters=[$opciongrado->id, $opciongrado->tipo_opcion_grado])!!}</td>
											<td>{{$opciongrado->tipo_opcion_grado}}</td>
											@if($opciongrado->fecha_aprobacion == '')
											   <td>{{$opciongrado->fecha_aprobacion}}</td>
											@else
											<td>{{$opciongrado->fecha_aprobacion}} - Acta: {{$opciongrado->numero_acta_2}}</td>
											@endif
											@if($opciongrado->concepto_1=='ap')
											<td><center>Aprobado</center></td>
											@endif
											@if($opciongrado->concepto_1=='aa')
											<td><center>Apr. con Ajustes</center></td>
											@endif
											@if($opciongrado->concepto_1=='na')
											<td><center>No Aprobado</center></td>
											@endif
											@if(empty($opciongrado->concepto_1))
											<td><center>No Registra</center></td>
											@endif
											<td>
												<center>
												 {!! link_to_route('opcion-grado-proyeccion.edit', $title='Editar', $parameters=[$opciongrado->id, $opciongrado->tipo_opcion_grado], $atrributes=['class'=>'btn btn-warning btn-sm']) !!}
												 
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
		<a href="{{URL('/opcion/grado/proyeccion/excel')}}" class="btn btn-default"><i class="fa fa-file-excel-o"></i> Excel</a>|<a href="{{URL('/opcion/grado/proyeccion/pdf')}}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i> PDF</a>
	</section><!-- /.content -->
@endsection
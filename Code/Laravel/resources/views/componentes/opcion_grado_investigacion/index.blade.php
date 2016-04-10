@extends('layaouts.tablas')
@section('content')
	<section class="content">
	    @include('componentes.opcion_grado_investigacion.partials.modal')
		<div class="row">
			<div class="col-xs-13">
				<div class="box">
					<div class="box-header">
						@include('layaouts.partials.mensaje')
						<h3 class="box-title">Listado de Opciones de Grado</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
						<div class="row form-group">
							<div class="col-md-3">
								{!! Form::open(array('route' => 'opcion-grado-investigacion.create', 'method' => 'GET')) !!}
								{!! Form::select('tipo', array('mr' => 'Monografía de Revisión', 'mi' => 'Monografía Investigativa', 'epi' => 'Proyecto EPI'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
							</div>
							<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Nueva</button>
          			{!! Form::close() !!}
						</div>
						<table id="example3" class="table table-bordered table-striped">
								<thead>
									<th><center>Id</center></th>
									<th><center>Título</center></th>
									<th><center>Tipo</center></th>
									<th><center>Aprobación</center></th>
									<th><center>Informe Final</center></th>
									<th><center>Finalizado</center></th>
									<th><center>Acción</center></th>
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
										 	<td>{{$opciongrado->id}}</td>
										 	<td>{!!link_to_route('opcion-grado-investigacion.show', ucfirst($opciongrado->descripcion), $parameters=$opciongrado->id)!!}</td>
											<td>{{$opciongrado->tipo_opcion_grado}}</td>
											@if($opciongrado->fecha_aprobacion == '')
											   <td>{{$opciongrado->fecha_aprobacion}}</td>
											@else
											<td>{{$opciongrado->fecha_aprobacion}} - Acta: {{$opciongrado->numero_acta}}</td>
											@endif
											@if($opciongrado->fecha_entrega_informe_final == '')
											   <td>{{$opciongrado->fecha_entrega_informe_final}}</td>
											@else
											<td>{{$opciongrado->fecha_entrega_informe_final}} - Acta: {{$opciongrado->numero_acta_2}}</td>
											@endif
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
		<button type="button" class="btn" onClick ="$('#example3').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"><i class="fa fa-file-pdf-o"></i> PDF</button>|<button id="button-excel" class="btn"><i class="fa fa-file-excel-o"></i> Excel</button>
	</section><!-- /.content -->
@endsection
@section('scripts')
  <script type="text/javascript">
  $(document).ready(function () {
           $("#button-excel").click(function(e) {
           	$("#example3").table2excel({
	    		exclude: ".noExl",
	    		name: "Excel Document Name"
		  });
        });
    });
  </script>
@endsection

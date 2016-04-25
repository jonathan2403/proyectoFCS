@extends('layaouts.tablas')
@section('content')
	<section class="content">

		<div class="row">
			<div class="col-xs-11">
				<div class="box">
					<div class="box-header">
						@include('layaouts.partials.mensaje')
					</div><!-- /.box-header -->
					<div class="box-body">
						<div class="row form-group">
							<div class="col-md-3">
								<a href="{!! URL('grupo-proyeccion/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Grupo</a>
							</div>
						</div>
						<div id="dvData">
							<table id="example3" class="table table-bordered table-striped">
								<thead>
									<th><center>Sigla</center></th>
									<th><center>Nombre del Grupo</center></th>
									<th><center>Coordinador</center></th>
									<!--<th>N° Integrantes</th>-->
									<th><center>Tipo</center></th>
									<th><center>Acción</center></th>
								</thead>
								@foreach($grupos as $grupo)
										<tr data-id="{{ $grupo->id }}">
											<td><center>{{ucwords($grupo->sigla)}}</center></td>
											<td>{!!link_to_route('grupo-proyeccion.show', ucfirst($grupo->descripcion), $parameters=$grupo->id)!!}</td>
											<td><center>{{ucwords($grupo->full_name)}}</center></td>
											<!--<td>{{$integrantes}}</td>-->
											@if($grupo->tipo == 'i')
											<td><center>Investigación</center></td>
											@elseif($grupo->tipo == 'e')
											<td><center>Estudio</center></td>
											@else
											<td><center>Proyeccion Social</center></td>
											@endif
											<td><center>
													 {!! link_to_route('grupo-proyeccion.edit', $title='Editar', $parameters=$grupo->id, $atrributes=['class'=>'btn btn-warning btn-sm']) !!}
												 </center>
											</td>
										</tr>
									@endforeach
								<tbody>
									
								</tbody>
							</table>
						</div>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div><!-- /.col -->
		</div><!-- /.row -->
		<button type="button" class="btn" onClick ="$('#example3').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"><span class="glyphicon glyphicon-download"></span> PDF</button>|<button id="button-excel" class="btn"><span class="glyphicon glyphicon-download"></span> Excel</button>
	</section><!-- /.content -->
@endsection
@section('scripts')
  <script type="text/javascript">
  $(document).ready(function () {
           $("#button-excel").click(function(e) {
          window.open('data:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,' + encodeURIComponent($('#dvData').html()));
        e.preventDefault();
        });
    });
  </script>
@endsection
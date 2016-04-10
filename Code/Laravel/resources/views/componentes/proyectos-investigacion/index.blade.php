@extends('layaouts.tablas')
@section('content')
	<section class="content">
    @include('componentes.proyectos-investigacion.partials.modal')
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
	                  @include('layaouts.partials.mensaje')
						<h3 class="box-title">Listado de Proyectos</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
						<div class="row form-group">
							<div class="col-md-3">
								<a href="{!! URL('proyectos-investigacion/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo</a>
							</div>
						</div>
							<table id="example3" class="table table-bordered table-striped">
								<thead>
									<th><center>Id</center></th>
									<th><center>Título</center></th>
									<th><center>Tipo</center></th>
									<th><center>Investigador Principal</center></th>
									<th><center>Ejecutado</center></th>
									<th><center>Acción</center></th>
								</thead>
								<tbody>
									@foreach($proyectos as $proyecto)
										<tr>
											<td>{{$proyecto->id}}</td>
											<td>{!!link_to_route('proyectos-investigacion.show', ucfirst($proyecto->titulo_proyecto), $parameters=$proyecto->id)!!}</td>
											@if($proyecto->tipo_proyecto == 'cp')
											<td>Conv. Planta</td>
											@endif
											@if($proyecto->tipo_proyecto == 'ccr')
											<td>Conv. con Recursos</td>
											@endif
											@if($proyecto->tipo_proyecto == 'cc')
											<td>Conv. Colciencias</td>
											@endif
											@if($proyecto->tipo_proyecto == 'cct')
											<td>Conv. con Tiempo</td>
											@endif
											@if($proyecto->tipo_proyecto == 'cre')
											<td>Conv. con Rec. Externos</td>
											@endif
											<td>{{ucwords($proyecto->name_investigador)}}</td>
											<td><center>{{$proyecto->ejecutado}}</center></td>
											<td><center>
													 {!! link_to_route('proyectos-investigacion.edit', $title='Editar', $parameters=$proyecto->id, $atrributes=['class'=>'btn btn-warning btn-sm']) !!}
													 
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
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

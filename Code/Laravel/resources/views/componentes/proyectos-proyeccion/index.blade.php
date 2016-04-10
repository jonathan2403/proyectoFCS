@extends('layaouts.tablas')
@section('scripts')
  <script type="text/javascript">
  	$(document).ready(function(){
			$('#edit').tooltip({
				content : "Editar Registro"
			});
		});
  </script>
@endsection
@section('content')
	<section class="content">
    @include('componentes.proyectos-proyeccion.partials.modal')
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
								<a href="{!! URL('proyectos-proyeccion/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i><b> Nuevo</b></a>
							</div>
						</div>
							<table id="example3" class="table table-bordered table-striped">
								<thead>
									<th><center>Id</center></th>
									<th><center>Título</center></th>
									<th><center>Investigador Principal</center></th>
									<th><center>Inicio</center></th>
									<th><center>Ejecutado</center></th>
									<th><center>Acción</center></th>
								</thead>
								<tbody>
									@foreach($proyectos as $proyecto)
										<tr>
											<td>{{$proyecto->id}}</td>
											<td>{!!link_to_route('proyectos-proyeccion.show', $proyecto->titulo_proyecto, $parameters=$proyecto->id)!!}</td>
											<td>{{ucwords($proyecto->nombre_profesor)}}</td>
											<td>{{$proyecto->fecha_inicio}} - Acta: {{$proyecto->numero_acta}}</td>
											<td><center>{{$proyecto->ejecutado}}</center></td>
											<td><center>
										 <div style="font-size: 20px;">
											 <!--{!! link_to_route('proyectos-proyeccion.edit', $title="", $parameters=$proyecto->id, $atrributes=['id' => 'edit', 'class'=>'fa fa-pencil fa-fw']) !!}-->
                       {!! link_to_route('proyectos-proyeccion.edit', $title='Editar', $parameters=$proyecto->id, $atrributes=['class'=>'btn btn-warning btn-sm']) !!}
										 </div></center>
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

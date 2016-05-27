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
								<a href="{!! URL('grupos/'.$tipo_grupo.'/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Grupo</a>
							</div>
						</div>
						<div id="dvData">
							<table id="example3" class="table table-bordered table-striped">
								<thead>
									<th><center>Sigla</center></th>
									<th><center>Nombre del Grupo</center></th>
									<th><center>Coordinador</center></th>
									<th><center>Tipo</center></th>
									<th><center>Categoría</center></th>
									<th><center>Acción</center></th>
								</thead>
								<tbody>
									@foreach($grupos as $grupo)
										<tr data-id="{{ $grupo->id }}">
											<td><center>{{ucwords($grupo->sigla)}}</center></td>
											<td><a href="{{URL::to('grupos/ver/'.$grupo->id)}}">{{$grupo->descripcion}}</a></td>
											<td><center>{{ucwords($grupo->nombre_coordinador)}}</center></td>
											@if($grupo->tipo == 'i')
											<td><center>Investigación</center></td>
											@else
											<td><center>Estudio</center></td>
											@endif
											<td><center>{{ucfirst($grupo->categoria)}}</center></td>
											<td><center>
											<a href="{{URL::to('grupos/edit/'.$grupo->id)}}" class="btn btn-warning btn-sm" >Editar</a>
												 </center>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div><!-- /.col -->
		</div><!-- /.row -->
		<a href="{{URL('/grupos/excel/investigacion')}}" class="btn btn-default" role="button"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel</a>|<a href="{{URL('/grupos/pdf/investigacion')}}" class="btn btn-default" role="button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
	</section><!-- /.content -->
@endsection

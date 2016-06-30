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
							<table id="example3" class="table table-striped text-center">
								<thead>
									<th>Sigla</th>
									<th>Nombre del Grupo</th>
									<th>Coordinador</th>
									<th>Tipo</th>
									<th>Categoría</th>
									<th>N° Integrantes</th>
									<th>Acción</th>
								</thead>
								<tbody>
									@foreach($grupos as $grupo)
										<tr data-id="{{ $grupo->id }}">
											<td>{{ucwords($grupo->sigla)}}</td>
											<td><a href="{{URL::to('grupos/ver/'.$grupo->id)}}">{{$grupo->descripcion}}</a></td>
											<td>{{ucwords($grupo->nombre_coordinador)}}</td>
											<td>{{$grupo->tipo}}</td>
											<td>{{ucfirst($grupo->categoria)}}</td>
											<td>{{$grupo->adscripciones->count()}}</td>
											<td>
											<a href="{{URL::to('grupos/edit/'.$grupo->id)}}" class="btn btn-warning btn-sm" >Editar</a>|<a class="btn btn-danger btn-sm" href="{{URL::to('grupos/eliminar/'.$grupo->id)}}">Borrar</a>
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
		<a href="{{URL('/grupos/excel/'.$tipo_grupo)}}" class="btn btn-default" role="button"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel</a>|<a href="{{URL('/grupos/pdf/'.$tipo_grupo)}}" class="btn btn-default" role="button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
	</section><!-- /.content -->
@endsection

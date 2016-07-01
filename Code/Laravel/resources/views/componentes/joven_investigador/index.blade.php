@extends('layaouts.tablas')
@section('content')
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
	                  @include('layaouts.partials.mensaje')
					</div><!-- /.box-header -->
					<div class="box-body">
						<div class="row form-group">
							<div class="col-md-3">
								<a href="{!! URL('joven-investigador/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Investigador</a>
							</div>
						</div>
							<table id="example3" class="table table-bordered table-striped text-center">
								<thead>
									<th>Nombre Investigador</th>
									<th>Tutor</th>
									<th>Grupo</th>
									<th>Colciencias</th>
									<th>Institución</th>
									<th>Producto</th>
									<th>Acción</th>
								</thead>
								<tbody>
									@foreach($jovenes_investigadores as $joven_investigador)
										<tr>
											<td>{{$joven_investigador->estudiante->full_name}}</td>
											<td>{{$joven_investigador->profesor->nombre}}</td>
											<td>{{isset($joven_investigador->grupo) ? $joven_investigador->grupo->nombre_grupo : null}}</td>
											@if($joven_investigador->colciencias == 'n')
												<td><span style="font-size:14px" class="label label-pill label-info">{{$joven_investigador->colciencias}}</span></td>
											@else
												<td><span style="font-size:14px" class="label label-pill label-primary">{{$joven_investigador->colciencias}}</span></td>
											@endif
											<td>{{isset($joven_investigador->institucion) ? $joven_investigador->institucion->full_name_entidad : null}}</td>
											<td>{{$joven_investigador->producto}}</td>
											<td>{!! link_to_route('joven-investigador.edit', $title='Editar', $joven_investigador->id, ['class'=>'btn btn-warning btn-sm']) !!}|<a class="btn btn-danger btn-sm" href="{{URL::to('joven/investigador/eliminar/'.$joven_investigador->id)}}">Borrar</a></td>
										</tr>
									@endforeach
								</tbody>
							</table>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</section><!-- /.content -->
@endsection

@extends('layaouts.tablas')
@section('content')
	<section class="content">
    @include('componentes.proyectos-investigacion.partials.modal')
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
	                  @include('layaouts.partials.mensaje')
					</div><!-- /.box-header -->
					<div class="box-body">
						<div class="row form-group">
							<div class="col-md-3">
								<a href="{!! URL('proyectos-investigacion/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Proyecto</a>
							</div>
						</div>
							<table id="example3" class="table table-bordered table-striped">
								<thead>
									<th>Título</th>
									<th>Tipo</th>
									<th>Investigador Principal</th>
									<th>Tema Central</th>
									<th>Ejecutado</th>
									<th>Acción</th>
								</thead>
								<tbody>
									@foreach($proyectos as $proyecto)
										<tr>
											<td>{!!link_to_route('proyectos-investigacion.show', ucfirst($proyecto->titulo_proyecto), $parameters=$proyecto->id)!!}</td>
											<td>{{$proyecto->tipo}}</td>
											<td class="text-center">{{$proyecto->investigador_principal->nombre}}</td>
											<td class="text-center">{{$proyecto->tema_central}}</td>
											<td class="text-center">{{$proyecto->ejecutado}}</td>
											<td><center>
													 {!! link_to_route('proyectos-investigacion.edit', $title='Editar', $proyecto->id, ['class'=>'btn btn-warning btn-sm']) !!}|<a class="btn btn-danger btn-sm" href="{{URL::to('proyecto/investigacion/eliminar/'.$proyecto->id)}}">Borrar</a>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div><!-- /.col -->
		</div><!-- /.row -->
		<a href="{{URL('/proyectos/investigacion/excel')}}" class="btn btn-default" role="button"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel</a>|<a href="{{URL('/proyectos/investigacion/pdf')}}" class="btn btn-default" role="button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
	</section><!-- /.content -->
@endsection
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
								<a href="{!! URL('proyectos-investigacion/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo</a>
							</div>
						</div>
							<table id="example3" class="table table-bordered table-striped">
								<thead>
									<th>Título</th>
									<th>Tipo</th>
									<th>Investigador Principal</th>
									<th>Ejecutado</th>
									<th>Acción</th>
								</thead>
								<tbody>
									@foreach($proyectos as $proyecto)
										<tr>
											<td>{!!link_to_route('proyectos-investigacion.show', ucfirst($proyecto->titulo_proyecto), $parameters=$proyecto->id)!!}</td>
											<td>{{$proyecto->tipo}}</td>
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
		<a href="{{URL('/proyectos/investigacion/excel')}}" class="btn btn-default" role="button"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel</a>|<a href="{{URL('/proyectos/investigacion/pdf')}}" class="btn btn-default" role="button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a>
	</section><!-- /.content -->
@endsection
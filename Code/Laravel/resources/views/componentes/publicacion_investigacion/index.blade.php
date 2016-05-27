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
								<a href="{!! URL('publicacion-investigacion/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo</a>
							</div>
						</div>
							<table id="example3" class="table table-bordered table-striped">
								<thead>
									<th>Título</th>
									<th>Tipo</th>
									<th>Fecha Publicación</th>
									<th>Acción</th>
								</thead>
								<tbody>
									@foreach($publicaciones as $publicacion)
										<tr>
										<td>{!!link_to_route('publicacion-investigacion.show', ucfirst($publicacion->descripcion),$parameters=$publicacion->id)!!}</td>
											@if($publicacion->tipo == 'ri')
											<td>Revista Indexada</td>
											@endif
											@if($publicacion->tipo == 're')
											<td>Revista Especializada</td>
											@endif
											@if($publicacion->tipo == 'li')
											<td>Libro</td>
											@endif
											@if($publicacion->tipo == 'ar')
											<td>Artículo</td>
											@endif
											<td>{{$publicacion->fecha_publicacion}}</td>
											<td><center>{!! link_to_route('publicacion-investigacion.edit', $title='Editar', $parameters=$publicacion->id, $atrributes=['class'=>'btn btn-warning btn-sm']) !!}	
											</center></td>
										</tr>
									@endforeach
								</tbody>
							</table>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div><!-- /.col -->
		</div><!-- /.row -->
		<a href="{{URL('/publicaciones/investigacion/excel')}}" class="btn btn-default"><i class="fa fa-file-excel-o"></i> Excel</a>|<a href="{{URL('/publicaciones/investigacion/pdf')}}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i> PDF</a>
	</section><!-- /.content -->
@endsection

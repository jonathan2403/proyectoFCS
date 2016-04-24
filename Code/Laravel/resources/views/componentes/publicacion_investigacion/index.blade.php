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
								<a href="{!! URL('joven-investigador/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo</a>
							</div>
						</div>
							<table id="example3" class="table table-bordered table-striped">
								<thead>
									<th><center>Descripción</center></th>
									<th><center>Tipo</center></th>
									<th><center>Fecha Publicacion</center></th>
									<th><center>Acción</center></th>
								</thead>
								<tbody>
									@foreach($publicaciones as $publicacion)
										<tr>
										<td>{!!link_to_route('publicacion-investigacion.show', ucfirst($publicacion->descripcion),$parameters=$publicacion->id)!!}</td>
										
											@if($publicacion->tipo == 'ri')
											<td><center>Revista Indexada</center></td>
											@endif
											@if($publicacion->tipo == 're')
											<td><center>Revista Especializada</center></td>
											@endif
											@if($publicacion->tipo == 'li')
											<td><center>Libro</center></td>
											@endif
											@if($publicacion->tipo == 'ar')
											<td><center>Articulo</center></td>
											@endif
											<td><center>{{$publicacion->fecha_publicacion}}</center></td>
											<td><center>{!! link_to_route('publicacion-investigacion.edit', $title='Editar', $parameters=$publicacion->id, $atrributes=['class'=>'btn btn-warning btn-sm']) !!}
													
											</td></center>
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

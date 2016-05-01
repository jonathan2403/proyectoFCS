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
									<th>Nombre Investigador</th>
									<th>Nombre Grupo</th>
									<th>Acción</th>
								</thead>
								<tbody>
									@foreach($jovenes_investigadores as $joven_investigador)
										<tr>
											<td>{{$joven_investigador->nombre_estudiante}}</td>
											<td>{{$joven_investigador->nombre_grupo}}</td>
											<td>{!! link_to_route('joven-investigador.edit', $title='Editar', $parameters=$joven_investigador->id, $atrributes=['class'=>'btn btn-warning btn-sm']) !!}</td>
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

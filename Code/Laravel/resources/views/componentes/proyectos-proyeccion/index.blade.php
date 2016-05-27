@extends('layaouts.tablas')
@section('content')
	<section class="content">
    @include('componentes.proyectos-proyeccion.partials.modal')
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
	    			@include('layaouts.partials.mensaje')
					</div><!-- /.box-header -->
					<div class="box-body">
						<div class="row form-group">
							<div class="col-md-3">
								<a href="{!! URL('proyectos-proyeccion/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo</a>
							</div>
						</div>
							<table id="example3" class="table table-bordered table-striped">
								<thead>
									<th>Título</th>
									<th>Investigador Principal</th>
									<th>Inicio</th>
									<th>Ejecutado</th>
									<th>Acción</th>
								</thead>
								<tbody>
									@foreach($proyectos as $proyecto)
										<tr>
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
		<a href="{{URL('/proyectos/proyeccion/excel')}}" class="btn btn-default"><i class="fa fa-file-excel-o"></i> Excel</a>|<a href="{{URL('/proyectos/proyeccion/pdf')}}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i> PDF</a>
	</section><!-- /.content -->
@endsection

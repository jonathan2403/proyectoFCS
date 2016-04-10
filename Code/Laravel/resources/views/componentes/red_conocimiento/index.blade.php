@extends('layaouts.tablas')
@section('content')
	<section class="content">
  @include('componentes.red_conocimiento.partials.modal')
		<div class="row">
			<div class="col-xs-11">
				<div class="box">
					<div class="box-header">
						@include('layaouts.partials.mensaje')
						<h3 class="box-title">Redes de Conocimiento</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
						<div class="row form-group">
							<div class="col-md-3">
                <a href="{!! URL('red-conocimiento/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nueva Red</a>
							</div>
						</div>
						<div id="dvData">
							<table id="example3" class="table table-bordered table-striped">
								<thead>
									<th><center>Nombre</center></th>
									<th><center>Teléfono</center></th>
									<th><center>Dirección</center></th>
									<th><center>Email</center></th>
									<th><center>Acción</center></th>
								</thead>
								<tbody>
                  @foreach($redes as $red)
                  <tr>
										<td>{!!link_to_route('red-conocimiento.show', $red->nombre, $parameters=$red->id)!!}</td>
                    <td>{{$red->telefono}}</td>
                    <td>{{$red->direccion}}</td>
                    <td>{{$red->email}}</td>
                    <td>
                     <center> {!! link_to_route('red-conocimiento.edit', $title='Editar', $parameters=$red->id, $atrributes=['class'=>'btn btn-warning btn-sm']) !!}</center>
                      
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

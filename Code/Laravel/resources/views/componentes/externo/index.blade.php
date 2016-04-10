@extends('layaouts.tablas')
@section('content')
<section class="content">

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

          <h3 class="box-title">Listado Externos</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div class="row form-group">
            <div class="col-md-3">
              <a href="{!! URL('externo/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo</a>
            </div>
          </div>
          <div class="box box-danger direct-chat direct-chat-warning collapsed-box">
           <div class="box-header with-border">
            <h3 class="box-title">Entidades Externas</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div>
          </div>
          <div class="box-body" style="display:none;">
            <table id="example" class="table table-bordered table-striped">
              <thead>
                <th><center>Nombre</center></th>
                <th><center>Teléfono</center></th>
                <th><center>Email</center></th>
                <th><center>Dirección</center></th>
                <th><center>Acción</center></th>
              </thead>
              <tbody>
                @foreach($entidades as $entidad)
                <tr>
                  <td>{{ucwords($entidad->nombre_entidad)}}</td>                   
                  <td>{{$entidad->telefono}}</td>
                  <td>{{$entidad->correo}}</td>
                  <td>{{$entidad->direccion}}</td>
                  <td><center>
                   {!! link_to_route('externo.edit', $title='Editar', $parameters=$entidad->id, $atrributes=['class'=>'btn btn-warning btn-sm']) !!}
                  </center>
               </td>
             </tr>
             @endforeach
           </tbody>
         </table>
       </div>
   </div><!-- /.box-body -->

    <div class="box box-danger direct-chat direct-chat-warning collapsed-box">
         <div class="box-header with-border">
          <h3 class="box-title">Personas Externas</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
          </div>
        </div>

        <div class="box-body" style="display:none;">
          <table id="example3" class="table table-bordered table-striped">
            <thead>
              <th><center>Nombre</center></th>
              <th><center>Teléfono</center></th>
              <th><center>Email</center></th>
              <th><center>Dirección</center></th>
              <th><center>Area</center></th>
              <th><center>Nivel de Estudio</center></th>
              <th><center>Experiencia</center></th>
              <th><center>Acción</center></th>
            </thead>
            <tbody>
              @foreach($personas as $persona)
              <tr>
                <td>{{ucwords($persona->nombre_entidad)}}</td>               
                <td>{{$persona->telefono}}</td>
                <td>{{$persona->correo}}</td>
                <td>{{$persona->direccion}}</td>
                <td>{{$persona->area_conocimiento}}</td>
                <td>{{$persona->nivel_estudio}}</td>
                <td>{{$persona->experiencia}}</td>
                <td><center>
                 {!! link_to_route('externo.edit', $title='Editar', $parameters=$persona->id, $atrributes=['class'=>'btn btn-warning btn-sm']) !!}
                 
               </center>
             </td>
           </tr>
           @endforeach
         </tbody>
       </table>
     </div>
 </div><!-- /.box -->
</div><!-- /.col -->
<button type="button" class="btn" onClick ="$('#example3').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"><span class="glyphicon glyphicon-download"></span> PDF</button>|<button id="button-excel" class="btn"><span class="glyphicon glyphicon-download"></span> Excel</button>
</div>
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

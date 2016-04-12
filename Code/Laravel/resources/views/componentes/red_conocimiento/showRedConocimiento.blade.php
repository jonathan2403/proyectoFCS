@extends('layaouts.tablas')
@section('content')
  <section class="content">
    <div class="row">
      <div class="col-xs-11">
        <div class="box">
          <div class="box-header">
            @include('layaouts.partials.mensaje')
            <dl class="dl-horizontal" style="font-size:15px">
              <dt>Responsable </dt>
              <dd>{{ ucwords($responsable[0]->full_name) }}</dd></br>
              <dt>Propósito </dt>
              <dd>{{ ucfirst($redes[0]->proposito) }}</dd></br>
              <dt>Compromiso </dt>
              <dd>{{ ucfirst($redes[0]->compromiso) }}</dd></br>
              <dt>Asistentes </dt>
              <dd>{{ $redes[0]->asistentes }}</dd></br>
              <dt>Última Reunión </dt>
              <dd>{{ $redes[0]->fecha_ultima_reunion }}</dd>
            </dl></div><!-- /.box-header -->
            </div>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
        <button type="button" class="btn" onClick ="$('#example3').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"><i class="fa fa-file-pdf-o"></i> PDF</button>|<button id="button-excel" class="btn"><i class="fa fa-file-excel-o"></i> Excel</button>
      </div><!-- /.col --></div><!-- /.row -->
  </section><!-- /.content -->
@endsection
@section('scripts')
  <script type="text/javascript">
  $(document).ready(function () {
           $("#button-excel").click(function(e) {
            $("#example3").table2excel({
          exclude: ".noExl",
          name: "Excel Document Name"
         });
       });
           $('#select_estudiante').select2({
            width : '50%',
            display: 'inline-block',
            minimumInputLength: '1'
           });
           $.fn.modal.Constructor.prototype.enforceFocus = function () {};
    });
  </script>
@endsection

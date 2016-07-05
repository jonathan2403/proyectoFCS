@extends('layaouts.tablas')
@section('content')
  <section class="content">
    <div class="row">
      <div class="col-xs-11">
        <div class="box">
            <table class="table table-striped text-center">
              <thead>
                <th>Responsable</th>
                <th>Propósito</th>
                <th>Compromiso</th>
                <th>Asistentes</th>
                <th>Última Reunión</th>
              </thead>
              <tbody>
                <tr>
                  <td>{{ $responsable->full_name }}</td>
                  <td>{{ $red->proposito }}</td>
                  <td>{{ $red->compromiso }}</td>
                  <td>{{ $red->asistentes }}</td>
                  <td>{{ $red->fecha_ultima_reunion }}</td>
                </tr>
              </tbody>
            </table>
            </div>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col --></div><!-- /.row -->
  </section><!-- /.content -->
@endsection
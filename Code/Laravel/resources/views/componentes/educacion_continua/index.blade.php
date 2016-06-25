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
                <a href="{!! URL('educacion-continua/create') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Registro</a>
              </div>
            </div>
            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <th>Nombre</th>
                <th>Director</th>
                <th>Aprobación</th>
                <th>País</th>
                <th>Acción</th>
              </thead>
              <tbody>
                @foreach($edus as $edu)
                  <tr>
                    <td>{!! link_to_route('educacion-continua.show', ucfirst(strtolower($edu->nombre)), $parameters=$edu->id) !!}</td>
                    <td>{{ ucwords(strtolower($edu->full_name))}}</td>
                    <td>{{ $edu->fecha_aprobacion }} - Acta: {{ $edu->numero_acta }}</td>
                    <td>{{ ucwords(strtolower($edu->pais)) }}</td>
                    <td><center>
                      {!! link_to_route('educacion-continua.edit', $title='Editar', $parameters=$edu->id, $atrributes=['class'=>'btn btn-warning btn-sm']) !!}</center>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
        <a href="{{URL('/educacion/continua/excel')}}" class="btn btn-default"><i class="fa fa-file-excel-o"></i> Excel</a>|<a href="{{URL('/educacion/continua/pdf')}}" class="btn btn-default"><i class="fa fa-file-pdf-o"></i> PDF</a>
      </div><!-- /.col -->
    </div>
  </section><!-- /.content -->
@endsection

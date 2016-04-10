@extends('layaouts.template')

@section('content')
 <section class="content">
    <div class="row">
        <div class="col-md-4">
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Agregar Movilidad</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                  </div>
              <div class="box-body">
                  <div class="row">
                    <div class="pad">
                      {!! Form::open() !!}
                          <div class="form-group">                           

                            {!!Form::label('Profesor')!!}
                            {!!Form::Text('profesores_idprofesores',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del Profesor'])!!}

                            {!!Form::label('Evento')!!}
                            {!!Form::Text('evento_idevento',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del evento'])!!}


                            {!!Form::label('Tipo de Evento')!!}<br>
                            {!!Form::select('tipo_evento', ['Ponencia', '', 'VI', 'VII', 'VIII', 'IX', 'X'])!!}<br>

                            {!!Form::label('Capacitación')!!}<br>
                            {!!Form::select('tipo_capacitacion', ['si', 'no'])!!}<br>

                                                                                 
                            {!!Form::label('Año')!!}
                            {!!Form::Number('ano',null,['class'=>'form-control','placeholder'=>'Ingrese el año'])!!}

                            
                            {!!Form::label('Periodo')!!}<br>
                            {!!Form::select('periodo', ['I', 'II'])!!} <br>

                           </div>
                      {!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!}
                        {!!Form::close()!!}  
                    </div>
                  </div><!-- /.row pad-->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
        </div>
    </div>
  </section><!-- /.content -->
@endsection
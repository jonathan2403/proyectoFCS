@extends('layaouts.template')

@section('content')
 <section class="content">
    <div class="row">
        <div class="col-md-4">
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Agregar Titulación Docente</h3>
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

                             {!!Form::label('Titulo de Estudio')!!}
                            {!!Form::Text('titulo_estudio_idtitulo_estudio',null,['class'=>'form-control','placeholder'=>'Ingrese el Titulo de Estudio'])!!}

                            {!!Form::label('Año')!!}
                            {!!Form::Number('ano',null,['class'=>'form-control','placeholder'=>'Ingrese el año'])!!}
                            
                            {!!Form::label('Periodo')!!}<br>
                            {!!Form::select('periodo', ['I', 'II'])!!} <br>
                            
                           {!!Form::label('Programa')!!}
                            {!!Form::Text('programa_idprograma',null,['class'=>'form-control','placeholder'=>'Ingrese el programa'])!!}
                           {!!Form::label('Nivel de Estudio')!!}<br>
                            {!!Form::select('nivel_estudio_idnivel_estudio', ['Pregrado','Especialización','Maestria','Doctorado'])!!}

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
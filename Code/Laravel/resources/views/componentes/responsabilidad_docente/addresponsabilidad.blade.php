@extends('layaouts.template')

@section('content')
 <section class="content">
    <div class="row">
        <div class="col-md-4">
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Agregar Responsabilidad Docente</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                  </div>
              <div class="box-body">
                  <div class="row">
                    <div class="pad">
                      {!! Form::open() !!}
                          <div class="form-group">                           

                           
                            {!!Form::label('Año')!!}
                            {!!Form::Text('ano',null,['class'=>'form-control','placeholder'=>'Ingrese el año'])!!}

                            {!!Form::label('Periodo')!!}<br>
                            {!!Form::select('periodo', ['I', 'II'])!!} <br>

                            {!!Form::label('Profesor')!!}
                            {!!Form::Text('profesores_idprofesores',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del profesor'])!!}                         
                            {!!Form::label('Curso')!!}
                            {!!Form::Text('cursos_idcursos',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre o el codigo del curso'])!!}

                            {!!Form::label('Vinculación')!!}
                            {!!Form::Text('vinculacion_idvinculacion',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre el tipo de vinculación'])!!}

                            {!!Form::label('Grupo')!!}<br>
                            {!!Form::select('grupo', [1, 2])!!} <br>

                            {!!Form::label('Cantidad de Estudiantes')!!}
                            {!!Form::Number('numero_estudiantes',null,['class'=>'form-control','placeholder'=>'Ingrese la cantidad de estudiantes'])!!}

                            {!!Form::label('Horas Directas')!!}
                            {!!Form::Number('horas_directas',null,['class'=>'form-control','placeholder'=>'Ingrese la cantidad de horas directas'])!!}

                            {!!Form::label('Horas de Tutoria')!!}
                            {!!Form::Number('horas_tutoria',null,['class'=>'form-control','placeholder'=>'Ingrese la cantidad de horas de tutoria'])!!}

                            {!!Form::label('Horas de Reparación')!!}
                            {!!Form::Number('horas_preparacion',null,['class'=>'form-control','placeholder'=>'Ingrese la cantidad de horas reparación'])!!}

                            {!!Form::label('Número de Semanas')!!}
                            {!!Form::Number('numero_semanas',null,['class'=>'form-control','placeholder'=>'Ingrese el número de semanas'])!!}
                        

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
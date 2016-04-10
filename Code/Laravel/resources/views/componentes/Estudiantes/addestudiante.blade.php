@extends('layaouts.template')

@section('content')
 <section class="content">
    <div class="row">
        <div class="col-md-4">
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Agregar Estudiante</h3>
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
                            
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              {!!Form::input('date', 'date', null, ['class' => 'form-control', 'placeholder' => 'Date']);!!}
                            </div><!-- /.input group -->

                            {!!Form::label('Periodo')!!}<br>
                            {!!Form::select('periodo', ['I', 'II'])!!} <br>

                            {!!Form::label('Semestre')!!}<br>
                            {!!Form::select('semestre', ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X'])!!}<br>

                            {!!Form::label('Cantidad de Estudiantes Inscritos')!!}
                            {!!Form::Number('can_ins',null,['class'=>'form-control','placeholder'=>'Ingrese los estudiantes inscritos'])!!}

                            {!!Form::label('Cantidad de Estudiantes Admitidos')!!}
                            {!!Form::Number('can_adm',null,['class'=>'form-control','placeholder'=>'Ingrese los estudiantes admitidos'])!!}

                            {!!Form::label('Cantidad de Estudiantes Graduados')!!}
                            {!!Form::Number('can_gra',null,['class'=>'form-control','placeholder'=>'Ingrese los estudiantes graduados'])!!}

                            {!!Form::label('Cantidad de Estudiantes Retirados')!!}
                            {!!Form::Number('can_ret',null,['class'=>'form-control','placeholder'=>'Ingrese los estudiantes retirados'])!!}
                            
                            {!!Form::label('Cantidad de Estudiantes  de Intercambio')!!}
                            {!!Form::Number('can_int',null,['class'=>'form-control','placeholder'=>'Ingrese los estudiantes de intercambio'])!!}
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
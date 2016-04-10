@extends('layaouts.template')

@section('content')
 <section class="content">
    <div class="row">
        <div class="col-md-4">
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Agregar Evaluación Docente</h3>
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

                           {!!Form::label('Valor')!!}<br>
                           {!!Form::select('valor', ['0 to 55', '55.1 to 69.9','70 to 84.9', '85 to 100']) !!}<br>


                            {!!Form::label('Nota')!!}<br>
                            {!!Form::select('nota', ['Insuficiente','Regular','Buena','Sobresaliente'])!!} <br>

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
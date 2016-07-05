@section('scripts')
   {!!Html::script('assets/js/componentes/externos/validarExterno.js')!!}
@endsection
@extends('layaouts.tablas')
@section('content')
  <section class="content">
    <div class="row">
      <div class="col-md-9">
        @include('errors.partials.requesterror')
          <div class="box box-solid box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">
              @if($tipo_externo == 'e')
              Registrar Entidad Externa
              @else
              Registrar Persona Externa
              @endif
              </h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="pad">
                  {!! Form::open(['url' => 'externo/store', 'method' => 'POST', 'id' => 'externos-form', 'class' => 'formulario_validado'])!!}
                  @if($tipo_externo == 'e')
                    @include('componentes.externo.partials.entidad_form')
                  @else
                    @include('componentes.externo.partials.persona_form')
                  @endif
                  {!! Form::submit('Crear',['class'=>'btn btn-warning']) !!}&nbsp<a href="{{URL('/externo/'.$componente)}}" class="btn btn-danger" >Cancelar</a>
                  {!!Form::close()!!}
                </div>
              </div><!-- /.row pad-->
            </div><!-- /.box-body -->
          </div><!-- /.box -->
      </div>
    </div>
  </section><!-- /.content -->
@endsection

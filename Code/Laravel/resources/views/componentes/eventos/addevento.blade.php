@extends('layaouts.tablas')
@section('scripts')
   {!!Html::script('/assets/js/load_views.js')!!}
@endsection
@section('content')
   <section class="content">
    <div class="row">
        <div class="col-md-9">
              <div class="box box-solid box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Agregar Evento</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                  </div>
              <div class="box-body">
                @if($errors->any())
                  <div class="alert alert-danger" role="alert">
                    <p>Por favor corrige errores</p>
                      <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                  </div>
                @endif
                  <div class="row">
                    <div class="pad">
                        {!! Form::open($route)!!}
                          @include('componentes.eventos.partials.form')
                        {!!Form::submit('Crear', ['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!}
                    </div>
                  </div><!-- /.row pad-->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
        </div> <!-- /.col -->
    </div> <!-- /.row -->
  </section><!-- /.content -->
@endsection

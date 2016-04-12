@extends('layaouts.tablas')
@section('content')
  <section class="content"> 
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- Main content -->
          <div class="box-body">
          <!-- Small boxes (Stat box) -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{!! $grupos !!}</h3>
                  <p>Grupos de Investigacion</p>
                  <!--<p>{!!link_to_route('indicadores-investigacion.show', 'Grupos de Investigacion' ,$parameters="grupos", $atrributes=['class'=>'small-box-footer'])!!}</p>-->
                </div>
                <div class="icon">
                  <i class="ion-person-stalker"></i>
                </div>
                <!--<a href="/indicadores-investigacion/grupos" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>-->
                {!!link_to_route('indicadores-investigacion.show', 'Ver mas', $parameters='grupos', $atrributes=['class'=>'small-box-footer'])!!}
                <!--<a href="/indicadores-investigacion/grupos" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>-->
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{!! $proyectos !!}</h3>
                  <p>Proyectos</p>
                </div>
                <div class="icon">
                  <i class="ion-wrench"></i>
                </div>
               <a href="#" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{!! $publicaciones !!}</h3>
                  <p>Publicaciones</p>
                </div>
                <div class="icon">
                  <i class="ion-document-text"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>{!! $opciones_grado !!}</h3>
                  <p>Opciones de Grado</p>
                </div>
                <div class="icon">
                  <i class="ion-university"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3>{!! $opciones_grado !!}</h3>
                  <p>Estadisticas</p>
                </div>
                <div class="icon">
                  <i class="ion-arrow-graph-down-left"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          </div>
          <!-- Main row -->
          <div class="row">
        </div>
      </div>           
    </div>
  </section><!-- /.content -->
@endsection

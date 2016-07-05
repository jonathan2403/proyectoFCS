@extends('layaouts.tablas')
@section('scripts')
{!!Html::script('assets/js/componentes/graficas/opcion_grado_proyeccion.js')!!}
{!!Html::script('assets/js/highcharts/highcharts.js')!!}
@endsection
@section('content')
  <section class="content">
  <div class="row">
  	<div class="col-xs-12">
  		<div class="box">
  		  <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6">

              <!-- DONUT CHART -->
              <div class="box box-danger">
                <div class="box-body">
                    <div class="row">
                    <div class="col-sm-12">
                        <div class="the-box">
                        <div id="grafica_porcentaje" style="min-width: 310px; height: 350px; margin: 0 auto">
                        </div>
                        </div>
                    </div>
                </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (LEFT) -->
            <div class="col-md-6">

              <!-- Donut chart -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">Donut Chart</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div id="barChart" style="height: 300px;"></div>
                </div><!-- /.box-body-->
              </div><!-- /.box -->

            </div><!-- /.col (RIGHT) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
  		</div>
  	</div>
  </div>	
  </section>
@endsection
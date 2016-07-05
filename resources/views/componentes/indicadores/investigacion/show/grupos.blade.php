@extends('layaouts.tablas')
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
                <div class="box-header with-border">
                  <h3 class="box-title">Porcentaje Grupos</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                    <canvas id="pieChart" style="height:250px"></canvas>
                </div><!-- /.box-body -->
                <div class="col-md-6">
                      <ul class="chart-legend clearfix">
                        <li><i class="fa fa-circle-o text-red"></i> Grupos de Investigación : {{$investigacion}}</li>
                        <li><i class="fa fa-circle-o text-green"></i> Grupos de Estudio : {{$estudio}}</li>
                      </ul>
                    </div><!-- /.col -->
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
@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
    	//-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: 
               <?php 
                   $porcentaje = number_format(($investigacion*100)/$total, 2, '.', '');
                   echo (string)$porcentaje;
                  ?>,
            color: "#f56954",
            highlight: "#f56954",
            label: "Investigacion"
          },
          {
            value: <?php echo number_format(($estudio*100)/$total, 2, '.', '')?>,
            color: "#00a65a",
            highlight: "#00a65a",
            label: "Estudio"
          }
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);


        /*
         * DONUT CHART
         * -----------
         */

        var donutData = [
          {label: "Investigacion", 
           data: 
           <?php 
                   $porcentaje = number_format(($investigacion*100)/$total, 2, '.', '');
                   echo $porcentaje;
                  ?>, 
            color: "#3c8dbc"},
          {label: "Estudio", 
          data:
          <?php 
                   $porcentaje = number_format(($estudio*100)/$total, 2, '.', '');
                   echo $porcentaje;
                  ?>, 
           color: "#0073b7"}
        ];
        $.plot("#barChart", donutData, {
          series: {
            pie: {
              show: true,
              radius: 1,
              innerRadius: 0.5,
              label: {
                show: true,
                radius: 2 / 3,
                formatter: labelFormatter,
                threshold: 0.1
              }

            }
          },
          legend: {
            show: false
          }
        });
        /*
         * END DONUT CHART
         */
      function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
                + label
                + "<br>"
                + Math.round(series.percent) + "%</div>";
      }

    });
  </script>
@endsection

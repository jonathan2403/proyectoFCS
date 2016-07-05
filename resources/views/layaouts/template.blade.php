<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "Sistema de Gestion de Indicadores CNA" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {!! Html::style('assets/bootstrap/css/bootstrap.min.css')!!}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    {!!Html::style('assets/dist/css/AdminLTE.min.css')!!}
    {!!Html::style('assets/dist/css/skins/_all-skins.min.css')!!}
    {!!Html::style('assets/plugins/iCheck/flat/blue.css')!!}
    <!-- DATA TABLES -->
    {!!Html::style('plugins/datatables/dataTables.bootstrap.css')!!}
    {!!Html::style('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css')!!}
    {!!Html::style('assets/plugins/datepicker/datepicker3.css')!!}
    {!!Html::style('assets/plugins/daterangepicker/daterangepicker-bs3.css')!!}
    {!!Html::style('assets/plugins/select2/select2.min.css')!!}
    {!!Html::style('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')!!}
</head>
<body class="skin-red sidebar-mini">
<div class="wrapper">

    <!-- Header -->
    @include('Dashboard.header')

    <!-- Sidebar -->
    @include('Dashboard.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
       
                <!-- Your Page Content Here -->
                @yield('content')
       
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('Dashboard.footer')
        </section><!-- /.content -->
    </div><!-- ./wrapper -->
     {!!Html::script('assets/plugins/jQuery/jQuery-2.1.4.min.js')!!}
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
    {!!Html::script('assets/bootstrap/js/bootstrap.min.js')!!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    {!!Html::script('assets/plugins/sparkline/jquery.sparkline.min.js')!!}
    {!!Html::script('assets/plugins/select2/select2.full.min.js')!!}
    {!!Html::script('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}
    {!!Html::script('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')!!}
    {!!Html::script('assets/plugins/knob/jquery.knob.js')!!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
    {!!Html::script('assets/plugins/daterangepicker/daterangepicker.js')!!}
    {!!Html::script('assets/plugins/datepicker/bootstrap-datepicker.js')!!}
    {!!Html::script('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')!!}
    {!!Html::script('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')!!}
    {!!Html::script('assets/plugins/datatables/jquery.dataTables.min.js')!!}
    {!!Html::script('assets/plugins/datatables/dataTables.bootstrap.min.js')!!}
    {!!Html::script('assets/plugins/slimScroll/jquery.slimscroll.min.js')!!}
    {!!Html::script('assets/plugins/fastclick/fastclick.min.js')!!}
    {!!Html::script('assets/dist/js/app.min.js')!!}
    {!!Html::script('assets/dist/js/pages/dashboard.js')!!}
    {!!Html::script('assets/dist/js/demo.js')!!}
    <script type="text/javascript">
      $.widget.bridge('uibutton', $.ui.button);
      $(".select2").select2();
    </script>
    <script type="text/javascript">
            $(function () {
                $("#example1").DataTable();
                $('#example3').DataTable({
                    language: {
                        lengthMenu:        "Mostrar _MENU_ Registros por Pagina",
                        search:            "Buscar ",
                        searchPlaceholder: "Busca por columnas",
                        info:              "Mostrar _START_ A _END_ De _TOTAL_ Registros",
                        zeroRecords:       "Ningun Registro Encontrado",
                        infoEmpty:         "No Hay Registros Disponibles",
                    paginate: {
                        first:         "Primero",
                        previous:      "<< Anterior",
                        next:          "Siguiente >>",
                        last:          "Ultimo"
                        }
                    }
                });
            });
        </script>
</body>
</html>
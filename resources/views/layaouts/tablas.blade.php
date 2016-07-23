<!DOCTYPE html>
<html>
    <head>
        <script>
            var URL_SERVIDOR="{{URL::to('/')}}";
        </script>
        <meta charset="UTF-8">
        <title>{{ $page_title or "Sistema de Gestion de Indicadores CNA" }}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.4 -->
        {!! Html::style('assets/bootstrap/css/bootstrap.min.css')!!}
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        {!! Html::style('/assets/plugins/ionicons/css/ionicons.min.css')!!}
        <!-- DATA TABLES -->
        {!!Html::style('assets/plugins/datatables/dataTables.bootstrap.css')!!}
        <!-- Theme style -->
        {!!Html::style('assets/dist/css/AdminLTE1.css')!!}
        <!--  Jquery UI css -->
        {!!Html::style('/assets/js/jquery-ui.css')!!}
        <!-- Autocompletar CSS -->
        {!!Html::style('/assets/css/autocompletar.css')!!}
        {!!Html::style('assets/dist/css/skins/_all-skins.min.css')!!}
        <!-- Validar -->
        {!!Html::style('assets/css/base/base.css')!!}
        @yield('css_first')
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
            
        </div><!-- ./wrapper -->
        <!-- jQuery 2.1.4 -->
        {!!Html::script('assets/plugins/jQuery/jQuery-2.1.4.min.js')!!}
        <!-- Bootstrap 3.3.2 JS -->
        {!!Html::script('assets/bootstrap/js/bootstrap.min.js')!!}
        <!-- Validar -->
        {!!Html::script('assets/js/base/jquery-validate/jquery.validate.js')!!}
        <!-- Datepicker -->
        {!!Html::script('assets/plugins/datepicker/bootstrap-datepicker.js')!!}
        {!!Html::style('assets/plugins/datepicker/datepicker3.css')!!}
        <!-- Select2  -->
        {!!Html::script('assets/plugins/select2/select2.min.js')!!}
        {!!Html::style('assets/plugins/select2/select2.min.css')!!}
        <!-- Icheck -->
        {!!Html::script('assets/plugins/iCheck/icheck.min.js')!!}
        {!!Html::style('assets/plugins/iCheck/minimal/red.css')!!}
        <!-- DATA TABES SCRIPT-->
        {!!Html::script('assets/plugins/datatables/jquery.dataTables.min.js')!!}
        {!!Html::script('assets/plugins/datatables/dataTables.bootstrap.min.js')!!}  
        <!-- SlimScroll -->
        {!!Html::script('assets/plugins/slimScroll/jquery.slimscroll.min.js')!!}
        <!-- FastClick -->
        {!!Html::script('assets/plugins/fastclick/fastclick.min.js')!!}
        <!-- AdminLTE App -->
        {!!Html::script('assets/dist/js/app.min.js')!!}
        <!-- AdminLTE for demo purposes -->
        {!!Html::script('assets/dist/js/demo.js')!!}
        <!--Mayusculas-->
        {!!Html::script('/assets/js/base/cambiarMayuscula.js')!!}
        <!--  Jquery UI  -->
        {!!Html::script('/assets/js/jquery-ui.min.js')!!}
        <!-- Charts Graficas -->
        {!!Html::script('assets/plugins/chartjs/Chart.min.js')!!}
        <!--Flot-->
        {!!Html::script('assets/plugins/flot/jquery.flot.min.js')!!}
        {!!Html::script('assets/plugins/flot/jquery.flot.resize.min.js')!!}
        {!!Html::script('assets/plugins/flot/jquery.flot.pie.min.js')!!}
        {!!Html::script('assets/plugins/flot/jquery.flot.categories.min.js')!!}
        
        <!-- Font Awesome Icons -->
        {!! Html::style('assets/bootstrap/css/font-awesome.min.css')!!}
        

        <!-- page script -->
        <script type="text/javascript">
            $(function () {
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
        @yield('scripts')
    </body>
</html>
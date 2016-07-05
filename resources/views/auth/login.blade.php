<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SGICNA | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    {!! Html::style('assets/bootstrap/css/bootstrap.min.css')!!}
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    {!!Html::style('assets/dist/css/AdminLTE.css')!!}
    <!-- iCheck -->
    {!!Html::style('assets/plugins/iCheck/square/blue.css')!!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page" style="background-color:black;">
    <div class="login-box">
      <div class="login-logo">
        <b><i class="fa fa-unlock"></i> SIINDI-CNA-FCS</b>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        {!! Form::open(['url' => 'auth/login', 'method' => 'POST']) !!}
        <br>
          <div class="row form-group has-feedback">
            <div class="col-xs-1">
            </div>
            <div class="col-xs-2">
              Usuario:
            </div>
            <div class="col-xs-8">
              <div class="form-group has-feedback">
                <input name="email" type="text" class="form-control" placeholder="Email" />
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
            </div>            
            <div class="col-xs-1">
            </div>
          </div>
          <div class="row form-group has-feedback">
            <div class="col-xs-1">
            </div>
            <div class="col-xs-2">
              Password:
            </div>
            <div class="col-xs-8">
              <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password" />
                 <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
            </div>             
            <div class="col-xs-1">
            </div>        
          </div>
          <div class="row form-group">
            <center>
              <div class="col-xs-4">
              </div>        
              <div class="col-xs-4">
                <button type="submit" class="btn btn-danger btn-block btn-flat">Ingresar</button>
              </div><!-- /.col -->
              <div class="col-xs-4">
              </div>        
            </center>
          </div>
        {!! Form::close() !!}
         <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    {!!Html::script('assets/plugins/jQuery/jQuery-2.1.4.min.js')!!} 
    <!-- Bootstrap 3.3.2 JS -->
    {!!Html::script('assets/bootstrap/js/bootstrap.min.js')!!}
    <!-- iCheck -->
    {!!Html::script('assets/plugins/iCheck/icheck.min.js')!!}
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
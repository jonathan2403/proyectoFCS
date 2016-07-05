<!DOCTYPE html>
<meta charset="utf-8">
 <html>
 <head>
     <title>Página no encontrada</title>
     <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
     <style>
         html, body {
             height: 100%;
         }
 
         body {
             margin: 0;
             padding: 0;
             width: 100%;
             color: #B0BEC5;
             display: table;
             font-weight: 100;
             font-family: 'Lato';
         }
 
         .container {
             text-align: center;
             display: table-cell;
             vertical-align: middle;
         }
 
         .content {
             text-align: center;
             display: inline-block;
         }
 
         .error{
             font-size: 100px;
             margin-bottom: 15px;
             font-weight: 900;
             color:#53554F;
         }
 
         .title {
             font-size: 72px;
             margin-bottom: 15px;
         }
         .button {
             display: inline-block;
             border: 2px solid #53554F;
             background:#53554F;
             border-radius: 6px;
             text-align: center;
             padding: 5px;
             width: 130px;
             cursor: pointer;
             margin: 5px;

         }
         a {
             font-weight: bold;
             text-decoration: none;
             color: #e7e7e7;
             font-size: 17px; 
         }
         .button:hover {
            background-color: #1D1E1B;

        }
 
     </style>
 </head>
 <body>
 <div class="container">
    
     <div class="content">
         <div class="error">404</div>
         <div class="title">Oops!!...Página no encontrada</div>
         <a href="{{URL::previous()}}" class="button">Regresar</a>
         <!--<button class="button"><a href="{{url("/")}}">Regresar</a></button>
     </div>
 </div>
 </body>
 </html>
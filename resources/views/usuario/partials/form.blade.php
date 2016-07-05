<div class="form-group">      
  {!!Form::label('Nombres:')!!}
  {!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre del usuario'])!!}   
  
  {!!Form::label('Correo:')!!}
  {!!Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el correo del usuario'])!!}
  
  {!!Form::label('Dependencia')!!}<br>
  {!!Form::select('dependencia',['Secretaria'=>'Secretaria', 'Programa'=>'Programa','Proyeccion'=>'Proyeccion'])!!} <br> 
   
  {!!Form::label('Contraseña:')!!}
  {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingrese la contraseña'])!!}
</div>
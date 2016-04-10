<div class="form-group">
    {!!Form::label('Cedula')!!}
    {!!Form::Text('cedula',null,['class'=>'form-control','placeholder'=>'Ingrese la cédula'])!!}

    {!!Form::label('Primer Nombre')!!}
    {!!Form::Text('primer_nombre',null,['class'=>'form-control','placeholder'=>'Ingrese El Primer Nombre del Profesor'])!!}

    {!!Form::label('Segundo Nombre')!!}
    {!!Form::Text('segundo_nombre',null,['class'=>'form-control','placeholder'=>'Ingrese El Segundo Nombre del Prodfesor '])!!}

    {!!Form::label('Primer Apellido')!!}
    {!!Form::Text('primer_apellido',null,['class'=>'form-control','placeholder'=>'Ingrese El Primer Apellido'])!!}

    {!!Form::label('Segundo Apellido')!!}
    {!!Form::Text('segundo_apellido',null,['class'=>'form-control','placeholder'=>'Ingrese El Segundo Apellido'])!!}

    {!!Form::label('Email')!!}
    {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingrese El Segundo Apellido'])!!}

    {!!Form::label('Telefono')!!}
    {!!Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Ingrese El Numero de Telefono'])!!}
</div>
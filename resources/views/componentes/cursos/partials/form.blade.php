<div class="form-group">
    {!!Form::label('Código del Curso')!!}
    {!!Form::Number('codigo_curso',null,['class'=>'form-control','placeholder'=>'Ingrese el codigo del curso'])!!}

    {!!Form::label('Nombre del Curso')!!}
    {!!Form::Text('nombre_curso',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del curso'])!!}

    {!!Form::label('Tipo del Curso')!!}<br>
    {!!Form::select('tipo_curso', ['Teorico', 'Teorico-Practico'])!!}<br>

    {!!Form::label('Semestre')!!}<br>
    {!!Form::select('semestre', ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X'])!!}<br>

    {!!Form::label('Area')!!}<br>
    {!!Form::select('area', ['Profundizacion', 'Profesional'])!!} <br>

    {!!Form::label('Cantidad de Créditos')!!}<br>
    {!!Form::select('creditos', [2, 3, 4])!!} <br>
                           
    {!!Form::label('Planes de Estudio')!!}<br>
    {!!Form::select('id_planestudio', $planes)!!} <br>
</div>
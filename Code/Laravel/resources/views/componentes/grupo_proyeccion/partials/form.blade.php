<div class="form-group">
	{!!Form::label('Grupo')!!}
    {!!Form::text('sigla', null, ['class'=>'form-control', 'placeholder'=>'sigla del grupo'])!!}
 
    {!! Form::hidden('tipo', 'ps') !!}
	</br>
    {!!Form::label('Nombre')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'nombre del grupo'])!!}
	</br>

    {!! Form::label('Coordinador') !!}
    {!! Form::select('id_profesor',$nombre_profesor->toArray(), null, ['id' => 'id', 'class' => 'form-control select', 'placeholder' => '']) !!}

</div>

<div class="form-group">
	{!!Form::label('Grupo')!!}
    {!!Form::text('sigla', null, ['class'=>'form-control', 'placeholder'=>'sigla del grupo'])!!}

    {!!Form::label('Nombre')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'nombre del grupo'])!!}
	</br>

    <font size="3px">{!!Form::label('Tipo')!!}</font>
			 </br>
    {!!Form::label('Estudio')!!}
    {!!Form::radio('tipo', 'e', false)!!} &nbsp
    {!!Form::label('Investigación')!!}
    {!!Form::radio('tipo', 'i', false)!!}
	</br></br>

    {!!Form::label('Categoria')!!}
   {!! Form::select('categoria', array(''=>'','a' => 'Categoria A', 'b' => 'Categoria B', 'c' => 'Categoria C', 'd' => 'Categoria D'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
    </br>

    {!! Form::label('Coordinador') !!}
    {!! Form::select('id_profesor',$nombre_profesor->toArray(), null, ['id' => 'id', 'class' => 'form-control select', 'placeholder' => '']) !!}

</div>

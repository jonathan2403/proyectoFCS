<div class="form-group">
	{!!Form::label('Sigla')!!}
    {!!Form::text('sigla', null, ['class'=>'form-control', 'placeholder'=>'sigla del grupo'])!!}
    {!!Form::hidden('id_grupo', $grupo->id)!!}
    {!!Form::label('Nombre')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'nombre del grupo'])!!}
	</br>

    @if($tipo_grupo == 'investigacion')
    <font size="3px">{!!Form::label('Tipo')!!}</font>
    <div class="row">
        <div class="col-xs-2">
            {!!Form::label('Estudio')!!}
            {!!Form::radio('tipo', 'e', false, ['class' => 'iradio_minimal-red'])!!}        
        </div>
        <div class="col-xs-2">
            {!!Form::label('Investigación')!!}
            {!!Form::radio('tipo', 'i', false, ['class' => 'iradio_minimal-red'])!!}        
        </div>
    </div>
    </br>
    @else
    {!!Form::hidden('tipo', 'ps')!!}
    @endif

    {!!Form::label('Categoria')!!}
   {!! Form::select('categoria', array(''=>'','a' => 'Categoria A', 'b' => 'Categoria B', 'c' => 'Categoria C', 'd' => 'Categoria D'), null, [ 'id' => 'select1', 'class' => 'form-control']) !!}
    </br>

    {!! Form::label('Coordinador') !!}
    <div id="div_profesor">
            {!! Form::text('profesor', isset($grupo) ? $grupo->coordinador->nombre: null ,['class' => 'form-control', 'id' => 'nombre_profesor','placeholder'=>'Buscar por nombre o Cédula']) !!}
            <div id="label_oculto_profesor"></div>                     
            {!! Form::hidden('id_profesor', null, ['id' => 'id_profesor']) !!}
    </div>

</div>
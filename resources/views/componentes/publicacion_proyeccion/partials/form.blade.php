<div class="form-group">
    {!! Form::hidden('tipo_publicacion', 'ps') !!}
    {!!Form::label('Nombre de la Publicación')!!}
    {!!Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Descripcion'])!!}
    </br>

    {!!Form::label('Proyecto')!!}
    {!!Form::select('id_proyecto', $nombre_proyecto->toArray(), null, ['class' => 'form-control'])!!}
    </br>

	{!!Form::label('Opción de Grado')!!}
    {!!Form::select('id_opcion_grado', $nombre_opcion_grado->toArray(), null, ['class' => 'form-control', 'placeholder' => '']) !!}
    </br>

    {!!Form::label('Grupo')!!}
    {!!Form::select('id_grupo', $nombre_grupo->toArray(), null, ['class' => 'form-control', 'placeholder' => '']) !!}
    </br>

    {!! Form::label('Tipo')!!}
	{!! Form::select('tipo', array('' => '', 'ri' => 'Revista Indexada', 're' => 'Revista Especializada', 'li' => 'Libro', 'ar' => 'Artículo'), null, ['class' => 'form-control']) !!}
	</br>

	{!!Form::label('Fecha de Publicación')!!}
    <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
    {!!Form::text('fecha_publicacion', null, ['id' => 'datepicker3', 'class'=>'picker form-control', 'readonly'])!!}
     </div>
     </br>
</div>

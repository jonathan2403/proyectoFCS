    <div class="form-group">
    	  {!!Form::label('Titulo')!!}
        {!!Form::text('titulo_proyecto', null, ['class'=>'form-control', 'placeholder'=>'Digite Nombre del Proyecto','required'])!!}
    	  {!! Form::hidden('tipo', 'ps') !!}
            </br>  

        {!!Form::label('Director')!!}<br>
        {!!Form::select('id_investigador_principal',$nombre_profesor->toArray(), null, ['id' => 'select_profesor', 'class' => 'form-control select', 'placeholder' => ' ']) !!}
    		</br></br>

            <table  class="table table-condensed">
              <thead>
                <th><center><font size = "3px">Fecha de Inicio</center></font></th>
                <th><center><font size = "3px">N° de Acta</center></font></th>

            </thead>
            <tbody>
                <tr>
                   <td>
                     <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                      {!!Form::text('fecha_inicio', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
                  </div>
              </td>
              <td>{!!Form::text('numero_acta', null, ['class'=>'form-control', 'placeholder'=>''])!!}</td>
          </tr>
      </tbody>
  </table>
 
 <table  class="table table-condensed">
  <thead>
    <th><center><font size = "3px">Avance 1</center></font></th>
    <th><center><font size = "3px">Avance 2</center></font></th>
    <th><center><font size = "3px">Informe Final</center></font></th>
  </thead>
  <tbody>
    <tr>
     <td>
       <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
       {!!Form::text('fecha_avance1', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
      </div>
    </td>
    <td>
       <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
       {!!Form::text('fecha_avance2', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
      </div>
    </td>
    <td><center>
      <div class="input-group">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
        {!!Form::text('fecha_informe_final', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
      </div>
    </center></td>
  </tr>
</tbody>
</table>
        
        {!!Form::label('Fecha de Prorroga')!!}
        <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
        {!!Form::text('fecha_prorroga', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly'])!!}
        </div></br>

        {!!Form::label('Valor efectivo del Proyecto')!!}
        {!!Form::text('valor_efectivo', null, ['class'=>'form-control'])!!}
            </br>

    	{!!Form::label('Ejecutado')!!}
    			 </br>
        {!!Form::label('Si')!!}
        {!!Form::radio('ejecutado', 'Si', null)!!} &nbsp
        {!!Form::label('No')!!}
        {!!Form::radio('ejecutado', 'No', null)!!}
                </br></br>


<font size="4px"><b><center>BENEFICIADOS</center></b></font>
    <hr>
    <table class="table table-bordered">
     <thead>
      <th><center><font size="4px">Participación UNILLANOS</font></center></th>
      <th><center><font size="4px">Participación Sectorial</font></center></th>
      <th><center><font size="4px">Rangos Edades</font></center></th>
      <th><center><font size="4px">Participación por Genero</font></center></th>
     </thead>
     <tbody>
      <tr>
       <td><center>
        <dl class="dl-horizontal" style="font-size:15px">
         <dt>Administrativos </dt>
         <dd>{!!Form::text('beneficiados_administrativos', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
         <dt>Estudiantes </dt>
         <dd>{!!Form::text('beneficiados_estudiantes', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
         <dt>Egresados </dt>
         <dd>{!!Form::text('beneficiados_egresado', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
         <dt>Docentes</dt>
         <dd>{!!Form::text('beneficiados_docentes', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        </dl></center>
       </td>
       <td><center>
       <dl class="dl-horizontal" style="font-size:15px">
        <dt>Sector Público </dt>
        <dd>{!!Form::text('beneficiados_publico', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>Sector Privado </dt>
        <dd>{!!Form::text('beneficiados_privado', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>Público en General </dt>
        <dd>{!!Form::text('beneficiados_general', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
         <dt>Academia </dt>
        <dd>{!!Form::text('beneficiados_academia', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
         <dt>Alianza Sectorial </dt>
        <dd>{!!Form::text('beneficiados_alianza', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
         <dt>Sociedad civil Organizada</dt>
        <dd>{!!Form::text('beneficiados_sociedad', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>Otros</dt>
        <dd>{!!Form::text('beneficiados_otros', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
       </dl></center>
       </td>
       <td><center>
       <dl class="dl-horizontal" style="font-size:15px">
        <dt>0 - 10 años </dt>
        <dd>{!!Form::text('beneficiados_0_10', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>11 - 20 años </dt>
        <dd>{!!Form::text('beneficiados_11_20', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>21 - 30 años </dt>
        <dd>{!!Form::text('beneficiados_21_30', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>31 - 60 años</dt>
        <dd>{!!Form::text('beneficiados_31_60', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>Mayores de 60 años</dt>
        <dd>{!!Form::text('beneficiados_mayores_60', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
       </dl></center>
       </td>

       <td><center>
       <dl class="dl-horizontal" style="font-size:15px">
        <dt>Hombres </dt>
        <dd>{!!Form::text('beneficiados_mayores_60', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>
        <dt>Mujeres </dt>
        <dd>{!!Form::text('beneficiados_mayores_60', null, ['id' => 'entrega1', 'class'=>'form-control'])!!}</dd>       
       </dl></center>
       </td>   
       
      </tr>
     </tbody>
    </table>
 
    

    	{!!Form::label('Beneficiados')!!}
        {!!Form::text('beneficiados', null, ['class'=>'form-control'])!!}
    </div>

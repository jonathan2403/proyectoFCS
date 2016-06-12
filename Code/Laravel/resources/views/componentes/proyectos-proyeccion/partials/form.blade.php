    <div class="form-group">
        {!!Form::label('Titulo')!!}
        {!!Form::text('titulo_proyecto', null, ['class'=>'form-control', 'placeholder'=>'Digite Nombre del Proyecto'])!!}
        {!! Form::hidden('tipo', 'ps') !!}
            </br>  

        {!!Form::label('Director')!!}<br>
        {!!Form::text('profesor', null, ['class'=>'form-control', 'placeholder'=>'Buscar por Nombre o Cédula', 'id' => 'nombre_profesor'])!!}
        <div id="label_oculto_profesor"></div>                     
        {!! Form::hidden('id_profesor', null, ['id' => 'id_profesor']) !!}
        <br>
        
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Inicio del Proyecto</h3>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-xs-5">
                <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                      {!!Form::text('fecha_inicio', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly', 'placeholder' => 'dd-mm-AAAA'])!!}
                  </div>
              </div>
              <div class="col-xs-5">
                  {!!Form::text('numero_acta', null, ['class'=>'form-control', 'placeholder' => 'Número de Acta'])!!}
              </div>
            </div>
          </div>
        </div><!-- Cierra box danger Inicio del Proyecto -->

        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Avances e Informe Final</h3>
          </div>          
          <div class="box-body">
            <div class="row">
              <div class="col-xs-4">
                    <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                   {!!Form::text('fecha_avance1', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly', 'placeholder' => 'Entrega Avance 1'])!!}
                  </div>
              </div>
              <div class="col-xs-4">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    {!!Form::text('fecha_avance2', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly', 'placeholder' => 'Entrega Avance 2'])!!}
                </div>
              </div>
              <div class="col-xs-4">
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      {!!Form::text('fecha_informe_final', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly', 'placeholder' => 'Entrega Informe Final'])!!}
                  </div>
              </div>
            </div>
          </div>
        </div>
        
        {!!Form::label('Fecha de Prorroga')!!}
        <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
        {!!Form::text('fecha_prorroga', null, ['id' => 'datepicker2', 'class'=>'picker form-control', 'readonly', 'placeholder' => 'dd-mm-AAAA'])!!}
        </div></br> 

      <div class="box box-danger direct-chat direct-chat-warning collapsed-box">
        <div class="box-header">
          <h3 class="box-title">Beneficiados</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> </button>
                </div>
        </div>  
        <div class="box-body" style="display:none;">
          <div class="row">
          <div class="col-md-11">
               <table class="table table-bordered">
     <thead>
      <th><center><font size="4px">Participación UNILLANOS</font></center></th>
      <th><center><font size="4px">Participación Sectorial</font></center></th>
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
       
      </tr>
     </tbody>
    </table>
          </div>    
          </div>
          <div class="row">
            <div class="col-md-11">
              <table class="table table-bordered">
     <thead>
      <th><center><font size="4px">Rango por Edades</font></center></th>
      <th><center><font size="4px">Participación por Genero</font></center></th>
     </thead>
     <tbody>
      <tr>
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
            </div>
          </div>
        </div>
      </div><!-- Cierra box Beneficiados -->
      {!!Form::label('Total de Beneficiados')!!}
      {!!Form::text('beneficiados', null, ['class'=>'form-control'])!!}
      <br>

      {!!Form::label('Valor efectivo del Proyecto')!!}
      {!!Form::text('valor_efectivo', null, ['class'=>'form-control'])!!}
            </br>

      <div class="row">
        <div class="col-xs-3">
        {!!Form::label('Ejecutado')!!}
        {!!Form::select('ejecutado', ['' => '', 'Si' => 'Si', 'No' => 'No'], null, ['class' => 'form-control'])!!}  
        </div>
      </div>
  </br>
</div>

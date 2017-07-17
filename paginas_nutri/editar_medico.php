<?php 

include("../class/database.php");

$objData = new Database();

$sth = $objData->prepare('SELECT * FROM datos_personales  WHERE  id_paciente = :id');


$id = $_GET['id'];

$sth->bindParam(':id',$id);

$sth->execute();




$result = $sth->fetchAll();




 ?> 
<script src="class/js/edicion_paciente.js"></script> 
<div id="paciente_edicion"></div>
<section class="col-lg-12 ">
<div class="box box-primary">
            <div class="box-header with-border">
               <h3 class="box-title"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modificación Paciente</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                
              </div>
              <!-- /.box-tools -->
            </div>
          <div class="box-body">
        
              <div id="actualizar_medicos"></div>
        

            <div class="form-group">
                <input type="hidden" value="<?php echo $result[0]['id_paciente']; ?>" class="id"  >
            </div>




          <div class="col-xs-6">

            <div class="form-group">
                  <label for="nombre" class="control-label">Nombre <small style="color:#CC3030;">*</small></label>
                  <input type="text" class="form-control nombre_paciente" placeholder="Nombre(s)" value="<?php echo $result[0]['nombre_paciente']; ?>" id="nombre" >
            </div>
          </div>

            <div class="col-xs-6">    
            <div class="form-group">
                  <label for="capital" class="control-label">Edad</label>
                  <input type="text" class="form-control edad" placeholder="Apellido Materno"  value="<?php echo $result[0]['edad']; ?>" id="materno"  > 
                </div>
            </div>

            <div class="col-xs-6">
            <div class="form-group">
                  <label for="moneda" class="control-label">Sexo <small style="color:#CC3030;">*</small></label>
                  <select class="form-control sexo">
                    <option value="<?php echo $result[0]['sexo']; ?>"><?php echo $result[0]['sexo']; ?></option>
                    <option value="0">Seleccione una opcion</option>
                    <option >Masculino</option>
                    <option >Femenino</option>
                  </select>
                </div>
            </div>

             <div class="col-xs-6">    
            <div class="form-group">
                  <label for="capital" class="control-label">Fecha de Nacimiento</label>
                  <input type="text" class="form-control fecha_nacimiento" placeholder="Apellido Materno"  value="<?php echo $result[0]['fecha_nacimiento']; ?>" id="fecha_nacimiento"  > 
                </div>
            </div>

            <div class="col-xs-6">
            <div class="form-group">
                  <label for="moneda" class="control-label">Estado Civil <small style="color:#CC3030;">*</small></label>
                  <select class="form-control estado_civil">
                    <option value="<?php echo $result[0]['estado_civil']; ?>"><?php echo $result[0]['estado_civil']; ?></option>
                    <option value="0">Seleccione una opcion</option>
                    <option >Soltero</option>
                    <option >Casado</option>
                    <option >Viudo</option>
                    <option >Otro</option>
                  </select>
                </div>
            </div>

            <div class="col-xs-6">
            <div class="form-group">
                  <label for="continente" class="control-label">Escolaridad <small style="color:#CC3030;">*</small></label>
                  <select  class="form-control escolaridad" >
                    <option value="<?php echo $result[0]['escolaridad']; ?>"><?php echo $result[0]['escolaridad']; ?></option>
                    <option value="0">Selecciona una opcion</option>
                    <option value="Primaria">Primaria</option>
                    <option value="Secundaria">Secundaria</option>
                    <option value="Preparatoria">Preparatoria</option>
                    <option value="Universidad">Universidad</option>
                    <option value="PostGrado">PostGrado</option>
                    <option value="Doctorado">Doctorado</option>
                    <option value="Otro">Otro</option>
                  </select>
            </div>
            </div>

            <div class="col-xs-6">
            <div class="form-group">
                  <label for="continente" class="control-label">Ocupacion <small style="color:#CC3030;">*</small></label>
                  <input type="text" class="form-control ocupacion" placeholder="Fecha" value="<?php echo $result[0]['ocupacion']; ?>" id="" >
            </div>
            </div>

          <div class="col-xs-6">
            <div class="form-group">
                  <label for="continente" class="control-label">Direccion <small style="color:#CC3030;">*</small></label>
                  <input type="text" class="form-control direccion" placeholder="Fecha" value="<?php echo $result[0]['direccion']; ?>" id="" >
            </div>
            </div>

            <div class="col-xs-6">
            <div class="form-group">
                  <label for="continente" class="control-label">Telefono <small style="color:#CC3030;">*</small></label>
                  <input type="text" class="form-control telefono" placeholder="Fecha" value="<?php echo $result[0]['telefono']; ?>" id="" >
            </div>
            </div>

             <div class="col-xs-6">
            <div class="form-group">
                  <label for="continente" class="control-label">Email <small style="color:#CC3030;">*</small></label>
                  <input type="text" class="form-control email" placeholder="Fecha" value="<?php echo $result[0]['email']; ?>" id="" >
            </div>
            </div>

          

             <div class="col-xs-6">
            <div class="form-group">
                  <label for="continente" class="control-label">Motivo de Consulta <small style="color:#CC3030;">*</small></label>
                  <input type="text" class="form-control motivo_consulta" placeholder="Fecha" value="<?php echo $result[0]['motivo_consulta']; ?>" id="" >
            </div>
            </div>


             <div class="col-xs-6">
            <div class="form-group">
                  <label for="continente" class="control-label">Fecha de Alta <small style="color:#CC3030;">*</small></label>
                  <input type="text" class="form-control fecha_alta" placeholder="Fecha" value="<?php echo $result[0]['fecha_elaboracion']; ?>" id="fecha_alta" >
            </div>
            </div>


 

          <div class="col-xs-12">
            <div class="form-group">  
          <button type="button" class="btn btn-primary btn-sm btn-flat edicion_paciente pull-right"><i class="fa fa-refresh" aria-hidden="true"></i> Actualizar</button>
          </div>
          </div>

          <div style="visibility: hidden;" class="recurso">
           
              <div class="form-group">
                <label>Tipo de Recurso</label>
                <select class="form-control select2  recurso_actualiza" disabled="" id="recurso">
                </select>

              </div>

          </div>

           </div>   
      </div>
</section>    

    <script>
        $( document ).ready(function() {
            $('#fecha_nacimiento').datepicker({
               format: 'yyyy-mm-dd'
            });
            $('#fecha_alta').datepicker({
               format: 'yyyy-mm-dd'
            });
        });
    </script>  

 
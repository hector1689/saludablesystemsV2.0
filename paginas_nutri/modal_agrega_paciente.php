<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<script src="class/js/alta_paciente.js"></script>  
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user-plus"></i> Alta Paciente</h4>
      </div>
      <div class="modal-body">
        <form role="form">
         <div id="paciente_alta"></div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre(s) Apellido(s) del Paciente</label>
                  <input class="form-control nombre_paciente"  placeholder="Nombre(s) Apellido(s) del Paciente" type="text">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Edad</label>
                  <input class="form-control edad" placeholder="Edad" type="text">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Sexo</label>
                  <select  class="form-control sexo" >
                    <option value="0">Selecciona una opcion</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Fecha de nacimiento</label>
                  <input class="form-control" id="fecha_nacimiento" placeholder="Fecha de nacimiento" type="text">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Estado Civil</label>
                  <select  class="form-control estado_civil" >
                    <option value="0">Selecciona una opcion</option>
                    <option value="Soltero">Soltero</option>
                    <option value="Casado">Casado</option>
                    <option value="Viudo">Viudo</option>
                    <option value="Otro">Otro</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Escolaridad</label>
                  <select  class="form-control escolaridad" >
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
                <div class="form-group">
                  <label for="exampleInputPassword1">Ocupacion</label>
                  <input class="form-control ocupacion"  placeholder="Ocupacion" type="text">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Direccion</label>
                  <input class="form-control direccion"  placeholder="Direccion" type="text">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Telefono</label>
                  <input class="form-control telefono"  placeholder="Telefono" type="text">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input class="form-control email"  placeholder="Email" type="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Motivo de la consulta</label>
                  <input class="form-control consulta"  placeholder="Motivo de la consulta" type="text">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Fecha de alta</label>
                  <input class="form-control" id="fecha_alta" placeholder="Fecha de alta" type="text">
                </div>


              </div>
            </form>
      </div>
      <div class="modal-footer"> 
        <button type="button" class="btn btn-danger btn-sm btn-flat" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary btn-sm btn-flat alta_paciente">Guardar</button>
      </div>
    </div>
  </div>
</div>


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
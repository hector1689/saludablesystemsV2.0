 <?php 
include("class/database.php");
$objData = new Database();

$sth4 = $objData->prepare('SELECT COUNT(id_paciente) as total_medicos  FROM datos_personales  ');
$sth4->execute();
$result4 = $sth4->fetchAll();

if($result4){
      foreach ($result4 as $key => $values) {

$total_medicos2=$values['total_medicos'];

}

if($total_medicos2 == 0){
    echo '
  <script>
    swal({
        title: "Lo Sentimos!",
         text: "No hay datos Disponibles",
        type: "warning"
    });
  </script>
  ';
}else{

$sth3 = $objData->prepare('SELECT * FROM datos_personales');

$sth3->execute();

$result3 = $sth3->fetchAll();


?>


<section class="col-lg-12">
<button type="button" class="btn btn-primary btn-sm btn-flat" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
<div style="padding-top: 0;padding-bottom: 6px;"></div>
          <div class="box box-primary">
            <div class="box-header with-border">
<script src="class/js/eliminar_paciente.js"></script>
                <h3 class="box-title"><i class="fa fa-user" aria-hidden="true"></i> Pacientes</h3>

              <div class="box-tools pull-right">


                <div class="input-group input-group-sm" style="width: 150px;">

                  <input name="table_search" id="filtrar" class="form-control pull-right" placeholder="Buscar.." type="text">
                  
                  <div class="input-group-btn">
                   <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>

                  </div>
                </div>
                
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: block;">
            <div class="direct-chat-messages">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Edad</th>
                  <th>Ocupacion </th>
                  <th>Email</th>
                  <th>Telefono</th>
                  <th>Fecha de Inicio</th>
                  <th>Direccion</th>
                  <th></th>
                </tr>
                </thead>
                  <tbody class="buscar">
                    <?php
                    if($result3){
                        foreach ($result3 as $key => $value) {
                    ?>
                    <tr>
                    
                      <td ><?php echo $value['nombre_paciente'];?></td>
                      <td ><?php echo $value['edad'];?></td>
                      <td ><?php echo $value['ocupacion'];?></td>
                      <td ><?php echo $value['email'];?></td>
                      <td ><?php echo $value['telefono'];?></td>
                      <td ><?php echo $value['fecha_elaboracion'];?></td>
                      <td ><?php echo $value['direccion'];?></td>
                      <td>

                      <small id="td"><a href="Medicos/editar_medico.php?id=<?php echo $value['id_paciente']; ?>" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></small>
                      
                      <small><a class="btn btn-danger btn-sm btn-flat"  onclick="eliminarPaciente('<?php echo $value['id_paciente']; ?>')"><i class="fa fa-trash" aria-hidden="true"></i></a></small>
                      </td>

                    </tr>
                        <?php
                            
                        }
                        }
                        ?>

                  </tbody>

              </table>
              </div>
            </div>
          </div>
        </section>
    <!-- /.content -->
<?php }
} ?>
<script>
      $(document).ready(function() {
$("#td a").each(function(){
              var href = $(this).attr("href");
              $(this).attr({ href: "#"});
              $(this).click(function(){
                 $("#div-results").load(href);
              });
           });


(function ($) {

      $('#filtrar').keyup(function () {

          var rex = new RegExp($(this).val(), 'i');
          $('.buscar tr').hide();
          $('.buscar tr').filter(function () {
              return rex.test($(this).text());
          }).show();

      })

  }(jQuery));
 });
</script>
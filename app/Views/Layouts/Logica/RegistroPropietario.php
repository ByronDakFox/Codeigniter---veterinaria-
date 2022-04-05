<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Registro</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url();?>/index.php/Inicio_gft=veterinaria-20v">Inicio</a></li>
              <li><i class="fa fa-table"></i>Registro</li>
              <li><i class="fa fa-th-list"></i>Propietario</li>
            </ol>
          </div>
        </div>

       
                <table class="table table-hover table-bordered table-dark" class="table table-sm  table-bordered text-warning font-weight-bold">
                <thead style="color: yellow">
                <th nowrap style="text-align:center">#</th>
                <th nowrap style="text-align:center">Cedula</th>
                <th nowrap style="text-align:center">Nombre</th>
                <th nowrap style="text-align:center">Apellido</th>
                <th nowrap style="text-align:center">Email</th>
                <th nowrap style="text-align:center">Direccion</th>
                <th nowrap style="text-align:center">Fijo</th>
                <th nowrap style="text-align:center">Celular</th>
                <th scope="col" colspan="2" nowrap style="text-align:center">Opción</th>
        </thead>
        <?php
        $count=1;
            foreach($users as $user){
              $datos1= $user['pro_id']."||".
                       $user['pro_cedula']."||".
                       $user['pro_nombres']."||".
                       $user['pro_apellidos']."||".
                       $user['pro_correo']."||".
                       $user['pro_direccion']."||".
                       $user['pro_telefonoF']."||".
                       $user['pro_celular'];
                echo "<tr>";
                echo "<td style='text-align:center'>".$count."</td>";
                echo "<td style='text-align:center'>".$user['pro_cedula']."</td>";
                echo "<td style='text-align:center'>".$user['pro_nombres']."</td>";
                echo "<td style='text-align:center'>".$user['pro_apellidos']."</td>";
                echo "<td style='text-align:center'>".$user['pro_correo']."</td>";
                echo "<td style='text-align:center'>".$user['pro_direccion']."</td>";
                echo "<td style='text-align:center'>".$user['pro_telefonoF']."</td>";
                echo "<td style='text-align:center'>".$user['pro_celular']."</td>";
                ?>
                <td nowrap style="text-align:center">
                <a class="btn btn-success" href="#" title="Editar informacion" data-toggle="modal"onclick="obtenerDatos1('<?php echo $datos1 ?>')" data-target="#modalTransaccion" ><img src="https://img.icons8.com/officexs/20/000000/refresh.png"/></a>
                </td>
                <td nowrap style="text-align:center">
                 <button class="btn btn-danger" onclick="eliminar_Datos('<?php echo $user['pro_id']; ?>')"><i class="icon_close_alt2"></i></button>
                </td>
                <?php
                echo "</tr>";
                $count++;
            }            
            ?>  
             </table>        
                    <br>

        <!-- /.content-wrapper -->



        <div class="modal fade" id="modalTransaccion">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 align='center' class="modal-title" >Datos Propietario</h4>
            </div>
            <div id="bmodal" class="modal-body">

            <div class="form-row">
                <div class="form-group" style="width:23%">
                  <label for="idS"><b>ID:</b></label>
                  <input type="text" class="form-control" id="Ids" name="Ids" readonly="">
              </div>

              <div class="form-group" style="width:45%">
                <label for="Cedula"><b>Cedula:</b></label>
                <input type="text" class="form-control" id="cedulaIds" name="cedulads">
              </div>

                <div class="form-group" style="width:50%">
                  <label for="nombres"><b>Nombre:</b></label>
                  <input type="text" class="form-control" id="nombresIds" name="nombresIds">
              </div>

              <div class="form-group" style="width:50%">
                  <label for="apellidos"><b>Apellido:</b></label>
                  <input type="text" class="form-control" id="apellidosIds" name="apellidosIds">
              </div>

              <div class="form-group" style="width:65%">
                  <label for="email"><b>Email:</b></label>
                  <input type="email" class="form-control" id="emailsIds" name="emailsIds">
              </div>

              <div class="form-group" style="width:65%">
                  <label for="direcc"><b>Dirección:</b></label>
                  <input type="text" class="form-control" id="direccionsIds" name="direccionsIds">
              </div>

              <div class="form-group" style="width:45%">
                  <label for="fijo"><b>Fijo:</b></label>
                  <input type="text" class="form-control" id="fijoIds" name="fijoIds">
              </div>

              <div class="form-group" style="width:45%">
                  <label for="cell"><b>Celular:</b></label>
                  <input type="text" class="form-control" id="cellIds" name="cellIds">
              </div>
          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="actualizarDatos()">Actualizar</button>&nbsp;
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
        </div>
        
                   
   
        </div>               
    </section><!-- End About Section -->
    </main><!-- End #main -->
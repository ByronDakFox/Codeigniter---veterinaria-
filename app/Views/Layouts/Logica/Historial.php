<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Registro</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url();?>/index.php/Inicio_gft=veterinaria-20v">Inicio</a></li>
              <li><i class="fa fa-table"></i>Registro</li>
              <li><i class="fa fa-th-list"></i>Historial</li>
            </ol>
          </div>
        </div>

       
                <table class="table table-hover table-bordered table-dark" class="table table-sm  table-bordered text-warning font-weight-bold">
                <thead style="color: yellow">
                <th nowrap style="text-align:center">#</th>
                <th nowrap style="text-align:center">Nombre</th>
                <th nowrap style="text-align:center">Esterelizado</th>
                <th nowrap style="text-align:center">Vacunas</th>
                <th nowrap style="text-align:center">Observacion</th>
                <th nowrap style="text-align:center">Observacion</th>
        </thead>
        <?php
        $count=1;
        foreach($users as $salida){
          $datos1= $salida['masc_id']."||".
                    $salida['masc_nombre']."||".
                    $salida['masc_esterilizado']."||".
                    $salida['masc_vacunas']."||".
                    $salida['masc_observacion'];
             echo "<tr>";
             echo "<td style='text-align:center'>".$count."</td>";
             echo "<td style='text-align:center'>".$salida['masc_nombre']."</td>";
             echo "<td style='text-align:center'>".$salida['masc_esterilizado']."</td>";
             echo "<td style='text-align:center'>".$salida['masc_vacunas']."</td>";
             echo "<td style='text-align:center'>".$salida['masc_observacion']."</td>";
             ?>
             <td nowrap style="text-align:center"> <a class="btn btn-success"  href="#" title="Editar informacion" data-toggle="modal"onclick="obtenerDatos3('<?php echo $datos1 ?>')" data-target="#modalTransaccion" ><img src="https://img.icons8.com/officexs/20/000000/refresh.png"/></a>
             </td>
             <?php
             echo "</tr>";
             $count++;
         }            
            ?>  
             </table>        
                    <br>
                    <div class="modal fade" id="modalTransaccion">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-blue">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 align='center' class="modal-title" >Datos Mascota</h4>
            </div>
            <div id="bmodal" class="modal-body">

            <div class="form-row">
                <div class="form-group" style="width:23%">
                  <label for="idS"><b>ID:</b></label>
                  <input type="text" class="form-control" id="Ids" name="Ids" readonly="">
              </div>

                <div class="form-group" style="width:50%">
                  <label for="nombres"><b>Nombre:</b></label>
                  <input type="text" class="form-control" id="nombreId2" name="nombreId2" readonly="">
              </div>

              <div class="form-group" style="width:30%">
                        <label for="este">Esterilizacion:</label>
                        <select id="esteId" class="form-control">
                        <option value="0">------</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        </select>
              </div>
              <div class="form-group" style="width:30%">
                        <label for="vac">Vacunas:</label>
                        <select id="vacunId" class="form-control">
                        <option value="0">------</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        </select>
              </div>
              <div class="form-group">
                        <label for="observas">Observacion:</label>
                        <textarea name="comentarios" rows="10" cols="40" id="observid" placeholder="Escribe aquí tus comentarios"></textarea>
                </div>   
          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="actualizarHist()">Actualizar</button>&nbsp;
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
        </div>   
        <?php         
        $delay = 10; 
        header("Refresh: $delay;"); 
       ?>

   
        </div>               
    </section>
    </main><!-- End #main -->


    
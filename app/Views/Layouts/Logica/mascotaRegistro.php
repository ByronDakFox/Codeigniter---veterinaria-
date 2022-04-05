<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Registro</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url();?>/index.php/Inicio_gft=veterinaria-20v">Inicio</a></li>
              <li><i class="fa fa-table"></i>Registro</li>
              <li><i class="fa fa-th-list"></i>Mascota</li>
            </ol>
          </div>
        </div>

       
                <table class="table table-hover table-bordered table-dark" class="table table-sm  table-bordered text-warning font-weight-bold">
                <thead style="color: yellow">
                <th nowrap style="text-align:center">#</th>
                <th nowrap style="text-align:center">Nombre</th>
                <th nowrap style="text-align:center">Edad</th>
                <th nowrap style="text-align:center">Fecha</th>
                <th nowrap style="text-align:center">Sexo</th>
                <th nowrap style="text-align:center">Especie</th>
                <th nowrap style="text-align:center">Raza</th>
                <th nowrap style="text-align:center">Color</th>
                <th nowrap style="text-align:center">Observacion</th>
                <th nowrap style="text-align:center">Foto</th>
                <th nowrap style="text-align:center">Opción</th>
        </thead>
        <?php
        $count=1;
            foreach($users as $salida){
             $datos1= $salida['masc_id']."||".
                       $salida['masc_nombre']."||".
                       $salida['masc_edad']."||".
                       $salida['masc_fechaN']."||".
                       $salida['masc_sexo']."||".
                       $salida['masc_especie']."||".
                       $salida['masc_raza']."||".
                       $salida['masc_color']."||".
                       $salida['masc_foto'];
                echo "<tr>";
                echo "<td style='text-align:center'>".$count."</td>";
                echo "<td style='text-align:center'>".$salida['masc_nombre']."</td>";
                echo "<td style='text-align:center'>".$salida['masc_edad']."</td>";
                echo "<td style='text-align:center'>".$salida['masc_fechaN']."</td>";
                echo "<td style='text-align:center'>".$salida['masc_sexo']."</td>";
                echo "<td style='text-align:center'>".$salida['masc_especie']."</td>";
                echo "<td style='text-align:center'>".$salida['masc_raza']."</td>";
                echo "<td style='text-align:center'>".$salida['masc_color']."</td>";
                echo "<td style='text-align:center'>".$salida['masc_observacion']."</td>";
                //$mus=$salida['masc_color'];
                ?>
                <td style="text-align:center"><img src="<?=base_url()?>/public/upload/<?php echo $salida['masc_foto'];?>" width="100" height="150"/></td>
                <td nowrap style="text-align:center"> <a class="btn btn-success"  href="#" title="Editar informacion" data-toggle="modal"onclick="obtenerDatos('<?php echo $datos1 ?>')" data-target="#modalTransaccion" ><img src="https://img.icons8.com/officexs/20/000000/refresh.png"/></a>
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
                <h4 align='center' class="modal-title" >Datos Mascota</h4>
            </div>
            <div id="bmodal" class="modal-body" >
            <div class="form-row">
                <div class="form-group" style="width:23%">
                  <label for="idS"><b>ID:</b></label>
                  <input type="text" class="form-control" id="Ids" name="Ids" readonly="">
              </div>

                <div class="form-group" style="width:50%">
                  <label for="nombres"><b>Nombre:</b></label>
                  <input type="text" class="form-control" id="nombreId2" name="nombreId2">
              </div>

              <div class="form-group" style="width:50%">
                  <label for="edad"><b>Edad:</b></label>
                  <input type="text" class="form-control" id="edadId" name="edadId">
              </div>
              <div class="form-group">
                        <label for="date">Fecha de Nacimiento:</label>&nbsp;&nbsp;&nbsp; 
                        <input type="date" name="fechaN" id="fechaN">
                 </div>
              <div class="form-group" style="width:30%">
                        <label for="Sexos">Sexo:</label>
                        <select id="sexoId" class="form-control">
                        <option value="0">------</option>
                        <option value="M">Macho</option>
                        <option value="H">Hembra</option>
                        </select>
                </div>
                <div class="form-group" style="width:50%">
                  <label for="espe"><b>Especie:</b></label>
                  <input type="text" class="form-control" id="especId" name="especId">
              </div>
              <div class="form-group" style="width:50%">
                  <label for="raza"><b>Raza:</b></label>
                  <input type="text" class="form-control" id="rzaId" name="rzaId">
              </div>
              <div class="form-group" style="width:50%">
                  <label for="colors"><b>Color:</b></label>
                  <input type="text" class="form-control" id="colrId" name="colrId">
              </div>
              <div class="form-group">
                    <label for="exampleInputFile">Foto:</label>
                    <input type="file" name="fotos">
                    <p class="help-block">Ingrese la foto.</p>
              </div>  
          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="actualizarMascota()">Actualizar</button>&nbsp;
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
        </div>            
   
        </div>               
    </section><!-- End About Section -->
    </main><!-- End #main -->
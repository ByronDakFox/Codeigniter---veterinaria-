<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Registrar Datos</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url();?>">Inicio</a></li>
              <li><i class="icon_document_alt"></i>Registrar Datos</li>
              <li><i class="fa fa-file-text-o"></i>Mascota y Propietario</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
          <section class="panel">
              <header class="panel-heading">
              Datos del solicitante
              </header>
              <div class="panel-body">
            <form  class="form-horizontal " method="post"  action="<?php echo base_url();?>/index.php/Home/registroDueno_Mascota">
                <h1>Datos del Propietario</h1>
                <div class="form-row">
                   
                    <div class="col-sm-2">
                        <label for="MASCOTA">Mascota</label>
                        <select id="mascId" name="mascId" class="form-control">
                        <?php 
                        for($i=0; $i<sizeof($users); $i++){
                            ?>
                        <option value="<?php echo $users[$i]['masc_id'];?>"><?php echo $users[$i]['masc_nombre'];?></option>
                        <?php
                        }
                        ?>
                        </select>
                    </div> 
                    <div class="col-sm-3">
                        <label for="cedula">Propietario:</label>
                        <input type="text" class="form-control" name="cedulasId" placeholder="Ingrese el número de cedula">
                    </div>                   
                </div>
               
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
                        <button type="submit" class="btn btn-primary" onclick="registroDueno_Mascota()">Guardar</button> &nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <button type="reset" class="btn btn-danger" >Cancelar</button>
                    </div>
                </div>                  
            </form>
             </div>
            </section>
            </div>
        </div>
    </main><!-- End #main -->
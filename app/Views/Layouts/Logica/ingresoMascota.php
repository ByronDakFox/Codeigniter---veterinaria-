<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Registrar Datos</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url();?>/index.php/Inicio_gft=veterinaria-20v">Inicio</a></li>
              <li><i class="icon_document_alt"></i>Registrar Datos</li>
              <li><i class="fa fa-file-text-o"></i>Mascota</li>
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
            <form  class="form-horizontal" action="<?php echo base_url();?>/index.php/Home/insertMascota" method="post" enctype="multipart/form-data">
                <h1>Datos de la Mascota</h1>
                <div class="form-row">
                    <div class="col-sm-4">
                        <label for="nombreId">Nombre:</label>
                        <input type="text" class="form-control"  name="nombresId2" placeholder="Nombre">
                    </div>
                    <div class="col-sm-2">
                        <label for="edad">Edad:</label><div>
                        <input type="text" class="form-control"  name="edadId" placeholder="1,2,3,.."></div>
                    </div>
                    <div class="col-sm-2">
                        <label for="date">Fecha de Nacimiento:</label>&nbsp;&nbsp;&nbsp; 
                        <input type="date" class="form-control" name="fechaN" >
                    </div>
                    <div class="col-sm-2">
                        <label for="Sexos">Sexo:</label>
                        <select  name="sexoId" class="form-control">
                        <option value="0">------</option>
                        <option value="M">Macho</option>
                        <option value="H">Hembra</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label for="escpecie">Especie:</label>
                        <input type="text" class="form-control"  name="escpecieId2" placeholder="Canino,..">
                    </div>
                    <div class="col-sm-2">
                        <label for="RazaId">Raza:</label>
                        <input type="text" class="form-control" name="RazaId" placeholder="Ingrese la raza">
                    </div>
                    <div class="col-sm-2">
                        <label for="colors">Color:</label>
                        <input type="text" class="form-control"  name="colorId" placeholder="Ingrese el color">
                    </div>
                    <div class="col-sm-2">
                        <label for="esterilizado">Esterilizado:</label>
                        <select  name="esterId" class="form-control">
                        <option value="--">------</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputFile">Foto:</label>
                    <input type="file" name="foto">
                    <p class="help-block">Ingrese la foto.</p>
                    </div>  
                    <div class="col-sm-2">
                        <label for="vacunas">Vacunado:</label>
                        <select  name="vacunaId" class="form-control">
                        <option value="--">------</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        </select>
                    </div>
                    </div>                         
                    <div class="form-group">
                        <label for="observa">Observacion:</label>
                        <textarea name="comentarios" rows="10" cols="40"  placeholder="Escribe aquí tus comentarios"></textarea>
                    </div>     
               
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
                        <button type="submit" class="btn btn-primary"  onclick="insertMascotas()">Guardar</button> &nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <button type="reset" class="btn btn-danger">Cancelar</button>
                    </div>
                </div>                  
            </form>
             </div>
            </section>
            </div>
        </div>
        <?php echo $error; ?>
    </main><!-- End #main -->
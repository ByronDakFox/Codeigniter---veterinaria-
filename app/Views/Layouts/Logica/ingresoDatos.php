<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>Registrar Datos</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url();?>/index.php/Inicio_gft=veterinaria-20v">Inicio</a></li>
              <li><i class="icon_document_alt"></i>Registrar Datos</li>
              <li><i class="fa fa-file-text-o"></i>Propietario</li>
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
                <form  class="form-horizontal " method="post" id="Formulario">
                    <h1>Datos del Propietario</h1>
                    <div class="form-row">
                        <div class="col-sm-4" id="grupo_nombre">
                            <label for="nombreId">Nombre</label>
                            <input type="text" class="form-control" id="nombreId" name="nombreId" placeholder="Nombre" required="" pattern="[a-zA-Z]+">
                        </div>
                        <div class="col-sm-4">
                            <label for="apellidoId">Apellido</label>
                            <input type="text" class="form-control" id="apellidoId" name="apellidoId" placeholder="Apellido" required="" pattern="[a-zA-Z]+">
                        </div>
                        <div class="col-sm-6" id="grupo_correo">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="inputEmail4" placeholder="Email" required="" pattern="[a-zA-Z]+">
                        </div>
                        <div class="col-sm-2">
                            <label for="RUC">ID</label>
                            <select id="rucId" class="form-control">
                            <option value="0">-------</option>
                            <option value="1">Cedula</option>
                            <option value="2">RUC</option>
                            <option value="3">Pasaporte</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <label for="inputEmail4">RUC</label>
                            <input type="text" class="form-control" id="rucId2" name="rucId2" placeholder="N. Cédula" required="">
                        </div>
                        <div class="col-sm-6">
                            <label for="inputAddress">Direccion</label>
                            <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="1234 Main St" required="" pattern="[a-zA-Z]+">
                        </div>
                        <div class="col-sm-2">
                            <label for="celular">Celular</label>
                            <input type="text" class="form-control" id="telCId" name="telCId" placeholder="099999999" required="" pattern="[0-9]+">
                        </div>
                        <div class="col-sm-2">
                            <label for="telefono">Telefono Fijo</label>
                            <input type="text" class="form-control" id="telfId" name="telfId" placeholder="06259999" required="" pattern="[0-9]+">
                        </div>                  
                    </div>
                   
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
                            <button type="submit" class="btn btn-primary" onclick="insertarProp()">Guardar</button> &nbsp;&nbsp;&nbsp;
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
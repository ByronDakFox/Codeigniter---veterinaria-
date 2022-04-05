<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Registro</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url();?>/index.php/Inicio_gft=veterinaria-20v">Inicio</a></li>
              <li><i class="fa fa-table"></i>Registro</li>
              <li><i class="fa fa-th-list"></i>General</li>
            </ol>
          </div>
        </div>

       
                <table class="table table-hover table-bordered table-dark" class="table table-sm  table-bordered text-warning font-weight-bold">
                <thead style="color: yellow">
                <th nowrap style="text-align:center">#</th>
                <th nowrap style="text-align:center">Cliente</th>
                <th nowrap style="text-align:center">Celular</th>
                <th nowrap style="text-align:center">Mascota</th>
                <th nowrap style="text-align:center">Día</th>
                <th nowrap style="text-align:center">Hora</th>
        </thead>
        <?php
        $count=1;
            foreach($users as $user){
                
                echo "<tr>";
                echo "<td style='text-align:center'>".$count."</td>";
                echo "<td style='text-align:center'>".$user['pro_nombres'].' '.$user['pro_apellidos']."</td>";
                echo "<td style='text-align:center'>".$user['pro_celular']."</td>";
                echo "<td style='text-align:center'>".$user['masc_nombre'].'--'.$user['masc_raza']."</td>";
                echo "<td style='text-align:center'>".$user['cita_fecha']."</td>";
                echo "<td style='text-align:center'>".$user['cita_hora']."</td>";
                ?>
                <?php
                echo "</tr>";
                $count++;
            }            
            ?>  
             </table>        
                    <br>
   
        </div>               
    </section><!-- End About Section -->
    </main><!-- End #main -->
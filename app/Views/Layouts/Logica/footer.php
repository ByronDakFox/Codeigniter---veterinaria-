<!-- Footer goes here -->
</div>
</div>
</div>

</div>

</div>
<!-- project team & activity end -->

</section>
<div class="text-right">
<div class="credits">
<!--
All the links in the footer should remain intact.
You can delete the links only if you purchased the pro version.
Licensing information: https://bootstrapmade.com/license/
Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
-->
by <a >Byron Ramirez</a>
</div>
</div>
</section>
<!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="<?php echo base_url();?>/assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery-ui-1.10.4.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="<?php echo base_url();?>/assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="<?php echo base_url();?>/assets/jquery-knob/js/jquery.knob.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="<?php echo base_url();?>/assets/js/owl.carousel.js"></script>
<!-- jQuery full calendar -->
<<script src="<?php echo base_url();?>/assets/js/fullcalendar.min.js"></script>
<!-- Full Google Calendar - Calendar -->
<script src="<?php echo base_url();?>/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="<?php echo base_url();?>/assets/js/calendar-custom.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery.rateit.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/validacion.js"></script>
<!-- custom select -->
<script src="<?php echo base_url();?>/assets/js/jquery.customSelect.min.js"></script>
<script src="<?php echo base_url();?>/assets/assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="<?php echo base_url();?>/assets/js/scripts.js"></script>
<!-- custom script for this page-->
<script src="<?php echo base_url();?>/assets/js/sparkline-chart.js"></script>
<script src="<?php echo base_url();?>/assets/js/easy-pie-chart.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url();?>/assets/js/xcharts.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery.autosize.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery.placeholder.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/gdp-data.js"></script>
<script src="<?php echo base_url();?>/assets/js/morris.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/sparklines.js"></script>
<script src="<?php echo base_url();?>/assets/js/charts.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery.slimscroll.min.js"></script>
<script>
//knob
$(function() {
$(".knob").knob({
'draw': function() {
$(this.i).val(this.cv + '%')
}
})
});

//carousel
$(document).ready(function() {
$("#owl-slider").owlCarousel({
navigation: true,
slideSpeed: 300,
paginationSpeed: 400,
singleItem: true

});
});

//custom select box

$(function() {
$('select.styled').customSelect();
});

/* ---------- Map ---------- */
$(function() {
$('#map').vectorMap({
map: 'world_mill_en',
series: {
regions: [{
values: gdpData,
scale: ['#000', '#000'],
normalizeFunction: 'polynomial'
}]
},
backgroundColor: '#eef3f7',
onLabelShow: function(e, el, code) {
el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
}
});
});
</script>
<script>
function insertarpropietario(){
		
        var masc=document.getElementById("mascId").value;

        $.ajax({
        url: '<?php echo base_url();?>/index.php/Home/registroDueno_Mascota',
        type: 'post',
        data: {
        'mascId': masc,
        },
        success: function(response){
        $('#mascId').val('');
        location.reload();
        }
        }); 
        
      }	
 </script>
 <script>
function insertarpropietario(){
		
        var masc=document.getElementById("cupId").value;
        var fech=document.getElementById("fechaCita").value;
        var dia=document.getElementById("horaCita").value;

        $.ajax({
        url: '<?php echo base_url();?>/index.php/Home/citas_Agendas',
        type: 'post',
        data: {
        'cupId': masc,
        'fechaCita': fech,
        'horaCita': dia,
        },
        success: function(response){
        $('#cupId').val('');
        $('#fechaCita').val('');
        $('#horaCita').val('');
        location.reload();
        }
        }); 
        
      }	
 </script>
<script>
function insertarProp(){
		
        var n=document.getElementById("nombreId").value;
        var a=document.getElementById("apellidoId").value;
        var ci=document.getElementById("rucId2").value;
        var c=document.getElementById("rucId").value;
        var e=document.getElementById("inputEmail4").value;
        var d=document.getElementById("inputAddress").value;
        var t=document.getElementById("telfId").value;
        var ce=document.getElementById("telCId").value;

        $.ajax({
        url: '<?php echo base_url();?>/index.php/Home/insertProp',
        type: 'post',
        data: {
        'nombreId': n,
        'apellidoId': a,
        'rucId2': ci,
        'rucId': c,
        'inputEmail4': e,
        'inputAddress': d,
        'telfId': t,
        'telCId': ce,
        },
        success: function(response){
        $('#nombreId').val('');
        $('#apellidoId').val('');
        $('#rucId2').val('');
        $('#rucId').val('');
        $('#inputEmail4').val('');
        $('#inputAddress').val('');
        $('#telfId').val('');
        $('#telCId').val('');
        location.reload();
        }
        }); 
        
      }	
 </script>

<script>
function obtenerDatos1(datos1){
      var d=datos1.split('||');
      $('#Ids').val(d[0]);
      $('#cedulaIds').val(d[1]);
      $('#nombresIds').val(d[2]);
      $('#apellidosIds').val(d[3]);      
      $('#emailsIds').val(d[4]);
      $('#direccionsIds').val(d[5]);
      $('#fijoIds').val(d[6]);
      $('#cellIds').val(d[7]);		
		}
    </script>
    <script>
    function actualizarDatos(){

      var id1=$('#Ids').val();
      var c=$('#cedulaIds').val();
      var n=$('#nombresIds').val();
      var a=$('#apellidosIds').val();
      var em=$('#emailsIds').val();
      var d=$('#direccionsIds').val();
      var f=$('#fijoIds').val();
      var cell=$('#cellIds').val();
      
      $.ajax({
      url: '<?php echo base_url();?>/index.php/Home/ActualizarDatos',
      type: 'post',
      data: {
      'Ids': id1,  
      'cedulaIds': c,
      'nombresIds': n,
      'apellidosIds': a,
      'emailsIds': em,
      'direccionsIds': d,
      'fijoIds': f,
      'cellIds': cell,
      },
      success: function(response){

      $('#cedulaIds').val('');
      $('#nombresIds').val('');
      $('#apellidosIds').val('');
      $('#emailsIds').val('');
      $('#direccionsIds').val('');
      $('#fijoIds').val('');
      $('#cellIds').val('');
      location.reload();
      }
      }); 
    }

  </script>
  
  <script>
function insertMascotas(){
		
        var nom=document.getElementById("nombresId2").value;
        var e=document.getElementById("edadId").value;
        var fn=document.getElementById("fechaN").value;
        var sx=document.getElementById("sexoId").value;
        var esp=document.getElementById("escpecieId2").value;
        var rz=document.getElementById("RazaId").value;
        var cl=document.getElementById("colorId").value;
        var est=document.getElementById("esterId").value;
        var vc=document.getElementById("vacunaId").value;
        var obs=document.getElementById("comentarios").value;

        $.ajax({
        url: '<?php echo base_url();?>/index.php/Home/insertMascota',
        type: 'post',
        data: {
        'nombresId2': nom,
        'edadId': e,
        'fechaN': fn,
        'sexoId': sx,
        'escpecieId2': esp,
        'RazaId': rz,
        'colorId': cl,
        'esterId': est,
        'vacunaId': vc,
        'comentarios': obs,
        },
        success: function(response){
        $('#nombresId2').val('');
        $('#edadId').val('');
        $('#fechaN').val('');
        $('#sexoId').val('');
        $('#escpecieId2').val('');
        $('#RazaId').val('');
        $('#colorId').val('');
        $('#esterId').val('');
        $('#vacunaId').val('');
        $('#comentarios').val('');
      
        location.reload();
        }
        }); 
        
      }	
 </script>
 <script>
function obtenerDatos(datos1){
      var d=datos1.split('||');
      $('#Ids').val(d[0]);
      $('#nombreId2').val(d[1]);
      $('#edadId').val(d[2]);
      $('#fechaN').val(d[3]);      
      $('#sexoId').val(d[4]);
      $('#especId').val(d[5]);
      $('#rzaId').val(d[6]);
      $('#colrId').val(d[7]);
		}
    </script>
  <script>
    function actualizarMascota(){

      var id1=$('#Ids').val();
      var n=$('#nombreId2').val();
      var e=$('#edadId').val();
      var fn=$('#fechaN').val();
      var sx=$('#sexoId').val();
      var esp=$('#especId').val();
      var rz=$('#rzaId').val();
      var cl=$('#colrId').val();
      
      $.ajax({
      url: '<?php echo base_url();?>/index.php/Home/ActualizarMasct',
      type: 'post',
      data: {
      'Ids': id1,  
      'nombreId2': n,
      'edadId': e,
      'fechaN': fn,
      'sexoId': sx,
      'especId': esp,
      'rzaId': rz,
      'colrId': cl,
      },
      success: function(response){

      $('#nombreId2').val('');
      $('#edadId').val('');
      $('#fechaN').val('');
      $('#sexoId').val('');
      $('#especId').val('');
      $('#rzaId').val('');
      $('#colrId').val('');
      location.reload();
      }
      }); 
    }
  </script>
   <script>
  function eliminar_Datos(datos){
    var valor="idsp="+datos;
    $.ajax({
      data: valor,
      url: '<?php echo base_url();?>/index.php/Home/eliminaDatos',
      type: 'post',
      success: function(response) {
        location.reload();
      }
    });
      }
  </script>

<script>
function obtenerDatos3(datos1){
      var d=datos1.split('||');
      $('#Ids').val(d[0]);
      $('#nombreId2').val(d[1]);
      $('#esteId').val(d[2]);
      $('#vacunId').val(d[3]);      
      $('#observid').val(d[4]);
		}
    </script>

<script>
    function actualizarHist(){

      var id1=$('#Ids').val();
      var nm=$('#nombreId2').val();
      var esp=$('#esteId').val();
      var vc=$('#vacunId').val();
      var obs=$('#observid').val();
      
      $.ajax({
      url: '<?php echo base_url();?>/index.php/Home/ActualizarHistorial',
      type: 'post',
      data: {
      'Ids': id1,
      'nombreId2': nm,   
      'esteId': esp,
      'vacunId': vc,
      'observid': obs,
      },
      success: function(response){
      $('#nombreId2').val('');
      $('#esteId').val('');
      $('#vacunId').val('');
      $('#observid').val('');
      location.reload();
      }
      }); 
    }
  </script>
   <script>
  function eliminar_Datos(datos){
    var valor="idsp="+datos;
    $.ajax({
      data: valor,
      url: '<?php echo base_url();?>/index.php/Home/eliminaDatos',
      type: 'post',
      success: function(response) {
        location.reload();
      }
    });
      }
  </script>


</body>

</html>

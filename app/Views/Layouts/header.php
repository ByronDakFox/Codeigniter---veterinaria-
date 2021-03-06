<?php
    header('Content-Type: text/html; charset=UTF-8');
    //Iniciar una nueva sesión o reanudar la existente.
    session_start();
    //Si existe la sesión "cliente"..., la guardamos en una variable.
    if (isset($_SESSION['nombre'])){
        $cliente = $_SESSION['nombre'];
    }else{
 header('Location: login.php');//Aqui lo redireccionas al lugar que quieras.
     die() ;

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/LogoV.png">

  <title>DogMax</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url();?>/assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url();?>/assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>/assets/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="<?php echo base_url();?>/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="<?php echo base_url();?>/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/owl.carousel.css" type="text/css">
  <link href="<?php echo base_url();?>/assets/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/fullcalendar.css">
  <link href="<?php echo base_url();?>/assets/css/widgets.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/css/style-responsive.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>/assets/css/xcharts.min.css" rel=" stylesheet">
  <link href="<?php echo base_url();?>/assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
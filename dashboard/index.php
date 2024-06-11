<!doctype html>
<html lang="en">

<!--HEAD BEGIN-->
<?php 
  $title = "BeYou";
  include '../pages/head.php';
?>
<!--HEADN END-->

<body>
  
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!--MENU BEGIN-->
    <?php include '../pages/menu.php'; ?>
    <!--MENU END-->

    <!--  Main wrapper -->
    <div class="body-wrapper">

        <!--HEADER BEGIN-->
        <?php include 'pages/header.php'; ?>
        <!--HEADER END-->
        
      <div class="container-fluid">
      
      <!--REFERAL LINK BEGIN-->
      <?php include 'referal_link_panel_widget.php';?>
      <!--REFERAL LINK END-->

      <div class="row">
        <!--INDICADOS WIDGET BEGIN-->
        <?php include 'indicados_panel_widget.php';?>
        <!--INDICADOS WIDGET END-->

        <!--DONANCIONES RECIBIDAS WIDGET BEGIN-->
        <?php include 'donacionanes_recibidas_panel_widget.php';?>
        <!--DONACIONES RECIBIDAS WIDGET END-->
      </div>

      <!--TABLA BEGIN-->
      <?php include '../pages/recent_transactions_table.php';?>
      <!--TABLA END-->

        <!--COPY BEGIN-->
        <?php include '../pages/copy.php'; ?>
        <!--COPY END-->

      </div>
    </div>
  </div>

  <!--SCRIPTS BEGIN-->
  <?php include '../pages/scripts.php'?>
  <!--SCRIPTS END-->

</body>

</html>
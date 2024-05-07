<!doctype html>
<html lang="en">

<!--HEAD BEGIN-->
<?php include 'pages/head.php';?>
<!--HEADN END-->

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!--MENU BEGIN-->
    <?php include 'pages/menu.php'; ?>
    <!--MENU END-->

    <!--  Main wrapper -->
    <div class="body-wrapper">

        <!--HEADER BEGIN-->
        <?php include 'pages/header.php'; ?>
        <!--HEADER END-->
        
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">

          <!--SALES OVERVIEW CHART BEGIN-->
          <?php include 'pages/sales_overview_chart.php';?>
          <!--SALES OVERVIEW CHART END-->

          <div class="col-lg-4"-->
            <div class="row">

              <!--YEARLY BREACKOUT BEGIN-->
              <?php include 'pages/yearly_breackout.php';?>
              <!--YEARLY BREACKOUT END-->

              <!--MONTLY EARNINGS BEGIN-->
              <?php include 'pages/monthly_earnings.php'; ?>
              <!--MONTLY EARNINGS END-->

            </div>
          </div>
        </div>
        <div class="row">

          <!--RECENT TRANSACTIONS BEGIN-->
          <?php include 'pages/recent_transactions.php';?>
          <!--RECENT TRANSACTIONS END-->

          <!--RECENT TRANSACTION TABLE BEGIN-->
          <?php include 'pages/recent_transactions_table.php';?>
          <!--RECENT TRANSACTION TABLE END-->

        </div>

        <div class="row">

          <!--PRODUCT OVERVIEW BEGIN-->
          <?php include 'pages/product_overview.php';?>
          <!--PRODUCT OVERVIEW END-->

        </div>

        <!--COPY BEGIN-->
        <?php include 'pages/copy.php'; ?>
        <!--COPY END-->

      </div>
    </div>
  </div>

  <!--SCRIPTS BEGIN-->
  <?php include 'pages/scripts.php'?>
  <!--SCRIPTS END-->

</body>

</html>
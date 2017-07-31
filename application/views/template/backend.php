<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <title><?php echo $title; ?></title>
    <?php 
        $this->view('template/backend/header');
        $this->view('template/backend/css');
        $this->view('template/backend/js');
    ?>
  </head>
  <body class="large-sidebar fixed-sidebar fixed-header skin-5">
    <div class="wrapper">
      <!-- Preloader -->
      <div class="preloader"></div>
        <?php include("backend/nav.php"); ?>

        <div id="page-wrapper">
          <?php include("backend/header_container.php"); ?>
          <div class="site-content">
            <div class="content-area p-y-1">
              <div class="container-fluid">

                <?php echo $contenido_main; ?>

              </div>
            </div>
          </div>
          <?php include("backend/footer.php"); ?>
        </div>
    </div>
    <?php $this->view('template/backend/modal'); ?>    
  </body>
</html>
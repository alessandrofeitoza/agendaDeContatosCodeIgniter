<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Agenda do Poder</title>
    <!-- Carregando o CSS do Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
  </head>
  <body class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="jumbotron">
          <h1><span class="glyphicon glyphicon-book"></span> Agenda do Poder</h1>
        </div><!-- jumbotron -->
      </div><!-- col-lg-12 -->
    </div><!-- row -->

    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <?php
          $this->load->view("alert");
          $this->load->view($page_view, $content_view);
        ?>
      </div>
    </div>
  </body>
</html>

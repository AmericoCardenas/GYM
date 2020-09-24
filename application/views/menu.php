
<html>
<head>
  <title>Perfil</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7e9badcf42.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="https://getbootstrap.com/docs/4.1/assets/img/favicons/favicon.ico">
    <script src="https://kit.fontawesome.com/7e9badcf42.js" crossorigin="anonymous"></script>

    <style>
      label{
        font-size:auto !important;
        color: rgb(35, 39, 43);
        font-weight:bold;
      }

      input{
        border:0px!important;
        background-color:transparent;
        color: rgb(35, 39, 43);
        font-size:16px !important;
        font-weight:bold !important;
      }

      button{
          border-radius:15px !important;
          width:230px !important;
          height:200px !important;
      }

      .bg-light{
        background-color:rgb(255,182,18) !important;
        border: 1px solid black;
      }

      main{
        border: 1px solid black;
      }

      .form-control{
        background-color:black !important;
        color:rgb(255,182,18) !important;
        text-align:center !important;
      }

      img{
        border-radius: 50% !important;
        border: black solid 3px;
      }
      
    </style>
</head>

  <body cz-shortcut-listen="true">

    <div class="container-fluid">
      <div class="row" style="height:100% !important;background-color:rgb(255,182,18) !important;">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar" style="text-align:center !important;">
          <div class="sidebar-sticky">
            <ul class="nav flex-column"  style="margin-top:20px !important;">

            <li class="nav-item" style="text-align:center !important">
              <label style="font-size:35px !important;font-weight:bold;">Perfil</label>
            </li>

            <li class="nav-item">
              <?php foreach($usuario as $row){ ?>
              <img class="img-fluid" src="<?php echo base_url().'uploads/'.$row['FOTO'] ?>">
              <?php } ?>
            </li>

              <li class="nav-item">
                <a class="nav-link active">
                <label for="">Nombre</label>
                <?php foreach($usuario as $row){ ?>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $row['NOMBRE']?>" readonly>
                <?php } ?>
                </a>
              </li>


              <li class="nav-item">
                <a class="nav-link active">
                <label for="">Fecha de Ingreso</label>
                <?php foreach($usuario as $row){ ?>
                <input type="date" class="form-control" name="fi" id="fi" value="<?php echo $row['FI']?>" readonly>
                <?php } ?>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link active">
                <label for="">Edad</label>
                <?php foreach($usuario as $row){ ?>
                <input type="text" class="form-control" name="edad" id="edad" value="<?php echo $row['EDAD']?>" readonly>
                <?php } ?>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link active">
                <label for="">Peso Kg</label>
                <?php foreach($usuario as $row){ ?>
                <input type="text" class="form-control" name="peso" id="peso" value="<?php echo $row['PESO']?>" readonly>
                <?php } ?>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link active">
                <label for="">Plan</label>
                <?php foreach($usuario as $row){ ?>
                <input type="text" class="form-control" name="plan" id="plan" value="<?php echo $row['PLAN']?>" readonly>
                <?php } ?>
                </a>
              </li>
            </ul>   
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor">
          <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
          <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>

          <div class="row" style="margin-top:20px !important;">
            <div class="col-md-12" style="text-align:center !important;">
              <h2 style="font-weight:bold;">Menú</h2>
            </div>
          </div>

          <div class="row" style="text-align:center !important;margin-top:35px !important;">
              <div class="col-md-4"><button type="button" class="btn btn-dark"><i class="fas fa-calendar-week fa-10x"></i></button><p></p><label for="">Reservación</label></div>
              <div class="col-md-4"><button type="button" class="btn btn-dark"><i class="fas fa-child fa-10x"></i></button><p></p><label for="">IMC</label></div>
              <div class="col-md-4"><button type="button" class="btn btn-dark"><i class="fas fa-weight fa-10x"></i></button><p></p><label for="">Peso Ideal</label></div>
          </div>

        </main>

      </div>
    </div>
  </body>
</html>
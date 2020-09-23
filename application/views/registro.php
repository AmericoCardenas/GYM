<html>
<head>
        <title>Login/Clientes</title>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/7e9badcf42.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <style>
            body{
                background-image:url("<?php echo base_url();?>application/assets/img/background.jpeg");
                font-family: 'Roboto', sans-serif;
                width:auto;
                height:auto;
                overflow-x: hidden;
            }

            .form-row{
                border-radius: 6px !important;
                border: 6px solid black;
                background-color:rgb(255,182,18);
                text-align:center !important;
            }

            input{
                text-align:center !important;
            }

            label{
                font-size: bolder;
            }


        </style>
</head>

<body>

    <div class="row" style="margin-top:30px !important;text-align:center!important;">
        <div class="col-md-4 col-sm-4"></div>   
        <div class="col-md-4 col-sm-4">    
        <?php echo form_open_multipart('c_cont/registro');?>
            <form method="post" enctype="multipart/form-data">
                <div class="form-row">  

                    <div class="form-group col-md-12 col-sm-12">
                    <img src="<?php echo base_url();?>application/assets/img/logo.jpg" class="img-fluid" width="150px" height="200px" style="margin-top:20px">
                    </div>
                  
                    <!--NOMBRE-->
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Completo">       
                        </div>
                    <!--NOMBRE-->

                     <!--EMAIL-->
                     <div class="form-group col-md-6 col-sm-12">
                            <label for="">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">       
                        </div>
                    <!--EMAIL-->

                    <!--PASSWORD-->
                    <div class="form-group col-md-6 col-sm-12">
                            <label for="">Contraseña</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">       
                        </div>
                    <!--PASSWORD-->

                    <!--FECHA DE INGRESO-->
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="">Fecha de Ingreso</label>
                            <input type="date" name="fi" id="fi" class="form-control">       
                        </div>
                    <!--FECHA DE INGRESO-->       

                    <!--FECHA DE NACIMIENTO-->
                    <div class="form-group col-md-6 col-sm-12">
                            <label for="">Fecha de Nacimiento</label>
                            <input type="date" name="fn" id="fn" class="form-control">       
                        </div>
                    <!--FECHA DE NACIMIENTO--> 

                    <!--EDAD-->
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="">Edad</label>
                            <input type="number" name="edad" id="edad" class="form-control" placeholder="Edad">       
                        </div>
                    <!--EDAD-->

                    <!--PESO-->
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="">Peso</label>
                            <input type="number" name="peso" id="peso" class="form-control" placeholder="Peso KG">       
                        </div>
                    <!--PESO-->

                    <!--PLAN-->
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="">Plan</label>
                            <select name="plan" id="plan" class="form-control">
                            <option value="" selected>SELECCIONAR PLAN</option>
                            <option value="BASICO">BASICO</option>
                            <option value="PROFESIONAL">PROFESIONAL</option>
                            </select>    
                        </div>
                    <!--PLAN-->

                    <!-- FOTO -->
                    <div class="form-group col-md-12 col-sm-12">
                    <label for="">SELECCIONA UNA FOTOGRAFIA</label>
                    <input type="file" class="form-control" name="foto" id="foto"></input>
                    </div>
                    <!-- FOTO -->

                    <div class="form-group col-md-12 col-sm-12">       
                    <button type="submit" class="btn btn-dark" value="upload" formaction="<?php echo base_url()?>c_cont/registro">Registrarse</button>
                    </div>
                </div>  
                <?php echo form_close(); ?>
            </form>
        </div>
        <div class="col-md-4 col-sm-4"></div>
    </div> 
</body>
</html>
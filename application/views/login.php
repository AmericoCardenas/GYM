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
            .r1{
                margin-top:100px !important;
            }

            label{
                margin-top:10px !important;
                font-weight:bolder;
            }

            input{
                margin-top:10px !important;
                text-align:center !important;
            }

            button{
                margin-top:10px !important;
            }

            body{
                background-image:url("<?php echo base_url();?>application/assets/img/background.jpeg");
                font-family: 'Roboto', sans-serif;
                width:auto !important;
                height:auto !important;
            
            }

            .box{
                border-radius: 6px !important;
                border: 6px solid black;
                background-color:rgb(255,182,18);
            }

            .r2{
                margin-top: 50px;
                margin-left: auto;
                margin-right: auto;
                text-align:center !important;
            }

        </style>
    </head>

    <body>
        <div class="container" style="text-align:center !important">

            <!-- <div class="row r1">
                <div class="col-md-12 col-sm-12">
                    <h1>Login</h1>
                </div>
            </div> -->

            <div class="row r2">
                <div class="col-md-4 col-sm-4"></div>
                    <div class="col-md-4 col-sm-4 box" style="text-align:center;">
                        
                            <img src="<?php echo base_url();?>application/assets/img/logo.jpg" class="img-fluid" width="150px" height="200px" style="margin-top:20px">
                            <form method="post">
    
                                <label for="">Email:</label>
                                <input type="email" class="form-control" name="" id="" placeholder="tu_email@.com">
                                <label for="">Contraseña</label>
                                <input type="password" class="form-control" name="" id="" placeholder="contraseña">
                                <button type="submit" class="btn btn-dark" formaction="">Iniciar Sesion</button>
                                <button type="submit" class="btn btn-dark" formaction="<?php echo base_url()?>c_inicio/registro">Registrarse</button>
                            </form>
                        
                    </div>
                <div class="col-md-4 col-sm-4"></div>
            </div>

        </div>
        
    </body>
</html>
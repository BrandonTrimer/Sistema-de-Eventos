<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <!--<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Inicio de Sesion</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<main>
    <div id="primary" class="p-t-b-100 height-full">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-md-auto paper-card">
                    <div class="text-center">
                        <img src="assets/img/dummy/u4.png" alt="">
                        <h3 class="mt-2">Sistema De Eventos</h3>
                        <form class="form-inline">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref"> Ingresar Como </label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                              <option selected>Seleccionar...</option>
                              <option value="1">Administrador</option>
                              <option value="2">Supervisor</option>
                            </select>
                          
                            
                          </form>
                    </div>
                    <form action="adminindex.php">
                        <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                            <input type="text" class="form-control form-control-lg"
                                   placeholder="Ingrese Gmail">
                        </div>
                        <div class="form-group has-icon"><i class="icon-user-secret"></i>
                            <input type="text" class="form-control form-control-lg"
                                   placeholder="Contraseña">
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Ingresar"> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #primary -->
</main>
<!-- Right Sidebar -->
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
<script src="assets/js/bootstrap.min.js" ></script>
</body>
</html> 
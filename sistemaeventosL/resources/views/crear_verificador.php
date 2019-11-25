<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Sistema de Eventos</title>
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
<aside class="main-sidebar fixed offcanvas shadow">
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <br>
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
                aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm fab-right fab-top btn-primary shadow1 ">
                 <i class="icon icon-cogs"></i>
             </a>
             <div class="user-panel p-3 light mb-2">
                 <div>
                    <div class="float-left info">
                        <h4 class="font-weight-light mt-2 mb-1">Kevin Rodrigo</h4>
                        <h4 class="font-weight-light mt-2 mb-1">Cardenas Fernandez</h4>
                        <h7 class="font-weight-light mt-2 mb-1">Kevin@gmail.com</h7>
                    </div>
                 </div>
                 <div class="clearfix"></div>
                 <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="panel-page-profile.html" class="list-group-item list-group-item-action"><i
                                 class="mr-2 icon-power-off text-red"></i>Cerrar Sesion</a>
                        <a href="panel-page-profile.html" class="list-group-item list-group-item-action"><i
                                 class="mr-2 icon icon-pencil light-green-text"></i>Editar</a>
                    </div>
                </div>             
            </div>
         </div>
         <ul class="sidebar-menu">
            <li class="header"><strong>Menu de Navegacion</strong></li>
            
            <li class="treeview"><a href="#">
                <i class="icon icon icon-package blue-text s-18"></i>
                Eventos<i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>

                <ul class="treeview-menu">
                    <li><a href="adminindex.php"><i class="icon icon-circle-o"></i>Todos los Eventos</a>
                    </li>
                    <li><a href="crear_evento.php"><i class="icon icon-add"></i>Agregar evento </a>
                    </li>
                </ul>
                
            </li>



            <li class="treeview"><a href="#">
                <i class="icon icon-account_box light-green-text s-18"></i>
                Usuarios<i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>


                <ul class="treeview-menu">
                    <li><a href="lista_usuarios.php"><i class="icon icon-circle-o"></i>Todos los Ususarios</a>
                    </li>
                    <li><a href="crear_verificador.php"><i class="icon icon-add"></i>Agregar Usuario Verificador</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
<!--Sidebar End-->
<div class="has-sidebar-left">
    <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
            <div class="search-bar">
                <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                       placeholder="start typing...">
            </div>
            <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
               aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
        </div>
    </div>
</div>
    <div class="sticky">
        <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
            <div class="relative">
                <a href="#" data-toggle="offcanvas" class="paper-nav-toggle pp-nav-toggle">
                    <i></i>
                </a>
            </div>
            <!--Top Menu Start -->
<div class="navbar-custom-menu p-t-10">
    <ul class="nav navbar-nav">
        
    </ul>
</div>
        </div>
    </div>
</div>

<div class="page has-sidebar-left  height-full">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Usuarios
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link"  href="lista_usuarios.php"><i class="icon icon-home2"></i>Lista Usuarios</a>
                    </li>
                    <li>
                        <a class="nav-link active"  href="crear_verificador.php" ><i class="icon icon-plus-circle"></i>Registrar Nuevo Usuario Supervisor</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce">
        <div class="animated fadeInUpShort">
            <div class="row my-3">
                <div class="col-md-7  offset-md-2">
                    <form action="#">
                        <div class="card no-b  no-r">
                            <div class="card-body">
                                <h5 class="card-title">Llene los Datos</h5>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group m-0">
                                            <label for="name" class="col-form-label s-12">Nombres</label>
                                            <input id="name" placeholder="" class="form-control r-0 light s-12 " type="text">
                                        </div>

                                        <div class="form-group m-0">
                                            <label for="name" class="col-form-label s-12">Apellidos</label>
                                            <input id="name" placeholder="" class="form-control r-0 light s-12 " type="text">
                                        </div>

                                </div>

                                <div class="form-row mt-1">
                                    <div class="form-group col-4 m-0">
                                        <label for="email" class="col-form-label s-12"><i class="icon-envelope-o mr-2"></i>Corre Electronico</label>
                                        <input id="email" placeholder="" class="form-control r-0 light s-12 " type="text">
                                    </div>

                                    <div class="form-group col-4 m-0">
                                        <label for="phone" class="col-form-label s-12"><i class="icon-phone mr-2"></i>Telefono</label>
                                        <input id="phone" placeholder="" class="form-control r-0 light s-12 " type="text">
                                    </div>
                                    <div class="form-group col-4 m-0">
                                        <label for="mobile" class="col-form-label s-12"><i class="icon-mobile-phone mr-2"></i>Carnet</label>
                                        <input id="mobile" placeholder="" class="form-control r-0 light s-12 " type="text">
                                    </div>

                                </div>
                                <div class="form-row">
                                    
                                </div>
                            </div>
                            <br>
                            
                            <br>
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="icon-save mr-2"></i>Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </div>
</div>
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
</body>
</html>
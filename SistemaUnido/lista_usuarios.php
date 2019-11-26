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
                    <li><a href="crear_verificador.php"><i class="icon icon-add"></i>Agregar usuario</a>
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
        </li>
    </ul>
</div>
        </div>
    </div>
</div>

<div class="page  has-sidebar-left height-full">
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
                        <a class="nav-link active" id="v-pills-all-tab" data-toggle="pill" href="lista_usuarios.php"
                           role="tab" aria-controls="v-pills-all"><i class="icon icon-home2"></i>Registrados</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-buyers-tab" data-toggle="pill" href="#v-pills-buyers" role="tab"
                           aria-controls="v-pills-buyers"><i class="icon icon-face"></i> Supervisores</a>
                    </li>
                    
                    <li class="float-right">
                        <a class="nav-link"  href="crear_verificador.php" ><i class="icon icon-plus-circle"></i> Registrar Nuevo Usuario</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <form>
                                    <table class="table table-striped table-hover r-0">
                                        <thead>
                                        <tr class="no-b">
                                            <th style="width: 30px">
                                                <div class="custom-control custom-checkbox">
                                                </div>
                                            </th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Correo Electronico</th>
                                            <th>Telefono</th>
                                            <th>Carnet de Identidad</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <tr>
                                            <td>
                                            </td>

                                            <td>
                                                Brandon
                                            </td>

                                            <td>Triveño</td>
                                            <td>Brandon@upds.com.bo</td>

                                            <td>75694213</td>
                                            <td> 9862372</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>

                                            <td>
                                                Brandon
                                            </td>

                                            <td>Triveño</td>
                                            <td>Brandon@upds.com.bo</td>

                                            <td>75694213</td>
                                            <td> 9862372</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>

                                            <td>
                                                Brandon
                                            </td>

                                            <td>Triveño</td>
                                            <td>Brandon@upds.com.bo</td>

                                            <td>75694213</td>
                                            <td> 9862372</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>

                                            <td>
                                                Brandon
                                            </td>

                                            <td>Triveño</td>
                                            <td>Brandon@upds.com.bo</td>

                                            <td>75694213</td>
                                            <td> 9862372</td>
                                            
                                        </tr>


                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
            <div class="tab-pane animated fadeInUpShort" id="v-pills-buyers" role="tabpanel" aria-labelledby="v-pills-buyers-tab">
                
                    <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                        <div class="row my-3">
                            <div class="col-md-12">
                                <div class="card r-0 shadow">
                                    <div class="table-responsive">
                                       
                                                        
                                                

                                              <form>
                                                    <table class="table table-striped table-hover r-0">
                                                        <thead>
                                                        <tr class="no-b">
                                                            <th style="width: 30px">
                                                                <div class="custom-control custom-checkbox">
                                                                </div>
                                                            </th>
                                                            <th>Nombre</th>
                                                            <th>Apellidos</th>
                                                            <th>Correo Electronico</th>
                                                            <th>Telefono</th>
                                                            <th>Carnet de Identidad</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                
                                                        <tbody>
                                                            
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                </div>
                                                            </td>
                
                                                            <td>
                                                                Brandon
                                                            </td>
                
                                                            <td>Triveño</td>
                                                            <td>Brandon@upds.com.bo</td>
                
                                                            <td>75694213</td>
                                                            <td> 9862372</td>
                                                            <td>
                                                                <a href="panel-page-profile.html"><i class="icon-edit mr-3"></i></a>
                                                                <a href="panel-page-profile.html"><i class="icon-remove"></i></a>
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                </div>
                                                            </td>
                
                                                            <td>
                                                                Brandon
                                                            </td>
                
                                                            <td>Triveño</td>
                                                            <td>Brandon@upds.com.bo</td>
                
                                                            <td>75694213</td>
                                                            <td> 9862372</td>
                                                            <td>
                                                                <a href="panel-page-profile.html"><i class="icon-edit mr-3"></i></a>
                                                                <a href="panel-page-profile.html"><i class="icon-remove"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                </div>
                                                            </td>
                
                                                            <td>
                                                                Brandon
                                                            </td>
                
                                                            <td>Triveño</td>
                                                            <td>Brandon@upds.com.bo</td>
                
                                                            <td>75694213</td>
                                                            <td> 9862372</td>
                                                            <td>
                                                                <a href="panel-page-profile.html"><i class="icon-edit mr-3"></i></a>
                                                                <a href="panel-page-profile.html"><i class="icon-remove"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                </div>
                                                            </td>
                
                                                            <td>
                                                                Brandon
                                                            </td>
                
                                                            <td>Triveño</td>
                                                            <td>Brandon@upds.com.bo</td>
                
                                                            <td>75694213</td>
                                                            <td> 9862372</td>
                                                            <td>
                                                                <a href="panel-page-profile.html"><i class="icon-edit mr-3"></i></a>
                                                                <a href="panel-page-profile.html"><i class="icon-remove"></i></a>
                                                            </td>
                                                        </tr>
                
                
                                                        </tbody>
                                                    </table>
                                                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        
                    
                </div>
            </div>
        </div>
    </div>
    <!--Add New Message Fab Button-->
    <a href="crear_verificador.php" class=""><i
            class="icon-add"></i></a>
</div>
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
</body>
</html>
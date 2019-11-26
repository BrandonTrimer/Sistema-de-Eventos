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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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


<div class="page has-sidebar height-full">
    
    <header class="blue accent-3 relative nav-sticky">
        
        <div class="container-fluid text-white">
            
            
            <div class="row p-t-b-10 ">
                
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Dashboard
                    </h4>
                 

                 
                       
                    <form id="demo-2" >
                         
                            <input type="search" placeholder="Buscar Usuario"  class="btn-fab fab-right">
                                    
                        </form>

                        <style>
                        
/* Demo 2 */




input[type=search] {
	background: #03a9f4 url(assets/img/descarga.png) no-repeat center;
    border: solid 1px #ccc;
    padding: 9px 10px 9px 32px;

	
	-webkit-border-radius: 100em;
	-moz-border-radius: 100em;
    border-radius: 100em;
 
	
	-webkit-transition: all .5s;
	-moz-transition: all .5s;
	transition: all .5s;
}


#demo-2 input[type=search]:focus {
	width: 50%;

         background: rgb(0, 0, 0) url(https://image.flaticon.com/icons/svg/431/431897.svg) no-repeat;
   
}
                        </style>
                      
                            
                        
                </div>
               
            </div>
            <div class="row">
                
                   
                <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                            <i class="icon icon-home2"></i>Lista de Usuarios</a>
                    </li>
                   
                    
                </ul>

                <style>
                      
                      
                        #qr-video {
                            width: 100%;
                        }
                        #debug {
                            word-wrap: break-word;
                            word-break: break-all;
                        }
                    </style>
                <div class="w3-container">                    
                      
                        <a   onclick="document.getElementById('id01').style.display='block'" class="btn-fab fab-right btn-primary" >
                        <i class="icon icon-qrcode"></i></a>
                        <div id="id01" class="w3-modal w3-animate-opacity">
                          <div class="w3-modal-content w3-card-4">
                            <header class="w3-container w3-teal"> 
                              <span onclick="document.getElementById('id01').style.display='none'" 
                              class="w3-button w3-large w3-display-topright">&times;</span>
                            <center>  <h2>Scanner Qr</h2></center>
                            </header>
                            <br>
                            <div class="container">
                                <div class="card-group">
                                  <div class="card bg-dark ">
                                    <div class="card-body text-center">
                                          
                                                    <video muted playsinline id="qr-video"></video>
                                                </div>
                                                <div>
                                                    <button style="display:none;" onclick="javascript:location.reload(true);">Refresh</button>
                                                    <label>Camera:</label>
                                                    <select id="camera-select">
                                                        <option value="">Select a camera</option>
                                                    </select>
                                                </div>
                                            
                                               
                                  </div>
                                 
                                  <div class="card bg-dark">    
                                    <div class="card-body text-center">
                                        
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>User Id</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Kshiti123</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Name</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Kshiti Ghelani</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>kshitighelani@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Phone</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>123 456 7890</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Profession</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Web Developer and Designer</p>
                                                </div>
                                            </div>
                            
                                    </div>
                                  </div>
                                 
                                </div>
                                <div id="debug"></div>
                              </div>
                            
                            <footer class="w3-container w3-teal">
                              <p>Modal Footer</p>
                            </footer>
                          </div>
                        </div>
                      </div>
                </a>
                
                
               
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
    
</div>
<script type="module">
        import QrScanner from "https://nimiq.github.io/qr-scanner/qr-scanner.min.js";
        //QrScanner.WORKER_PATH = 'https://nimiq.github.io/qr-scanner/qr-scanner-worker.min.js';

        var globalDeviceId = '';

        var getCameras = function() {
            return navigator.mediaDevices.enumerateDevices()
            .then(function(devices) {
                return devices.filter(function(device){
                    return device.kind === 'videoinput';
                });
            });
        };
        var prepareCameraOptions = function() {
            getCameras()
            .then(function(cameras) {
                //console.log(cameras);
                //console.log(JSON.stringify(cameras));
                //alert(JSON.stringify(cameras));
                document.querySelector('#debug').innerHTML = JSON.stringify(cameras);
                var select = document.querySelector('#camera-select');
                [].forEach.call(cameras, function(camera){
                    var option = document.createElement("option");
                    option.text = camera.label;
                    option.value = camera.deviceId;
                    select.add(option);
                });
            });
        };
        prepareCameraOptions();

        var _getCameraStream = function(facingMode, exact = false) {
            return getCameras()
                .then(function(cameras) {
                    //console.log(cameras);
                    var backCamera;
                    var backCameras = cameras.filter(function(camera){
                        return camera.deviceId === globalDeviceId
                          || camera.label.indexOf('back') >= 0;
                    });
                    if (backCameras && backCameras.length > 0) {
                        backCamera = backCameras[0];
                    }
                    if (!backCamera) {
                        backCamera = cameras[0];
                    }
                    console.log(backCamera);
                    return backCamera;
                })
                .then(function (camera) {
                    document.querySelector('#camera-select').value = camera.deviceId;
                    var media = navigator.mediaDevices
                        .getUserMedia({ video: { deviceId: { exact: camera.deviceId } } });
                    return media;
                });
        };
      
        const video = document.getElementById('qr-video');
        const camHasCamera = document.getElementById('cam-has-camera');
        const camQrResult = document.getElementById('cam-qr-result');
        const camQrResultTimestamp = document.getElementById('cam-qr-result-timestamp');
        const fileSelector = document.getElementById('file-selector');
        const fileQrResult = document.getElementById('file-qr-result');

        function setResult(label, result) {
            label.textContent = result;
            camQrResultTimestamp.textContent = new Date().toString();
            label.style.color = 'teal';
            clearTimeout(label.highlightTimeout);
            label.highlightTimeout = setTimeout(() => label.style.color = 'inherit', 100);
        }

        //QrScanner.hasCamera().then(hasCamera => camHasCamera.textContent = hasCamera);
        var scanner;
      
        var openCamera = function (deviceId) {
            console.log('openCamera');
            globalDeviceId = deviceId;
            //alert(globalDeviceId);
            if (!globalDeviceId && scanner) {
                console.log('scanner stop');
                scanner.stop();
            }
            else {
                scanner = new QrScanner(video); //, result => setResult(camQrResult, result)
                // Override _getCameraStream
                scanner._getCameraStream = _getCameraStream;
                console.log('scanner start');
                scanner.stop();
                scanner.start();
            }
        }
        openCamera();
        
        document.querySelector('#camera-select').addEventListener("change", function() {
            var deviceId = document.querySelector('#camera-select').value||'';
            openCamera('');
            setTimeout(function(){ openCamera(deviceId); }, 1000);
        });
    </script>

    


<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
</body>
</html>
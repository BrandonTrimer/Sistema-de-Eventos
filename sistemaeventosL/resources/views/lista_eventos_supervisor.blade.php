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
                            <i class="icon icon-home2"></i>Lista de Eventos</a>
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
                
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <table class="table table-hover ">
                                    <tbody>
                                    <tr class="no-b">
                                        <td class="w-10">
                                            <a href="supervisor.php"><img src="assets/img/demo/shop/s1.png" alt=""></a>
                                        </td>
                                        <td>
                                            <h6>Fiesta Universitaria</h6>
                                            <small class="text-muted">Personas Registradas:</small>
                                            <small class="text-muted">60</small>
                                        </td>
                                        <td>Limite: <label id="cantidad_usr"> 150</label></td>
                                        <td><span class="badge badge-success">Disponible</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="assets/img/demo/shop/s2.png" alt="">
                                        </td>
                                        <td>
                                            <h6>CTF Univalle</h6>
                                            <small class="text-muted">Personas Registradas:</small>
                                            <small class="text-muted">80</small>
                                        </td>
                                        <td>Limite: <label id="cantidad_usr"> 350</label></td>
                                        
                                        <td><span class="badge badge-success">Disponible</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="assets/img/demo/shop/s3.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Curso de Programacion Basica</h6>
                                            <small class="text-muted">Personas Registradas:</small>
                                            <small class="text-muted">37</small>
                                        </td>
                                        <td>Limite: <label id="cantidad_usr"> 50</label></td>
                                        
                                        <td><span class="badge badge-danger">Terminado</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="assets/img/demo/shop/s4.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Conferencia Administrativa</h6>
                                            <small class="text-muted">Personas Registradas:</small>
                                            <small class="text-muted">211</small>
                                        </td>
                                        <td>Limite: <label id="cantidad_usr"> 350</label></td>
                                        
                                        <td><span class="badge badge-success">Disponible</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="assets/img/demo/shop/s5.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Conferencia de Prensa</h6>
                                            <small class="text-muted">Personas Registradas:</small>
                                            <small class="text-muted">120</small>
                                        </td>
                                        <td>Limite: <label id="cantidad_usr"> 200</label></td>
                                        
                                        <td><span class="badge badge-warning">Maximo de Personas</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w-10">
                                            <img src="assets/img/demo/shop/s6.png" alt="">
                                        </td>
                                        <td>
                                            <h6>Conferencia de Medicina</h6>
                                            <small class="text-muted">Personas Registradas:</small>
                                            <small class="text-muted">873</small>
                                        </td>
                                        <td>Limite: <label id="cantidad_usr"> 1550</label></td>
                                        
                                        <td><span class="badge badge-warning">Maximo de Personas</span></td>
                                        <td>
                                            <span><i class="icon icon-data_usage"></i> 5 days ago</span><br>
                                            <span><i class="icon icon-timer"></i> 5 September, 2017</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
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
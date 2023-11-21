<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CLÍNICA DE OCCIDENTE</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('vistaCO')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CLÍNICA DE OCCIDENTE</div>
            </a>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">

                @yield('Dashboard')
                
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                CONTENIDO
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                
                @yield('componentes')
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <li>
                <p class="nav-link" style="margin:0 0 0 10px; padding:0; margin-top: 120px; color:rgba(255, 255, 255, 0.6);">Clínica de Occidente:</p>
                <p class="nav-link" style="margin:0 0 10px 15px; padding:0; color:rgba(255, 255, 255, 0.2);">Calle 18 Norte No. 5 - 34</p>
            </li>

            <li>
                <p class="nav-link" style="margin:0 0 0 10px; padding:0; color:rgba(255, 255, 255, 0.6);">Centro Integral de Cáncer:</p>
                <p class="nav-link" style="margin:0 0 10px 15px; padding:0; color:rgba(255, 255, 255, 0.2);">Calle 19 Norte No. 5N - 49 </p>
            </li>

            <li>
                <p class="nav-link" style="margin:0 0 0 10px; padding:0; color:rgba(255, 255, 255, 0.6);">Sede Administrativa:</p>
                <p class="nav-link" style="margin:0 0 10px 15px; padding:0; color:rgba(255, 255, 255, 0.2);">Av. 5 Norte No. 17N - 93</p>
            </li>

            <li>
                <p class="nav-link" style="margin:0 0 0 10px; padding:0; color:rgba(255, 255, 255, 0.6);">Centro de Especialistas:</p>
                <p class="nav-link" style="margin:0 0 10px 15px; padding:0; color:rgba(255, 255, 255, 0.2);">Av. 5AN No. 19N - 12</p>
            </li>

            <li>
                <p class="nav-link" style="margin:0 0 0 10px; padding:0; color:rgba(255, 255, 255, 0.6);">Laboratorio Clínico:</p>
                <p class="nav-link" style="margin:0 0 10px 15px; padding:0; color:rgba(255, 255, 255, 0.2);">Av. 5 No. 18N-02</p>
            </li>

            <li>
                <p class="nav-link" style="margin:0 0 0 10px; padding:0; color:rgba(255, 255, 255, 0.6);">PBX:</p>
                <p class="nav-link" style="margin:0 0 10px 15px; padding:0; color:rgba(255, 255, 255, 0.2);"> 660 3000 Cali</p>
            </li>

            <li>
                <p class="nav-link" style="margin:0 0 0 10px; padding:0; color:rgba(255, 255, 255, 0.6);">Central de citas:</p>
                <p class="nav-link" style="margin:0 0 10px 15px; padding:0; color:rgba(255, 255, 255, 0.2);">(602) 380 07 42 Cali - Colombia</p>
            </li>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->

                        @yield('user')

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="align-items-center justify-content-between mb-4 " >
    <h1 class="mb-0" style="color:#4e73df;">BIENVENIDOS</h1>  
   <!-- 
        MISION Y VISION    
        <img src="img/bandera-alt.png" alt="">
        <img src="img/ojo.png" alt=""> 
    -->
</div> 

<!-- QUIENES SOMOS -->
<div class="row" id="quienesSomos">
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary">QUIÉNES SOMOS</h3>
                
            </div>
            <div class="card-body">
                <h4>
                    La historia de la Salud en el Valle del Cauca y especialmente en la ciudad de Santiago de Cali, 
                    lleva el nombre de Clínica de Occidente como un actor de participación médica, que, desde su 
                    fundación en los años 30, oferta la mejor calidad de atención para sus usuarios
                </h4>
                <h4>
                    En Clínica de Occidente, nos caracterizamos por nuestro compromiso con el bienestar integral 
                    de los pacientes y usuarios a través de la responsabilidad, el respeto 
                    por la vida y la seguridad de las personas.
                </h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <img src="img/clinica.png" alt="" class="imagen-q-s" >             
    </div>
</div>

<!-- NUESTRO EQUIPO -->
<div class="row" id="nuestroEquipo">
    <div class="col-lg-4 mb-4" style="height: 365px;">
        <img src="img/equipo.png" alt="" class="imagen-n-e">     
    </div>

    <div class="col-lg-8 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">NUESTRO EQUIPO</h3>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <div class="especialistas">
                        <div class="fotos">
                           <img src="img/ESTEBAN.png" alt="">
                        </div>
                        <div class="texto">
                            <h5>Dr. Esteban Gonzalez Ceballos.</h5>
                            <h6>Especialista en:</h6>
                            <p>Otorrinolaringología</p>
                        </div>                 
                    </div>
                    <div class="especialistas">
                        <div class="fotos">
                            <img src="img/JULIAN.png" style="width: 100%;" alt="">
                        </div>
                        <div class="texto">
                            <h5>Dr. Julián Andrés Cifuentes Villada.</h5>
                            <h6>Especialista en:</h6>
                            <p>Anestesiología</p>
                        </div>  
                    </div>
                </div>
            </div>
        </div>                         
   </div>
</div>

<!-- MISION Y VISION -->
<div class="row" id="mision-vision">
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary">MISIÓN Y VISIÓN</h3>
                <div class="dropdown no-arrow">
                                       
                </div>
            </div>                                        
            <div class="card-body">
                <div class="m-v">
                    <div class="titulo">
                        <h2>MISIÓN</h2>
                        <img src="img/bandera-alt.png" alt="">
                    </div>
                    <div class="texto-m-v">
                        <h5>
                            Prestar servicios de mediana y alta complejidad garantizando 
                            prácticas seguras, y una experiencia humanizada que contribuye
                            a mejorar la calidad de vida de nuestros usuarios.
                        </h5>
                    </div>
                </div>
                <div class="m-v">
                    <div class="titulo">
                        <h2>VISIÓN</h2>
                        <img src="img/ojo.png" alt="">
                    </div>
                    <div class="texto-m-v">
                        <h5> 
                            Posicionarnos al 2024 como institución de referencia nacional e 
                            internacional en servicios de alta complejidad en salud, bajo 
                            criterios de excelencia y sostenibilidad.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <img src="img/medicos.png" alt="" class="imagen-q-s" >           
    </div>
</div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Clínica de Occidente 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tesitfy - Project Detail</title>

                <!-- Bootstrap core CSS-->
            <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

            <!-- Custom fonts for this template-->
            <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

            <!-- Page level plugin CSS-->
            <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">

            <!-- Custom styles for this template-->
            <link href="<?php echo base_url('assets/css/sb-admin.css')?>" rel="stylesheet">
        <style type="text/css">
            .body-custom-font{
                font-family: "Proxima Nova", "Roboto", sans-serif;
            }
        </style>
    </head>

    <body id="page-top" class="body-custom-font">

        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

            <a class="navbar-brand mr-1" href="index.html">Home Page</a>

            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
            </button>




            <!-- Navbar Search -->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Navbar -->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <span class="badge badge-danger">9+</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw"></i>
                        <span class="badge badge-danger">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <a class="dropdown-item" href="#">Register</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                    </div>
                </li>
            </ul>

        </nav>

        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="sidebar navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="tables.html" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Project List</span></a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-item" href="tables.html">Project List</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Status Project:</h6>
                        <a class="dropdown-item" href="#">Ready To Approve</a>
                        <a class="dropdown-item" href="project-go.html">Project On-going</a>
                        <a class="dropdown-item" href="project-queue.html">Project Queue</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class= "fa-fw fa-fw"></i>
                        <span>Settings</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <h6 class="dropdown-header">Select Account:</h6>
                        <a class="dropdown-item" href="index.html">Group Head</a>
                        <a class="dropdown-item" href="dashboard-pm-apd.html">PM Developer</a>
                        <a class="dropdown-item" href="dashboard-pm-test.html">PM Testing</a>
                        <a class="dropdown-item" href="#">Tester</a>
                    </div>
                </li>
            </ul>

            <div id="content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 mb-3 mt-3">
                            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" style="width:100%; padding-left: 3%; padding-right: 3%">
                                <div class="input-group" >
                                    <input type="text" class="form-control" placeholder="&nbsp;&nbsp;Search for..." aria-label="Search" aria-describedby="basic-addon2"style="height:60px">
                                    <div class="input-group-append" >
                                        <button class="btn btn-primary" type="button" style="width:10em">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 mt-3">
                            <div class="card-deck" style="padding-left: 3%; padding-right: 3%">
                                <div class="card mb-4">
                                    <img class="card-img-top img-fluid" src="photos/1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 align="center" class="card-title" style="font-weight:700">Henry A.</h5>
                                        <div class="row" style="margin-top:10%; margin-bottom: 10%">
                                            <div class="col-sm-12"><p>Load</p></div>
                                            <div class="col-sm-12" style="margin-top:-2%"><div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width:35%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div></div>
                                        </div>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer bg-primary btn btn-block btn-primary" data-toggle="modal" data-target="#statusModal">
                                        <small style="color: white">Details</small>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <img class="card-img-top img-fluid" src="photos/2.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 align="center" class="card-title" style="font-weight:700">Anna F.</h5>
                                        <div class="row" style="margin-top:10%; margin-bottom: 10%">
                                            <div class="col-sm-12"><p>Load</p></div>
                                            <div class="col-sm-12" style="margin-top:-2%"><div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width:20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div></div>
                                        </div>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer bg-primary btn btn-block btn-primary" data-toggle="modal" data-target="#statusModal">
                                        <small style="color: white">Details</small>
                                    </div>
                                </div>

                                <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
                                <div class="card mb-4">
                                    <img class="card-img-top img-fluid" src="photos/3.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 align="center" class="card-title" style="font-weight:700">Charles V.</h5>
                                        <div class="row" style="margin-top:10%; margin-bottom: 10%">
                                            <div class="col-sm-12"><p>Load</p></div>
                                            <div class="col-sm-12" style="margin-top:-2%"><div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width:75%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div></div>
                                        </div>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer bg-primary btn btn-block btn-primary" data-toggle="modal" data-target="#statusModal">
                                        <small style="color: white">Details</small>
                                    </div>
                                </div>

                                <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
                                <div class="card mb-4">
                                    <img class="card-img-top img-fluid" src="photos/4.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 align="center" class="card-title" style="font-weight:700">Lisa A.</h5>
                                        <div class="row" style="margin-top:10%; margin-bottom: 10%">
                                            <div class="col-sm-12"><p>Load</p></div>
                                            <div class="col-sm-12" style="margin-top:-2%"><div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width:40%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div></div>
                                        </div>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer bg-primary btn btn-block btn-primary" data-toggle="modal" data-target="#statusModal">
                                        <small style="color: white">Details</small>
                                    </div>
                                </div>
                                <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
                                <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
                                <div class="card mb-4">
                                    <img class="card-img-top img-fluid" src="photos/5.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 align="center" class="card-title" style="font-weight:700">Danny B.</h5>
                                        <div class="row" style="margin-top:10%; margin-bottom: 10%">
                                            <div class="col-sm-12"><p>Load</p></div>
                                            <div class="col-sm-12" style="margin-top:-2%"><div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width:60%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div></div>
                                        </div>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer bg-primary btn btn-block btn-primary" data-toggle="modal" data-target="#statusModal">
                                        <small style="color: white">Details</small>
                                    </div>
                                </div>
                                <div class="w-100 d-none d-xl-block"><!-- wrap every 5 on xl--></div>
                                <div class="card mb-4">
                                    <img class="card-img-top img-fluid" src="photos/6.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 align="center" class="card-title" style="font-weight:700">John R.</h5>
                                        <div class="row" style="margin-top:10%; margin-bottom: 10%">
                                            <div class="col-sm-12"><p>Load</p></div>
                                            <div class="col-sm-12" style="margin-top:-2%"><div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width:30%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div></div>
                                        </div>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer bg-primary btn btn-block btn-primary" data-toggle="modal" data-target="#statusModal">
                                        <small style="color: white">Details</small>
                                    </div>
                                </div>
                                <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
                                <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
                                <div class="card mb-4">
                                    <img class="card-img-top img-fluid" src="photos/7.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 align="center" class="card-title" style="font-weight:700">Amanda R.</h5>
                                        <div class="row" style="margin-top:10%; margin-bottom: 10%">
                                            <div class="col-sm-12"><p>Load</p></div>
                                            <div class="col-sm-12" style="margin-top:-2%"><div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width:25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div></div>
                                        </div>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer bg-primary btn btn-block btn-primary" data-toggle="modal" data-target="#statusModal">
                                        <small style="color: white">Details</small>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <img class="card-img-top img-fluid" src="photos/8.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 align="center" class="card-title" style="font-weight:700">Viktor A.</h5>
                                        <div class="row" style="margin-top:10%; margin-bottom: 10%">
                                            <div class="col-sm-12"><p>Load</p></div>
                                            <div class="col-sm-12" style="margin-top:-2%"><div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width:45%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div></div>
                                        </div>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer bg-primary btn btn-block btn-primary" data-toggle="modal" data-target="#statusModal">
                                        <small style="color: white">Details</small>
                                    </div>
                                </div>
                                <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
                                <div class="w-100 d-none d-lg-block d-xl-none"><!-- wrap every 4 on lg--></div>
                                <div class="card mb-4">
                                    <img class="card-img-top img-fluid" src="photos/9.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 align="center" class="card-title" style="font-weight:700">Alice M.</h5>
                                        <div class="row" style="margin-top:10%; margin-bottom: 10%">
                                            <div class="col-sm-12"><p>Load</p></div>
                                            <div class="col-sm-12" style="margin-top:-2%"><div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width:40%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div></div>
                                        </div>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer bg-primary btn btn-block btn-primary" data-toggle="modal" data-target="#statusModal">
                                        <small style="color: white">Details</small>
                                    </div>
                                </div>
                                <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
                                <div class="card mb-4">
                                    <img class="card-img-top img-fluid" src="photos/10.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 align="center" class="card-title" style="font-weight:700">Tim H.</h5>
                                        <div class="row" style="margin-top:10%; margin-bottom: 10%">
                                            <div class="col-sm-12"><p>Load</p></div>
                                            <div class="col-sm-12" style="margin-top:-2%"><div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width:55%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div></div>
                                        </div>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer bg-primary btn btn-block btn-primary" data-toggle="modal" data-target="#statusModal">
                                        <small style="color: white">Details</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.wrapper -->

        <!--Test Result Modal-->
        <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Test Result</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" >
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Test Result:</label>
                                <select class="form-control" id="test-result">
                                    <option>Passed</option>
                                    <option>Retest</option>
                                    <option>Failed</option>
                                    <option>Untested</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Add Comment:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" href="#">Send message</button>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <!-- Sticky Footer -->
    <footer class="sticky-footer">
        <div class="container my-auto" align="middle">
            <span>Copyright © PT. Bank Mandiri Persero Tbk. - Testify 2018</span>
            <img src="image/bank_mandiri.png" style="width:100px;height:px" align="right">
        </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin.min.js')?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url('assets/js/demo/datatables-demo.js')?>"></script>
    <script src="<?php echo base_url('assets/js/demo/chart-area.js')?>"></script>
    <script src="<?php echo base_url('assets/js/demo/chart-bar-new.js')?>"></script>
    <script src="<?php echo base_url('assets/js/demo/chart-pie.js')?>"></script>


</html>

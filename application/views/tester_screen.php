<html lang="en">


    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Testify - Tester dashboard</title>

        <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.css')?>" rel="stylesheet">
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js');?>"></script>
	   <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin.min.js')?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url('assets/js/demo/datatables-demo.js')?>"></script>
    <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js')?>"></script>


    </head>

    <body id="page-top" class="body-custom-font">

        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
            </button>

            <a class="navbar-brand mr-1" href="index.html" >Test Run</a>


            <!-- Navbar Search -->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" style="width:100%; padding-left: 5%">
                <div class="input-group" >
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" >
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
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class= "fas fa-fw fa-book-open"></i>
                        <span>Project 1</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-header">Version:</a>
                        <a class="dropdown-item" href="tester-screen.html">v1.0</a>
                        <a class="dropdown-item" href="tester-screen.html">v1.1</a>
                        <a class="dropdown-item" href="tester-screen.html">v1.2</a>
                        <a class="dropdown-item" href="tester-screen.html">v1.3</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class= "fas fa-fw fa-book-open"></i>
                        <span>Project 2</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-header">Version:</a>
                        <a class="dropdown-item" href="tester-screen.html">v1.0</a>
                        <a class="dropdown-item" href="tester-screen.html">v1.1</a>
                        <a class="dropdown-item" href="tester-screen.html">v1.2</a>
                        <a class="dropdown-item" href="tester-screen.html">v1.3</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class= "fas fa-fw fa-book-open"></i>
                        <span>Project 3</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <a class="dropdown-header">Version:</a>
                        <a class="dropdown-item" href="tester-screen.html">v1.0</a>
                        <a class="dropdown-item" href="tester-screen.html">v1.1</a>
                        <a class="dropdown-item" href="tester-screen.html">v1.2</a>
                        <a class="dropdown-item" href="tester-screen.html">v1.3</a>
                    </div>
                </li>
            </ul>

            <!-- Table list of test case -->
            <div id="content-wrapper">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-header" style="font-weight:700; font-size: 150%">Project X</div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-header"><i class="fas fa-desktop"></i>
                                    &nbsp;&nbsp;&nbsp;Project Overview</div>
                                <div class="row vdivide" style="padding:1% 1%">
                                    <div class="col-sm-4" style="padding-right:3%">
                                        <h3>Project Description</h2>
                                            <p style="text-align:justify">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <canvas id="bar-chart" width="100%" height="70%"></canvas>
                                    </div>
                                    <div class="col-sm-4">
                                        <canvas id="myPieChart" width="100%" height="70%"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--<div class="col-sm-6">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <i class="fas fa-chart-pie"></i>
                                    Percentage Status</div>
                                <div class="card-body">
                                    <a>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</a>
                                </div>
                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <i class="fas fa-chart-pie"></i>
                                    Percentage Status</div>
                                <div class="card-body">
                                    <canvas id="bar-chart" width="100%" height="50%"></canvas>
                                </div>
                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                            </div>
                        </div>-->

                    </div>


                    <!-- Table Content  -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            &nbsp;&nbsp;&nbsp;Test cases</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr align="center">
                                            <th>No.</th>
                                            <th>Title</th>
                                            <th>Steps</th>
                                            <th>Expected Results</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr align="center">
                                            <th>No.</th>
                                            <th>Title</th>
                                            <th>Steps</th>
                                            <th>Expected Results</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <body>
                                        <!--Will be automatically generated by php loop function -->
                                    <tr>
                                        <td style="width: 2%">1</td>
                                        <td style="width: 18%">Test case 1</td>
                                        <td style="width: 30%">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</td>
                                        <td class="word-wrap" style="width: 30%">
                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                        </td>
                                        <td align="center" style="vertical-align: middle; width: 20%">
                                            <div class="row col-sm-12" style="width: 100%">
                                                <li class="btn-group dropdown" style="width: 100%" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <button type="button" class="btn btn-secondary" style="width: 100%; font-weight: 500">Untested</button>
                                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                <li class="dropdown-menu" aria-labelledby="testResultDropdown">
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Passed</a>
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Retest</a>
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Failed</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#statusModal" style="font-weight: 500">Untested</a>
                                                </li>
                                                </li>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 2%">1</td>
                                        <td style="width: 18%">Test case 1</td>
                                        <td style="width: 30%">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</td>
                                        <td class="word-wrap" style="width: 30%">
                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                        </td>
                                        <td align="center" style="vertical-align: middle; width: 20%">
                                            <div class="row col-sm-12" style="width: 100%">
                                                <li class="btn-group dropdown" style="width: 100%" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <button type="button" class="btn btn-secondary" style="width: 100%; font-weight: 500">Untested</button>
                                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                <li class="dropdown-menu" aria-labelledby="testResultDropdown">
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Passed</a>
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Retest</a>
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Failed</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#statusModal" style="font-weight: 500">Untested</a>
                                                </li>
                                                </li>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 2%">1</td>
                                        <td style="width: 18%">Test case 1</td>
                                        <td style="width: 30%">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</td>
                                        <td class="word-wrap" style="width: 30%">
                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                        </td>
                                        <td align="center" style="vertical-align: middle; width: 20%">
                                            <div class="row col-sm-12" style="width: 100%">
                                                <li class="btn-group dropdown" style="width: 100%" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <button type="button" class="btn btn-secondary" style="width: 100%; font-weight: 500">Untested</button>
                                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                <li class="dropdown-menu" aria-labelledby="testResultDropdown">
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Passed</a>
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Retest</a>
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Failed</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#statusModal" style="font-weight: 500">Untested</a>
                                                </li>
                                                </li>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 2%">1</td>
                                        <td style="width: 18%">Test case 1</td>
                                        <td style="width: 30%">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</td>
                                        <td class="word-wrap" style="width: 30%">
                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                        </td>
                                        <td align="center" style="vertical-align: middle; width: 20%">
                                            <div class="row col-sm-12" style="width: 100%">
                                                <li class="btn-group dropdown" style="width: 100%" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <button type="button" class="btn btn-secondary" style="width: 100%; font-weight: 500">Untested</button>
                                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                <li class="dropdown-menu" aria-labelledby="testResultDropdown">
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Passed</a>
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Retest</a>
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Failed</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#statusModal" style="font-weight: 500">Untested</a>
                                                </li>
                                                </li>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 2%">1</td>
                                        <td style="width: 18%">Test case 1</td>
                                        <td style="width: 30%">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</td>
                                        <td class="word-wrap" style="width: 30%">
                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                        </td>
                                        <td align="center" style="vertical-align: middle; width: 20%">
                                            <div class="row col-sm-12" style="width: 100%">
                                                <li class="btn-group dropdown" style="width: 100%" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <button type="button" class="btn btn-secondary" style="width: 100%; font-weight: 500">Untested</button>
                                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                <li class="dropdown-menu" aria-labelledby="testResultDropdown">
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Passed</a>
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Retest</a>
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Failed</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#statusModal" style="font-weight: 500">Untested</a>
                                                </li>
                                                </li>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 2%">1</td>
                                        <td style="width: 18%">Test case 1</td>
                                        <td style="width: 30%">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</td>
                                        <td class="word-wrap" style="width: 30%">
                                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                        </td>
                                        <td align="center" style="vertical-align: middle; width: 20%">
                                            <!--Button with dropdown-->
                                            <div class="row col-sm-12" style="width: 100%">
                                                <li class="btn-group dropdown" style="width: 100%" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <button type="button" class="btn btn-secondary" style="width: 100%; font-weight: 500">Untested</button>
                                                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                <li class="dropdown-menu" aria-labelledby="testResultDropdown">
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Passed</a>
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Retest</a>
                                                    <a class="dropdown-item" href="#" style="font-weight: 500">Failed</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#statusModal" style="font-weight: 500">Untested</a>
                                                </li>
                                                </li>
                                            </div>

                                        </td>
                                    </tr>

                                    </body>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>

                    <p class="small text-center text-muted my-5">
                        <em>More table examples coming soon...</em></p>

                </div>
                <!-- /.container-fluid -->

                <!-- Sticky Footer -->
                <footer class="footer">
                    <div class="container my-auto" align="middle">
                        <p style="color: white">Copyright © PT. Bank Mandiri Persero Tbk. - Testify 2018</p>
                    </div>
                </footer>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i></a>

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

        <!-- /.container-fluid -->
              <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
              <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>


              <!-- Core plugin JavaScript-->
              <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

              <!-- Page level plugin JavaScript-->
              <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js')?>"></script>
              <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js')?>"></script>
              <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>


              <!-- Custom scripts for all pages-->
              <script src="<?php echo base_url('assets/js/sb-admin.min.js')?>"></script>

              <!-- Demo scripts for this page-->
              <script src="<?php echo base_url('assets/js/demo/datatables-demo.js')?>"></script>
              <script src="<?php echo base_url('assets/js/demo/chart-area.js')?>"></script>
              <script src="<?php echo base_url('assets/js/demo/chart-bar-new.js')?>"></script>
              <script src="<?php echo base_url('assets/js/demo/chart-pie.js')?>"></script>

    </body>

    <style type="text/css">
        .body-custom-font{
            font-family: "Proxima Nova", "Roboto", sans-serif;
        }

        .word-wrap {
            word-break: break-all;
        }
        .no-wrap {
            white-space: nowrap;
        }
        .fixed {
            table-layout: fixed;
        }
        .row.vdivide [class*='col-']:not(:last-child):after {
            background: #e0e0e0;
            width: 1px;
            content: "";
            display:block;
            position: absolute;
            top:0;
            bottom: 0;
            right: 0;
            min-height: 70px;
        }
    </style>



</html>

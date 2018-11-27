<head>

  <style type="text/css">
          .body-custom-font{
              font-family: "Roboto", "Open Sans", sans-serif;

          }
          .dashboard-card-hero{
              font-family: "Roboto", "Lato", sans-serif;
              font-size: 5rem;
              font-weight: 700;
          }
          .dashboard-card-main{
              font-family: "Roboto", "Open Sans", sans-serif;
          }
          .card-text-header{
              font-family: "Roboto", "Open Sans", sans-serif;
              font-size: 3rem;
              font-weight: 500;
              padding-left: 5%;
              padding-right: 5%;
              padding-top: 1rem;
          }
          .card-text-main{
              font-family: "Roboto", "Open Sans", sans-serif;
              font-size: 1.2rem;
              font-weight: 300;
          }
          .text-black{
              color: black;
          }
      </style>
</head>
<div id="content-wrapper">

                <div class="container-fluid">

                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Overview</li>
                    </ol>
                    <!--Project Cards Header-->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card mb-3 btn-light" data-toggle="collapse" href="#collapseProject">
                                <div class="card-header" style="font-weight:500; font-size: 1.5rem"><i class="fas fa-desktop"></i>
                                    &nbsp;&nbsp;&nbsp;Project Overview</div>
                            </div>
                        </div>

                        <!-- Project Cards-->
                        <div class="col-xl-4 col-sm-12 mb-3 collapse show" id="collapseProject">
                            <div class="card o-hidden h-100" style="background: whitesmoke;">
                                <div class="card-body" align="center">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw"></i>
                                    </div>
                                    <div class="dashboard-card-hero" style="padding-right: 5%; padding-left: 5%"><?php echo $semua ?></div>
                                    <div class="card-text-main">Total Projects</div>
                                </div>
                                <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url().'index.php/c_gh/list_new_project'?>">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6 mb-3 collapse show" id="collapseProject">
                            <div class="card text-black o-hidden h-100" style="background: #8bc34a">
                                <div class="card-body" align="center" style="">

                                    <div class="card-text-header"><?php echo $ongoing?></div>
                                    <div class="card-text-main">Projects On Going</div>
                                </div>
                                <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url().'index.php/c_gh/list_new_ongoing'?>">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6 mb-3 collapse show" id="collapseProject">
                            <div class="card text-black o-hidden h-100" style="background:#ff5252">
                                <div class="card-body" align="center">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw"></i>
                                    </div>
                                    <div class="card-text-header"><?php echo $delay ?></div>
                                    <div class="card-text-main">Projects Delayed</div>
                                </div>
                                <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url().'index.php/c_gh/list_new_delay'?>">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6 mb-3 collapse show" id="collapseProject">
                            <div class="card text-black o-hidden h-100" style="background:#ffeb3b">
                                <div class="card-body" align="center">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw"></i>
                                    </div>
                                    <div class="card-text-header"><?php echo $queue ?></div>
                                    <div class="card-text-main">Projects On Queue</div>
                                </div>
                                <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url().'index.php/c_gh/list_new_queue'?>">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6 mb-3 collapse show" id="collapseProject">
                            <div class="card text-black o-hidden h-100" style="background: #03a9f4">
                                <div class="card-body" align="center">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw"></i>
                                    </div>
                                    <div class="card-text-header"><?php echo $done?></div>
                                    <div class="card-text-main">Projects Done</div>
                                </div>
                                <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url().'index.php/c_gh/list_new_done'?>">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!--Change request cards header-->
                        <div class="col-sm-12">
                            <div class="card mb-3 btn-light" data-toggle="collapse" href="#collapseCR">
                                <div class="card-header" style="font-weight:500; font-size: 1.5rem"><i class="fas fa-code"></i>
                                    &nbsp;&nbsp;&nbsp;Change Request Overview</div>
                            </div>
                        </div>

                        <!-- Change request Cards-->
                        <div class="col-xl-4 col-sm-12 mb-3 collapse show" id="collapseCR">
                            <div class="card o-hidden h-100" style="background: whitesmoke;">
                                <div class="card-body" align="center">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw"></i>
                                    </div>
                                    <div class="dashboard-card-hero" style="padding-right: 5%; padding-left: 5%"><?php echo $semua_cr ?></div>
                                    <div class="card-text-main">Total Requests</div>
                                </div>
                                <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url().'index.php/c_gh/list_cr_project'?>">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-2 col-sm-6 mb-3 collapse show" id="collapseCR">
                            <div class="card text-black o-hidden h-100" style="background: #8bc34a">
                                <div class="card-body" align="center" style="">

                                    <div class="card-text-header"><?php echo $ongoing_cr ?></div>
                                    <div class="card-text-main">Requests On Going</div>
                                </div>
                                <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url().'index.php/c_gh/list_cr_ongoing'?>">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6 mb-3 collapse show" id="collapseCR">
                            <div class="card text-black o-hidden h-100" style="background:#ff5252">
                                <div class="card-body" align="center">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw"></i>
                                    </div>
                                    <div class="card-text-header"><?php echo $delay_cr ?></div>
                                    <div class="card-text-main">Requests Delayed</div>
                                </div>
                                <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url().'index.php/c_gh/list_cr_delay'?>">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6 mb-3 collapse show" id="collapseCR">
                            <div class="card text-black o-hidden h-100" style="background:#ffeb3b">
                                <div class="card-body" align="center">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw"></i>
                                    </div>
                                    <div class="card-text-header"><?php echo $queue_cr ?></div>
                                    <div class="card-text-main">Requests On Queue</div>
                                </div>
                                <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url().'index.php/c_gh/list_cr_queue'?>">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6 mb-3 collapse show" id="collapseCR">
                            <div class="card text-black o-hidden h-100" style="background: #03a9f4">
                                <div class="card-body" align="center">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw"></i>
                                    </div>
                                    <div class="card-text-header"><?php echo $done_cr ?></div>
                                    <div class="card-text-main">Requests Done</div>
                                </div>
                                <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url().'index.php/c_gh/list_cr_done'?>">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!--Service request section-->
                        <div class="col-xl-6 col-sm-12">
                            <!--Service Request cards header-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card mb-3 btn-light" data-toggle="collapse" href="#collapseSR">
                                        <div class="card-header" style="font-weight:500; font-size: 1.5rem"><i class="fas fa-wrench"></i>
                                            &nbsp;&nbsp;&nbsp;Service Request Overview</div>
                                    </div>
                                </div>
                            </div>
                            <!--Service request cards-->
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 mb-3 collapse show" id="collapseSR">
                                    <div class="card text-black o-hidden h-100" style="background: white">
                                        <div class="card-body" align="center" style="">

                                            <div class="card-text-header"><?php echo $semua_sr?></div>
                                            <div class="card-text-main">Requests In </div>
                                        </div>
                                        <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url().'index.php/c_gh/list_sr_project'?>">
                                            <span class="float-left">View Details</span>
                                            <span class="float-right">
                                                <i class="fas fa-angle-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 mb-3 collapse show" id="collapseSR">
                                    <div class="card text-black o-hidden h-100">
                                        <div class="card-body" align="center">
                                            <div class="card-body-icon">
                                                <i class="fas fa-fw"></i>
                                            </div>
                                            <div class="card-text-header"><?php echo $done_sr?></div>
                                            <div class="card-text-main">Requests Done</div>
                                        </div>
                                        <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url().'index.php/c_gh/list_sr_done'?>">
                                            <span class="float-left">View Details</span>
                                            <span class="float-right">
                                                <i class="fas fa-angle-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Investigation requests section-->
                        <div class="col-xl-6 col-sm-12">
                            <!--Investigation Request cards header-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card mb-3 btn-light" data-toggle="collapse" href="#collapseIR">
                                        <div class="card-header" style="font-weight:500; font-size: 1.5rem"><i class="fas fa-search"></i>
                                            &nbsp;&nbsp;&nbsp;Investigations Request Overview</div>
                                    </div>
                                </div>
                            </div>
                            <!--Investigation request cards-->
                            <div class="row">
                                <div class="col-xl-6 col-sm-12 mb-3 collapse show" id="collapseIR">
                                    <div class="card text-black o-hidden h-100" style="background: white">
                                        <div class="card-body" align="center" style="">

                                            <div class="card-text-header"><?php echo $semua_ir ?></div>
                                            <div class="card-text-main">Requests In </div>
                                        </div>
                                        <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url().'index.php/c_gh/list_ir_project'?>">
                                            <span class="float-left">View Details</span>
                                            <span class="float-right">
                                                <i class="fas fa-angle-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 mb-3 collapse show" id="collapseIR">
                                    <div class="card text-black o-hidden h-100">
                                        <div class="card-body" align="center">
                                            <div class="card-body-icon">
                                                <i class="fas fa-fw"></i>
                                            </div>
                                            <div class="card-text-header"><?php echo $done_ir?></div>
                                            <div class="card-text-main">Requests Done</div>
                                        </div>
                                        <a class="card-footer text-black clearfix small z-1" href="<?php echo base_url().'index.php/c_gh/list_ir_done'?>">
                                            <span class="float-left">View Details</span>
                                            <span class="float-right">
                                                <i class="fas fa-angle-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of cards row-->
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>

            </div>

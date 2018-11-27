<div id="content-wrapper">
<?=$this->session->flashdata('notif')?>
                      <div class="container-fluid">

                          <!-- Breadcrumbs-->
                          <ol class="breadcrumb">
                              <h5>Project Testing Status</h5>
                          </ol>

                          <!-- Icon Cards-->
                          <div class="row">
                            <div class="col-sm-4 mb-3">
                                <div class="card text-white bg-success o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fas fa-fw fa-table"></i>
                                        </div>
                                        <div class="mr-5 card-text-header">Project On-going:</div>
                                        <div class="mr-5"><?php echo $ongoing ?> Projects</div>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'index.php/c_pmtest_dashboard/show_ongoing'?>">
                                        <span class="float-left">View Details</span>
                                        <span class="float-right">
                                            <i class="fas fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>

                              <div class="col-sm-4 mb-3">
                                  <div class="card text-white bg-danger o-hidden h-100">
                                      <div class="card-body">
                                          <div class="card-body-icon">
                                              <i class="fas fa-fw fa-list"></i>
                                          </div>
                                          <div class="mr-5 card-text-header">Ready To Approve:</div>
                                          <div class="mr-5"><?php echo $approve ?> Projects</div>
                                      </div>
                                      <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'index.php/c_pmtest_dashboard/show_approve'?>">
                                          <span class="float-left">View Details</span>
                                          <span class="float-right">
                                              <i class="fas fa-angle-right"></i>
                                          </span>
                                      </a>
                                  </div>
                              </div>

                              <div class="col-sm-4 mb-3">
                                  <div class="card text-white bg-warning o-hidden h-100">
                                      <div class="card-body">
                                          <div class="card-body-icon">
                                              <i class="fas fa-fw fa-envelope"></i>
                                          </div>
                                          <div class="mr-5 card-text-header">Project Queue:</div>

                                          <div class="mr-5"><?php echo $queue ?> Projects</div>

                                      </div>
                                      <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url().'index.php/c_pmtest_dashboard/show_queue'?>">
                                          <span class="float-left">View Details</span>
                                          <span class="float-right">
                                              <i class="fas fa-angle-right"></i>
                                          </span>
                                      </a>
                                  </div>
                              </div>
                              <div class="container-fluid">
                                <div class="form-group text-left">
                                  <a  href="<?php echo base_url().'index.php/c_pmtest_dashboard/list'?>" class="btn btn-primary"><i style="color:white;">List Project</i></a>
                                </div>
                          <!-- Breadcrumbs-->
                          <ol class="breadcrumb">
                              <h5>No. Of Testing</h5>
                          </ol>

                          <!-- Icon Cards-->
                          <div class="row">
                              <div class="col-sm-3 mb-3">
                                  <div class="card text-white bg-dark o-hidden h-100">
                                      <div class="card-body">
                                          <div class="card-body-icon">
                                              <i class="fas fa-fw"></i>
                                          </div>
                                          <div class="mr-5 card-text-header">Passed:</div>
                                          <div class="mr-5">10 Tests</div>
                                      </div>
                                      <a class="card-footer text-white clearfix small z-1" href="project-passed.html">
                                          <span class="float-left">View Details</span>
                                          <span class="float-right">
                                              <i class="fas fa-angle-right"></i>
                                          </span>
                                      </a>
                                  </div>
                              </div>
                              <div class="col-sm-3 mb-3">
                                  <div class="card text-black o-hidden h-100">
                                      <div class="card-body">
                                          <div class="card-body-icon">
                                              <i class="fas fa-fw"></i>
                                          </div>
                                          <div class="mr-5 card-text-header">Failed:</div>
                                          <div class="mr-5">20 Tests</div>
                                      </div>
                                      <a class="card-footer text-black clearfix small z-1" href="project-go.html">
                                          <span class="float-left">View Details</span>
                                          <span class="float-right">
                                              <i class="fas fa-angle-right"></i>
                                          </span>
                                      </a>
                                  </div>
                              </div>
                              <div class="col-sm-3 mb-3">
                                  <div class="card text-white bg-dark o-hidden h-100">
                                      <div class="card-body">
                                          <div class="card-body-icon">
                                              <i class="fas fa-fw"></i>
                                          </div>
                                          <div class="mr-5 card-text-header">Re-test:</div>
                                          <div class="mr-5">7 Tests</div>
                                      </div>
                                      <a class="card-footer text-white clearfix small z-1" href="project-queue.html">
                                          <span class="float-left">View Details</span>
                                          <span class="float-right">
                                              <i class="fas fa-angle-right"></i>
                                          </span>
                                      </a>
                                  </div>
                              </div>
                              <div class="col-sm-3 mb-3">
                                  <div class="card text-black o-hidden h-100">
                                      <div class="card-body">
                                          <div class="card-body-icon">
                                              <i class="fas fa-fw"></i>
                                          </div>
                                          <div class="mr-5 card-text-header">Un-tested:</div>
                                          <div class="mr-5">8 Tests</div>
                                      </div>
                                      <a class="card-footer text-black clearfix small z-1" href="project-queue.html">
                                          <span class="float-left">View Details</span>
                                          <span class="float-right">
                                              <i class="fas fa-angle-right"></i>
                                          </span>
                                      </a>
                                  </div>
                              </div>
                          </div>

                          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                      </div>

                  </div>
                  <!-- /.container-fluid -->
              </div>
              <!-- /.content-wrapper -->

          </div>
          <!-- /#wrapper -->

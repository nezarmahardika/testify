<div class="container">
		<h1 class="text-center">Data Orang</h1>
		<p class="text-center">Selamat Datang, <?php echo $this->session->userdata('ses_id'); ?></p>
		<div class="form-group text-left">
    <a>Back To </a><a href="javascript:window.history.go(-1);" class="btn btn-danger"><i style="color:white;">Dashboard</i></a>
			<!-- <a data-toggle="modal" data-target="#tambah-data" class="btn btn-primary"><i style="color:white;" class="fa fa-plus"></i></a> -->
		</div>
		<?=$this->session->flashdata('notif')?>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No.</th>
					<th>Project ID</th>
					<th>Project Name</th>
					<th>Project Type</th>
          <th>PM Dev</th>
					<th>Description</th>
					<th>Estimation (month)</th>
					<th>Project Reg. Date</th>
					<th>BRD</th>
					<th>FSD</th>
					<th>TSD</th>
					<!-- <th>Action</th> -->
				</tr>
			</thead>
			<tbody>
				<?php $no=0; foreach ($data as $dt){ ?>
				<tr>
					<td><?php echo ++$no;?></td>
					<td><?php echo $dt['ProjectID'];?></td>
					<td><?php echo $dt['ProjectName'];?></td>
					<td><?php echo $dt['ProjectTypeID'];?></td>
          <td><?php echo $dt['PMDev'];?></td>
					<td><?php echo $dt['ProjectDescription'];?></td>
					<td><?php echo $dt['ProjectEstimation'];?></td>
					<td><?php echo $dt['ProjectIn'];?></td>
					<td><?php if (is_null($dt['BRD']) == TRUE ) {
						echo "-";
					}else {
						echo "sudah";
					}?></td>
					<td><?php if (is_null($dt['FSD']) == TRUE ) {
						echo "-";
					}else {
						echo "sudah";
					}?></td>
					<td><?php if (is_null($dt['TSD']) == TRUE ) {
						echo "-";
					}else {
						echo "sudah";
					}?></td>
					<!-- <td>
						<a
    					href="javascript:;"
    					data-projectid="<?php echo $dt['ProjectID'] ?>"
    					data-projectname="<?php echo $dt['ProjectName'] ?>"
    					data-projecttype="<?php echo $dt['ProjectTypeID'] ?>"
    					data-description="<?php echo $dt['ProjectDescription'] ?>"
							data-estimation="<?php echo $dt['ProjectEstimation'] ?>"
							data-toggle="modal" data-target="#edit-data" class="view-edit">
    					<button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Edit</button>
						</a><br>
						<a
    					href="javascript:;"
    					data-projectid="<?php echo $dt['ProjectID'] ?>"
    					data-NameBRD="<?php echo $dt['NameBRD'] ?>"
    					data-BRD="<?php echo $dt['BRD'] ?>"
							data-toggle="modal" data-target="#upload-brd" class="view-brd">
    					<button  data-toggle="modal" data-target="#brd" class="btn btn-info">Upload BRD</button>
						</a><br>
						<a
    					href="javascript:;"
    					data-projectid="<?php echo $dt['ProjectID'] ?>"
    					data-NameFSD="<?php echo $dt['NameFSD'] ?>"
    					data-BRD="<?php echo $dt['FSD'] ?>"
							data-toggle="modal" data-target="#upload-fsd" class="view-fsd">
    					<button  data-toggle="modal" data-target="#fsd" class="btn btn-info">Upload FSD</button>
						</a><br>
						<a
    					href="javascript:;"
    					data-projectid="<?php echo $dt['ProjectID'] ?>"
    					data-NameTSD="<?php echo $dt['NameTSD'] ?>"
    					data-BRD="<?php echo $dt['TSD'] ?>"
							data-toggle="modal" data-target="#upload-tsd" class="view-tsd">
    					<button  data-toggle="modal" data-target="#tsd" class="btn btn-info">Upload TSD</button>
						</a>
					</td> -->
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<script type="text/javascript">
            $(document).on("click", ".view-edit", function () {
                 var adminid = $(this).data('projectid');
                 $(".modal-body #ProjectID").val( adminid );
                 $('#edit-data').modal('show');
            });
            </script>
						<script type="text/javascript">
				            $(document).on("click", ".view-brd", function () {
				                 var adminid = $(this).data('projectid');
				                 $(".modal-body #ProjectID").val( adminid );
				                 $('#upload-brd').modal('show');
				            });
				            </script>
										<script type="text/javascript">
														$(document).on("click", ".view-fsd", function () {
																 var adminid = $(this).data('projectid');
																 $(".modal-body #ProjectID").val( adminid );
																 $('#upload-fsd').modal('show');
														});
														</script>
														<script type="text/javascript">
																		$(document).on("click", ".view-tsd", function () {
																				 var adminid = $(this).data('projectid');
																				 $(".modal-body #ProjectID").val( adminid );
																				 $('#upload-tsd').modal('show');
																		});
																		</script>

	</div>
	<!-- Modal Tambah -->
	<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
	                <h4 class="modal-title">Tambah Project</h4>
	            </div>
	            <form class="form-horizontal" action="<?php echo base_url().'index.php/c_pmdev_dashboard/project'?>" method="post" enctype="multipart/form-data" role="form">
								<div class="modal-body">
		                    <div class="form-group">
		                        <label class="col-lg-2 control-label">ID</label>
		                        <div class="col-lg-10">
		                            <input type="text" class="form-control" name="ProjectID" placeholder="--Project ID--">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-lg-2 col-sm-2 control-label">Name</label>
		                        <div class="col-lg-10">
		                        	<input type="text" class="form-control" name="ProjectName" placeholder="--Project Name--">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-lg-2 col-sm-2 control-label">Type</label>
		                        <div class="col-lg-10">
															<select class="selectpicker" name="ProjectTypeID" title="--Choose one--">
																	<option value="New">New Project</option>
																	<option value="CR">CR</option>
																	<option value="SR">SR</option>
																	<option value="IR">IR</option>
															</select>
		                        </div>
		                    </div>
												<div class="form-group">
		                        <label class="col-lg-2 col-sm-2 control-label">PIC</label>
		                        <div class="col-lg-10">
		                            <input type="text" class="form-control" name="PMDev" value="<?php echo $this->session->userdata('ses_id'); ?>" readonly>
		                        </div>
		                    </div>
												<div class="form-group">
		                        <label class="col-lg-2 col-sm-2 control-label">Description</label>
		                        <div class="col-lg-10">
		                            <textarea type="text" class="form-control" name="ProjectDescription" placeholder="-- Description --"></textarea>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-lg-2 col-sm-2 control-label">Estimation</label>
		                        <div class="col-lg-10">
		                        	<input type="text" class="form-control" name="ProjectEstimation" placeholder="-- In Month --">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-lg-2 col-sm-2 control-label">Register Date</label>
		                        <div class="col-lg-10">
		                            <input type="date" class="form-control" name="ProjectIn" placeholder="Tuliskan Pekerjaan">
		                        </div>
		                    </div>
		                </div>
		                <div class="modal-footer">
		                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
		                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
		                </div>
								  </form>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- END Modal Tambah -->

	<!-- Modal Ubah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url().'index.php/c_pmdev_dashboard/edit_project'?>" method="post" enctype="multipart/form-data" role="form">
	            <div class="modal-body">
	                    <div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">Name</label>
	                        <div class="col-lg-10">
	                        	<input type="hidden" id="ProjectID" name="ProjectID" >
	                            <input type="text" class="form-control" id="ProjectName" name="ProjectName" placeholder="-- Project Name --">
	                        </div>
	                    </div>
											<div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">Type</label>
	                        <div class="col-lg-10">
														<select class="selectpicker" id="ProjectTypeID" name="ProjectTypeID" title="--Choose one--">
																<option value="New">New Project</option>
																<option value="CR">CR</option>
																<option value="SR">SR</option>
																<option value="IR">IR</option>
														</select>
													</div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">Description</label>
	                        <div class="col-lg-10">
	                        	<textarea class="form-control" id="ProjectDescription" name="ProjectDescription" placeholder="-- Description --"></textarea>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">Estimation</label>
	                        <div class="col-lg-10">
	                            <input type="text" class="form-control" id="ProjectEstimation" name="ProjectEstimation" placeholder="-- In Month --">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
	                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
	                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Ubah -->

<script>
	    $(document).ready(function() {
	        // Untuk sunting
	        $('#edit-data').on('show.bs.modal', function (event) {
	            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
	            var modal          = $(this)

	            // Isi nilai pada field
	            modal.find('#ProjectID').attr("value",div.data('ProjectID'));
	            modal.find('#ProjectName').attr("value",div.data('ProjectName'));
							modal.find('#ProjectTypeID').attr("value",div.data('ProjectTypeID'));
	            modal.find('#ProjectDescription').html(div.data('ProjectDescription'));
	            modal.find('#ProjectEstimation').attr("value",div.data('ProjectEstimation'));
	        });
	    });
	</script>


	<!-- Modal Upload BRD -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="upload-brd" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Upload BRD</h4>
            </div>
            <form id="upload-brdd" class="form-horizontal" action="<?php echo base_url().'index.php/c_pmdev_dashboard/brd_upload'?>" method="post" enctype="multipart/form-data" role="form">
	            <div class="modal-body">
	                    <div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">File Name</label>
	                        <div class="col-lg-10">
	                        	<input type="hidden" id="ProjectID" name="ProjectID">
	                            <input type="text" class="form-control" id="NameBRD" name="NameBRD" placeholder="-- File Name --">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">File</label>
	                        <div class="col-lg-10">
	                            <input type="file" class="form-control" id="BRD" name="BRD">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
	                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
	                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Ubah -->

<script>
	    $(document).ready(function() {
	        // Untuk sunting
	        $('#upload-brd').on('show.bs.modal', function (event) {
	            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
	            var modal          = $(this)

	            // Isi nilai pada field
	            modal.find('#ProjectID').attr("value",div.data('ProjectID'));
	            modal.find('#NameBRD').attr("value",div.data('NameBRD'));
							 modal.find('#BRD').attr("value",div.data('BRD'));
	        });

					$('#submit').submit(function(e){
							e.preventDefault();
									 $.ajax({
											 url:'<?php echo base_url();?>index.php/c_pmdev_dashboard/brd_upload',
											 type:"post",
											 data:new FormData(this),
											 processData:false,
											 contentType:false,
											 cache:false,
											 async:false,
												success: function(data){
														alert("Upload Image Berhasil.");
										 }
									 });
							});
	    });
	</script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>


<!-- Modal Upload FSD -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="upload-fsd" class="modal fade">
	<div class="modal-dialog">
			<div class="modal-content">
					<div class="modal-header">
							<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
							<h4 class="modal-title">Upload BRD</h4>
					</div>
					<form id="upload-brdd" class="form-horizontal" action="<?php echo base_url().'index.php/c_pmdev_dashboard/fsd_upload'?>" method="post" enctype="multipart/form-data" role="form">
						<div class="modal-body">
										<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label">File Name</label>
												<div class="col-lg-10">
													<input type="hidden" id="ProjectID" name="ProjectID">
														<input type="text" class="form-control" id="NameFSD" name="NameFSD" placeholder="-- File Name --">
												</div>
										</div>
										<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label">File</label>
												<div class="col-lg-10">
														<input type="file" class="form-control" id="FSD" name="FSD">
												</div>
										</div>
								</div>
								<div class="modal-footer">
										<button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
										<button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
								</div>
							</form>
					</div>
			</div>
	</div>
</div>
<!-- END Modal Ubah -->

<script>
		$(document).ready(function() {
				// Untuk sunting
				$('#upload-fsd').on('show.bs.modal', function (event) {
						var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
						var modal          = $(this)

						// Isi nilai pada field
						modal.find('#ProjectID').attr("value",div.data('ProjectID'));
						modal.find('#NameFSD').attr("value",div.data('NameFSD'));
						 modal.find('#FSD').attr("value",div.data('FSD'));
				});

				$('#submit').submit(function(e){
						e.preventDefault();
								 $.ajax({
										 url:'<?php echo base_url();?>index.php/c_pmdev_dashboard/fsd_upload',
										 type:"post",
										 data:new FormData(this),
										 processData:false,
										 contentType:false,
										 cache:false,
										 async:false,
											success: function(data){
													alert("Upload Image Berhasil.");
									 }
								 });
						});
		});
</script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>

<!-- Modal Upload TSD -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="upload-tsd" class="modal fade">
	<div class="modal-dialog">
			<div class="modal-content">
					<div class="modal-header">
							<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
							<h4 class="modal-title">Upload BRD</h4>
					</div>
					<form id="upload-brdd" class="form-horizontal" action="<?php echo base_url().'index.php/c_pmdev_dashboard/tsd_upload'?>" method="post" enctype="multipart/form-data" role="form">
						<div class="modal-body">
										<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label">File Name</label>
												<div class="col-lg-10">
													<input type="hidden" id="ProjectID" name="ProjectID">
														<input type="text" class="form-control" id="NameTSD" name="NameTSD" placeholder="-- File Name --">
												</div>
										</div>
										<div class="form-group">
												<label class="col-lg-2 col-sm-2 control-label">File</label>
												<div class="col-lg-10">
														<input type="file" class="form-control" id="TSD" name="TSD">
												</div>
										</div>
								</div>
								<div class="modal-footer">
										<button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
										<button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
								</div>
							</form>
					</div>
			</div>
	</div>
</div>
<!-- END Modal Ubah -->

<script>
		$(document).ready(function() {
				// Untuk sunting
				$('#upload-tsd').on('show.bs.modal', function (event) {
						var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
						var modal          = $(this)

						// Isi nilai pada field
						modal.find('#ProjectID').attr("value",div.data('ProjectID'));
						modal.find('#NameTSD').attr("value",div.data('NameTSD'));
						 modal.find('#TSD').attr("value",div.data('TSD'));
				});

				$('#submit').submit(function(e){
						e.preventDefault();
								 $.ajax({
										 url:'<?php echo base_url();?>index.php/c_pmdev_dashboard/tsd_upload',
										 type:"post",
										 data:new FormData(this),
										 processData:false,
										 contentType:false,
										 cache:false,
										 async:false,
											success: function(data){
													alert("Upload Image Berhasil.");
									 }
								 });
						});
		});
</script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>

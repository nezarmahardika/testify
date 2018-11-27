<div class="container">
		<h1 class="text-center">Project Ready To Approve</h1>
		<p class="text-center">Selamat Datang, <?php echo $this->session->userdata('ses_nama'); ?></p>
		<div class="form-group text-left">
			<a>Back To </a><a href="javascript:window.history.go(-1);" class="btn btn-danger"><i style="color:white;">Dashboard</i></a>
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
					<th>Action</th>
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
				<td>
						<a
    					href="javascript:;"
    					data-projectid="<?php echo $dt['ProjectID'] ?>"
    					data-projectname="<?php echo $dt['PMDev'] ?>"
    					data-projecttype="<?php echo $dt['ProjectTypeID'] ?>"
    					data-description="<?php echo $dt['ProjectDescription'] ?>"
							data-estimation="<?php echo $dt['ProjectEstimation'] ?>"
							data-toggle="modal" data-target="#edit-data" class="view-edit">
    					<button data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Approval</button>
						</a><br>
					</td>
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
	</div>

  <!-- Modal Ubah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url().'index.php/c_pmtest_dashboard/do_approve'?>" method="post" enctype="multipart/form-data" role="form">
	            <div class="modal-body">
	                    <div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">PIC</label>
	                        <div class="col-lg-10">
	                        	<input type="hidden" id="ProjectID" name="ProjectID" >
	                            <input type="text" class="form-control" id="PMTest" name="PMTest" value="<?php echo $this->session->userdata('ses_id'); ?>" readonly>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">Deadline</label>
	                        <div class="col-lg-10">
	                        	<input type="date" class="form-control" id="Deadline" name="Deadline">
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer">
	                    <button class="btn btn-info" type="submit"> Approve&nbsp;</button>
	                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
	                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Ubah -->

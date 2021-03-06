<div class="container">
		<h1 class="text-center">Track Project</h1>
		<h3 class="text-center"><?php echo $this->session->userdata('ses_nama'); ?></h3>
		<div class="form-group text-left">
      <a>Back To </a><a href="javascript:window.history.go(-1);" class="btn btn-danger"><i style="color:white;">Dashboard</i></a>
      </div>
		<?=$this->session->flashdata('notif')?>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No.</th>
					<th>Project ID</th>
					<th>PM Testing</th>
					<th>Deadline</th>
          <th>Lead PT</th>
					<th>Report PT</th>
          <th>Lead SIT</th>
					<th>Report SIT</th>
          <th>Lead UAT</th>
					<th>Report UAT</th>
          <th>Lead SAT</th>
					<th>Report SAT</th>
          <th>Lead PTR</th>
					<th>Report PTR</th>
					<!-- <th>Action</th> -->
				</tr>
			</thead>
			<tbody>
				<?php $no=0; foreach ($data as $dt){ ?>
				<tr>
					<td><?php echo ++$no;?></td>
					<td><?php echo $dt['ProjectID'];?></td>
					<td><?php echo $dt['PMTest'];?></td>
					<td><?php echo $dt['Deadline'];?></td>
          <td><?php echo $dt['LeadPT'];?></td>
					<td><?php echo $dt['FilePT'];?></td>
          <td><?php echo $dt['LeadSIT'];?></td>
					<td><?php echo $dt['FileSIT'];?></td>
          <td><?php echo $dt['LeadUAT'];?></td>
					<td><?php echo $dt['FileUAT'];?></td>
          <td><?php echo $dt['LeadSAT'];?></td>
					<td><?php echo $dt['FileSAT'];?></td>
          <td><?php echo $dt['LeadPTR'];?></td>
					<td><?php echo $dt['FilePTR'];?></td>
					<!-- <td>
						<a
    					href="javascript:;"
    					data-projectid="<?php echo $dt['ProjectID'] ?>"
							data-toggle="modal" data-target="#assign-project" class="assign">
    					<button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Assign</button>
						</a><br>
					</td> -->
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<script type="text/javascript">
            $(document).on("click", ".assign", function () {
                 var adminid = $(this).data('projectid');
                 $(".modal-body #ProjectID").val( adminid );
                 $('#assign-project').modal('show');
            });
            </script>

	</div>

	<!-- Modal Ubah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="assign-project" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Assign Test Lead</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url().'index.php/c_pmtest_dashboard/edit_testorder'?>" method="post" enctype="multipart/form-data" role="form">
	            <div class="modal-body">
	                    <div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">PT Lead</label>
	                        <div class="col-lg-10">
	                        	<input type="hidden" id="ProjectID" name="ProjectID" >
                            <select class="selectpicker" id="LeadPT" name="LeadPT" title="--Choose one--">
                               <option value="U011">Dhenda Rizky</option>
                           </select>
	                        </div>
	                    </div>
											<div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">SIT Lead</label>
	                        <div class="col-lg-10">
														<select class="selectpicker" id="LeadSIT" name="LeadSIT" title="--Choose one--">
																<option value="U012">Harry</option>
														</select>
													</div>
	                    </div>
                      <div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">UAT Lead</label>
	                        <div class="col-lg-10">
														<select class="selectpicker" id="LeadUAT" name="LeadUAT" title="--Choose one--">
																<option value="U013">Muthia</option>
														</select>
													</div>
	                    </div>
                      <div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">SAT Lead</label>
	                        <div class="col-lg-10">
														<select class="selectpicker" id="LeadSAT" name="LeadSAT" title="--Choose one--">
																<option value="U014">Agus</option>
														</select>
													</div>
	                    </div>
                      <div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">PTR Lead</label>
	                        <div class="col-lg-10">
														<select class="selectpicker" id="LeadPTR" name="LeadPTR" title="--Choose one--">
																<option value="U015">Dede</option>
														</select>
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

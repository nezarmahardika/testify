<div class="container">
		<h1 class="text-center">Data Project SAT Lead</h1>
		<p class="text-center">Selamat Datang, <?php echo $this->session->userdata('ses_nama'); ?></p>
		<!-- <div class="form-group text-right">
			<a data-toggle="modal" data-target="#tambah-data" class="btn btn-primary"><i style="color:white;" class="fa fa-plus"></i></a>
		</div> -->
		<!-- <div class="form-group text-left">
			<a  href="<?php echo base_url().'index.php/c_pmdev_dashboard/list'?>" class="btn btn-primary"><i style="color:white;">List Project</i></a>
		</div> -->
		<?=$this->session->flashdata('notif')?>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No.</th>
					<th>Project Code</th>
					<th>PM Testing</th>
					<th>SAT Report</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=0; foreach ($data as $dt){ ?>
				<tr>
					<td><?php echo ++$no;?></td>
					<td><?php echo $dt['ProjectID'];?></td>
					<td><?php echo $dt['PMTest'];?></td>
					<td><?php if (is_null($dt['FileSAT']) == TRUE ) {
						echo "-";
					}else {
						echo "sudah";
					}?></td>
					<td>
						<a
    					href="javascript:;"
    					data-projectid="<?php echo $dt['ProjectID'] ?>"
    					data-NameFilePT="<?php echo $dt['NameFileSAT'] ?>"
    					data-FilePT="<?php echo $dt['FileSAT'] ?>"
							data-toggle="modal" data-target="#upload-sat" class="view-sat">
    					<button  data-toggle="modal" data-target="#sat" class="btn btn-info">Upload SAT Report</button>
						</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<script type="text/javascript">
            $(document).on("click", ".view-sat", function () {
                 var adminid = $(this).data('projectid');
                 $(".modal-body #ProjectID").val( adminid );
                 $('#upload-sat').modal('show');
            });
            </script>

	</div>


	<!-- Modal Upload BRD -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="upload-sat" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Upload PT Report</h4>
            </div>
            <form id="upload-brdd" class="form-horizontal" action="<?php echo base_url().'index.php/c_satlead/sat_upload'?>" method="post" enctype="multipart/form-data" role="form">
	            <div class="modal-body">
	                    <div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">File Name</label>
	                        <div class="col-lg-10">
	                        	<input type="hidden" id="ProjectID" name="ProjectID">
	                            <input type="text" class="form-control" id="NameFileSAT" name="NameFileSAT" placeholder="-- File Name --">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="col-lg-2 col-sm-2 control-label">File</label>
	                        <div class="col-lg-10">
	                            <input type="file" class="form-control" id="FileSAT" name="FileSAT">
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
	        $('#upload-sat').on('show.bs.modal', function (event) {
	            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
	            var modal          = $(this)

	            // Isi nilai pada field
	            modal.find('#ProjectID').attr("value",div.data('ProjectID'));
	            modal.find('#NameFileSAT').attr("value",div.data('NameFileSAT'));
							 modal.find('#FileSAT').attr("value",div.data('FileSAT'));
	        });

					$('#submit').submit(function(e){
							e.preventDefault();
									 $.ajax({
											 url:'<?php echo base_url();?>index.php/c_satlead/sat_upload',
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

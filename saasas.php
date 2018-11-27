<table class="table table-striped table-bordered table-hover">
<thead class="text-center">
    <th class="text-center">No.</th>
    <th class="text-center">Major Code</th>
    <th class="text-center">Major Name</th>
    <th class="text-center">Option</th>
</thead>
<tbody>
    <?php $no = 1; ?>
    <?php foreach ($select_major as $row): ?>
        <tr>
            <td><?php echo $no++;               ?></td>
            <td><?php echo $row->cd_major;      ?></td>
            <td><?php echo $row->name_major;    ?></td>
            <td align=center>
                <!-- DELETE BUTTON -->
                <a
                    class="btn btn-danger btn-xs"
                    role="button"
                    data-toggle="modal"
                    data-target="#modal-delete"
                    href="<?php
                        $cd_major   = $row->cd_major;
                        $name_major = $row->name_major;
                    ?>" onclick=deleteRecord(<?php $row->cd_major?>)>
                    <i class="fa fa-fw fa-trash"></i> Delete
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>
<script>
function deleteRecord(id){
    document.getElementById("id_major").value = id;
}
</script>

<!-- MODAL DELETE DATA -->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal" method="POST" action="<?php echo base_url('major'); ?>">
                <input type="hidden" name="id_major" id="id_major" value="<?php echo (isset($id_major) ? $id_major : ''); ?>" />
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <!-- MODAL TITLE -->
                    <h4 class="modal-title"><i class="fa fa-fw fa-trash"></i> Delete Data</h4>
                </div>

                <!-- FORM -->
                <div class="modal-body">
                    <p>Are you sure to delete this major? <b><?php echo $name_major; ?></b> ini?</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-danger" name="delete" value="Yes, delete" />
                </div>
            </form>
        </div><!--/ .modal-content -->
    </div><!--/ .modal-dialog -->
</div><!--/ .modal -->

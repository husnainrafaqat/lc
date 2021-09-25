<?php 
                $role_id = $this->session->get_userdata('is_supper');
                $role_id = $role_id['admin_role_id'];
?>
<div class="datalist">
    <table id="example1" class="table table-bordered table-hover table-sm">
        <thead>
            <tr>
                <th width="50"><?= trans('id') ?></th>
                <th><?= trans('user') ?></th>
                <th><?= trans('username') ?></th>
                <th><?= trans('email') ?></th>
                <th><?= trans('role') ?></th>
                <th width="100"><?= trans('status') ?></th>
                <th width="120"><?= trans('action') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($info as $row):
                if($role_id!=1){
                    if($row['admin_role_id']==1){continue;}
                } 
                ?>
            <tr>
            	<td>
					<?=$row['admin_id']?>
                </td>
                <td>
					<span class="m0 mb5"><?=$row['firstname']?> <?=$row['lastname']?></span>
                    <small class="text-muted"><?=$row['admin_role_title']?></small>
                </td>
                <td>
                    <?=$row['username']?>
                </td> 
                <td>
					<?=$row['email']?>
                </td>
                <td>
                   <?=$row['admin_role_title']?>
                </td> 
                <td><input class='tgl tgl-ios tgl_checkbox' 
                    data-id="<?=$row['admin_id']?>" 
                    id='cb_<?=$row['admin_id']?>' 
                    type='checkbox' <?php echo ($row['is_active'] == 1)? "checked" : ""; ?> />
                    <label class='tgl-btn' for='cb_<?=$row['admin_id']?>'></label>
                </td>
                <td>
                    <a href="<?= base_url("admin/admin/edit/".encrypt_data($row['admin_id'])); ?>" class="btn btn-warning btn-sm mr5" >
                    <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?= base_url("admin/admin/delete/".encrypt_data($row['admin_id'])); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
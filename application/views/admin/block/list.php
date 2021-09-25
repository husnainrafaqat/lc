<div class="datalist">
    <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="50"><?= trans('id') ?></th>
                <th><?= trans('name') ?></th>
                <th><?= trans('society') ?></th>
                <th><?= trans('status') ?></th>                
                <th width="120"><?= trans('action') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $this->load->model('admin/block_model', 'block');
                foreach($info as $row):                 
                 $society = $this->block->get_society_by_id($row['societyId']);
                 $sc_name = $society['name'];                 
            ?>
            <tr>
            	<td>
					<?=$row['blRecordId']?>
                </td>
                <td>
					<?=$row['name']?>
                </td>
                <td>
					<?=$sc_name?>
                </td>
                <td>
					<?=($row['status']=="A") ? "Active" : "Disabled"?>
                </td>                
                <td>
                    <a href="<?= base_url("admin/block/edit/".$row['blRecordId']); ?>" class="btn btn-warning btn-xs mr5" >
                    <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?= base_url("admin/block/delete/".$row['blRecordId']); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>


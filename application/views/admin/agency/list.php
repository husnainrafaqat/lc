<div class="datalist">
    <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="50"><?= trans('id') ?></th>
                <th><?= trans('name') ?></th>
                <th><?= trans('mobile') ?></th>
                <th><?= trans('email') ?></th>
                <th><?= trans('status') ?></th>
                <th width="120"><?= trans('action') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($info as $row): ?>
            <tr>
            	<td>
					<?=$row['agRecordId']?>
                </td>
                <td>
					<?=$row['name']?>
                </td>
                <td>
                    <?=$row['mobile_no']?>
                </td> 
                <td>
					<?=$row['email']?>
                </td>               
                <td>
					<?=($row['status']=="A") ? "Active" : "Disabled"?>
                </td>                
                <td>
                    <a href="<?= base_url("admin/agency/edit/".$row['agRecordId']); ?>" class="btn btn-warning btn-xs mr5" >
                    <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?= base_url("admin/agency/delete/".$row['agRecordId']); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>


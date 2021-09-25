<div class="datalist">
    <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th width="50"><?= trans('id') ?></th>
                <th><?= trans('name') ?></th>
                <th><?= trans('status') ?></th>
                <th width="120"><?= trans('action') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($info as $row): ?>
            <tr>
            	<td>
					<?=$row['pRecordId']?>
                </td>
                <td>
					<?=$row['name']?>
                </td>
                <td>
					<?=($row['status']=="A") ? "Active" : "Disabled"?>
                </td>                
                <td>
                    <a href="<?= base_url("admin/property/edit/".$row['pRecordId']); ?>" class="btn btn-warning btn-xs mr5" >
                    <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?= base_url("admin/property/delete/".$row['pRecordId']); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>


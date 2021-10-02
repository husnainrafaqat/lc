<div class="datalist">
    <table id="example1" class="table table-bordered responsive table-hover table-sm" width="100%">
        <thead>
            <tr>
                <th width="50"><?= trans('id') ?></th>
                <?php
                    foreach($form_fields as $ff){
                        $name = make_slug_($ff['name']);
                ?>
                    <th><?= trans($name) ?></th>
                <?php        
                    }
                ?>
                <th width="120"><?= trans('action') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($info as $row): ?>
            <tr>
              <td><?=$row['id']?></td>
              <?php
                    foreach($form_fields as $ff){
                        $name = make_slug_($ff['name']);
              ?>
                    <td><?=$row[$name]?></td>
              <?php        
                    }
              ?>              
              
              <td>
                <a href="<?= base_url("admin/transporter/edit/".encrypt_data($row['id'])); ?>" class="btn btn-warning btn-sm mr5" >
                <i class="fa fa-edit"></i>
                </a>
                <a href="<?= base_url("admin/transporter/delete/".encrypt_data($row['id'])); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
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


<div class="datalist table-responsive">
    <table id="example1" class="table table-striped table-bordered nowrap responsive" style="width:100%">
        <thead>
            <tr>
                <th width="50"><?= trans('id') ?></th>
                <th class="tablet-l"><?= trans('agency') ?></th>
                <th class="tablet-l"><?= trans('society') ?></th>
                <th class="tablet-l"><?= trans('block') ?></th>
                <th class="tablet-l"><?= trans('property') ?></th>
                <th class="tablet-l"><?= trans('property_type') ?></th>
                <th class="all"><?= trans('property_size') ?></th>
                <th class="all"><?= trans('property_no') ?></th>
                <th class="all"><?= trans('max_price') ?></th>
                <th class="tablet-l"><?= trans('contact') ?></th>
                <th class="desktop"><?= trans('action') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $this->load->model('admin/supplier_model', 'supplier');
            foreach($info as $row):
               
            ?>
            <tr>
            	<td>
					<?=$row['inRecordId']?>
                </td>
                <td>
					
                </td>
                <td>
                   
                </td> 
                <td>
					
                </td>
                <td>
                   
                </td> 
                <td>
					
                </td>
                <td>
					
                </td>
                <td>
				
                </td>
                <td>
					
                </td>
                <td>
					
                </td>                
                <td>
                   
                        <a href="<?= base_url("admin/inventory/edit/".encrypt_data($row['inRecordId'])); ?>" class="btn btn-warning btn-sm mr5" >
                        <i class="fa fa-edit"></i>
                        </a>
                        <a href="<?= base_url("admin/inventory/delete/".encrypt_data($row['inRecordId'])); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                        <button type="button" class="btn btn-primary btn-sm openBtn" data-id="<?=encrypt_data($row['inRecordId'])?>">
                            <i class="fa fa-eye"></i>
                        </button>
                    
                    
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Inventory Details</h4>  
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>        
      </div>
    </div>
  </div>
</div>
<script>
  $(function () {
    $("#example1").DataTable();
    $('.openBtn').on('click',function(){
        var id = $(this).data("id");
        $('.modal-body').load('get_inventory_data/'+id,function(){
            $('#myModal').modal({show:true});
        });
    });
  });
</script>
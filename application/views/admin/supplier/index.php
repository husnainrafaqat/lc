<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css"> 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
         <!-- For Messages -->
        <?php $this->load->view('admin/includes/_messages.php') ?>
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                  <h3 class="card-title">
                    <i class="fa fa-list"></i>
                    <?= trans('inventory_list') ?>
                  </h3>
              </div>
              <div class="d-inline-block float-right">
                <a href="<?= base_url('admin/inventory/add'); ?>" class="btn btn-success"><i class="fa fa-list"></i> <?= trans('add_new_inventory') ?></a>
              </div>
            </div>
            <?php echo form_open("/",'class="filterdata"') ?>    
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <select name="society" class="form-control" onchange="filter_data()" >
                                <option value=""><?= trans('society') ?></option>
                                <?php foreach($societies as $s):?>
                                    <option value="<?=$s['scRecordId']?>"><?=$s['name']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select name="property" class="form-control" onchange="filter_data()" >
                                <option value=""><?= trans('property') ?></option>
                                <?php foreach($property as $p):?>
                                    <option value="<?=$p['pRecordId']?>"><?=$p['name']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select name="property_type" class="form-control" onchange="filter_data()" >
                                <option value=""><?= trans('property_type') ?></option>
                                <?php foreach($property_type as $pt):?>
                                    <option value="<?=$pt['ptRecordId']?>"><?=$pt['name']?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="text" name="max_price" value="" class="form-control" onchange="filter_data()" placeholder="<?= trans('Max Price') ?>" />
                        </div>
                    </div>                    
                </div>
                <?php echo form_close(); ?> 
        </div>
    </section>


    <!-- Main content -->
    <section class="content mt10">
    	<div class="card">
    		<div class="card-body">
               <!-- Load Admin list (json request)-->
               <div class="data_container"></div>
           </div>
       </div>
    </section>
    <!-- /.content -->
</div>



<!-- DataTables -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script> 

<script>
//------------------------------------------------------------------
function filter_data()
{
$('.data_container').html('<div class="text-center"><img src="<?=base_url('assets/dist/img')?>/loading.png"/></div>');
/*$.ajax({
    url:'',
    data: $('.filterdata').serialize(),
    type: 'post',
    success:function(data){
      $('.data_container').load(data);
    }
});*/

$.post('<?=base_url('admin/inventory/filterdata')?>',$('.filterdata').serialize(),function(){
	$('.data_container').load('<?=base_url('admin/inventory/list_filterdata')?>');
});
}
//------------------------------------------------------------------
function load_records()
{
$('.data_container').html('<div class="text-center"><img src="<?=base_url('assets/dist/img')?>/loading.png"/></div>');
$('.data_container').load('<?=base_url('admin/inventory/list_data')?>');
}
load_records();
</script>

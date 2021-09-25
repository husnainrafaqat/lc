  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default color-palette-bo">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i>
              <?= trans('add_new_supplier') ?> </h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?= base_url('admin/supplier'); ?>" class="btn btn-success"><i class="fa fa-list"></i> <?= trans('supplier_list') ?></a>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <!-- form start -->
                <div class="box-body">

                  <!-- For Messages -->
                  <?php $this->load->view('admin/includes/_messages.php') ?>

                  <?php echo form_open(base_url('admin/supplier/add'), 'class="form-horizontal needs-validation" novalidate="novalidate"');  ?> 
                  
                  <div class="row">
                    
                    <div class="form-group col-md-6">
                      <label for="shipper_id" class="col-md-12 control-label"><?= trans('shipper_id') ?>*</label>
                      <div class="col-md-12">
                        <input type="text" name="shipper_id" class="form-control" required id="shipper_id" placeholder="">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="shipper_name" class="col-md-12 control-label"><?= trans('shipper_name') ?>*</label>
                      <div class="col-md-12">
                        <input type="text" name="shipper_name" class="form-control" id="shipper_name" placeholder="">
                      </div>
                    </div>
                 
                    <div class="form-group col-md-6">
                      <label for="Shipper_created_in_system" class="col-md-12 control-label"><?= trans('Shipper_created_in_system') ?>*</label>
                      <div class="col-md-12">
                        <input type="Shipper_created_in_system" name="Shipper_created_in_system" class="form-control" id="Shipper_created_in_system" placeholder="">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="property_size" class="col-md-12 control-label"><?= trans('property_size_(eg._5_marla)') ?>*</label>
                      <div class="col-md-12">
                        <input type="text" name="property_size" class="form-control" id="property_size" placeholder="">
                      </div>
                    </div>
                    
                    <div class="form-group col-md-6">
                      <label for="property_no" class="col-md-12 control-label"><?= trans('property_no_(eg._plot_no)') ?>*</label>
                      <div class="col-md-12">
                        <input type="text" name="property_no" class="form-control" id="property_no" placeholder="">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="demand" class="col-md-12 control-label"><?= trans('demand') ?>*</label>
                      <div class="col-md-12">
                        <input type="text" name="demand" class="form-control" id="demand" placeholder="">
                      </div>
                    </div>
                    
                  </div> 
                  
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="submit" name="submit" value="<?= trans('add_supplier') ?>" class="btn btn-primary pull-right">
                    </div>
                  </div>
                  <?php echo form_close(); ?>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
          </div>  
        </div>
      </div>
    </section> 
  </div>
<script>
jQuery(function($){
  $(".society").change(function(){
    var val = $(this).val();
    if(val==""){
      $(".block").html('<option value="">Select</option>');
      return false;
    }
    $.ajax({
      url:'<?php echo base_url();?>admin/supplier/get_blocks/'+val,
      success:function(data){
          $(".block").html(data);
      }
    });   
  });
});
</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default color-palette-bo">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i>
              <?= trans('add_new_inventory') ?> </h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?= base_url('admin/inventory'); ?>" class="btn btn-success"><i class="fa fa-list"></i> <?= trans('inventory_list') ?></a>
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

                  <?php echo form_open(base_url('admin/inventory/add'), 'class="form-horizontal"');  ?> 
                  <div class="form-group">
                    <label for="username" class="col-md-12 control-label"><?= trans('name') ?>*</label>
                    <div class="col-md-12">
                      <input type="text" name="name" class="form-control" id="name" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="mobile_no" class="col-md-12 control-label"><?= trans('mobile_no') ?>*</label>
                    <div class="col-md-12">
                      <input type="number" name="mobile_no" class="form-control" id="mobile_no" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-md-12 control-label"><?= trans('email') ?>*</label>
                    <div class="col-md-12">
                      <input type="email" name="email" class="form-control" id="email" placeholder="">
                    </div>
                  </div>                  
                  <div class="form-group">
                    <?php
                      $this->load->model('admin/inventory_model', 'inventory');
                      $all_agencies = $this->inventory->get_agency();
                    ?>
                    <label for="agency_name" class="col-md-12 control-label"><?= trans('agency_name') ?>*</label>
                    <?php
                      $role_id = role_id();
                      if($role_id!=8 && $role_id!=9){
                        $this->load->model('admin/inventory_model', 'inventory');
                        $all_agencies = $this->inventory->get_agency();
                    ?>
                        <div class="col-md-12">
                          <select name="agency" class="form-control">
                            <option value=""><?= trans('select') ?></option>
                            <?php foreach($all_agencies as $a){ ?>
                              <option value="<?=$a['admin_id']?>"><?=$a['firstname'].' '.$a['lastname']?></option>    
                            <?php } ?>
                          </select>
                        </div>
                    <?php
                      }else{
                        $admin_id = admin_id();
                        $agency = $this->inventory->get_agency_by_id($admin_id);
                        $parenr_id = parent_user_id($admin_id);
                        if(isset($parenr_id) && $parenr_id==0){
                          $admin_id = $admin_id;
                        }else{
                          $admin_id = $parenr_id;
                        }
                    ?>
                        <div class="col-md-12">
                              <select name="agency" class="form-control">                               
                               <option value="<?=$admin_id?>"><?=$agency['firstname'].' '.$agency['lastname']?></option>                                                               
                              </select>
                            </div>
                    <?php
                      }
                   ?>
                    
                  </div>
                  <div class="form-group">
                    <?php
                      $all_societies = $this->inventory->get_society();
                    ?>
                    <label for="society" class="col-md-12 control-label"><?= trans('society') ?>*</label>
                    <div class="col-md-12">
                        <select name="society" class="form-control society">
                          <option value=""><?= trans('select') ?></option>
                          <?php foreach($all_societies as $s){ ?>
                            <option value="<?=$s['scRecordId']?>"><?=$s['name']?></option>    
                          <?php } ?>
                        </select>                      
                    </div>
                  </div>
                  <div class="form-group">
                     <?php
                      $all_blocks = $this->inventory->get_block();
                     ?>
                    <label for="block" class="col-md-12 control-label"><?= trans('block') ?>*</label>
                    <div class="col-md-12">
                        <select name="block" class="form-control block">
                          <option value=""><?= trans('select') ?></option>
                          <?php foreach($all_blocks as $b){ ?>
                            <option value="<?=$b['blRecordId']?>"><?=$b['name']?></option>    
                          <?php } ?>
                        </select>                      
                    </div>
                  </div>
                  <div class="form-group">
                    <?php
                      $all_properties = $this->inventory->get_property();
                    ?>
                    <label for="property" class="col-md-12 control-label"><?= trans('property_(eg._plot/Home)') ?>*</label>
                    <div class="col-md-12">
                        <select name="property" class="form-control">
                          <option value=""><?= trans('select') ?></option>
                          <?php foreach($all_properties as $p){ ?>
                            <option value="<?=$p['pRecordId']?>"><?=$p['name']?></option>    
                          <?php } ?>
                        </select>                       
                    </div>
                  </div>
                  <div class="form-group">
                     <?php
                      $all_property_types = $this->inventory->get_property_type();
                     ?>
                    <label for="property_type" class="col-md-12 control-label"><?= trans('property_type_(eg._Residential/Commercial)') ?>*</label>
                    <div class="col-md-12">
                        <select name="property_type" class="form-control">
                          <option value=""><?= trans('select') ?></option>
                          <?php foreach($all_property_types as $pt){ ?>
                            <option value="<?=$pt['ptRecordId']?>"><?=$pt['name']?></option>    
                          <?php } ?>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="property_size" class="col-md-12 control-label"><?= trans('property_size_(eg._5_marla)') ?>*</label>
                    <div class="col-md-12">
                      <input type="text" name="property_size" class="form-control" id="property_size" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="property_no" class="col-md-12 control-label"><?= trans('property_no_(eg._plot_no)') ?>*</label>
                    <div class="col-md-12">
                      <input type="text" name="property_no" class="form-control" id="property_no" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="demand" class="col-md-12 control-label"><?= trans('demand') ?>*</label>
                    <div class="col-md-12">
                      <input type="text" name="demand" class="form-control" id="demand" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="min_price" class="col-md-12 control-label"><?= trans('min_price') ?>*</label>
                    <div class="col-md-12">
                      <input type="text" name="min_price" class="form-control" id="min_price" placeholder="">
                    </div>
                  </div>                  
                 <div class="form-group">
                    <label for="status" class="col-md-12 control-label"><?= trans('status') ?>*</label>
                    <div class="col-md-12">
                      <select name="status" class="form-control">
                        <option value=""><?= trans('status') ?></option>
                        <option value="A">Active</option>
                        <option value="D">Disable</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="visibility" class="col-md-12 control-label"><?= trans('visibility') ?>*</label>
                    <div class="col-md-12">
                      <select name="visibility" class="form-control">
                        <option value=""><?= trans('visibility') ?></option>
                        <option value="public">Public</option>
                        <option value="private">Private</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="submit" name="submit" value="<?= trans('add_inventory') ?>" class="btn btn-primary pull-right">
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
      url:'<?php echo base_url();?>admin/inventory/get_blocks/'+val,
      success:function(data){
          $(".block").html(data);
      }
    });   
  });
});
</script>
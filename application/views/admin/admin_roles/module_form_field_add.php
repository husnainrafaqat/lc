  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i>
              <?= $title ?> </h3>
          </div>
          <?php $parent_menu = $this->uri->segment(4); ?>
          <div class="d-inline-block float-right">
            <a href="<?= base_url('admin/admin_roles/module_form/'.$parent_menu); ?>" class="btn btn-success"><i class="fa fa-list"></i>  <?= trans('module_form_fields_list') ?></a>
          </div>
        </div>
        <div class="card-body">
   
           <!-- For Messages -->
            <?php $this->load->view('admin/includes/_messages.php') ?>

            <?php echo form_open(base_url('admin/admin_roles/module_form_field_add'), 'class="form-horizontal needs-validation" novalidate="novalidate"');  ?> 
              
            <div class="row">
            
              <div class="form-group col-md-6">
                <label for="field_name" class="col-md-12 control-label"><?= trans('field_name') ?>*</label>
                <div class="col-md-12">
                  <input type="text" name="field_name" class="form-control" required id="field_name" placeholder="">
                  <small><?= trans('field_name_for_input_type') ?></small>
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="controller_name" class="col-md-12 control-label"><?= trans('field_type') ?>*</label>
                <div class="col-md-12">
                    <select name="field_type" class="form-control" required>
                      <option value=""><?= trans('select') ?></option>
                      <?php foreach($field_type as $ft){ ?>
                        <option value="<?=$ft['type']?>"><?=$ft['type']?></option>    
                      <?php } ?>
                    </select>                  
                </div>
              </div>
              
              <div class="form-group col-md-6">
                <label for="is_required" class="col-md-12 control-label"><?= trans('is_required') ?>*</label>
                <div class="col-md-12">
                  <input type="number" name="is_required" class="form-control" id="is_required" required placeholder="">
                  <small><?= trans('0_for_not_required_and_1_for_required') ?></small>
                </div>
              </div>

              <div class="form-group col-md-6">
                <label for="sort_order" class="col-md-12 control-label"><?= trans('sort_order') ?>*</label>
                <div class="col-md-12">
                  <input type="number" name="sort_order" class="form-control" id="sort_order" required placeholder="">                  
                </div>
              </div>

            </div>
              <div class="form-group">
                <div class="col-md-12">
                <input type="hidden" name="parent_module" value="<?= $parent_menu ?>">
                  <input type="submit" name="submit" value="<?= trans('add_form_field') ?>" class="btn btn-primary pull-right">
                </div>
              </div>
            <?php echo form_close( ); ?>
        </div>
          <!-- /.box-body -->
      </div>
    </section> 
  </div>
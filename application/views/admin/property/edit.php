  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default color-palette-bo">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-pencil"></i>
              <?= trans('edit_admin') ?> </h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?= base_url('admin/property'); ?>" class="btn btn-success"><i class="fa fa-list"></i> <?= trans('property_list') ?></a>
          </div>
        </div>
        <div class="card-body">   
           <!-- For Messages -->
            <?php $this->load->view('admin/includes/_messages.php') ?>
              
            <?php echo form_open(base_url('admin/property/edit/'.$property['pRecordId']), 'class="form-horizontal"' )?> 
            <div class="form-group">
                    <label for="username" class="col-md-12 control-label"><?= trans('name') ?>*</label>
                    <div class="col-md-12">
                      <input type="text" name="name" class="form-control" id="name" value="<?=$property['name']?>" placeholder="">
                    </div>
                  </div>
                 <div class="form-group">
                    <label for="status" class="col-md-12 control-label"><?= trans('active') ?>*</label>
                    <div class="col-md-12">
                      <select name="status" class="form-control">
                        <option value=""><?= trans('active') ?></option>
                        <option <?= ($property['status'] == "A")?'selected': '' ?> value="A">Active</option>
                        <option <?= ($property['status'] == "D")?'selected': '' ?> value="D">Disable</option>
                      </select>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <input type="submit" name="submit" value="Update property" class="btn btn-primary pull-right">
                  </div>
                </div>
                <?php echo form_close(); ?>
              </div>
              <!-- /.box-body -->
            </div>
    </section>
  </div>
<?php 
                $role_id = $this->session->get_userdata('is_supper');
                $role_id = $role_id['admin_role_id'];
                $role = role_name();
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default color-palette-bo">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i>
              <?= trans('add_new_user') ?> </h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?= base_url('admin/admin'); ?>" class="btn btn-success"><i class="fa fa-list"></i> <?= trans('users_list') ?></a>
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

                  <?php echo form_open(base_url('admin/admin/add'), 'class="form-horizontal"');  ?> 
                  <div class="form-group">
                    <label for="username" class="col-md-12 control-label"><?= trans('username') ?></label>

                    <div class="col-md-12">
                      <input type="text" name="username" class="form-control" id="username" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="firstname" class="col-md-12 control-label"><?= trans('firstname') ?></label>

                    <div class="col-md-12">
                      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="lastname" class="col-md-12 control-label"><?= trans('lastname') ?></label>

                    <div class="col-md-12">
                      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email" class="col-md-12 control-label"><?= trans('email') ?></label>

                    <div class="col-md-12">
                      <input type="email" name="email" class="form-control" id="email" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="mobile_no" class="col-md-12 control-label"><?= trans('mobile_no') ?></label>

                    <div class="col-md-12">
                      <input type="number" name="mobile_no" class="form-control" id="mobile_no" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-md-12 control-label"><?= trans('password') ?></label>

                    <div class="col-md-12">
                      <input type="password" name="password" class="form-control" id="password" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="role" class="col-md-12 control-label"><?= trans('select_user_role') ?>*</label>
                    <?php
                      if($role!="Agency"){
                    ?>
                     <div class="col-md-12">
                      <select name="role" class="form-control">
                        <option value=""><?= trans('select_role') ?></option>
                        <?php foreach($admin_roles as $role):
                           if($role_id!=1){
                            if($role['admin_role_id']==1){continue;}
                        } 
                        ?>
                          <option value="<?= $role['admin_role_id']; ?>"><?= $role['admin_role_title']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <?php
                      }else{
                    ?>
                     <div class="col-md-12">
                      <select name="role" class="form-control">
                        <option value=""><?= trans('select_role') ?></option>
                        <?php foreach($admin_roles as $role):
                           if($role['admin_role_id']==9):                            
                        ?>
                          <option value="<?= $role['admin_role_id']; ?>"><?= $role['admin_role_title']; ?></option>
                        <?php endif; endforeach; ?>
                      </select>
                    </div>
                    <?php
                      }
                    ?>
                   
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="submit" name="submit" value="<?= trans('add_user') ?>" class="btn btn-primary pull-right">
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
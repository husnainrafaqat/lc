  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default color-palette-bo">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i>
              <?= trans('add_new_contract') ?> </h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?= base_url('admin/contract'); ?>" class="btn btn-success"><i class="fa fa-list"></i> <?= trans('contract_list') ?></a>
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

                  <?php echo form_open(base_url('admin/contract/add'), 'class="form-horizontal needs-validation" novalidate="novalidate"');  ?> 
                  <div class="row">
                    
                    <?php
                          foreach($form_fields as $ff){
                            $slug = make_slug_($ff['name']);
                            if($ff['is_required']==1){$req_star = '*';$req='required';}else{$req_star = '';$req='';}
                            if($ff['type']=='country'){
                              $vals = get_countries();    
                            }
                            if($ff['type']=='state'){
                              $vals = get_states();    
                            }
                            if($ff['type']=='city'){
                              $vals = get_cities();    
                            }
                            if($ff['type']=='select'){
                              $get_vals = get_options($ff['id']);
                              $evals= explode(",",$get_vals['value']);
                              $vals = array();
                              foreach($evals as $k=>$v){
                                  $vals[]['name'] = $v;
                              }                             
                            }                            
                    ?>
                    <div class="form-group col-md-6">
                      <label for="<?=$slug?>" class="col-md-12 control-label"><?= trans($slug) ?><?=$req_star?></label>
                      <div class="col-md-12">
                        <?php                          
                          if( $ff['type']=='country' || $ff['type']=='state' || $ff['type']=='city' || $ff['type']=='select'){
                        ?>
                        <select name="<?=$slug?>" class="form-control" <?=$req?> id="<?=$slug?>" >
                          <option>Select value</option>
                          <?php
                            foreach($vals as $val){
                          ?>
                          <option value="<?=$val['name']?>"><?=$val['name']?></option>
                          <?php } ?>
                        </select>
                        <?php
                          }else if($ff['type']=='textarea'){
                        ?>
                          <textarea name="<?=$slug?>" class="form-control" <?=$req?> id="<?=$slug?>"></textarea>
                        <?php }else{ ?>
                          <input type="<?=$ff['type']?>" name="<?=$slug?>" class="form-control" <?=$req?> id="<?=$slug?>" placeholder="">
                        <?php }?>
                      </div>
                    </div>
                    <?php } ?>
                    
                  </div> 
                  <div class="form-group">
                    <div class="col-md-12">
                      <input type="submit" name="submit" value="<?= trans('add_contract') ?>" class="btn btn-primary pull-right">
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
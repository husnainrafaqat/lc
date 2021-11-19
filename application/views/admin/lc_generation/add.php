  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="card card-default color-palette-bo">
        <div class="card-header">
          <div class="d-inline-block">
              <h3 class="card-title"> <i class="fa fa-plus"></i>
              <?= trans('add_new_lc_generation') ?> </h3>
          </div>
          <div class="d-inline-block float-right">
            <a href="<?= base_url('admin/lc_generation'); ?>" class="btn btn-success"><i class="fa fa-list"></i> <?= trans('lc_generation_list') ?></a>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <!-- form start -->
                <div class="box-body">
<?php
  //echo $curr_step=   $lc_obj['current_step'];
?>
                  <!-- For Messages -->
                  <?php $this->load->view('admin/includes/_messages.php') ?>
                  <div class="mb-5 p-4 bg-white shadow-sm">
                      <h3>LC Generation</h3>
                      <div id="stepperForm" class="bs-stepper">
                        <div class="bs-stepper-header" role="tablist">
                          <div class="step<?php //if(isset($curr_step) && $curr_step==1)echo' active';?>" data-target="#test-form-1">
                            <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger1" aria-controls="test-form-1">
                              <span class="bs-stepper-circle">1</span>
                              <span class="bs-stepper-label">Lc Creation</span>
                            </button>
                          </div>
                          <div class="bs-stepper-line"></div>
                          <div class="step<?php if(isset($curr_step) && $curr_step==2)echo' active';?>" data-target="#test-form-2">
                            <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger2" aria-controls="test-form-2">
                              <span class="bs-stepper-circle">2</span>
                              <span class="bs-stepper-label">Insurance</span>
                            </button>
                          </div>
                          <div class="bs-stepper-line"></div>
                          <div class="step<?php if(isset($curr_step) && $curr_step==3)echo' active';?>" data-target="#test-form-3">
                            <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger3" aria-controls="test-form-3">
                              <span class="bs-stepper-circle">3</span>
                              <span class="bs-stepper-label">Bank</span>
                            </button>
                          </div>
                          <div class="bs-stepper-line"></div>
                          <div class="step<?php if(isset($curr_step) && $curr_step==4)echo' active';?>" data-target="#test-form-4">
                            <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger4" aria-controls="test-form-4">
                              <span class="bs-stepper-circle">4</span>
                              <span class="bs-stepper-label">Supplier</span>
                            </button>
                          </div>
                          <div class="bs-stepper-line"></div>
                          <div class="step<?php if(isset($curr_step) && $curr_step==5)echo' active';?>" data-target="#test-form-5">
                            <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger5" aria-controls="test-form-5">
                              <span class="bs-stepper-circle">5</span>
                              <span class="bs-stepper-label">Shipper</span>
                            </button>
                          </div>
                          <div class="bs-stepper-line"></div>
                          <div class="step<?php if(isset($curr_step) && $curr_step==6)echo' active';?>" data-target="#test-form-6">
                            <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger6" aria-controls="test-form-6">
                              <span class="bs-stepper-circle">6</span>
                              <span class="bs-stepper-label">Lc Expenses</span>
                            </button>
                          </div>
                        </div>
                        <div class="bs-stepper-content">
                        <?php //echo form_open(base_url('admin/lc_generation/add'), 'class="form-horizontal needs-validation signup-form" novalidate="novalidate" id="signup-form"');  ?> 
                            <?php include('lc_detail.php'); ?>
                            <?php include('insurance.php'); ?>
                            <?php include('bank.php'); ?>
                            <?php include('lc_gen_supplier.php'); ?>                            
                            <?php include('lc_gen_shipper.php'); ?>
                            <?php include('lc_expenses.php'); ?>
                            <?php //echo form_close(); ?>
                        </div>
                      </div>
                    </div>
                  
                 
                  
                </div>
                <!-- /.box-body -->
              </div>
            </div>
          </div>  
        </div>
      </div>
    </section> 
  </div>
  
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/bs-stepper.min.css">
  <script src="<?= base_url()?>assets/dist/js/stepper/bs-stepper.min.js"></script>
  <script src="<?= base_url()?>assets/dist/js/stepper/stepper-main.js"></script>
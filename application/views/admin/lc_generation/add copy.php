<script>
    jQuery(function($){
        //$(".step").removeClass("active");
        //$(".bs-stepper-pane").removeClass("active");
    });
</script>
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

                  <!-- For Messages -->
                  <?php $this->load->view('admin/includes/_messages.php') ?>

                  <?php
                      /*
                      $para = $_GET['para'];
                      $cactive = $iactive = $bactive = $bdactive = $sactive = $factive = "";
                      
                      switch ($para) {
                        case "contract":
                          $cactive = "active";
                          break;
                        case "insurance":
                          $iactive = "active";
                          break;
                        case "bank":
                          $bactive = "active";
                          break;
                        case "bank_doc":
                          $bdactive = "active";
                          break;  
                        case "shipper":
                          $sactive = "active";
                          break;
                        case "finalize":
                          $factive = "active";
                          break;    
                        default:
                        $cactive = "active";
                      }
                      */
                  ?>
                   
                    <div class="mb-5 p-4 bg-white shadow-sm">
                      <h3>LC Generation</h3>
                      <div id="stepperForm" class="bs-stepper">
                        <div class="bs-stepper-header" role="tablist">
                          <div class="step active" data-target="#c-form">
                            <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger1" aria-controls="c-form">
                              <span class="bs-stepper-circle">1</span>
                              <span class="bs-stepper-label">Contract</span>
                            </button>
                          </div>
                          <div class="bs-stepper-line"></div>
                          <div class="step" data-target="#test-form-2">
                            <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger2" aria-controls="test-form-2">
                              <span class="bs-stepper-circle">2</span>
                              <span class="bs-stepper-label">Insurance</span>
                            </button>
                          </div>
                          <div class="bs-stepper-line"></div>
                          <div class="step" data-target="#test-form-3">
                            <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger3" aria-controls="test-form-3">
                              <span class="bs-stepper-circle">3</span>
                              <span class="bs-stepper-label">Bank</span>
                            </button>
                          </div>
                          <div class="bs-stepper-line"></div>
                          <div class="step" data-target="#test-form-4">
                            <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger4" aria-controls="test-form-4">
                              <span class="bs-stepper-circle">4</span>
                              <span class="bs-stepper-label">Bank Documents</span>
                            </button>
                          </div>
                          <div class="bs-stepper-line"></div>
                          <div class="step" data-target="#test-form-5">
                            <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger5" aria-controls="test-form-5">
                              <span class="bs-stepper-circle">5</span>
                              <span class="bs-stepper-label">Shipper</span>
                            </button>
                          </div>
                          <div class="bs-stepper-line"></div>
                          <div class="step" data-target="#test-form-6">
                            <button type="button" class="step-trigger" role="tab" id="stepperFormTrigger6" aria-controls="test-form-6">
                              <span class="bs-stepper-circle">6</span>
                              <span class="bs-stepper-label">Finalize</span>
                            </button>
                          </div>
                        </div>
                        <div class="bs-stepper-content">
                        <?php echo form_open(base_url('admin/lc_generation/add'), 'class="form-horizontal needs-validation signup-form" novalidate="novalidate" id="signup-form"');  ?> 
  
                            <div id="c-form" role="tabpanel" class="bs-stepper-pane active fade" aria-labelledby="stepperFormTrigger1">
                                
                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label for="contract_no" class="col-md-12 control-label"><?= trans('contract_no') ?>*</label>
                                    <div class="col-md-12">
                                        <input type="text" name="contract_no" class="form-control"  required id="contract_no" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="contract_date" class="col-md-12 control-label"><?= trans('contract_date') ?>*</label>
                                    <div class="col-md-12">
                                        <input type="date" name="contract_date" class="form-control" id="contract_date" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="supplier_name" class="col-md-12 control-label"><?= trans('supplier_name') ?>*</label>
                                    <div class="col-md-12">
                                        <select name="supplier_name" class="form-control"  id="supplier_name" >
                                            <option>Select Value</option>
                                            <?php foreach($suppliers as $supp): ?>
                                            <option value="<?=$supp['id']?>"><?=$supp['supplier_name']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="shipper" class="col-md-12 control-label"><?= trans('shipper') ?>*</label>
                                    <div class="col-md-12">
                                        <select name="shipper" class="form-control"  id="shipper" >
                                            <option>Select Value</option>
                                            <?php foreach($shippers as $ship): ?>
                                            <option value="<?=$ship['id']?>"><?=$ship['shipper_name']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="temp_lc_no" class="col-md-12 control-label"><?= trans('temporary_lc_no') ?>*</label>
                                    <div class="col-md-12">
                                        <input type="text" name="temp_lc_no" class="form-control" id="temp_lc_no" placeholder="">
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-12">
                                <input type="submit" name="submit" value="<?= trans('Next') ?>" class="btn btn-primary pull-right">                                
                                </div>

                            </div>    
                            </div>
                            
                            
                            <?php echo form_close(); ?>
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
  <!-- <script src="<?= base_url()?>assets/dist/js/stepper/stepper-main.js"></script> -->
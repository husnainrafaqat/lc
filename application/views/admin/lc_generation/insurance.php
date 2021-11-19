<div id="test-form-2" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="stepperFormTrigger2">
 <?php  
						echo form_open(base_url('admin/lc_generation/add_insurance'), 'class="form-horizontal needs-validation signup-form" novalidate="novalidate" id="signup-form"');  ?> 
<div class="row">
    <div class="form-group col-md-6">
        <label for="insurance_company" class="col-md-12 control-label"><?= trans('insurance_company') ?>*</label>
        <div class="col-md-12">
		<input type='hidden' name='lc_id' value=' <?php //echo $lc_obj['id'];?>'/>
            <select name="insurance_company" class="form-control sIC"  id="insurance_company" >
                <option>Select Value</option>
                <?php foreach($insurance_companies as $ic): ?>
                <option data-sso="<?=encrypt_data($ic['id'])?>" value="<?=$ic['id']?>"><?=$ic['insurance_company_name']?></option>                
                <?php endforeach; ?> 
            </select>
        </div>
    </div>

    <div class="insurance_details col-md-12 hideThis">
        <div class="alert alert-secondary">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Company Address</th>
                        <th>Company Email Address</th>
                        <th>Company Phone Number</th>
                        <th>Company Score</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="company_address"></td>
                        <td class="company_email_address"></td>
                        <td class="company_phone"></td>
                        <td class="company_score"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="insurance_details_error col-md-12 hideThis">
        <div class="alert alert-danger" role="alert">
            No Bank Details Found.
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="insurance_premium_rate" class="col-md-12 control-label"><?= trans('insurance_premium_rate') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="insurance_premium_rate" class="form-control" id="insurance_premium_rate" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="insurance_value" class="col-md-12 control-label"><?= trans('insurance_value') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="insurance_value" class="form-control" id="insurance_value" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="markup" class="col-md-12 control-label"><?= trans('markup') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="markup" class="form-control" id="markup" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="field_1" class="col-md-12 control-label"><?= trans('field_1') ?>*</label>
        <div class="col-md-12">
            <textarea class="form-control"></textarea>
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="field_2" class="col-md-12 control-label"><?= trans('field_2') ?>*</label>
        <div class="col-md-12">
            <select name="field_2" class="form-control"  id="field_2" >
                <option>Select Value</option>
                <option value="1">1</option>                
            </select>
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="field_3" class="col-md-12 control-label"><?= trans('field_3') ?>*</label>
        <div class="col-md-12">
            <input type="date" name="field_3" class="form-control" id="field_3" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-12">
    <label for="exampleInputFile col-md-12">File input</label>
    <div class="input-group col-md-12">
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="file1" name='file1'>
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
        <div class="input-group-append">
        <span class="input-group-text" id="">Upload</span>
        </div>
    </div>
    </div>
    
    <div class="form-group col-md-12">
    <label for="exampleInputFile col-md-12">File input</label>
    <div class="input-group col-md-12">
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="file2" name='file2'>
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
        <div class="input-group-append">
        <span class="input-group-text" id="">Upload</span>
        </div>
    </div>
    </div>

    <div class="form-group col-md-12">
    <label for="exampleInputFile col-md-12">File input</label>
    <div class="input-group col-md-12">
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="file3" name='file3'>
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
        <div class="input-group-append">
        <span class="input-group-text" id="">Upload</span>
        </div>
    </div>
    </div>

   <div class="card-footer form-group col-md-12">
	<input type="hidden"  name='submit' value="22"/>
        <button class="btn btn-primary btn-next-form float-right">Next</button>
    </div>

</div>    

  <?php echo form_close(); ?>
</div>
<script>
    jQuery(function($){
        $(".sIC").change(function(){
            var val = $(this).find(":selected").data('sso');
            if(val=="" || typeof val  === "undefined"){
                return false;
            }
            $(".insurance_details").fadeOut();
            $(".insurance_details_error").fadeOut();
            if(val!=""){
                $.ajax({
                    url:'<?=base_url("admin/lc_generation/get_ic_details")?>',
                    data:{"<?php echo $this->security->get_csrf_token_name(); ?>":'<?php echo $this->security->get_csrf_hash(); ?>',"ic_id":val},
                    type:'post',
                    success:function(res){
                        var obj = JSON.parse(res);
                        if(typeof obj['insurance_company_name']!=="undefined"){
                            $(".company_address").html(obj['company_address']);
                            $(".company_email_address").html(obj['company_email_address']);
                            $(".company_phone").html(obj['company_phone_number']);
                            $(".company_score").html(obj['company_score']);
                            $(".insurance_details").slideDown();
                        }else{
                            $(".insurance_details_error").slideDown();
                        }                        
                    }
                });
            }
        });
    });
</script>
<div id="test-form-3" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="stepperFormTrigger3">
<?php 
						echo form_open(base_url('admin/lc_generation/add_bank'), 'class="form-horizontal needs-validation signup-form" novalidate="novalidate" id="signup-form"');  ?> 

<div class="row">
    <div class="form-group col-md-6">
        <label for="bank" class="col-md-12 control-label"><?= trans('bank') ?>*</label>
        <div class="col-md-12">
		<input type='hidden' name='lc_id' value=' <?php //echo $lc_obj['id'];?>'/>
            <select name="bank" class="form-control sBank" id="bank" >
                <option>Select Value</option>
                <?php foreach($banks as $b): ?>
                <option data-sso="<?=encrypt_data($b['id'])?>" value="<?=$b['id']?>"><?=$b['bank_name']?></option>                
                <?php endforeach; ?>          
            </select>
        </div>
    </div>


    <div class="bank_details col-md-12 hideThis">
        <div class="alert alert-secondary">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Limit Structure</th>
                        <th>Pricing With Bank</th>
                        <th>Available Limit</th>
                        <th>Limit Used</th>
                        <th>Service Level</th>
                        <th>Leniency</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="limit_structure"></td>
                        <td class="pricing_with_bank"></td>
                        <td class="available_limit"></td>
                        <td class="limit_used"></td>
                        <td class="service_level"></td>
                        <td class="leniency"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="bank_details_error col-md-12 hideThis">
        <div class="alert alert-danger" role="alert">
            No Bank Details Found.
        </div>
    </div>

    <?php /* ?>
    <div class="form-group col-md-6">
        <label for="limit_structure" class="col-md-12 control-label"><?= trans('limit_structure') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="limit_structure" class="form-control" id="limit_structure" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="pricing_with_bank" class="col-md-12 control-label"><?= trans('pricing_with_bank') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="pricing_with_bank" class="form-control" id="pricing_with_bank" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="available_limit" class="col-md-12 control-label"><?= trans('available_limit') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="available_limit" class="form-control" id="available_limit" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="limit_used" class="col-md-12 control-label"><?= trans('limit_used') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="limit_used" class="form-control" id="limit_used" placeholder="">
        </div>
    </div> 
    
    <div class="form-group col-md-6">
        <label for="service_level" class="col-md-12 control-label"><?= trans('service_level') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="service_level" class="form-control" id="service_level" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="leniency" class="col-md-12 control-label"><?= trans('leniency') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="leniency" class="form-control" id="leniency" placeholder="">
        </div>
    </div>
    <?php */ ?>

    <div class="form-group col-md-6">
        <label for="relationship" class="col-md-12 control-label"><?= trans('relationship') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="relationship" class="form-control" id="relationship" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="markup" class="col-md-12 control-label"><?= trans('markup') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="markup" class="form-control" id="markup" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="lc_doc_sub_date" class="col-md-12 control-label"><?= trans('lc_doc_sub_date') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="lc_doc_sub_date" class="form-control" id="lc_doc_sub_date" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="bank_draft" class="col-md-12 control-label"><?= trans('bank_draft') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="bank_draft" class="form-control" id="bank_draft" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="bank_draft_rec_date" class="col-md-12 control-label"><?= trans('bank_draft_rec_date') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="bank_draft_rec_date" class="form-control" id="bank_draft_rec_date" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="lc_no" class="col-md-12 control-label"><?= trans('lc_no') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="lc_no" class="form-control" id="lc_no" placeholder="">
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
    <label for="exampleInputFile col-md-12">Bank Draft</label>
    <div class="input-group col-md-12">
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="exampleInputFile">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
        <div class="input-group-append">
        <span class="input-group-text" id="">Upload</span>
        </div>
    </div>
    </div>
    
    <div class="form-group col-md-12">
    <label for="exampleInputFile col-md-12">Bank Required Document</label>
    <div class="input-group col-md-12">
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="exampleInputFile">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
        <div class="input-group-append">
        <span class="input-group-text" id="">Upload</span>
        </div>
    </div>
    </div>

    <div class="form-group col-md-12">
    <label for="exampleInputFile col-md-12">Bank Required Document</label>
    <div class="input-group col-md-12">
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="exampleInputFile">
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
<?php echo form_close();?>
</div>
<script>
    jQuery(function($){
        $(".sBank").change(function(){
            var val = $(this).find(":selected").data('sso');
            if(val=="" || typeof val  === "undefined"){
                return false;
            }
            $(".bank_details").fadeOut();
            $(".bank_details_error").fadeOut();
            if(val!=""){
                $.ajax({
                    url:'<?=base_url("admin/lc_generation/get_bank_details")?>',
                    data:{"<?php echo $this->security->get_csrf_token_name(); ?>":'<?php echo $this->security->get_csrf_hash(); ?>',"bid":val},
                    type:'post',
                    success:function(res){
                        var obj = JSON.parse(res);
                        if(typeof obj['bank_name']!=="undefined"){
                            $(".limit_structure").html(obj['limit_structure']);
                            $(".pricing_with_bank").html(obj['pricing_with_bank']);
                            $(".available_limit").html(obj['available_limit']);
                            $(".limit_used").html(obj['limit_used']);
                            $(".service_level").html(obj['service_level']);
                            $(".leniency").html(obj['leniency']);
                            $(".bank_details").slideDown();
                        }else{
                            $(".bank_details_error").slideDown();
                        }                        
                    }
                });
            }
        });
    });
</script>
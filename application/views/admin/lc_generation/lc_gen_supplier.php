<div id="test-form-4" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="stepperFormTrigger4">
<?php 
						echo form_open(base_url('admin/lc_generation/add_supplier'), 'class="form-horizontal needs-validation signup-form" novalidate="novalidate" id="signup-form"');  ?> 
<div class="row">
    
    <?php /* ?>
    <div class="form-group col-md-6">
        <label for="supplier_company" class="col-md-12 control-label"><?= trans('supplier_company') ?>*</label>
        <div class="col-md-12">
           		<input type='hidden' name='lc_id' value=' <?php //echo $lc_obj['id'];?>'/>
 <select name="supplier_company" class="form-control"  id="supplier_company" >
                <option>Select Value</option>
                <?php foreach($suppliers as $sup): ?>
                    <option value="<?=$sup['id']?>"><?=$sup['supplier_name']?></option>                
                <?php endforeach; ?>     
            </select>
        </div>
    </div>
    <?php */ ?>

    <div class="form-group col-md-6">
        <label for="bank_draft_sent_date" class="col-md-12 control-label"><?= trans('bank_draft_sent_date') ?>*</label>
        <div class="col-md-12">
            <input type="date" name="bank_draft_sent_date" class="form-control" id="bank_draft_sent_date" placeholder="">
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
    
    <?php /* ?>
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
    <?php */ ?>

    <div class="form-group col-md-6">
        <label for="ammendment_in_bank_draft" class="col-md-12 control-label"><?= trans('ammendment_in_bank_draft') ?>*</label>
        <div class="col-md-12">
            <select name="ammendment_in_bank_draft" class="form-control"  id="ammendment_in_bank_draft" >
                <option>Select Value</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
    </div>

    <div class="form-group col-md-6 ammendment_in_bank_draft_explain_div hideThis">
        <label for="ammendment_in_bank_draft_explain" class="col-md-12 control-label"><?= trans('ammendment_in_bank_draft_explain') ?>*</label>
        <div class="col-md-12">
        <textarea class="form-control" name="ammendment_in_bank_draft_explain"></textarea>
        </div>
    </div>

    <div class="form-group col-md-12">
    <label for="exampleInputFile col-md-12">Ammendment Bank Draft</label>
    <div class="input-group col-md-12">
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="">
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
        $("#ammendment_in_bank_draft").change(function(){
            var val = $(this).val();
            if(val=="yes"){
                $(".ammendment_in_bank_draft_explain_div").show();
                $(".ammendment_in_bank_draft_explain_div").find("textarea").prop("required",true);
            }else{
                $(".ammendment_in_bank_draft_explain_div").hide();
                $(".ammendment_in_bank_draft_explain_div").find("textarea").prop("required",false);
            }
        });
    });
</script>
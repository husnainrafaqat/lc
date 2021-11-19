<div id="test-form-1" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="stepperFormTrigger1">

                        <?php 
						echo form_open(base_url('admin/lc_generation/add'), 'class="form-horizontal needs-validation signup-form" novalidate="novalidate" id="signup-form"');  ?> 
    <div class="form-group">
        <label for="contract_no" class="col-md-6 control-label"><?= trans('contract_no') ?>*</label>
        <div class="col-md-6">
            <input type="text" name="contract_no" class="form-control"  required id="contract_no" placeholder="">
        </div>
    </div>

    <div class="contract_details col-md-12 hideThis">
        <div class="alert alert-secondary">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Contract Name</th>
                        <th>Contract Type</th>
                        <th>HS Code</th>
                        <th>Fixed Contract Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="contract_name"></td>
                        <td class="contract_type"></td>
                        <td class="hs_code"></td>
                        <td class="fixed_contract_date"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="contract_details_error col-md-12 hideThis">
        <div class="alert alert-danger" role="alert">
            No Contract Details Found.
        </div>
    </div>

    <div class="row">

    <div class="form-group col-md-6">
        <label for="temporary_lc_no" class="col-md-12 control-label"><?= trans('temporary_lc_no') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="temporary_lc_no" class="form-control" id="temporary_lc_no" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="Performa_invoice" class="col-md-12 control-label"><?= trans('Performa_invoice') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="Performa_invoice" class="form-control" id="Performa_invoice" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="invoice_date" class="col-md-12 control-label"><?= trans('invoice_date') ?>*</label>
        <div class="col-md-12">
            <input type="date" name="invoice_date" class="form-control" id="invoice_date" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="proforma_invoice_amount_in_$" class="col-md-12 control-label"><?= trans('proforma_invoice_amount_in_') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="proforma_invoice_amount_in_" class="form-control" id="proforma_invoice_amount_in_" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="lc_signed_date" class="col-md-12 control-label"><?= trans('lc_signed_date') ?>*</label>
        <div class="col-md-12">
            <input type="date" name="lc_signed_date" class="form-control" id="lc_signed_date" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="lc_open_date" class="col-md-12 control-label"><?= trans('lc_open_date') ?>*</label>
        <div class="col-md-12">
            <input type="date" name="lc_open_date" class="form-control" id="lc_open_date" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="lc_issue_date" class="col-md-12 control-label"><?= trans('lc_issue_date') ?>*</label>
        <div class="col-md-12">
            <input type="date" name="lc_issue_date" class="form-control" id="lc_issue_date" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="lc_shipment_date" class="col-md-12 control-label"><?= trans('lc_shipment_date') ?>*</label>
        <div class="col-md-12">
            <input type="date" name="lc_shipment_date" class="form-control" id="lc_shipment_date" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="lc_expire_date" class="col-md-12 control-label"><?= trans('lc_expire_date') ?>*</label>
        <div class="col-md-12">
            <input type="date" name="lc_expire_date" class="form-control" id="lc_expire_date" placeholder="">
        </div>
    </div>


    <div class="form-group col-md-6">
        <label for="shippments_allowed" class="col-md-12 control-label"><?= trans('shippments_allowed') ?>*</label>
        <div class="col-md-12">
            <select name="shippments_allowed" class="form-control"  id="shippments_allowed" >
                <option>Select Value</option>                
                <option value="yes">Yes</option>
                <option value="yes">No</option>
            </select>
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="container_free_days_allowed" class="col-md-12 control-label"><?= trans('container_free_days_allowed') ?>*</label>
        <div class="col-md-12">
            <select name="container_free_days_allowed" class="form-control"  id="container_free_days_allowed" >
                <option>Select Value</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </div>
    </div>
    
    <div class="form-group col-md-6">
        <label for="no_of_quarters_for_lc" class="col-md-12 control-label"><?= trans('no_of_quarters_for_lc') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="no_of_quarters_for_lc" class="form-control" id="no_of_quarters_for_lc" placeholder="">
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
        $("#contract_no").change(function(){
            var val = $(this).val();
            if(val=="" || typeof val  === "undefined"){
                return false;
            }
            $(".contract_details").fadeOut();
            $(".contract_details_error").fadeOut();
            if(val!=""){
                $.ajax({
                    url:'<?=base_url("admin/lc_generation/get_contract")?>',
                    data:{"<?php echo $this->security->get_csrf_token_name(); ?>":'<?php echo $this->security->get_csrf_hash(); ?>',"cno":val},
                    type:'post',
                    success:function(res){
                        var obj = JSON.parse(res);
                        if(typeof obj['contract_name']!=="undefined"){
                            $(".contract_name").html(obj['contract_name']);
                            $(".contract_type").html(obj['contract_type']);
                            $(".hs_code").html(obj['hs_code']);
                            $(".rate").html(obj['rate']);
                            $(".fixed_contract_date").html(obj['fixed_contract_date']);
                            $(".contract_fix_rate").html(obj['contract_fix_rate']);                            
                            $(".contract_details").slideDown();
                        }else{
                            $(".contract_details_error").slideDown();
                        }                        
                    }
                });
            }
        });
    });
</script>
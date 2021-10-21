<div id="test-form-1" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="stepperFormTrigger1">
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
        <label for="supllier_name" class="col-md-12 control-label"><?= trans('supllier_name') ?>*</label>
        <div class="col-md-12">
            <select name="supllier_name" class="form-control"  id="supllier_name" >
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
        <label for="temporary_lc_no" class="col-md-12 control-label"><?= trans('temporary_lc_no') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="temporary_lc_no" class="form-control" id="temporary_lc_no" placeholder="">
        </div>
    </div>
    
    <div class="form-group col-md-12">
    <button class="btn btn-primary btn-next-form float-right">Next</button>
    </div>

</div>    
</div>
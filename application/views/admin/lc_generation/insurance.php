<div id="test-form-2" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="stepperFormTrigger2">
<div class="row">
    <div class="form-group col-md-6">
        <label for="insurance_company" class="col-md-12 control-label"><?= trans('insurance_company') ?>*</label>
        <div class="col-md-12">
            <select name="insurance_company" class="form-control"  id="insurance_company" >
                <option>Select Value</option>
                <?php foreach($insurance_companies as $ic): ?>
                <option value="<?=$ic['id']?>"><?=$ic['insurance_company_name']?></option>                
                <?php endforeach; ?> 
            </select>
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
        <input type="file" class="custom-file-input" id="">
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
        <input type="file" class="custom-file-input" id="">
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
        <input type="file" class="custom-file-input" id="">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
        <div class="input-group-append">
        <span class="input-group-text" id="">Upload</span>
        </div>
    </div>
    </div>

    <div class="card-footer form-group col-md-12">
        <button class="btn btn-primary btn-next-form float-right">Next</button>
    </div>
    </div>    
</div>
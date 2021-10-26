<div id="test-form-3" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="stepperFormTrigger3">
<div class="row">
    <div class="form-group col-md-6">
        <label for="bank" class="col-md-12 control-label"><?= trans('bank') ?>*</label>
        <div class="col-md-12">
            <select name="bank" class="form-control"  id="bank" >
                <option>Select Value</option>
                <?php foreach($banks as $b): ?>
                <option value="<?=$b['id']?>"><?=$b['bank_name']?></option>                
                <?php endforeach; ?>          
            </select>
        </div>
    </div>

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
    <label for="exampleInputFile col-md-12">File input</label>
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
    <label for="exampleInputFile col-md-12">File input</label>
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
    <label for="exampleInputFile col-md-12">File input</label>
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
        <button class="btn btn-primary btn-next-form float-right">Next</button>
    </div>

</div>    
</div>
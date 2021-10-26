<div id="test-form-4" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="stepperFormTrigger4">
<div class="row">
    <div class="form-group col-md-6">
        <label for="supplier_company" class="col-md-12 control-label"><?= trans('supplier_company') ?>*</label>
        <div class="col-md-12">
            <select name="supplier_company" class="form-control"  id="supplier_company" >
                <option>Select Value</option>
                <?php foreach($suppliers as $sup): ?>
                    <option value="<?=$sup['id']?>"><?=$sup['supplier_name']?></option>                
                <?php endforeach; ?>     
            </select>
        </div>
    </div>

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
        <button class="btn btn-primary btn-next-form float-right">Next</button>
    </div>
    
</div>    
</div>
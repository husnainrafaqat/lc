<div id="test-form-5" role="tabpanel" class="bs-stepper-pane fade" aria-labelledby="stepperFormTrigger5">
<?php 
						echo form_open(base_url('admin/lc_generation/add_shipper'), 'class="form-horizontal needs-validation signup-form" novalidate="novalidate" id="signup-form"');  ?> 
<div class="row">
    <div class="form-group col-md-6">
        <label for="shipper_information" class="col-md-12 control-label"><?= trans('shipper_information') ?>*</label>
        <div class="col-md-12">
                      		<input type='hidden' name='lc_id' value=' <?php //echo $lc_obj['id'];?>'/>
 <select name="shipper_information" class="form-control"  id="shipper_information" >
                <option>Select Value</option>
                <?php foreach($shippers as $ship): ?>
                    <option value="<?=$ship['id']?>"><?=$ship['shipper_name']?></option>                
                <?php endforeach; ?>     
            </select>
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="rate" class="col-md-12 control-label"><?= trans('rate') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="rate" class="form-control" id="rate" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="freight_charges" class="col-md-12 control-label"><?= trans('freight_charges') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="freight_charges" class="form-control" id="freight_charges" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="internal" class="col-md-12 control-label"><?= trans('internal') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="internal" class="form-control" id="internal" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="taxes" class="col-md-12 control-label"><?= trans('taxes') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="taxes" class="form-control" id="taxes" placeholder="">
        </div>
    </div>
    
    <div class="form-group col-md-6">
        <label for="port_of_dispatch" class="col-md-12 control-label"><?= trans('port_of_dispatch') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="port_of_dispatch" class="form-control" id="port_of_dispatch" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="date_of_dispatch" class="col-md-12 control-label"><?= trans('date_of_dispatch') ?>*</label>
        <div class="col-md-12">
            <input type="date" name="date_of_dispatch" class="form-control" id="date_of_dispatch" placeholder="">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="expected_shipment_date" class="col-md-12 control-label"><?= trans('expected_shipment_date') ?>*</label>
        <div class="col-md-12">
            <input type="date" name="expected_shipment_date" class="form-control" id="expected_shipment_date" placeholder="">
        </div>
    </div>
    <?php /* ?>
    <div class="form-group col-md-6">
        <label for="actual_shipment_date" class="col-md-12 control-label"><?= trans('actual_shipment_date') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="actual_shipment_date" class="form-control" id="actual_shipment_date" placeholder="">
        </div>
    </div>
    <?php */ ?>

    <div class="form-group col-md-6">
        <label for="expected_rec_date" class="col-md-12 control-label"><?= trans('expected_rec_date') ?>*</label>
        <div class="col-md-12">
            <input type="date" name="expected_rec_date" class="form-control" id="expected_rec_date" placeholder="">
        </div>
    </div>
    
    <?php /* ?>
    <div class="form-group col-md-6">
        <label for="actual_rec_date" class="col-md-12 control-label"><?= trans('actual_rec_date') ?>*</label>
        <div class="col-md-12">
            <input type="date" name="actual_rec_date" class="form-control" id="actual_rec_date" placeholder="">
        </div>
    </div>
    <?php */ ?>

    <div class="form-group col-md-6">
        <label for="expected_landing_port" class="col-md-12 control-label"><?= trans('expected_landing_port') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="expected_landing_port" class="form-control" id="expected_landing_port" placeholder="">
        </div>
    </div>
    
    <?php /* ?>
    <div class="form-group col-md-6">
        <label for="actual_landing_port" class="col-md-12 control-label"><?= trans('actual_landing_port') ?>*</label>
        <div class="col-md-12">
            <input type="text" name="actual_landing_port" class="form-control" id="actual_landing_port" placeholder="">
        </div>
    </div>
    <?php */ ?>

    <div class="card-footer form-group col-md-12">
	<input type="hidden"  name='submit' value="22"/>
        <button class="btn btn-primary btn-next-form float-right">Next</button>
    </div>
    
</div>    


  <?php echo form_close(); ?>
</div>
<div class="content-wrapper">
  <section class="content">
    <!-- For Messages -->
    <?php $this->load->view('admin/includes/_messages.php') ?>
    <div class="card">
      <div class="card-header">
        <div class="d-inline-block">
          <h3 class="card-title"><i class="fa fa-list"></i>&nbsp; Add New Country</h3>
        </div>
        <div class="d-inline-block float-right">
          <a href="<?= base_url('admin/location'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Country List</a>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
            <?php echo validation_errors(); ?>           
            <?php echo form_open(base_url('admin/location/city/add'), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="name" class="col-sm-3 control-label">State</label>
                <div class="col-sm-7">
                  <select class="form-control" required name="state">
                   <option>Select State</option>
                    <?php foreach($states as $state):?>
                      <?php if($city['state_id'] == $state['id']): ?>
                      <option value="<?= $state['id']; ?>" selected> <?= $state['name']; ?> </option>
                    <?php else: ?>
                      <option value="<?= $state['id']; ?>"> <?= $state['name']; ?> </option>
                  <?php endif; endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-sm-3 control-label">City Name</label>
                <div class="col-sm-7">
                  <input type="text" name="city" class="form-control" id="name" placeholder="city name" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-10">
                  <input type="submit" name="submit" value="Add City" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close( ); ?>
            </div>
      <!-- /.box-body -->
    </div>
  </section>
</div> 


<script>
  $("#location").addClass('active');
</script>
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css"> 

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content">
		<!-- For Messages -->
   		<?php $this->load->view('admin/includes/_messages.php') ?>
		<div class="card">
			<div class="card-header">
				<div class="d-inline-block">
					<h3 class="card-title"><i class="fa fa-list"></i>&nbsp; Module Form Fields</h3>
				</div>
				<?php $parent_module = $this->uri->segment(4); ?>
				<div class="d-inline-block float-right">
					<a href="<?= base_url('admin/admin_roles/module_form_field_add/'.$parent_module); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New </a>
				</div>
			</div>

			<div class="card-body">
				<table id="example1" class="table table-bordered table-hover table-sm">
					<thead>
						<tr>
							<th width="50">ID</th>
							<th>Name</th>
							<th>Type</th>
							<th>Required</th>
							<th>Order</th>
							<th width="100">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($records as $record): ?>
							<tr>
								<td><?= $record['id']; ?></td>
								<td><?= trans($record['name']); ?></td>
								<td><?= trans($record['type']); ?></td>
								<td><?= trans($record['is_required']); ?></td>
								<td><?= $record['sort_order']; ?></td>
								<td>
									<a href="<?php echo site_url("admin/admin_roles/module_field_edit/".$record['id']); ?>" class="btn btn-warning btn-sm mr5" >
											<i class="fa fa-edit"></i>
										</a>
									<a href="<?php echo site_url("admin/admin_roles/module_field_delete/".$record['id']); ?>" onclick="return confirm('are you sure to delete?')" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>


<!-- DataTables -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
  })
</script>
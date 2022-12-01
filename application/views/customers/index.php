
<h2><?php echo $title; ?></h2>
<a href="<?= base_url() ?>customer/create" class="btn btn-success" > <span class="material-icons">add</span> Add New Client</a>
<table class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Company Name</th>
			<th>Nick Name</th>
			<th>Total Value</th>
			<th>Location</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($customers as $customer):
		$value = $this->job_model->get_jobs_value($customer['id']);
		?>
		
			<tr>
				<td><?= $customer['id'] ?></td>
				<td><?= $customer['name'] ?></td>
				<td><?= $customer['nickname'] ?></td>
				<td>OMR <?php echo (!empty($value))?number_format($value, 3, '.', ','):0 ?></td>
				<td><?= $customer['location'] ?></td>
				<td><!--<a href="<?= base_url();?>customer/view/<?php echo $customer['id']; ?>" class="btn btn-primary btn-sm">Details</a>--> 

				<div class="btn-group" role="group">
				    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
				      Actions
				    </button>
				    <ul class="dropdown-menu">
				       <li><a class="dropdown-item" href="<?= base_url();?>customer/view/<?php echo $customer['id']; ?>">Details</a></li>
				      <li><a class="dropdown-item" href="<?= base_url();?>customer/edit/<?php echo $customer['id']; ?>">Edit</a></li>
				    </ul>
				</div>

				</td>
			</tr>
	<?php endforeach ?>
	</tbody>
</table>



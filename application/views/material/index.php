
<h2><?php echo $title; ?></h2>
<a href="<?= base_url() ?>material/create" class="btn btn-success" > <span class="material-icons">add</span> New Purchase</a>
<table class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Material Name</th>
			<th>Description</th>
			<th>Value</th>
			<th>Job Number</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php if(empty($materials)){
	echo "There are no materials added.";
 } else { ?>
	<?php 


	foreach ($materials as $material):
		$value = $material['material_value'];
		?>
		
			<tr>
				<td><?= $material['id'] ?></td>
				<td><?= $material['material_name'] ?></td>
				<td><?= $material['material_descrip'] ?></td>
				<td>OMR <?php echo (!empty($value))?number_format($value, 3, '.', ','):0 ?></td>
				<td><?= $material['job_id'] ?></td>
				<td>

				<div class="btn-group" role="group">
				    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
				      Actions
				    </button>
				    <ul class="dropdown-menu">
				       <li><a class="dropdown-item" href="<?= base_url();?>material/view/<?php echo $material['id']; ?>">Details</a></li>
				      <li><a class="dropdown-item" href="<?= base_url();?>material/edit/<?php echo $material['id']; ?>">Edit</a></li>
				    </ul>
				</div>

				</td>
			</tr>
	<?php endforeach; 
}
	?>
	</tbody>
</table>




<div class="row g-5" style="margin-top:0px">
	<div class="col-md-3"><h2><?php echo $title; ?></h2>
		<a href="<?= base_url() ?>jobs/create" class="btn btn-success" ><i class="bi bi-1-circle"></i> Add New Job</a>
	</div>
	<div class="col-md-2 border"><h4><small>Supply / Trading</small><br> <b><?= $job_count['ST']; ?></b></h4></div>
	<div class="col-md-2 border"><h4><small>Valve Repair</small><br> <b><?= $job_count['VR']; ?></b></h4></div>
	<div class="col-md-2 border"><h4><small>Pump Repair</small><br> <b><?= $job_count['PR']; ?></b></h4></div>
	<div class="col-md-2 border"><h4><small>Fabrication</small><br> <b><?= $job_count['FM']; ?></b></h4></div>
</div>


<table class="table table-striped table-hover table-sm" id="jobs-table">
	<thead>
		<tr>
			<th class="d-none">ID</th>
			<th class="text-nowrap">Job Number</th>
			<th>Job Name</th>
			<!--<th>Type</th>-->
			<th>Client</th>
			<th class="d-none d-xl-table-cell">Delivery Date</th>
			<!--<th class="hidden-xs hidden-sm">End Date</th>-->
			
			<th>Status</th>
			<th></th>
		</tr>
	</thead>
	<tbody class="table-group-divider" >
	<?php foreach ($jobs as $job):
		$status =  $job['status'];
		?>
			<tr>
				<td class="d-none"><?= $job['id'] ?></td>
				<td class="text-nowrap"><a href="<?= base_url();?>jobs/view/<?php echo $job['id']; ?>" class="job-num badge <?= ($job['status']==='completed')?'':'bg-success' ?> "><span class=""><?= $job['job_type'] ?>-<?= $job['job_num'] ?></span></a></td>
				<td><?= $job['name'] ?></td>
				<!--<td><?= $job['job_type'] ?></td>-->
				<td><?= $job['nickname'] ?></td>
				<td class="d-none d-xl-table-cell"><small><!--<?= date('d/m/Y',strtotime($job['start_date'])) ?> | --><?= date('d/m/Y',strtotime($job['est_delivery'])) ?></small></td>
				<!--<td class="hidden-xs hidden-sm"></td>-->
				
				<td><span class="badge <?= ($job['status']==='completed')?'bg-success':'bg-warning' ?> rounded-pill" style="margin-top:4px"><?= $job['status'] ?></span></td>
				<td><!--<a href="<?= base_url();?>jobs/view/<?php echo $job['id']; ?>" class="btn btn-primary btn-sm">Details</a> -->

				<div class="btn-group" role="group">
				    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
				      Actions
				    </button>
				    <ul class="dropdown-menu">
				      <li><a class="dropdown-item" href="<?= base_url();?>jobs/view/<?php echo $job['id']; ?>">Details</a></li>
				      <li><a class="dropdown-item" href="<?= base_url();?>jobs/edit/<?php echo $job['id']; ?>">Edit</a></li>
				    </ul>
				</div>

				</td>
			</tr>
	<?php endforeach ?>
	</tbody>
</table>



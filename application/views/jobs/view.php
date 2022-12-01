<h3><?= $job['name'] ?></h3> 
<h4 style="float:left;margin-right:15px"><span style="font-family: monospace;font-size: 18px;background-color: orange;padding:3px 5px">DIS-22-<?= $job['job_type'] ?>-<?= $job['job_num'] ?></span> <span class="badge bg-success rounded-pill"><?= $job['status'] ?></span></h4>

<br>
<b>Job Type</b> <?= $job['job_type'] ?> <br>

<b>Client</b> <?php echo $customer['name'] ?><br>
<h4>Ref# <span style='font-family: monospace;'><?= $job['po_ref']?></span></h4><br>
<?= $job['descrip'] ?> <br><br>
<b>Start Date</b> <?php echo date('d/m/Y',strtotime($job['start_date'])); ?> <br>
<b>End Date</b> <?php echo date('d/m/Y',strtotime($job['est_delivery'])); ?> <br>
Delivered <?php echo $duration['weeks']; ?> Weeks ago. <br><br>
<b>Value in OMR</b> <?php echo (!empty($job['value']))?number_format($job['value'], 3, '.', ','):0 ?><?php //echo $job['value']; ?> <i><small>(including vat)</small></i><br>
 <br>


<hr>
<a href="<?= base_url(); ?>jobs/edit/<?= $job['id'] ?>" class="btn btn-success" style="display:inline-block;float:left;margin-right:20px;">Edit</a> 
<?php echo form_open('/jobs/delete/'.$job["id"]); ?>
	<input type="submit" value="Delete" class="btn btn-danger" style="display:inline-block;float:left">
</form>
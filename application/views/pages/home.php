<h2><!--<?= $title ?>-->Dashboard</h2>
<br>
<!--Total Clients: <?= $customer_count ?><br>-->
Job Summary 
<div class="row">

	<div class="col-md-4"><h4><small>Total Jobs</small><br> <b><?= $total_jobs ?></b></h4></div>
	<div class="col-md-2"><h4><small>Supply / Trading</small><br> <?= $job_count['ST']; ?></h4></div>
	<div class="col-md-2"><h4><small>Valve Repair</small><br> <?= $job_count['VR']; ?></h4></div>
	<div class="col-md-2"><h4><small>Pump Repair</small><br> <?= $job_count['PR']; ?></h4></div>
	<div class="col-md-2"><h4><small>Fabrication</small><br> <?= $job_count['FM']; ?></h4></div>
</div>

<hr>
Total Projects Value: <br><h4>OMR <?php echo (!empty($total_value))?number_format($total_value, 3, '.', ','):0 ?></h4>
<small><?= $total_value_words ?></small>
<div class="row">
  <div class="col-md-6">
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Active Jobs (<?php echo count($active_jobs); ?>)
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <?php foreach ($active_jobs as $job) : ?>

        <strong><?= $job['job_num'] ?></strong> - <?= $job['name'] ?> <br>

    <?php endforeach; ?>        
       
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Vendor's Outstanding
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> 
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Jobs to be Invoiced
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> 
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php  ?>
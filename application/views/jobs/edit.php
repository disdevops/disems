<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('jobs/update'); ?>
<input type="hidden" name="id" value="<?= $job['id'] ?>">
  <div class="row g-3">
      <div class="col-sm-3">   
        <label class="form-label">Job Number </label>
      </div>
      <div class="col-sm-3">    
        <input type="text" class="form-control" name="job-num" placeholder="Job Number" value="DIS-<?= $job['job_type'] ?>-<?= $job['job_num'] ?>" disabled >
      </div>
  </div> 
  <hr>   
  <div class="row g-3">   
      <div class="col-md-6">   
        <label class="form-label">Job Name</label>
        <input type="text" class="form-control" name="job-name" placeholder="Job Name" value="<?=$job['name']?>" >
      </div>

      <div class="col-md-6">    
      <label class="form-label">Job Type</label>
        <select name="job-type" class="form-control form-select">
           <option value="" selected>Select Type...</option>
          <option <?php echo ($job['job_type'] === "ST")?'selected':''; ?> value="ST">ST - Supply/Trading</option>
          <option <?php echo ($job['job_type'] === "RM")?'selected':''; ?> value="RM">RM - Repair and Maintenenace</option>
          <option <?php echo ($job['job_type'] === "VR")?'selected':''; ?> value="VR">VR - Valve Repair</option>
          <option <?php echo ($job['job_type'] === "PR")?'selected':''; ?> value="PR">PR - Pump Repair</option>
          <option <?php echo ($job['job_type'] === "FM")?'selected':''; ?> value="FM">FM - Fabrication</option>
        </select>  
      </div>
      
  </div>

  <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label">Job Description</label>
        <input type="textbox" class="form-control" name="job-descrip" placeholder="Job Description" value="<?=$job['descrip']?>">
      </div>

      <div class="col-sm-3">   
              <label class="form-label">Start Date</label>
              <input type="text" class="form-control mydatepicker" name="job-start" placeholder="dd-mm-yyyy" value="<?=$job['start_date']?>">
      </div>

      <div class="col-sm-3">   
              <label class="form-label">End Date</label>
              <input type="text" class="form-control mydatepicker" name="job-end" placeholder="dd-mm-yyyy" value="<?=$job['est_delivery']?>">
      </div>
  </div> 

  <div class="row g-3">
  
    <div class="col-md-3">
      <label class="form-label">Client</label>
        <select name="customer"  class="form-control form-select">
          <option value="">Select Customer...</option>
          <optgroup label="Registered Clients">
            <?php foreach ($customers as $customer): ?>
            <option <?php echo ($job['customer_id'] === $customer['id'])?'selected':''; ?> value=" <?= $customer['id'] ?> "> <?= $customer['nickname']  ?> </option>
            <?php endforeach; ?>
          </optgroup>
        </select>
    </div>


    <div class="col-md-3">   
          <label class="form-label">Client Ref</label>
          <input type="text" class="form-control" name="cust-ref" placeholder="MR# / PO#" value="<?=$job['po_ref']?>">
    </div>

    <div class="col-md-3">   
          <label class="form-label">Client POC</label>
          <input type="text" class="form-control" name="cust-poc" placeholder="Ordered By" value="<?=$job['poc']?>">
    </div>

    <div class="col-md-3">   
          <label class="form-label">Job Value</label>
          <input type="text" class="form-control" name="job-value" placeholder="Value OMR" value="<?=$job['value']?>">
    </div>

  </div>

<hr>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


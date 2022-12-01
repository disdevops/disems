<h2><?= $title; ?></h2>
<?php echo validation_errors('<div class="error alert alert-danger">', '</div>'); ?>
<?php echo form_open('jobs/create'); ?>
  <div class="row g-3">

<input type="text" class="form-control" name="job-num" placeholder="Job Number" value="<?= $job_num ?>" readonly="readonly" >
<input type="hidden" class="form-control" name="status" placeholder="status" value="completed" >
      <div class="col-md-6">   
        <label class="form-label">Job Name</label>
        <input type="text" class="form-control" name="job-name" placeholder="Job Name"  >
      </div>

      <div class="col-md-6">    
      <label class="form-label">Job Type</label>
        <select name="job-type" class="form-control form-select">
           <option value="" selected>Select Type...</option>
          <option value="ST">ST - Supply/Trading</option>
          <option value="RM">RM - Repair and Maintenenace</option>
          <option value="VR">VR - Valve Repair</option>
          <option value="PR">PR - Pump Repair</option>
          <option value="FM">FM - Fabrication</option>
        </select>  
      </div>
      
  </div>

  <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label">Job Description</label>
        <input type="textbox" class="form-control" name="job-descrip" placeholder="Job Description">
      </div>

      <div class="col-sm-3">   
              <label class="form-label">Start Date</label>
              <input type="text" class="form-control mydatepicker" name="job-start" placeholder="dd-mm-yyyy" value="<?php  echo date('Y/m/d'); ?>">
      </div>

      <div class="col-sm-3">   
              <label class="form-label">End Date</label>
              <input type="text" class="form-control mydatepicker" name="job-end" placeholder="dd-mm-yyyy">
      </div>
  </div> 

  <div class="row g-3">
  
    <div class="col-md-3">
      <label class="form-label">Client</label>
        <select name="customer"  class="form-control form-select">
          <option value="" selected>Select Customer...</option>
            <option value="0">DIS Capex </option>
          <optgroup label="Registered Clients">
            <?php foreach ($customers as $customer): ?>
            <option value=" <?= $customer['id'] ?> "> <?= $customer['nickname']  ?> </option>
            <?php endforeach; ?>
          </optgroup>
        </select>
    </div>


    <div class="col-md-3">   
          <label class="form-label">Client Ref</label>
          <input type="text" class="form-control" name="cust-ref" placeholder="MR# / PO#">
    </div>

    <div class="col-md-3">   
          <label class="form-label">Contact Person</label>
          <input type="text" class="form-control" name="cust-poc" placeholder="Ordered By">
    </div>

    <div class="col-md-3">

          <label class="form-label">Job Value</label>
          <div class="input-group mb-3">
  <span class="input-group-text">OMR</span>
 <input type="text" class="form-control" name="job-value" placeholder="Value OMR">
</div>
          
    </div>

  </div>

<hr>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


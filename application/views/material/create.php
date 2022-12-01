<h2><?= $title; ?></h2>
<?php //echo validation_errors('<div class="error alert alert-danger">', '</div>'); ?>
<?php echo form_open('material/create'); ?>

  <div class="row">
  <div class="col-md-6">
  <select class="form-control form-select" name="job-id" id="">
  <option value="" selected>Select Job</option>
 
  <?php foreach ($active_jobs as $job) : ?>

     <option value="$job['id']"><?= $job['job_num'] ?> - <?= $job['name'] ?> </option>

    <?php endforeach; ?>
  </select>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <label class="form-label">Material Name <?php if (form_error('material-name') !=='') { echo '* required field'; } ?></label>
    <input type="text" class="form-control <?php if (form_error('cust-name') !=='') { echo 'error'; } ?>"  name="cust-name" placeholder="Material Name" value="<?php echo set_value('material-name') ?>">
  </div>
  <div class="col-md-3">
      <label for="" class="form-label">Material Type</label>
      <select name="" id="" class="form-select">
        <option value="ML" selected >Mat - Local</option>
        <option value="MI">Mat - Import</option>
        <option value="TI">NDT, RT, PWHT</option>
        <option value="OS">Outsourced Service</option>
        <option value="PB">Painting / Blasting</option>
        <option value="TH">Transport / Handling</option>
      </select>
  </div>
  </div>
    
  <div class="row">

  <div class="col-md-3">
    <label for="" class="form-label">Value</label>
    <div class="input-group mb-3">

  <span class="input-group-text">OMR</span>
    <input type="text" class="form-control" name="material-value" placeholder="Value" value="<?php echo set_value('material-value') ?>">
  </div>
  </div> 

  <div class="col-sm-3">   
              <label class="form-label">Purchase Date</label>
              <input type="text" class="form-control mydatepicker" name="purchase" placeholder="dd-mm-yyyy" value="<?php  echo date('Y/m/d'); ?>">
  </div>
  <div class="col-sm-3">
    <label class="form-label">Bill #</label> 
    <input type="text" class="form-control" name="material-descrip" placeholder="Description">
  </div>
  
  </div>
  
    <div class="col-sm-3">
     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    On Credit
  </div>

  <hr>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
<h2><?= $title; ?></h2>
<?php //echo validation_errors('<div class="error alert alert-danger">', '</div>'); ?>
<?php echo form_open('customer/create'); ?>
  <div class="row">
    <div class="col-md-6">
    <label class="form-label">Company Name <?php if (form_error('cust-name') !=='') { echo '* required field'; } ?></label>
    <input type="text" class="form-control <?php if (form_error('cust-name') !=='') { echo 'error'; } ?>"  name="cust-name" placeholder="Company Name" value="<?php echo set_value('cust-name') ?>">
  </div>
  <div class="col-md-3">
    <label class="form-label">Nickname</label>
    <input type="text" class="form-control" name="cust-nickname" placeholder="Nickname" value="<?php echo set_value('cust-nickname') ?>">
  </div>
  </div>
    <div class="mb-3">
    <label class="form-label">Location</label>
    <input type="text" class="form-control" name="cust-location" placeholder="Location">
  </div>
  <hr>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
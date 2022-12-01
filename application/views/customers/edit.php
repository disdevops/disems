<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('customer/update'); ?>
<input type="hidden" name="id" value="<?= $customer['id'] ?>">
  <div class="mb-3">
    <label class="form-label">Company Name</label>
    <input type="text" class="form-control" name="cust-name" placeholder="Company Name" value="<?= $customer['name'] ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Nickname</label>
    <input type="text" class="form-control" name="cust-nickname" placeholder="Nickname" value="<?= $customer['nickname'] ?>">
  </div>
    <div class="mb-3">
    <label class="form-label">Location</label>
    <input type="text" class="form-control" name="cust-location" placeholder="Location" value="<?= $customer['location'] ?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
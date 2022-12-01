<h3><?= $customer['name'] ?></h3>
<?= $customer['nickname'] ?>
<h4>Total Value OMR <?= (!empty($total_value))?number_format($total_value, 3, '.', ','):0 ?> </h4>

<a href="<?= base_url(); ?>customer/edit/<?= $customer['id'] ?>" class="btn btn-success">Edit</a> 
<?php echo form_open('/customer/delete/'.$customer["id"]); ?>
	<input type="submit" value="Delete" class="btn btn-danger">
</form>
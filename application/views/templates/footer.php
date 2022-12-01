	</div>

	<script src="<?= base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url(); ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>


    <script src="<?= base_url(); ?>assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="<?= base_url(); ?>assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/quill/dist/quill.min.js"></script>
 <script src="<?= base_url(); ?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?= base_url(); ?>assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?= base_url(); ?>assets/extra-libs/DataTables/datatables.min.js"></script>

    <script>
  /*datwpicker*/
      jQuery(".mydatepicker").datepicker({
      	format: 'yyyy/mm/dd',
        autoclose: true,
        todayHighlight: true,
      });
      jQuery("#datepicker-autoclose").datepicker({
      	format: 'yyyy/mm/dd',
        autoclose: true,
        todayHighlight: true,
      });

      $("#jobs-table").DataTable({
        order: [[0, 'desc']],
      });
</script>

	</body>
</html>
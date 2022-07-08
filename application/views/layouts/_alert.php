<?php

$success    = $this->session->flashdata('success');
$error      = $this->session->flashdata('error');
$warning    = $this->session->flashdata('warning');
?>
<script src="<?= base_url('assets/js/sweetalert.min.js') ?>"></script>
<?php if ($success) { ?>
	<script>
		swal(
			"Success !!!",
			"<?php echo $success ?>",
			"success"
		)
	</script>
<?php } ?>

<?php if ($error) { ?>
	<script>
		swal(
			"Fail !!!",
			"<?php echo $error ?>",
			"error"
		)
	</script>
<?php } ?>

<?php if ($warning) { ?>
	<script>
		swal(
			"Warning !!!",
			"<?php echo $warning ?>",
			"warning"
		)
	</script>
<?php } ?>
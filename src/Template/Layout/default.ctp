<?php

$cakeDescription = 'Applications';
?>
<!DOCTYPE html>
<html>
	<head>
		<?= $this->Html->charset() ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
		<?= $cakeDescription ?>:
		<?= $this->fetch('title') ?>
		</title>
		<?= $this->Html->meta('icon') ?>

		<?= $this->fetch('meta') ?>
		<?= $this->fetch('css') ?>
		<?= $this->fetch('script') ?>

		<?= $this->Html->css([
			'sb-admin',
			'sb-admin.min',
			'vendor/bootstrap/css/bootstrap.min',
			'vendor/font-awesome/css/font-awesome.min'
		]);?>

		<?= $this->Html->script([
			'jquery.min',
			'jquery.maskedinput',
			'vendor/popper/popper.min',
			'vendor/bootstrap/js/bootstrap.min',
			'vendor/jquery-easing/jquery.easing.min',
			'vendor/datatables/jquery.dataTables',
			'vendor/datatables/dataTables.bootstrap4'
		]);?>

	</head>
	<body>
		<?php echo $this->element('meta/navbar') ?>
		<?= $this->Flash->render() ?>
		<?= $this->fetch('content') ?>
		<?php echo $this->element('meta/footer') ?>
	</body>
</html>

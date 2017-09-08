<body class="bg-dark">
	<div class="container">
		<div class="card card-login mx-auto mt-5">
			<div class="card-header">
				<?= __('Login') ?>
			</div>
			<div class="card-body">
				<div class="users form">
					<?= $this->Form->create() ?>
						<div class="form-group">
							<?= $this->Form->control('userid', [ 'placeholder' => 'Enter userid', 'class' => 'form-control' ]) ?>
						</div>
						<div class="form-group">
							<?= $this->Form->control('password', [ 'placeholder' => 'Enter password', 'class' => 'form-control' ]) ?>
						</div>
						<div class="form-group">
							<?= $this->Form->input('role', [
							 		'type' => 'select',
							 		'class' => 'form-control',
							 		'options' => [ 
							 			1 => 'Teacher',
							 			2 => 'Student',
							 			3 => 'Parent'
							 		]
								]);
							?>
						</div>
					<?= $this->Form->button(__('Login'),['class'=>'btn btn-primary btn-block']); ?>
					<?= $this->Form->end() ?>
					<div class="text-center">
						<?php echo $this->Html->link(
							'Register an Account',
							'/users/add',
							['class' => 'd-block small mt-3']
						); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		arrayMask = { 1:'F-99999', 2:'99-9-99999', 3:'P-99999' };
		$("#userid").mask(arrayMask[1]);
		$("#role").on('change', function(){
			$("#userid").mask(arrayMask[$(this).val()]);
		});
	});
</script>
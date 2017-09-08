<body class="bg-dark">
	<div class="card card-register mx-auto mt-5">
		<div class="card-header">
			<?= __('Register an Account') ?>
		</div>
		<div class="card-body">
			<?= $this->Form->create($user, [ 'class' => 'form' ]) ?>
			<div class="form-group">
				<?= $this->Form->input('role', [
				 		'type' => 'select',
				 		'class' => 'form-control',
				 		'options' => [ 
				 			'' => 'Select Role',
				 			1 => 'Teacher',
				 			2 => 'Student',
				 			3 => 'Parent'
				 		]
					]);
				?>
			</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
						<?= $this->Form->control('userid', [ 'placeholder' => 'Enter userid', 'class' => 'form-control' ]); ?>
					</div>
					<div class="col-md-6">
						<?= $this->Form->control('username', [ 'class' => 'form-control', 'placeholder' => 'Enter username' ]) ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<?= $this->Form->control('firstname', [ 'class' => 'form-control', 'placeholder' => 'Enter firstname' ]) ?>
			</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
						<?= $this->Form->control('lastname', [ 'class' => 'form-control', 'placeholder' => 'Enter lastname' ]) ?>
					</div>
					<div class="col-md-6">
						<?= $this->Form->control('middlename', [ 'class' => 'form-control', 'placeholder' => 'Enter middlename' ]) ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<?= $this->Form->control('email', [ 'class' => 'form-control', 'placeholder' => 'Enter email' ]) ?>
			</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
						<?= $this->Form->control('password', [ 'class' => 'form-control', 'placeholder' => 'Enter password' ]) ?>
					</div>
					<div class="col-md-6">
						<?= $this->Form->control('password2',[ 'type' => 'password', 'label' => 'Confirm Password','class' => 'form-control', 'placeholder' => 'Enter confirm password' ] ) ?>
					</div>
				</div>
			</div>
			<?= $this->Form->button(__('Register'),['class'=>'btn btn-primary btn-block']); ?>
			<?= $this->Form->end() ?>
			<div class="text-center">
				<?php echo $this->Html->link(
					'Login',
					'/users/login',
					['class' => 'd-block small mt-3']
				); ?>
				<?php echo $this->Html->link(
					'Forgot Password?',
					'/users/login',
					['class' => 'd-block small']
				); ?>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		arrayMask = { 1:'F-99999', 2:'99-9-99999', 3:'P-99999' };
		$("#role").on('change', function(){
			$("#userid").mask(arrayMask[$(this).val()]);
		});
	});
</script>
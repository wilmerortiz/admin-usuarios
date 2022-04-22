<?php echo $this->Form->create('User'); ?>
	<?php echo $this->Html->Image('avatar.png', ['class'=>'mb-4']) ?>
	<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

	<div class="form-floating">

		<?php echo $this->Form->input('email', ['div' => false, 'label' => false, 'id' =>'floatingInput', 'class' => 'form-control', 'placeholder' => 'name@example.com']); ?>
		<label for="floatingInput">Email</label>
	</div>
	<div class="form-floating">

		<?php echo $this->Form->input('password', ['div' => false, 'label' => false, 'id' => 'floatingPassword', 'class' => 'form-control', 'placeholder' => 'Password']); ?>
		<label for="floatingPassword">Contraseña</label>
	</div>


	<button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>

<?php echo $this->Form->end(); ?>

<div class="card">
  <div class="card-header">
    CAMBIAR CONTRASEÑA
  </div>
  <div class="card-body">
		<?php echo $this->Form->create('User'); ?>

			<div class="row">
				<div class="col-md-12 mb-3">
					<label for="">Ingrese una Contraseña</label>
					<?php echo $this->Form->input('password', ['div' => false, 'label' => false, 'id' =>'password', 'class' => 'form-control']); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 mb-3">
					<button type="submit" class="btn btn-primary">Cambiar</button>
				</div>
			</div>
		<?php echo $this->Form->end(); ?>
  </div>
</div>

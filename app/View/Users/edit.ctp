<div class="card">
  <div class="card-header">
    EDITAR PERSONA
  </div>
  <div class="card-body">
		<?php echo $this->Form->create('User'); ?>
			<div class="row">
				<div class="col-md-12">
					<label for="">Nombre Completo</label>
					<?php echo $this->Form->input('full_name', ['div' => false, 'label' => false, 'id' =>'full_name', 'class' => 'form-control']); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 mb-3">
					<label for="">Email</label>
					<?php echo $this->Form->input('email', ['div' => false, 'label' => false, 'id' =>'email', 'class' => 'form-control']); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 mb-3">
					<label for="">Nombre de usuario</label>
					<?php echo $this->Form->input('username', ['div' => false, 'label' => false, 'id' =>'username', 'class' => 'form-control']); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 mb-3">
					<label for="">Rol</label>
					<?php echo $this->Form->input('role', ['div' => false, 'label' => false, 'id' =>'role', 'class' => 'form-control', 'options' => array('admin' => 'Admin', 'visita' => 'Visitante')]); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 mb-3">
					<button type="submit" class="btn btn-primary">Guardar Cambios</button>
				</div>
			</div>
		<?php echo $this->Form->end(); ?>
  </div>
</div>

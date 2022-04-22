<?php //debug($current_user) ?>

<div class="card mb-4">
  <div class="card-body">
    <h4>LISTADO DE PERSONAS</h4>
  </div>
</div>
<div class="mb-3">
	<?php
			echo $this->Html->link(
					'<i class="fa-solid fa-plus"></i> Crear Persona',
					array('action' => 'add'),
					array('class' => 'btn btn-primary', 'escape' => false),
			);
	?>
</div>
<table class="table" id="listaPersonas">
	<thead>
		<tr>
			<th>Nombre Completo</th>
			<th>Email</th>
			<th>Usuario</th>
			<th>Rol</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($users as $ky => $user): ?>
			<tr class="<?php echo ($user['User']['status']=='I') ? 'bg-danger' : '';  ?>">
				<td><?php echo $user['User']['full_name'] ?></td>
				<td><?php echo $user['User']['email'] ?></td>
				<td><?php echo $user['User']['username'] ?></td>
				<td><?php echo $user['User']['role'] ?></td>
				<td>
						<?php
                echo $this->Html->link(
                    '<i class="fa-solid fa-eye"></i> Ver',
                    array('action' => 'view', $user['User']['id']),
										array('class' => 'btn btn-info btn-sm', 'escape' => false),

                );
            ?>
						<?php
                echo $this->Html->link(
                    '<i class="fa-solid fa-pen"></i> Editar',
                    array('action' => 'edit', $user['User']['id']),
										array('class' => 'btn btn-primary btn-sm', 'escape' => false),
                );
            ?>
						<?php
                echo $this->Html->link(
                    '<i class="fa-solid fa-key"></i> Cambiar Clave',
                    array('action' => 'change_password', $user['User']['id']),
										array('class' => 'btn btn-primary btn-sm', 'escape' => false),
                );
            ?>

						<?php
							if($user['User']['status']=='A'){
								echo $this->Html->link(
										'<i class="fa-solid fa-user-slash"></i> Desactivar',
										array('action' => 'desactivar', $user['User']['id'], $user['User']['status']),
										array('confirm' => '¿ Está seguro de desctivar este Persona ?', 'class' => 'btn btn-warning btn-sm', 'escape' => false),
								);
							}else{
								echo $this->Html->link(
									'<i class="fa-solid fa-user-check"></i> Activar',
									array('action' => 'desactivar', $user['User']['id'], $user['User']['status']),
									array('confirm' => '¿ Está seguro de desctivar este Persona ?', 'class' => 'btn btn-warning btn-sm', 'escape' => false),
							);
							}

            ?>

						<?php
                echo $this->Form->postLink(
                    '<i class="fa-solid fa-trash-can"></i> Eliminar',
                    array('action' => 'delete', $user['User']['id']),
                    array('confirm' => '¿ Está seguro de eliminar este Persona ?', 'class' => 'btn btn-danger btn-sm', 'escape' => false),

                );
            ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<script>
	$(document).ready(function() {
    $('#listaPersonas').DataTable({
			"language": {
            "url": "////cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"
        }
		});
} );
</script>

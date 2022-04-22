<div class="container">
<div class="card">
  <div class="card-header bg-primary text-white">
	<?php echo $user['User']['full_name'] ?>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Email:</b> <?php echo $user['User']['email'] ?></li>
    <li class="list-group-item"><b>Nombre de Usuario:</b> <?php echo $user['User']['username'] ?></li>
    <li class="list-group-item"><b>Rol:</b> <?php echo $user['User']['role'] ?></li>
  </ul>
</div>
</div>

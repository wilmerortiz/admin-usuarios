<header>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">GESTIÓN DE USURIOS</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page"
							href="<?php echo Router::url('/').'Users' ?>">Home</a>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Users
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="<?php echo Router::url('/').'Users' ?>">Listar Usuarios</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="<?php echo Router::url('/').'Users/add' ?>">Crear Usuario</a></li>

							</ul>
						</li>

					</ul>
					<div class="d-flex" style="justify-content: center; align-items: center;">
						<i class="fa-solid fa-user mx-2"></i>
						<?php echo $current_user['full_name'] ?>

						<?php
                echo $this->Html->link(
                    'Salir',
                    array('action' => 'logout'),
										array('class' => 'btn btn-danger mx-2')
                );
            ?>
					</div>
				</div>
			</div>
		</nav>
	</header>

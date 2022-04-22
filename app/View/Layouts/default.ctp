<!DOCTYPE html >
<html class="h-100">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css([
			'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css',
			'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css',
			'sticky-footer-navbar.css',
			'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css',
			'https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css'
		]);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>
	<?php
		echo $this->Html->script([
			'https://code.jquery.com/jquery-3.5.1.js',
			'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js',
			'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js',
			'https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js',
			'https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js'
		]);
	?>
	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body class="d-flex flex-column h-100">
	<?php echo $this->Element('header') ?>
	<!-- Begin page content -->
	<main class="flex-shrink-0">
		<div class="container">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</main>

	<footer class="footer mt-auto py-3 bg-light">
		<div class="container">
			<span class="text-muted">Place sticky footer content here.</span>
		</div>
	</footer>

</body>
</html>

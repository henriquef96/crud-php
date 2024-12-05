<?php
$acao = 'recuperar';
require '../app_lista_tarefas_public/config/tarefa_controller.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Todas Tarefas | Lista de Tarefas</title>
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-app">
	<nav class="navbar shadow-sm">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="index.php">Lista de Tarefas</a>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link mt-3" aria-current="page" href="index.php">Tarefas Pendentes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="nova_tarefa.php">Nova Tarefa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="todas_tarefas.php">Todas Tarefas</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="mt-5 d-flex justify-content-center">
				<div class="shadow rounded p-5 bg-col">
					<h4>Todas Tarefas</h4>
					<hr />

					<?php foreach ($tarefas as $indice => $tarefa) { ?>
						<div class="row d-flex align-items-center">

							<span id="tarefa_<?= $tarefa->id ?>" class="col-9"><?= $tarefa->tarefa ?> (<?= $tarefa->status ?>)</span>

							<div class="col-3 mt-2 d-flex justify-content-between">
								<i class="bi bi-pencil-square fs-3" onclick="editar(<?= $tarefa->id ?>)"></i>
								<i class="bi bi-trash fs-3"></i>
								<i class="bi bi-check2-square fs-3 text-success"></i>
							</div>
							<hr />
						</div>
					<?php } ?>

				</div>
			</div>

		</div>
	</div>
	<script src="js/editar.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
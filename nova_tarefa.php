<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nova Tarefa | Lista de Tarefas</title>
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	
	<script>
		document.getElementById('close-toast').addEventListener('click', function() {
			const toast = document.getElementById('toast');
			toast.classList.add('d-none');
		});
	</script>
</head>

<body>
	<nav class="navbar navbar-dark bg-dark shadow mb-5">
		<div class="container">
			<a class="navbar-brand">
				<img src="img/logo.png" width="30" height="30" class="me-2 d-inline-block align-top" alt="">Lista de Tarefas
			</a>
		</div>
	</nav>

	<?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
		<div id="toast" class="position-fixed end-0 me-2 alert alert-success p-2 shadow-sm" role="alert">
			<i class="text-success me-1 bi bi-check-circle"></i>
			<span class="text-success">Tarefa adicionada!</span>
			<button id="close-toast" type="button" class="ms-3 btn-close">
		</div>
	<?php } ?>

	<div class="container">
		<div class="row">

			<div class="col-md-4 mq-5">
				<ul class="list-group shadow">
					<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
					<li class="list-group-item active"><a href="nova_tarefa.php" class="text-success">Nova tarefa</a></li>
					<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
				</ul>
			</div>

			<div class="col-md-8">
				<div class="shadow rounded p-3">
					<h3>Nova Tarefa</h3>
					<hr />

					<form method="post" action="tarefa_controller.php?acao=inserir">
						<div class="form-group">
							<label>Descrição da tarefa:</label>
							<input type="text" class="form-control" name="tarefa" placeholder="Exemplo: Lavar o carro">
						</div>

						<button class="btn btn-success mt-3">Cadastrar</button>
					</form>

				</div>
			</div>

		</div>
	</div>
</body>
<?php
$acao = 'recuperar';
require 'tarefa_controller.php';
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

	<script>
		function editar(id) {
			let form = document.createElement('form');
			form.action = '#';
			form.method = 'post'

			let input = document.createElement('input')
			input.type = 'text';
			input.name = 'tarefa';
			input.className = 'form-control'

			let button = document.createElement('button')
			button.type = 'submit';
			button.className = 'btn btn-primary';
			button.innerHTML = 'Atualizar';

			form.appendChild(input);
			form.appendChild(button);

			console.log(form)

			alert(id)
		}
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

	<div class="container">
		<div class="row">

			<div class="col-md-4 mq-5">
				<ul class="list-group shadow">
					<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
					<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
					<li class="list-group-item active"><a href="todas_tarefas.php" class="text-success">Todas tarefas</a></li>
				</ul>
			</div>

			<div class="col-md-8">
				<div class="shadow rounded p-3">
					<h3>Todas Tarefas</h3>
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
</body>

</html>
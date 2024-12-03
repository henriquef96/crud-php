<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de Tarefas</title>
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
					<li class="list-group-item active"><a href="index.php" class="text-success">Tarefas pendentes</a></li>
					<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
					<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
				</ul>
			</div>

			<div class="col-md-8">
				<div class="shadow rounded p-3">
					<h3>Tarefas Pendentes</h3>
					<hr />
					<div class="row d-flex align-items-center">
						<h5 class="col-9">Lavar o carro</h5>
						<div class="col-3 mt-2 d-flex justify-content-between">
							<i class="bi bi-pencil-square fs-3"></i>
							<i class="bi bi-trash fs-3"></i>
							<i class="bi bi-check2-square fs-3 text-success"></i>
						</div>
						<hr />
					</div>
				</div>
			</div>

		</div>
	</div>
</body>

</html>
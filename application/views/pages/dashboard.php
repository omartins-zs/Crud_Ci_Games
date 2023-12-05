<main role="main" class="col-12 col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Dashboard</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="<?= base_url() ?>games/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Game</a>
			</div>
			<!-- Botão para abrir o modal de cadastro de categoria -->
			<button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#addCategoryModal">
				<i class="fas fa-plus-square"></i> Categoria
			</button>
		</div>
	</div>

	<div class="row">
		<div class="col mb-4">
			<div class="card" style="width: 100%;">
				<div class="card-header bg-dark text-white">Jogos Por Categoria</div>
				<div class="card-body">
					<h5 class="card-title"></h5>
					<div class="embed-responsive embed-responsive-16by9">
						<canvas class="embed-responsive-item" id="myBarChart"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Last 5 Games</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover tabela">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Price</th>
					<th>Category</th>
					<th>Developer</th>
					<th class="col-1">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($games as $game) : ?>
					<tr>
						<td><?= $game["id"] ?></td>
						<td><?= $game["name"] ?></td>
						<td><?= reais($game["price"]) ?></td>
						<td><?= $game["category"] ?></td>
						<td><?= $game["developer"] ?></td>
						<td>
							<?php if ($_SESSION["logged_user"]["id"] === $game["user_id"]) : ?>
								<a href="<?= base_url() ?>games/edit/<?= $game["id"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
								<a href="javascript:goDelete(<?= $game['id'] ?>)" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
							<?php else : ?>
								<button disabled type="button" class="btn btn-warning btn-sm mr-1"><i class="fas fa-pencil-alt"></i></a>
									<button disabled type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
									<?php endif; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Last 5 Users</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-dark table-bordered table-hover tabela">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Email</th>
					<th>Country</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user) : ?>
					<tr>
						<td><?= $user["id"] ?></td>
						<td><?= $user["name"] ?></td>
						<td><?= $user["email"] ?></td>
						<td><?= $user["country"] ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</main>
<!-- Modal para cadastro de categoria -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addCategoryModalLabel">Adicionar Categoria</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!-- Formulário para cadastro de categoria -->
				<form action="<?= base_url() ?>games/cadastrarCategoria" method="POST">
					<div class="form-group">
						<label for="nome_categoria">Nome da Categoria:</label>
						<input type="text" name="nome_categoria" class="form-control" id="nome_categoria" placeholder="Digite o nome da categoria">
					</div>
					<button type="submit" class="btn btn-primary float-right">Cadastrar Categoria</button>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	function goDelete(id) {
		var myUrl = 'games/edit/' + id;
		if (confirm("Deseja apagar este registro?")) {
			window.location.href = 'games/destroy/' + id;
		} else {
			alert("Registro não alterado");
			return false;
		}
	}
</script>

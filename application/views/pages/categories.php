<main role="main" class="col-12 col-md-9 ml-sm-auto col-lg-10 px-4">	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Categories</h1>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover tabela">
			<thead class="thead-dark">
				<tr>
					<th class="col-1">#</th>
					<th>Category</th>
					<!-- <th class="col-1">Actions</th> -->
				</tr>
			</thead>
			<tbody>
				<?php foreach ($categories as $catego) : ?>
					<tr>
						<td><?= $catego["id"] ?></td>
						<td><?= $catego["category"] ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</main>

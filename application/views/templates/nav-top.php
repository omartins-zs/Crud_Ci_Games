<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
	<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Games 4 Devs</a>
	<div>
		<form action="<?= base_url() ?>dashboard/pesquisar" method="post">
			<input class="form-control form-control-dark" type="text" name="busca" id="busca" placeholder="Search" aria-label="Search" value="">
		</form>
	</div>
	<ul class="navbar-nav px-3">
		<li class="nav-item text-nowrap">
			<a class="nav-link" href="<?= base_url() ?>login/logout">Sign out</a>
		</li>
	</ul>
</nav>

<div class="container-fluid">

	<div class="container-fluid">
		<div class="row">
			<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

				<!-- Sidebar - Brand -->
				<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>dashboard">
					<div class="sidebar-brand-icon rotate-n-15">
						<i class="fas fa-gamepad"></i>
					</div>
					<div class="sidebar-brand-text mx-3">Games 4 Devs</div>
				</a>

				<!-- Divider -->
				<hr class="sidebar-divider my-0">

				<!-- Nav Item - Dashboard -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>dashboard">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span></a>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider">

				<div class="sidebar-heading">
					Menu
				</div>

				<!-- Nav Item - Charts -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>games">
						<i class="fas fa-fw fa-gamepad"></i>
						<span>Games</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>users">
						<!-- <i class="fas fa-fw fa-chart-area"></i> -->
						<i class="fas fa-fw fa-users"></i>
						<span>Usuarios</span></a>
				</li>

				<!-- Nav Item - Tables -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>games/mygames">
						<i class="fas fa-fw fa-table"></i>
						<span> My Games
						</span></a>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider d-none d-md-block">

				<!-- Sidebar Toggler (Sidebar) -->
				<div class="text-center d-none d-md-inline">
					<button class="rounded-circle border-0" id="sidebarToggle"></button>
				</div>

			</ul>

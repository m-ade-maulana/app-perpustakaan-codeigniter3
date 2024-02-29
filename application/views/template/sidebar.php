  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  	<!-- Brand Logo -->
  	<a href="#" class="brand-link">
  		<img src="<?= base_url('assets/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  		<span class="brand-text font-weight-light">AdminLTE 3</span>
  	</a>

  	<!-- Sidebar -->
  	<div class="sidebar">
  		<!-- Sidebar user panel (optional) -->
  		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
  			<div class="image">
  				<img src="<?= base_url('assets/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
  			</div>
  			<div class="info">
  				<a href="#" class="d-block">Alexander Pierce</a>
  			</div>
  		</div>

  		<!-- Sidebar Menu -->
  		<nav class="mt-2">
  			<ul class="nav nav-pills nav-sidebar flex-column">
  				<li class="nav-item">
  					<a href="<?= base_url('dashboard') ?>" class="nav-link">
  						<i class="nav-icon fas fa-tachometer-alt"></i>
  						<p>Dashboard</p>
  					</a>
  				</li>

  				<li class="nav-item">
  					<a href="<?= base_url('data_anggota') ?>" class="nav-link">
  						<i class="nav-icon fas fa-user"></i>
  						<p>Data Anggota</p>
  					</a>
  				</li>

  				<li class="nav-item">
  					<a href="<?= base_url('data_buku') ?>" class="nav-link">
  						<i class="nav-icon fas fa-book"></i>
  						<p>Data Buku</p>
  					</a>
  				</li>

  				<li class="nav-item">
  					<a href="<?= base_url('akun') ?>" class="nav-link">
  						<i class="nav-icon fas fa-exclamation"></i>
  						<p>Verifikasi Akun</p>
  					</a>
  				</li>

  				<li class="nav-item">
  					<a href="<?= base_url('admin/data_laporan') ?>" class="nav-link">
  						<i class="nav-icon fas fa-file"></i>
  						<p>Laporan</p>
  					</a>
  				</li>

  			</ul>
  		</nav>
  		<!-- /.sidebar-menu -->
  	</div>
  	<!-- /.sidebar -->
  </aside>
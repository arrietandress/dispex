<?php include '../../models/conexion.php';
 ?>		
<!doctype html>
<html lang="en">

<head>
	<title>Sistema Dispex</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../../include/template/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../include/template/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../include/template/assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="../../include/template/assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../../include/template/assets/css/main.css">	
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="../../include/template/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="../../include/template/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../include/template/assets/img/favicon.png">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	<link rel="stylesheet" type="text/css" href="../../include/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="../../include/template/assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Mensaje 1</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>Mensaje 2</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Mensaje 3</a></li>
								<li><a href="#" class="more">Ver todas las notificaciones</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Ayuda</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Manual</a></li>								
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../../include/template/assets/img/user.png" class="img-circle" alt="Avatar"> <span>marvin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>Mi perfil</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Mensaje</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Ajustes</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Cerrar sesión</span></a></li>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="../page-dasboard.html.html" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="#" class="active"><i class="lnr lnr-code"></i> <span>Eps</span></a></li>
						<li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
						<li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
						<li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">DETALLES DE EPS</h3>
							<p class="panel-subtitle">Periodo: Mayo 4, 2017</p>

						</div>
						<div class="panel-body">
							<!--contenido-->
									<?php  
									    $id = $_REQUEST['id'];
										$sql = "SELECT codigo_eps,razon_eps,direccion_eps,telefono_eps,regimen_eps,representante_eps FROM eps WHERE codigo_eps='$id'";
                                                   $result = $con->query($sql);

										while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <ul class="list-unstyled todo-list">

										<li>
											
											<p>
												<span class="title">Codigo</span>
												<span class="short-description"><?php echo $row['codigo_eps'] ?></span>												
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>
										<li>											
											<p>
												<span class="title">Razon Social</span>
												<span class="short-description"><?php echo $row['razon_eps'] ?></span>												
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>

										<li>											
											<p>
												<span class="title">Direccion</span>
												<span class="short-description"><?php echo $row['direccion_eps'] ?></span>												
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>

										<li>											
											<p>
												<span class="title">Telefono</span>
												<span class="short-description"><?php echo $row['telefono_eps'] ?></span>												
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>

										<li>											
											<p>
												<span class="title">Regimen</span>
												<span class="short-description"><?php echo $row['regimen_eps'] ?></span>												
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>

										<li>											
											<p>
												<span class="title">Representante</span>
												<span class="short-description"><?php echo $row['representante_eps'] ?></span>												
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>
										
									</ul>
									<?php } ?>
						</div>						
					</div>
					<!-- END OVERVIEW -->
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Realizado por Andres Arrieta</a>. Todos los Derechos Reservados.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="../../include/template/assets/vendor/jquery/jquery.min.js"></script>
	<script src="../../include/template/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../include/template/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../../include/template/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="../../include/template/assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="../../include/template/assets/scripts/klorofil-common.js"></script>	
    <script src="../../include/datatables.net/js/jquery.dataTables.js"></script>
    <script src="../../include/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	
</body>

</html>

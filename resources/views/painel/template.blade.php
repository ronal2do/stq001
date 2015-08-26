<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SomosSBC - Dashboard</title>

<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="/sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><span>SomosSBC </span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="/" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Usuário <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="/"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="/"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="/"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="/"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
			<li ><a href="/dashboard/blank"><span class="glyphicon glyphicon-dashboard"></span> Branca</a></li>
			<li ><a href="/dashboard/usuarios"><span class="glyphicon glyphicon-dashboard"></span> Tabela</a></li>
			<li ><a href="/"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
			
			
			<li role="presentation" class="divider"></li>
			<li><a href="/login"><span class="glyphicon glyphicon-user"></span> Login Page</a></li>
		</ul>
	</div><!--/.sidebar-->


	  @yield('content')
		
	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	
</body>

</html>

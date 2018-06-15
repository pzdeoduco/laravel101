<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
</head>
<body>
<div class="header">
	@include('inc.navbar')
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-lg-8">
			@yield('content')
		</div>
		<div class="col-md-4 col-lg-4">
		</div>
	</div>
</div>
<div class="text-center" id="footer">
	Copyright &copy; <?php echo date('Y'); ?>.
</div>
</body>
</html>
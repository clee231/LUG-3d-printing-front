<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>LUG 3D Printing | {{{ $title or 'Home' }}}</title> 
		{{-- TODO: Move global title to global variable. --}}
<link rel="stylesheet" href="css/vendor/f/normalize.css" /> 
		{{-- 'f' is abbrievated from Foundation --}}
<link rel="stylesheet" href="css/vendor/f/foundation.css" />
		<link rel="stylesheet" href="css/vendor/f/foundation-icons.css" />
		<link href='//fonts.googleapis.com/css?family=Exo+2:600|Open+Sans' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/default.css" />
		<script src="js/vendor/m/modernizr.js"></script>	
	</head>
	<body>
		<!-- Navigation -->
		<div class="off-canvas-wrap" data-offcanvas >
			@include('layouts.navi')

			@yield('content')

			@include('layouts.footer')
			<a class="exit-off-canvas"></a>
		</div> <!-- inner-wrap -->
		</div> <!-- off-canvas-wrap -->
		<script src="js/vendor/j/jquery-1.11.1.min.js"></script>
		<script src="js/vendor/f/foundation.min.js"></script>
		<script src="js/vendor/f/foundation/foundation.offcanvas.js"></script>
		<script src="js/vendor/h/holder.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>

<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<base href="//lug.cs.uic.edu/3dprint/">
		<title>LUG 3D Printing | {{{ $title or 'Home' }}}</title> 
		{{-- TODO: Move global title to global variable. --}}
{{ HTML::style('css/vendor/f/normalize.css') }} 
		{{-- 'f' is abbrievated from Foundation --}}
{{ HTML::style('css/vendor/f/foundation.css')}}
		{{ HTML::style('css/vendor/f/foundation-icons.css')}}
		<link href="//fonts.googleapis.com/css?family=Exo+2:600|Open+Sans" rel="stylesheet" type="text/css">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">
		{{ HTML::style('css/default.css') }}
		{{ HTML::script('js/vendor/m/modernizr.js') }}
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
		{{ HTML::script('js/vendor/j/jquery-1.11.1.min.js')}}
		{{ HTML::script('js/vendor/f/foundation.min.js')}}
		{{ HTML::script('js/vendor/f/foundation/foundation.offcanvas.js')}}
		{{ HTML::script('js/vendor/h/holder.js')}}
		<script>
			$(document).foundation();
		</script>
	</body>
</html>

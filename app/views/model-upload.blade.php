@extends('layouts.master')

@section('content')
	<!-- Header -->
  <div class="row">
    <div class="large-12 columns">
		<h1>Upload a new Model</h1>
		<p>Step 1 of 4</p>
	</div>
  </div>
  <div class="row">
	<div class="large-6 columns">
		<form id="dropzone" action="./new/model-upload/file" class="dropzone dragarea"></form>	
	</div>
	<div class="large-6 columns">
		<p style="position: absolute; top: 30%; left: 25%; color: #ccc; font-size: x-large;">Display model goes here</p>
		<canvas id="previewCanvas" width="550" height="474" ></canvas>
	</div><!-- large-6 columns -->
  </div><!-- row -->
  <div class="row">
	<div id="alertarea" class="large-12 columns">
		<br />
	</div><!-- large-12 columns -->
  </div><!-- row -->
	{{ HTML::script('js/vendor/j/jsc3d.min.js') }}	
	{{ HTML::script('js/vendor/j/jsc3d.touch.js') }}	
	{{ HTML::script('js/vendor/d/dropzone.js') }}	
	{{ HTML::script('js/model-upload.js') }}
@stop

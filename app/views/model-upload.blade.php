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
		<div class="dragarea">
			<p>Drag and drop your files here!</p>
			<input id="uploadFile" placeholder="File to be uploaded" disabled="disabled" />
			<span class="fi-print" id="backdrop"></span>
			<p>Acceptable File Formats: .stl, .obj</p>
			<div class="fileUpload button radius tiny">
				<span>Or upload by clicking here!</span>
				<input id="fileUploadInput" type="file" class="upload" />
			</div>
		</div>
	</div>
	<div class="large-6 columns">
		<p style="position: absolute; top: 30%; left: 25%; color: #ccc; font-size: x-large;">Display model goes here</p>
		<canvas id="previewCanvas" ></canvas>
	</div><!-- large-6 columns -->
  </div><!-- row -->
  <div class="row">
	<div id="alertarea" class="large-12 columns">
		<br />
	</div><!-- large-12 columns -->
  </div><!-- row -->
	{{ HTML::script('js/vendor/j/jsc3d.min.js') }}	
	{{ HTML::script('js/vendor/j/jsc3d.touch.js') }}	
	{{ HTML::script('js/model-upload.js') }}
@stop

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
				<input type="file" class="upload" />
			</div>
		</div>
	</div>
	<div class="large-6 columns">
		<p>Display model goes here</p>
	</div>
@stop

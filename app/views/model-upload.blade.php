@extends('layouts.master')
@section('title', 'Upload a new model');
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
		<div ng-controller="MyCtrl">
  <input type="text" ng-model="myModelObj">
  <input type="file" ng-file-select="onFileSelect($files)">
  <input type="file" ng-file-select="onFileSelect($files)" multiple accept="image/*">
  <div class="button" ng-file-select="onFileSelect($files)" data-multiple="true"></div>
  <div ng-file-drop="onFileSelect($files)" ng-file-drag-over-class="optional-css-class-name-or-function"
        ng-show="dropSupported">drop files here</div>
  <div ng-file-drop-available="dropSupported=true" 
        ng-show="!dropSupported">HTML5 Drop File is not supported!</div>
  <button ng-click="upload.abort()">Cancel Upload</button>
</div>	
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
	{{ HTML::script('js/vendor/angular/angular-file-upload-shim.min.js') }}
	{{-- HTML::script('js/vendor/angular/angular.min.js') --}}
	{{ HTML::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.19/angular.min.js') }}
	{{ HTML::script('js/vendor/angular/angular-file-upload.min.js') }}
	{{ HTML::script('js/model-upload.js') }}
@stop

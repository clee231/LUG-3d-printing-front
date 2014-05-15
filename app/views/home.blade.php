@extends('layouts.master')

@section('content')
	<!-- Header -->
  <div class="row">
    <div class="large-12 columns">
	  <div class="frontbanner">		
		<video width="1280" height="720" autoplay="autoplay" loop> <!--EDIT: loop="true" is deprecated nowadays -->
		  <source src="//lug.cs.uic.edu/3dprint/video/banner.mp4" type="video/mp4" />
		  <source src="//lug.cs.uic.edu/3dprint/video/banner.webm" type="video/webm" />
		  Your browser does not support the video tag.
		</video>
		<h1 class="banner-header">LUG 3D Printing</h1> 
	  </div>
		<br />
		<noscript>	
			<div data-alert class="alert-box alert radius">
			  <strong>WARNING:</strong> Your browser does not support Javascript! This website requires Javascript in order to run properly. Please enable and refresh the page.
			<a href="#" class="close">&times;</a>
			</div>
		</noscript>
    </div>
  </div>
 
  <!-- End Header -->
 
 
  <div class="row">
 
    <div class="large-3 panel columns">
      <img data-src="holder.js/500x500/text:Image/auto/sky">
 
      <h4>Header</h4>
 
      <p>Fusce ullamcorper mauris in eros dignissim molestie posuere felis blandit. Aliquam erat volutpat. Mauris ultricies posuere vehicula. Sed sit amet posuere erat. Quisque in ipsum non augue euismod dapibus non et eros.</p><hr>
 
      <div class="row">
        <div class="large-4 columns">
        <a href="#" class="small button">Link</a>
        </div>
 
        <div class="large-4 columns">
        <a href="#" class="small button">Link</a>
        </div>
 
        <div class="large-4 columns">
        <a href="#" class="small button">Link</a>
        </div>
      </div>
    </div>
 
    <div class="large-9 columns">
      <div class="panel">
        <div class="row">
 
          <div class="large-3 columns">
            <img data-src="holder.js/600x500/text:Thumbnail/auto/industrial">
          </div>
 
          <div class="large-3 columns">
            <img data-src="holder.js/600x500/text:Thumbnail/auto/social">
          </div>
 
          <div class="large-3 columns">
            <img data-src="holder.js/600x500/text:Thumbnail/auto/sky">
          </div>
 
          <div class="large-3 columns">
            <img data-src="holder.js/600x500/text:Thumbnail/auto/lava">
          </div>
 
          <div class="large-3 columns">
            <img data-src="holder.js/600x500/text:Thumbnail/auto/vine">
          </div>
 
          <div class="large-3 columns">
            <img data-src="holder.js/600x500/text:Thumbnail/auto/gray">
          </div>
 
          <div class="large-3 columns">
            <img data-src="holder.js/600x500/text:Thumbnail/auto/industrial">
          </div>
 
          <div class="large-3 columns">
            <img data-src="holder.js/600x500/text:Thumbnail/auto/social">
          </div>
 
          <div class="large-3 columns">
            <img data-src="holder.js/600x500/text:Thumbnail/auto/sky">
          </div>
 
          <div class="large-3 columns">
            <img data-src="holder.js/600x500/text:Thumbnail/auto/lava">
          </div>
 
          <div class="large-3 columns">
            <img data-src="holder.js/600x500/text:Thumbnail/auto/vine">
          </div>
 
          <div class="large-3 columns end">
            <img data-src="holder.js/600x500/text:Thumbnail/auto/gray">
          </div>
        </div>
      </div>
 
      <div class="row">
        <div class="large-6 columns">
          <div class="panel">
            <h5>Subheader</h5>
            <p>Sed sit amet posuere erat. Quisque in ipsum non augue euismod dapibus non et eros.</p>
            <a href="#" class="small button">Link</a>
          </div>
        </div>
 
        <div class="large-6 columns">
          <div class="panel">
            <h5>Subheader</h5>
            <p>Sed sit amet posuere erat. Quisque in ipsum non augue euismod dapibus non et eros.</p>
            <a href="#" class="small button">Link</a>
          </div>
        </div>
      </div>
    </div>
 
  </div>	
@stop

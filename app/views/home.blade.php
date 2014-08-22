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
 
      <h4>What's Printing?</h4>
 
      <p>See what other people are printing. The possibilities are endless!</p><hr>
 
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
            <h5>What is 3D printing/scanning?</h5>
            <p>3D printing is a process for making three-dimensional of almost any shape from a 3D model. 3D scanning is used to turn a physical object into a digitized 3D model. Learn how YOU can start creating!</p>
            <a href="information" class="small button">More Info &raquo;</a>
          </div>
        </div>
 
        <div class="large-6 columns">
          <div class="panel">
            <h5>Linux Users Group</h5>
            <p>LUG at UIC is a student organization whose purpose is to provide a community for students that are interested in all things related to Linux. Learn more on our main website.</p>
            <a href="//lug.cs.uic.edu" class="small button">LUG Homepage &raquo;</a>
          </div>
        </div>
      </div>
    </div>
 
  </div>	
@stop

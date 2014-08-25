@extends('layouts.master')
@section('title','Information');
@section('content')
	<div class="row">
		<div class="large-12 columns">
			<h1>Information</h1>
			<h3>Introduction</h3>
			<p>As the Linux Users Group matured the topics of discussion have changed as well. We’ve been evolving to a group more based in the ideas of open-source in general and not limiting ourselves to discussion on Linux. This movement away from Linux and toward open-source in general lead us to want to start making things. We needed a project and to this end at the end of spring 2013 we, along with the ACM, another student organization on campus, purchased the parts to create a small robot using Arduinos and Raspberry Pi. If your are unfamiliar with the Arduino or Raspberry Pi they are small approximately credit card size computers for use in small prototype or hobby electronics projects. Both of these rely heavily on open-source technology and are well documented which allowed us to start moving on our project as soon as soon as we were ready. It is starting these sorts of projects that lead us down the path toward realizing the usefulness of a 3D printer to the student body.</p>
			<p>Thanks to the gracious funds given to us from the College of Engineering Annual Dean Fund 2014, we are able to provide the means to bring students a 3d printer, 3d scanner and an array of PLA filaments. </p>
			<hr />
		</div>
	</div>
	<div class="row">
		<div class="large-4 columns">
			<h3>Cost</h3>
			<p><small>Updated last: May 14, 2014</small></p>
			<table>
				<tr><th>3d Models</th><td>$0.10 / gram</td></tr>
				<tr><th>3d Object Scanning</th><td>Free?</td></tr>
			</table>
		</div>
		<div class="large-4 columns">
			<h3>3D Printer Specs</h3>
			<table>
				<thead>
					<tr><th>Attribute</th><th>Value</th></tr>
				</thead>
				<tbody>
					<tr><td>Printing Technology</td><td>Fused Deposition Modeling</td></tr>
					<tr><td>Layer Resolution</td><td>100 Microns</td></tr>
					<tr><td>Build Volume</td><td>24.6 L x 15.2 W x 15.5 H cm</td></tr>
					<tr><td>Supported File Types</td><td>x3g</td></tr>
				</tbody>
			</table>
		</div>
		<div class="large-4 columns">
			<h3>3D Scanner Specs</h3>
			<table>
				<thead>
					<tr><th>Attribute</th><th>Value</th></tr>
				</thead>
				<tbody>
					<tr><td>Scanning Technology</td><td>Lazer Line Generators with Filtered CMOS Sensor</td></tr>
					<tr><td>Scan Volume</td><td>20.3 (Diameter) x 20.3 H cm</td></tr>
					<tr><td>Dimensional Accuracy</td><td>&#177; 2.0 mm</td></tr>
					<tr><td>Detail Resolution</td><td>0.5 mm</td></tr>
					<tr><td>Maximum Object Weight</td><td>3 Kg</td></tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<p>* Please note that these specifications are when ideal conditions are met. Actual performance of these machines may differ.</p>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<h3>Filament Colors Available</h3>
			<p>TBA</p>
		</div>
	</div>
@stop

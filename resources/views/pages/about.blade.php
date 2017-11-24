@extends('layouts/default',['title'=>'About'])

@section('container')
     <div class="container">
     	<h2>What is LaraCarte??</h2>
     	<p>LaraCarte is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com.</a> </p>

     	<div class="row">
     		<div class="col-md-6">
     			<p class="alert alert-warning">
     			     <strong><i class="fa fa-warning"></i> This App has been built by <a href="https://twitter.com/etsmo">@Johnkey</a>  for learning purposes.</strong> 
     			</p>
     		</div>
     	</div>
     	<p>Feel free to help to improve the <a href="https://github.com/johnkeychishugi/laracarte-dwlt">source code</a>.</p>

     	<hr>

     	<h2>What is Laramap??</h2>
		<p>Laramap is the Wesite by which Laracarte was inspired :)</p>
		<p>More info <a href="https://laramap.com/p/about">here</a></p>

		<hr>

		<h2>Which tools and services are used in laraCarte??</h2>
		<p>Basucally it's built in Laravel & Bootstrap.But there's a bunch of service used for email and other section.</p>
		<ul>
			<li>laravel</li>
			<li>Bootstrap</li>
			<li>Amazon S3</li>
			<li>Mandrill</li>
			<li>Google Maps</li>
			<li>Gravatar</li>
			<li>Antony Martin's Geolocation Package</li>
			<li>Michel Fortin's MarkDown Parser Package</li>
			<li>Heroku</li>
		</ul>
     </div>
@endsection
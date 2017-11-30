@extends('layouts/default',['title'=>'Contact'])

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<h2>Get In Touch</h2>
				<p class="text-muted">If you having trouble with this service,please <a href="mailto:{{ config('laracarte.admin_support_email') }}">ask for help</a>.</p>

				<form action="{{ route('contact_path') }}" method="POST">
					<!--Token de validation laravel-->
					{{ csrf_field() }}
					<!--Name -->
					<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
						<label for="name" class="control-label">Name</label>
						<input type="text" name="name" id="name" class="form-control" required="required" value="{{ old('name')}}">
						<!--Initialisation de message d'error -->
						{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
					</div>
					<!--Name -->
					<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
						<label for="email" class="control-label">Address Email</label>
						<input type="email" name="email" id="email" class="form-control" required="required" value="{{ old('email') }}">
						<!--Initialisation de message d'error -->
						{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
					</div>

					<!--Message -->
					<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
						<label for="message" class="control-label sr-only">Message</label>
						<textarea class="form-control" name="message" id="message" cols="10" rows="10" required="required">{{ old('message') }}</textarea>
						<!--Initialisation de message d'error -->
						{!! $errors->first('message', '<span class="help-block">:message</span>') !!}
					</div>
					<!--Button of submit-->
					<div class="form-group">
						<button class="btn btn-primary btn-block" type="submit">Submit Enquiry &raquo;</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
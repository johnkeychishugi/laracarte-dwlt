@extends('layouts/default',['title'=>'Contact'])

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<h2>Get In Touch</h2>
				<p class="text-muted">If you having trouble with this service,please <a href="mailto:jkchishugi@gmail.com">ask for help</a>.</p>

				<form action="#" method="POST">
					<!--Name -->
					<div class="form-group">
						<label for="name" class="control-label">Name</label>
						<input type="text" name="name" id="name" class="form-control" required="required">
					</div>
					<!--Name -->
					<div class="form-group">
						<label for="email" class="control-label">Address Email</label>
						<input type="text" name="email" id="email" class="form-control" required="required">
					</div>

					<!--Message -->
					<div class="form-group">
						<label for="message" class="control-label sr-only">Message</label>
						<textarea class="form-control" name="message" id="message" cols="10" rows="10" required="required"></textarea>
					</div>
					<!--Button of submit-->
					<div class="form-group">
						<button class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
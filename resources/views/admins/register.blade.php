
@include('_partials.navbar')


<div class="content">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-6">
		@error('name');
		<div class="alert alert-danger fixed">{{ $message }} </div>
		@enderror
		@error('email');
		<div class="alert alert-danger">{{ $message }} </div>
		@enderror
		@error('password');
		<div class="alert alert-danger">{{ $message }} </div>
		@enderror
	
	<div class="card stacked-form">
	<div class="card-header ">
	<h4 class="card-title">Register</h4>
	</div>
	<div class="card-body ">
	<form action="/admin/store" method="POST">
		@csrf
	<div class="form-group">
	<label>Name</label>
	<input type="text" name="name" placeholder="Enter Name" class="form-control">
	</div>

	<div class="form-group">
		<label>Email address</label>
		<input type="email" name="email" placeholder="Enter email" class="form-control">
		</div>

		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter Password" class="form-control">
			</div>
	<div class="form-group">
	<label>Password</label>
	<input type="password" name="password_confirmation" placeholder="Re-type Password" class="form-control">
	</div>

	</div>
	<div class="card-footer ">
	<button type="submit" class="btn btn-fill btn-info">Register</button>
</form>
	</div>
	</div>
	</div>
   






















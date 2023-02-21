
@include('_partials.navbar')


<div class="content">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-6">
		@if(session()->has('messages'))
		<div class="alert alert-success">{{ session('messages') }} </div>
		@endif
		@error('email');
		<div class="alert alert-danger">{{ $message }} </div>
		@enderror
	<div class="card stacked-form">
	<div class="card-header ">
	<h4 class="card-title">Login</h4>
	</div>
	<div class="card-body ">
	<form action="/admin/auth" method="POST">
		@csrf
	<div class="form-group">
	<label>Email address</label>
	<input type="email" name="email" placeholder="Enter email" class="form-control">
	</div>
	<div class="form-group">
	<label>Password</label>
	<input type="password" name="password" placeholder="Password" class="form-control">
	</div>

	</div>
	<div class="card-footer ">
	<button type="submit" class="btn btn-fill btn-info">Submit</button>
</form>
	</div>
	</div>
	</div>
   























@include('_partials.navbar')


<div class="content">
<div class="col-md-8">
	@error('name');
		<div class="alert alert-danger fixed">{{ $message }} </div>
		@enderror
		@error('email');
		<div class="alert alert-danger">{{ $message }} </div>
		@enderror
		@error('position');
		<div class="alert alert-danger">{{ $message }} </div>
		@enderror
		@error('address');
		<div class="alert alert-danger">{{ $message }} </div>
		@enderror
	<div class="card card-user">
		
		@if(session()->has('messages'))
		<div class="alert alert-success">{{ session('messages') }} </div>
		@endif
	  <div class="card-header">
		<h5 class="card-title">Edit Profile</h5>
	  </div>
	  <div class="card-body">
		<form action="/userinfo/update/{{ $users->id }}" method="POST">
			@csrf
			@method('PUT')
		  <div class="row">
			<div class="col-md-5 pr-1">
			  <div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" id="validationCustomUsername" placeholder="Name" value="{{ $users->name }}">
				@error('name')
				<div class="invalid-feedback">
				 {{ $message }}
			   </div>
			@enderror      
			</div>
			
			</div>
			<div class="col-md-3 px-1">
			  <div class="form-group">
				<label>Position</label>
				<input type="text" name="position" class="form-control" placeholder="Position" value="{{ $users->position }}">
			  </div>
			</div>
			<div class="col-md-4 pl-1">
			  <div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" name="email" class="form-control" placeholder="Email" value="{{ $users->email }}">
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-6 pr-1">
			  <div class="form-group">
				<label>Address</label>
				<input type="text" name="address" class="form-control" placeholder="Address" value="{{ $users->address }}">
			  </div>
			</div>
			<div class="col-md-6 pl-1">
			  <div class="form-group">
				<label>Company</label>
				<input type="text" name="company" class="form-control" placeholder="company" value="{{ $users->company }}">
			  </div>
			</div>
		  </div>
		 
		  <div class="row">
			<div class="update ml-auto mr-auto">
			  <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
			</div>
		  </div>
		</form>
	  </div>
	</div>
  </div>
</div>
</div>
   
@include('_partials.footer')





















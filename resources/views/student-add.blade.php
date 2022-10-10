@extends ('layout.template')

@section ('title', 'Create Data')

@section ('content')

<div class="mt-5 col-8 m-auto">
	@if($errors->any())
	<div class="alert alert-danger">
		<ul>@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
	</div>
	@endif
	<form action="student" method="post">
		@csrf
		<div class="mb-1">
			<label for="name">Nama</label>
			<input type="text" name="name" class="form-control" id="name" autofocus>
		</div>

		<div class="mb-1">
			<label for="gender">Gender</label>
			<select name="gender" id="gender" class="form-control">
				<Option value="">Select One</Option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option></select>
			</div>

			<div class="mb-1">
				<label for="nis">NIS</label>
				<input type="text" name="nis" class="form-control" id="nis">
			</div>
			<div class="mb-1">
				<label for="class">Class</label>
				<select name="class_id" id="class" class="form-control">
				@foreach($class as $c)
				<option value="{{ $c->id }}">{{ $c->name }}</option>
				@endforeach</select>
				</div>

				<div class="mt-3">
					<button class="btn btn-success">Create data</button>
				</div>

			</form>
		</div>

		@endsection
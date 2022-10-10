@extends ('layout.template')

@section ('title', 'Edit Data')

@section ('content')


<div class="mt-5 col-8 m-auto">
	<form action="/student/{{ $studentEdit->id }}" method="POST">
		@csrf
		@method('PUT')
		<div class="mb-1">
			<label for="name">Nama</label>
			<input type="text" name="name" class="form-control" id="name" value="{{ $studentEdit->name }}" required autofocus>
		</div>

		<div class="mb-1">
			<label for="gender">Gender</label>
			<select name="gender" id="gender" class="form-control" required>
				<option value="{{ $studentEdit->gender }}">{{ $studentEdit->gender }}</option>
				@if($studentEdit->gender == 'Laki-Laki')
				<option value="Perempuan">Perempuan</option>
				@else
				<option value="Laki-Laki">Laki-Laki</option>
				@endif
			</select>
		</div>

		<div class="mb-1">
			<label for="nis">NIS</label>
			<input type="text" name="nis" class="form-control" id="nis" value="{{ $studentEdit->nis }}" required>
		</div>
		<div class="mb-1">
			<label for="class">Class</label>
			<select name="class_id" id="class" class="form-control" required>
				<option value="{{ $studentEdit->class->id }}">{{ $studentEdit->class->name }}</option>
				@foreach( $classEdit as $ce)
				<option value="{{ $ce->id }}">{{ $ce->name }}</option>
				@endforeach
			</select>
		</div>

		<div class="mt-3">
			<button class="btn btn-success">Save Data</button>
		</div>
	</form>
</div>
@endsection
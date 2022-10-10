@extends ('layout.template')
@section ('title', 'Delete Data')

@section ('content')

<div>
	<h2>Yakin ingin menghapus data ini ? </h2>
	<p>Nama : {{ $studentDelete->name }} <br>
		NIS : {{ $studentDelete->nis }}</p>
		<form style="display: inline-block" action="/student-destroy/{{ $studentDelete->id }}" method="post">
			@csrf
			@method('delete')
			<button type="submit" class="btn btn-danger">Delete</button>
		</form>

		<a href="/students"><button class="btn btn-primary">Cancel</button></a>
	</div>

	@endsection
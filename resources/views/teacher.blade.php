@extends('layout.template')

@section('title', 'Teacher')

@section ('content')

<h1>Halaman Teacher</h1>
<h2>Teacher List</h2>
<div class="my-5">
	<a href="" class="btn btn-primary">Add Data</a>
</div>

<table class="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody>
		@foreach( $teacherlist as $t)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $t->name }}</td>
			<td><a href="teacher-detail/{{ $t->id }}" class="text-decoration-none">Detail</a></td>
			
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
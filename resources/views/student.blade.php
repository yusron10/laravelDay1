@extends('layout.template')

@section('title', 'Student')

@section ('content')
<div class="my-5 d-flex justify-content-between">
	<a href="student-add" class="btn btn-primary">Add Data</a>
	<a href="student-deleted" class="btn btn-info">Show Deleted Data</a>
</div>

@if(Session::has('status'))
<div class="alert alert-success" role="alert">
	{{ Session::get('message') }}
</div>
@endif

{{-- Bagian tampilan --}}

<div class="my-3 col-12 col-sm-8 col-md-4">
	<form action="" method="get">
		<div class="input-group mb-3">
				<input type="text" class="form-control" name="keyword" placeholder="Cari disini....">
				<button class="input-group-text btn btn-danger">Search</button>
			</div>
	</form>
</div>

<table class="table">
<thead>
		<tr>
			<th>NO</th>
			<th>Name</th>
			<th>Gender</th>
			<th>NIS</th>
			<th>Kelas</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach( $studentlist as $c)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $c->name }}</td>
			<td>{{ $c->gender }}</td>
			<td>{{ $c->nis }}</td>
			<td>{{ $c->class->name }}</td>
			<td><a href="/student/{{$c->id}}" class="text-decoration-none">Detail</a> 
			<a href="/student-edit/{{ $c->id }}" class="text-decoration-none">Edit</a>
			<a href="student-delete/{{ $c->id }}" class="text-decoration-none">Delete</a>
			</td>
			<!-- <td>{{ $c->class->name }}</td>
			<td>
				@foreach( $c->ekstrakurikulers as $k)
				- {{ $k->name }} <br>
				@endforeach
			</td>

			<td>{{ $c->class->homeroomTeacher->name }}</td> -->
		</tr>
		@endforeach
	</tbody>

</table>
<div class="my-5">
	{{ $studentlist->withQueryString()->links() }}
</div>
@endsection
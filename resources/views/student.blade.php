@extends('layout.template')

@section('title', 'Student')

@section ('content')
<div class="my-5">
	<a href="student-add" class="btn btn-primary">Add Data</a>
</div>

@if(Session::has('status'))
<div class="alert alert-success" role="alert">
	{{ Session::get('message') }}
</div>
@endif

<table class="table">
<thead>
		<tr>
			<th>NO</th>
			<th>Name</th>
			<th>Gender</th>
			<th>NIS</th>
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
			<td><a href="/student/{{$c->id}}" class="text-decoration-none">Detail</a> " "
			<a href="/student-edit/{{ $c->id }}" class="text-decoration-none">Edit</a>
			<a href="student-delete/{{ $c->id }}" class="text-decoration-none">Delete</a></td>
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


@endsection
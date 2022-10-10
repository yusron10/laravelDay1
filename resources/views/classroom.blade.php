@extends('layout.template')

@section('title', 'Class')

@section ('content')

<h1>Ini Halaman CLass</h1>
<h2>Class List</h2>
<div class="my-5">
	<a href="" class="btn btn-primary">Add Data</a>
</div>

<table class="table">
	<thead>
		<tr>
			<th>NO</th>
			<th>Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach( $classlist as $c)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $c->name }}</td>
			<td><a href="class/{{  $c->id}}" class="text-decoration-none">Detail</a></td>
		</tr>
		@endforeach
	</tbody>
</table>


@endsection
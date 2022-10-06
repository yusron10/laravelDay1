@extends('layout.template')

@section('title', 'Class')

@section ('content')

<h1>Ini coba Halaman CLass</h1>
<h2>Class List</h2>

<table class="table">
	<thead>
		<tr>
			<th>NO</th>
			<th>Name</th>
		</tr>
	</thead>
	<tbody>
		@foreach( $classlist as $c)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $c->name }}</td>
		</tr>
		@endforeach
	</tbody>
</table>


@endsection
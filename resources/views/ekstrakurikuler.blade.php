@extends('layout.template')

@section('title', 'Ekstrakurikuler')

@section ('content')
<h1>Ini halaman Ekskul</h1>
<h2>List Ekstra</h2>
<table class="table">
	<thead>
		<tr>
			<th>NO</th>
			<th>Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($ekskul as $k)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $k->name }}</td>
			<td><a href="ekstrakurikuler-detail/{{ $k->id }}" class="text-decoration-none">Detail</a></td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection
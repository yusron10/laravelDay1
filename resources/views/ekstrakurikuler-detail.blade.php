@extends ('layout.template')
@section ('title', 'Detail Ekstrakurikuler')

@section ('content')

<h2>
	Anda sedang melihat detail Ekstrakurikuler  {{ $ekskulView->name }}
</h2>
<div class="my-5">
	<a href="" class="btn btn-primary">Add Data</a>
</div>

<div class="mt-5">
	<h3>List Anggota</h3>
	<ul>
		@foreach ($ekskulView->students as $es)
		<li>{{ $es->name }}</li>
		@endforeach
	</ul>
</div>

@endsection
@extends('layout.template')

@section('title', 'Student')

@section ('content')

<h1>Ini coba Halaman Student</h1>
<ul>
	@foreach ($studentlist as $s)
<li>{{ $s->name }}</li>
@endforeach
</ul>


@endsection
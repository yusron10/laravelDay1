@extends ('layout.template')
@section ('title', 'Detail Class')

@section ('content')

<h2 class="mt-3">Anda sedang melihat data Detail dari {{ $classView->name }}</h2>

<div class="mt-5">
	<strong>Homeroom Teacher : {{ $classView->homeroomTeacher->name }}</strong>
</div>

<div class="mt-5">
	<h4>List Student</h4>
	<ul>
		@foreach ($classView->student as $cs)
		<li>{{ $cs->name }}</li>
		@endforeach
	</ul>
</div>

{{ $classView }}

@endsection
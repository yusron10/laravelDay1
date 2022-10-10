@extends ('layout.template')
@section ('title', 'Teacher Detail')

@section ('content')
<h2>Anda sedang melihat data detail dari {{ $teacherView->name }}</h2>

<div class="mt-5">
	<h3>Class : 
		@if($teacherView->class)
		{{ $teacherView->class->name }}
		@else
		-
		@endif
	</h3>

</div>

<div class="mt-5">
	<h4>List Student</h4>
	@if($teacherView->class)
	<ul>
		@foreach($teacherView->class->student as $tcs)
		<li>{{ $tcs->name }}</li>

		@endforeach
	</ul>
	@endif
</div>
@endsection
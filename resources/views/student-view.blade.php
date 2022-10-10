@extends ('layout.template')
@section ('title', 'Detail Siswa')

@section ('content')
<h2>Anda sedang melihat dari siswa yang bernama {{ $studentView->name }}</h2>

<div class="mt-5 mb-5">
	<table class="table table-bordered">
		<tr>
			<th>NIS</th>
			<th>Gender</th>
			<th>Kelas</th>
			<th>Teacher</th>
		</tr>
		<tr>
			<td>{{ $studentView->nis }}</td>
			<td>{{ $studentView->gender }}</td>
			<td>{{ $studentView->class->name }}</td>
			<td>{{ $studentView->class->homeroomTeacher->name }}</td>
		</tr>
	</table>
</div>
<div>
	<h3>Ekstrakurikuler</h3>
	<ul>
		@foreach ( $studentView->ekstrakurikulers as $sk)
		<li>{{ $sk->name }}</li>
		@endforeach
	</ul>
</div>
<style>
	th {
		width: 25%;
	}
</style>
@endsection
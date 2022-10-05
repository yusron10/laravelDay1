@extends('layout.template')
@section('title', 'Home')

	@section('content')
		<h1>Halaman Home</h1>
		<h2>Sekarang kita memakai cara {{ $name }}</h2>
		<h3>Anda adalah {{ $role }}</h3>
<!-- 
		@if($role == 'admin')

		<a href="" class="text-decoration-none">Ke Halaman Admin</a>

		@elseif ($role == 'staff')
		
		<a href="" class="text-decoration-none">Ke Halaman Gudang</a>

		@else

		<a href="" class="text-decoration-none">Ke Halaman Serah ente</a>
		
		@endif -->

		<!-- @switch ( $role )

		@case ($role == 'admin')
		<a href="">Ke Halaman admin</a>

		@break

		@case ($role == 'staff')
		<a href="">Ke Halaman Gudang</a>

		@break

		@defaul
		<a href="">Pergi ente</a>

		@endswitch -->

		<!-- @for($i = 0; $i < 5; $i++ )

		{{ $i }}<br>
		@endfor -->

		<table class="table">
			<tr>
				<td>No</td>
				<th>Nama</th>
			</tr>
			@foreach ($buah as $b)
			<tr>
				<td>{{ $loop->iteration }}</td> <!-- iteration untuk mengurutkan angka 1 sampai data terakhir -->
				<td>{{ $b }}</td>
				
			</tr>
			@endforeach
		</table>

		@endsection
@extends('layout.template')

@section('title', 'Restore')


@section ('content')

<h1>Halaman Restore</h1>

<button><a href="/students" class="text-decoration-none">Back</a></button>

<div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentDelete as $sd)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $sd->name }}</td>
                    <td>{{ $sd->gender }}</td>
                    <td>{{ $sd->nis }}</td>
                    <td>
                        <a href="/student/{{ $sd->id }}/restore" class="text-decoration-none">Restore</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
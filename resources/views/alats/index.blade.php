@extends('app')

@section('content')
<div class="container mt-4">
    <h2>Data Alat</h2>
    <a href="{{ route('alats.create') }}" class="btn btn-primary mb-3">Tambah Alat</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Alat</th>
                <th>Merek</th>
                <th>Nomor Seri</th>
                <th>Tanggal Instalasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alats as $alat)
                <tr>
                    <td>{{ $alat->id }}</td>
                    <td>{{ $alat->nama_alat }}</td>
                    <td>{{ $alat->merek }}</td>
                    <td>{{ $alat->nomor_seri }}</td>
                    <td>{{ $alat->tanggal_instalasi }}</td>
                    <td>
                        <a href="{{ route('alats.edit', $alat->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('alats.destroy', $alat->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

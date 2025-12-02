@extends('app')
@section('title','Detail Alat')

@section('content')
    <div class="container mt-4">
        <h3>Detail Alat</h3>

        <div class="card">
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th style="width: 180px">Nama Alat</th>
                        <td>{{ $alat->nama_alat }}</td>
                    </tr>
                    <tr>
                        <th>Merek</th>
                        <td>{{ $alat->merek }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Seri</th>
                        <td>{{ $alat->nomor_seri }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Instalasi</th>
                        <td>{{ $alat->tanggal_instalasi }}</td>
                    </tr>
                </table>

                <a href="{{ route('alats.edit', $alat) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('alats.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection

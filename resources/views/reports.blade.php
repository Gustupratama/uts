@extends('layout')

@section('content')
<style>
    h2 {
        color: aliceblue;
    }
</style>
    <h2>Laporan Penerimaan Barang</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $report['kode_barang'] }}</td>
                    <td>{{ $report['nama_barang'] }}</td>
                    <td>{{ $report['kategori'] }}</td>
                    <td>{{ $report['tanggal'] }}</td>
                    <td>{{ $report['jumlah'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

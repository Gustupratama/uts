@extends('layout')

@section('content')
<style>
    h2 {
        color: aliceblue;
    }
</style>
    <h2>Barang</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['kode'] }}</td>
                    <td>{{ $product['nama'] }}</td>
                    <td>{{ $product['kategori'] }}</td>
                    <td>{{ $product['harga'] }}</td>
                    <td>{{ $product['stok'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

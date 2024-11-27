@extends('layout')

@section('content')
<style>
    h2 {
        color: aliceblue;
    }
</style>
    <h2>Kategori Barang</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category['nama'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

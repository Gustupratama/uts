@extends('layout')

@section('content')
<style>
    h2 {
        color: aliceblue;
    }
</style>
    <h2>Users</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Username</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['nama'] }}</td>
                    <td>{{ $user['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

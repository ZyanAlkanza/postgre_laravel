@extends('template')

@section('content')
    <h1 class="mb-6 text-xl text-center font-bold">Detail User</h1>
    <div class="flex justify-center ">
        <table class="table w-1/2">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
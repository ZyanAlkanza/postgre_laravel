@extends('template')

@section('content')
<div class="mb-4 flex justify-between">
    <h1 class="text-2xl font-bold">Postgre | Laravel</h1>
    <a href="{{ '/add' }}" class="btn btn-outline hover:bg-blue-500 hover:text-white">Add Data</a>
</div>
<div class="overflow-x-auto">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- row 1 -->
            @foreach ($user as $item)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->address }}</td>
                <td class="flex justify-center gap-x-2">
                    <a href="{{ url('detail/'.$item->id) }}" class="btn btn-sm btn-outline hover:bg-green-500 hover:text-white">Detail</a>
                    <a href="{{ url('edit/'.$item->id) }}" class="btn btn-sm btn-outline hover:bg-yellow-500 hover:text-white">Edit</a>
                    <form action="{{ url('delete/'.$item->id) }}" method="POST" class="w-min">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline hover:bg-red-500 hover:text-white">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="toast">
        @if (session('status'))
        <div id="alert" class="alert alert-info">
            <span class="text-white font-semibold">{{ session('status') }}</span>
        </div>
        @endif
    </div>
</div>
<script>
    setTimeout(function () {
            document.getElementById('alert').style.display = 'none';
        }, 2000);
</script>
@endsection


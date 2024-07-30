<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>PostgreSQL | Laravel</title>
    </head>

    <body class="p-10">
        <div class="mb-4 flex justify-between">
            <h1 class="text-2xl font-bold">Postgre | Laravel</h1>
            <button class="btn btn-outline hover:bg-blue-500 hover:text-white">Add Data</button>
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
                <th>Action</th>
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
                <td>
                    <button class="btn btn-sm btn-outline hover:bg-green-500 hover:text-white">Detail</button>
                    <button class="btn btn-sm btn-outline hover:bg-yellow-500 hover:text-white">Edit</button>
                    <button class="btn btn-sm btn-outline hover:bg-red-500 hover:text-white">Delete</button>
                </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </body>
</html>

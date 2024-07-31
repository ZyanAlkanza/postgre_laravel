@extends('template')

@section('content')
    <div class="h-[650px] flex flex-col justify-center items-center">
        <h1 class="mb-10 text-xl font-bold">Add User Data</h1>
        
        <form action="{{ url('add_data') }}" method="POST" class="w-1/4 flex flex-col">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="input input-bordered w-full @error('name') border-red-500 @enderror"" />
            <div class="h-6 mb-4">
                @error('name')
                    <div class="error-message text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="input input-bordered w-full @error('email') border-red-500 @enderror"" />
            <div class="h-6 mb-4">
                @error('email')
                    <div class="error-message text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <label for="address">Address</label>
            <input type="text" name="address" id="address" value="{{ old('address') }}" class="input input-bordered w-full @error('address') border-red-500 @enderror"" />
            <div class="h-6 mb-4">
                @error('address')
                    <div class="error-message text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-outline mt-2 hover:bg-blue-500 hover:text-white">Add Data</button>
        </form>
    </div>
@endsection
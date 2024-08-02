@extends('template')

@section('content')
<div class="h-[650px] flex flex-col justify-center items-center">
    <h1 class="mb-10 text-xl font-bold">Edit User Data</h1>
    
    <form action="{{ url('edit_data') }}" method="POST" class="w-1/4 flex flex-col">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" id="id" value="{{ $user->id }}">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $user->name, old('name') }}" class="input input-bordered w-full @error('name') border-red-500 @enderror"" />
        <div class="h-6 mb-4">
            @error('name')
                <div class="error-message text-xs text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $user->email, old('email') }}" class="input input-bordered w-full @error('email') border-red-500 @enderror"" />
        <div class="h-6 mb-4">
            @error('email')
                <div class="error-message text-xs text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="{{ $user->address, old('address'), }}" class="input input-bordered w-full @error('address') border-red-500 @enderror"" />
        <div class="h-6 mb-4">
            @error('address')
                <div class="error-message text-xs text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-outline mt-2 hover:bg-blue-500 hover:text-white">Save Data</button>
    </form>
</div>
@endsection
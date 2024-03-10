@extends('layout')
@section('title')
    
@endsection
@section('content')
<div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-md shadow-md">
    <h1 class="text-2xl font-bold mb-4">Edit Brand</h1>

    <form  method="POST" action="{{route('update',$editBrand->id)}}">
        @csrf
        <div class="mb-4">
            <label for="brand_name" class="block text-sm font-semibold text-gray-600">Brand Name</label>
            <input type="text" name="brand_name" value="{{$editBrand->brand_name}}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
    </form>
</div>

@endsection
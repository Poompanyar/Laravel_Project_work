@extends('layout')
@section('title')
    
@endsection
@section('content')
<div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-md shadow-md">
    <h1 class="text-2xl font-bold mb-4">Edit Promotion</h1>

    <form  method="POST" action="{{route('updatePromotion',$editPromotion->id)}}">
        @csrf
        <div class="mb-4">
            <label for="promotion_name" class="block text-sm font-semibold text-gray-600">Promotion Name</label>
            <input type="text" name="promotion_name" value="{{$editPromotion->promotion_name}}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="p_start" class="block text-sm font-semibold text-gray-600">p_start</label>
            <input type="text" name="p_start" value="{{$editPromotion->p_start}}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="p_end" class="block text-sm font-semibold text-gray-600">p_end</label>
            <input type="text" name="p_end" value="{{$editPromotion->p_end}}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="percent_discount" class="block text-sm font-semibold text-gray-600">percent_discount</label>
            <input type="text" name="percent_discount" value="{{$editPromotion->percent_discount}}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
    </form>
</div>
@endsection
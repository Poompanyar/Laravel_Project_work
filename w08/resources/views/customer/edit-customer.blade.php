@extends('layout')
@section('title')
    
@endsection
@section('content')
<div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-md shadow-md">
    <h1 class="text-2xl font-bold mb-4">Edit Customer</h1>

    <form  method="POST" action="{{route('updateCustomer',$editCustomer->id)}}">
        @csrf
        <div class="mb-4">
            <label for="customer_name" class="block text-sm font-semibold text-gray-600">Customer Name</label>
            <input type="text" name="customer_name" value="{{$editCustomer->customer_name}}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold text-gray-600">Email</label>
            <input type="text" name="email" value="{{$editCustomer->email}}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="phone_no" class="block text-sm font-semibold text-gray-600">Phone</label>
            <input type="text" name="phone_no" value="{{$editCustomer->phone_no}}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="address" class="block text-sm font-semibold text-gray-600">Address</label>
            <input type="text" name="address" value="{{$editCustomer->address}}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-semibold text-gray-600">Password</label>
            <input type="text" name="password" value="{{$editCustomer->password}}" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
    </form>
</div>
@endsection
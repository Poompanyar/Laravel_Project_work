@extends('layout')
@section('title')
    
@endsection
@section('content')
<div class="max-w-auto mx-auto mt-8 p-6 bg-white rounded-md shadow-md flex flex-row justify-between">
    <h1 class="text-1xl font-bold mb-4">Form Brand</h1>

    <form action="/insert" method="POST" class="mb-8">
        @csrf
        <div class="mb-4">
            <label for="brand_name" class="block text-sm font-semibold text-gray-600">Brand Name</label>
            <input type="text" name="brand_name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        @error('brand_name')
            <p>{{$message}}</p>
        @enderror
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
    </form>

    <h1 class="text-1xl font-bold mb-4">Form Category</h1>

    <form action="/insert" method="POST" class="mb-8">
        @csrf
        <div class="mb-4">
            <label for="category_name" class="block text-sm font-semibold text-gray-600">Category Name</label>
            <input type="text" name="category_name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        @error('category_name')
            <p>{{$message}}</p>
        @enderror
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
    </form>

    <h1 class="text-1xl font-bold mb-4">Form Customer</h1>

    <form action="/insert" method="POST">
        @csrf
        <div class="mb-4">
            <label for="customer_name" class="block text-sm font-semibold text-gray-600">Customer Name</label>
            <input type="text" name="customer_name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        @error('customer_name')
            <p>{{$message}}</p>
        @enderror
        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold text-gray-600">Email</label>
            <input type="text" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        @error('email')
            <p>{{$message}}</p>
        @enderror
        <div class="mb-4">
            <label for="phone_no" class="block text-sm font-semibold text-gray-600">Phone</label>
            <input type="text" name="phone_no" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        @error('phone_no')
            <p>{{$message}}</p>
        @enderror
        <div class="mb-4">
            <label for="address" class="block text-sm font-semibold text-gray-600">Address</label>
            <input type="text" name="address" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        @error('address')
            <p>{{$message}}</p>
        @enderror
        <div class="mb-4">
            <label for="password" class="block text-sm font-semibold text-gray-600">Password</label>
            <input type="text" name="password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        @error('password')
            <p>{{$message}}</p>
        @enderror

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
    </form>

    <h1 class="text-1xl font-bold mb-4">Form Promotion</h1>

    <form action="/insert" method="POST">
        @csrf
        <div class="mb-4">
            <label for="promotion_name" class="block text-sm font-semibold text-gray-600">Promotion Name</label>
            <input type="text" name="promotion_name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        @error('promotion_name')
            <p>{{$message}}</p>
        @enderror
        <div class="mb-4">
            <label for="p_start" class="block text-sm font-semibold text-gray-600">p_start</label>
            <input type="date" name="p_start" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        @error('p_start')
            <p>{{$message}}</p>
        @enderror
        <div class="mb-4">
            <label for="p_end" class="block text-sm font-semibold text-gray-600">p_end</label>
            <input type="date" name="p_end" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        @error('p_end')
            <p>{{$message}}</p>
        @enderror
        <div class="mb-4">
            <label for="percent_discount" class="block text-sm font-semibold text-gray-600">percent_discount</label>
            <input type="text" name="percent_discount" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        @error('percent_discount')
            <p>{{$message}}</p>
        @enderror

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
    </form>
</div>

@endsection
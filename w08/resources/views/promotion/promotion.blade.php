@extends('layout')
@section('title')
    
@endsection
@section('content')
<div class="flex items-center justify-center">
  <div>
      <h1 class="text-4xl font-bold">Promotion</h1>
  </div>
</div>
<div class="p-6 overflow-scroll px-0">
    <table class="mt-4 w-full min-w-max table-auto text-left">
      <thead>
        <tr>
          <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
              <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">promotion_name <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                  </svg>
            </p>
          </th>
          <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
            <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">p_start <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
              </svg>
            </p>
          </th>
          <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
            <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">p_end <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
              </svg>
            </p>
          </th>
          <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
            <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">percent_discount <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
              </svg>
            </p>
          </th>
          <th class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
            <p class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">Actions</p>
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($promotion as $item)
        <tr>
          <td class="p-4 border-b border-blue-gray-50">
            <div class="flex items-center gap-3">
              <div class="flex flex-col">
                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{$item->promotion_name}}</p>
              </div>
            </div>
          </td>
          <td class="p-4 border-b border-blue-gray-50">
            <div class="flex flex-col">
              <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{$item->p_start}}</p>
            </div>
          </td>
          <td class="p-4 border-b border-blue-gray-50">
            <div class="flex flex-col">
              <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{$item->p_end}}</p>
            </div>
          </td>      
          <td class="p-4 border-b border-blue-gray-50">
            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{$item->percent_discount}} %</p>
          </td>
          <td class="p-4 border-b border-blue-gray-50">
            <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30" type="button">
                <a href="{{route('editPromotion',$item->id)}}"><i class="ri-pencil-line"></i></a>
            </button>
            <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30" type="button">
              <a href="{{route('deletePromotion',$item->id)}}" onclick="return confirm('Do you want to delete it?')"><i class="ri-delete-bin-line"></i></a>
            </button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
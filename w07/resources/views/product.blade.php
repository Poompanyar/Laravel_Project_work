@extends('layout')
@section('title')
@endsection
@section('content')

    {{-- product  --}}
    <h3>product</h3>
    <div>
        <table class="table" style="
        height: 400px;
        width: 95%;
        margin: 2rem;
        border: 1px solid red;
        overflow: hidden;
        overflow:scroll;
     
     ">
            <thead>
                <tr>
                    <th scope="col" style="background: gray">product_name	</th>
                    <th scope="col" style="background: gray">product_desc</th>
                    <th scope="col" style="background: gray">product_price</th>
                    <th scope="col" style="background: gray">Action</th>
                    <th scope="col" style="background: gray">Edit</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($dataproduct as $item)
                    <tr>
                        <td>{{$item->product_name}}</td>
                        <td>{{$item->product_desc}}</td>
                        <td>{{$item->product_price}}</td>
                        <td><a href="{{route('delete',$item->id)}}" class="btn btn-danger">delete</a></td>
                        <td><a href="{{route('editone',$item->id)}}" class="btn btn-warning">edit</a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection









@extends('layout')
@section('title')
@endsection
@section('content')

<h3>customer</h3>
    <div class=""
        style="
   height: 400px;
   width: 95%;
   margin: 2rem;
   border: 1px solid red;
   overflow: hidden;
   overflow:scroll;

">

        {{-- categorises --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style="background: gray">name</th>
                    <th scope="col" style="background: gray">email</th>
                    <th scope="col" style="background: gray">phone_no</th>
                    <th scope="col" style="background: gray">address</th>
                    <th scope="col" style="background: gray">province</th>
                    <th scope="col" style="background: gray">zipcode</th>
                    <th scope="col" style="background: gray">location</th>
                    <th scope="col" style="background: gray">password</th>
                    <th scope="col" style="background: gray">Action</th>
                    <th scope="col" style="background: gray">Edit</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($datacustomer as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone_no}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->province}}</td>
                        <td>{{$item->zipcode}}</td>
                        <td>{{$item->location}}</td>
                        <td>{{$item->password}}</td>
                        <td><a href="{{route('delete',$item->id)}}" class="btn btn-danger">delete</a></td>
                        <td><a href="{{route('edittwo',$item->id)}}" class="btn btn-warning">edit</a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
  
@endsection


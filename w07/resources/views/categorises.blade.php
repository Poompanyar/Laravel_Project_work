 @extends('layout')
 @section('title')
 @endsection
 @section('content')

 <h3>categorises</h3>
     <div class="product"
         style="
    height: 400px;
    width: 90%;
    margin: 2rem;
    border: 1px solid red;
    overflow: hidden;
    overflow:scroll;
 
 ">

         {{-- categorises --}}
         <table class="table">
             <thead>
                 <tr>
                     <th scope="col" style="background: gray">category_name</th>
                     <th scope="col" style="background: gray">Action</th>
                     <th scope="col" style="background: gray">Edit</th>
                 </tr>
             </thead>
             <tbody>

                 @foreach ($datacategory as $item)
                     <tr>
                         <td>{{ $item->category_name }}</td>
                         <td><a href="{{route('delete',$item->id)}}" class="btn btn-danger">delete</a></td>
                         <td><a href="{{route('edit',$item->id)}}" class="btn btn-warning">edit</a></td>
                     </tr>
                 @endforeach

             </tbody>
         </table>
     </div>
   
 @endsection


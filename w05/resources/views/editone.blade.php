@extends('layout')
@section('title')
@endsection
@section('content')


  {{-- product form  --}}
  <form style="margin: 1rem 26rem" action="#" method="POST">
    @csrf
    <h3>Edit data product</h3>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">product_name</label>
        <input type="name" name="product_name" value="{{$editone->product_name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">product_desc</label>
        <input type="name" name="product_desc" value="{{$editone->product_desc}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <button type="submit" class="btn btn-primary" value="บันทึก">Submit</button>
    </form> <hr style="border: 1.3px solid #111;">


@endsection
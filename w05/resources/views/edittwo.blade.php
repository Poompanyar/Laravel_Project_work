@extends('layout')
@section('title')
@endsection
@section('content')

    <form style="margin: 1rem 26rem" action="#" method="POST">
      @csrf
      <h3>Edit data customer</h3>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">name</label>
          <input type="name" name="name" value="{{$edittwo->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">email</label>
          <input type="name" name="email" value="{{$edittwo->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">phone_no</label>
          <input type="name" name="phone_no" value="{{$edittwo->phone_no}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">address</label>
          <input type="name" name="address" value="{{$edittwo->address}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">province</label>
          <input type="name" name="province" value="{{$edittwo->province}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">zipcode</label>
          <input type="name" name="zipcode" value="{{$edittwo->zipcode}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">location</label>
          <input type="name" name="location" value="{{$edittwo->location}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">password</label>
          <input type="name" name="password" value="{{$edittwo->password}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary" value="บันทึก">Submit</button>
      </form> <hr style="border: 1.3px solid #111;"> 

@endsection
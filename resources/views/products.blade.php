@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <ul class="list-group list-group-horizontal-lg">
            <a href="{{route("products")}}" class="list-group-item active text-white text-decoration-none">Products</a>
            <a href="{{route("changelog")}}" class="list-group-item text-decoration-none">Changelog</a>
          </ul>
        </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
              <th scope="col"><a href="{{route('create-product')}}" class="btn btn-success text-white">Add</a></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $item)
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->title}}</td>
                  <td>{{$item->quantity}}</td>
                  <td>{{$item->price}}</td>
                  <td><a href="" class="btn btn-danger btn-sm text-white">Delete</a></td>
                  <td><a href="products/edit/{{$item->id}}" class="btn btn-primary btn-sm text-white">Edit</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <ul class="list-group list-group-horizontal-lg">
            <a href="{{route("products")}}" class="list-group-item active text-white text-decoration-none">Products</a>
            @if(Auth::user()->admin)
              <a href="{{route("changelog")}}" class="list-group-item text-decoration-none">Changelog</a>
            @endif
          </ul>
        </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Total Price</th>
                @if(Auth::user()->admin)
                <th scope="col"><a href="{{route('create-product')}}" class="btn btn-success text-white">Add</a></th>
                @endif
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $item)
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->title}}</td>
                  <td>{{$item->quantity}}</td>
                  <td>{{$item->priceVAT}}</td>
                  <td>{{$item->totalPriceVAT}}</td>
                  @if(Auth::user()->admin)
                  <td>
                    <form action="products/delete/{{$item->id}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                  </td>
                  <td>
                    <a href="products/edit/{{$item->id}}" class="btn btn-primary btn-sm text-white">Edit</a>
                  </td>
                  @endif
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

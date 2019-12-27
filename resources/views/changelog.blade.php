@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <ul class="list-group list-group-horizontal-lg">
            <a href="{{route("products")}}" class="list-group-item text-decoration-none">Products</a>
            <a href="{{route("changelog")}}" class="list-group-item active text-white text-decoration-none">Changelog</a>
          </ul>
          <div class="container mt-3">
            <form action="" method="GET">
              <div class="form-group">
                <label for="from">From:</label>
                <select class="form-control" id="from" name="from">
                  @foreach ($changelog as $item)
                    <option value="{{$item->created_at}}">{{$item->created_at}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="to">To:</label>
                <select class="form-control" id="to" name="to">
                  @foreach ($changelog as $item)
                    <option value="{{$item->created_at}}">{{$item->created_at}}</option>
                  @endforeach
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Filter</button>
            </form>
          </div>
        </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Who?</th>
                <th scope="col">Action</th>
                <th scope="col">What?</th>
                <th scope="col">When?</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($filtered as $item)
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->user_name}}</td>
                  <td>{{$item->action}}</td>
                  <td>{{$item->product_title}}</td>
                  <td>{{$item->created_at}}</td>
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

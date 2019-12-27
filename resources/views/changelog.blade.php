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
              <tr>
                <th scope="row">1</th>
                <td>Akmens</td>
                <td>Deleted</td>
                <td>TOSHIBA 500GB HDD 7200RPM</td>
                <td>12/12/12 14:00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Add a new product</div>

        <div class="card-body">
          @if(Auth::user()->admin)
          <form method="POST" action="{{ route('store-product') }}">
            @csrf

            <div class="form-group row">
              <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

              <div class="col-md-6">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="name" autofocus>

                @error('title')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="quantity" class="col-md-4 col-form-label text-md-right">Quantity</label>

              <div class="col-md-6">
                <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" required autocomplete="current-quantity">

                @error('quantity')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>

              <div class="col-md-6">
                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                @error('price')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  Save
                </button>
              </div>
            </div>

          </form>
          @else
          <h3>Login as admin to add a product</h3>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
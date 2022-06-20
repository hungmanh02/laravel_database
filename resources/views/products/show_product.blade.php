@extends('layout')
@section('content')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add Product </h4>  
            <form class="form-sample" action="{{ route('product.update',$product->id) }}" ctype="multipart/form-data" method="POST">
              @method('PUT')
              @csrf
              @if ($errors->any())
                <div class="row">
                    <ul style="list-style: none">
                      @foreach ($errors->all() as $error)
                      <li><p class="alert alert-danger">{{ $error }}</p></li>
                      @endforeach
                    </ul>
                </div>
              @endif
              @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
              <p class="card-description">
                Personal info
              </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Product Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}" readonly/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Product Price</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="product_price" value="{{ $product->product_price }}" readonly/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Choose Category</label>
                    <div class="col-sm-9">
                      <select class="form-select form-control" name="category_id">
                            <option selected  value="{{ $product->category_id }}">{{ $product->category_name }}</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Product Quantity</label>
                    <div class="col-sm-9">
                      <input type="number" readonly class="form-control" name="product_quantity" value="{{ $product->product_quantity }}" readonly/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                  <label>Product Image</label>
                  <div>
                    <img src="" alt="">
                  </div>
                  <div class="input-group mb-4">
                      <img src="{{ asset('storage/products/'.$product->product_image) }}" alt="">
                  </div>
              </div>
              <div class="row">
                <div class="mb-5">
                    <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" readonly name="product_description">{{ $product->product_description }}</textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="status" value="{{ $product->status }}" readonly/>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>               
  </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="template/https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
@endsection
    
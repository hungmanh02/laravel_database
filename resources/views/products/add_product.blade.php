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
            <form class="form-sample" action="{{ route('product.store') }}" enctype="multipart/form-data" method="POST">
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
                      <input type="text" class="form-control" name="product_name"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Product Price</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="product_price" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Choose Category</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="category_id">
                        <option selected>select category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Product Quantity</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="product_quantity"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                  <label>Product Image</label>
                  <div class="input-group mb-4">
                      <input type="file" class="form-control" id="inputGroupFile02" name="product_image">
                      <label class="input-group-text" for="inputGroupFile02">Upload</label>
                  </div>
              </div>
              <div class="row">
                <div class="mb-5">
                    <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="product_description"></textarea>
                </div>
              </div>
             
              <button type="submit" class="btn btn-primary me-2" name="add_submit">Add</button>
              <button class="btn btn-light">Cancel</button>
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
<!-- partial -->
@endsection
     
@extends('layout')
@section('content')
    
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card" style="height: fit-content;">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Detail Category</h4>
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
                          <input type="hidden" value="" name="id_category">
                          <div class="form-group">
                          <label for="exampleInputName1">Name category</label>
                          <input type="text" name="category_name" class="form-control" id="exampleInputName1" placeholder="Name category" value="{{ $category->category_name }}" readonly>
                          </div>
                    </div>
                  </div>
              </div>
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Hoverable Table</h4>
            <p class="card-description">
              Add class <code>.table-hover</code>
            </p>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>stt</td>
                    <td>name</td>
                  </tr>
                </tbody>
              </table>
            </div>
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
   
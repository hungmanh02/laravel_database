@extends('layout')
@section('content')  
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Hoverable Table</h4>
            <!-- <p class="card-description">
              Add class <code>.table-hover</code>
            </p> -->
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $key =>  $item)
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->category_name }}</td>
                      <td>
                        <a href="{{ route('category.show',$item->id) }}" title="View Student">
                          <button class="btn btn-info btn-sm">
                            <i class="fa fa-eye" aria-hidden="true"></i> View
                          </button>
                        </a>
                        <a href="{{ route('category.edit',$item->id ) }}" title="Edit Student">
                          <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                          </button>
                        </a>
                        <form method="POST" action="{{ route('category.destroy',$item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      {{$categories->links('vendor.pagination.bootstrap-4')}}
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
@endsection
      
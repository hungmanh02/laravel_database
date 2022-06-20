<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      {{-- <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li> --}}
      <!-- <li class="nav-item nav-category">Categories</li> -->
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Categories</span>
          <i class="menu-arrow"></i> 
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('category.index')}}">Categories</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('category.create') }}">Add Categories</a></li>
          </ul>
        </div>
      </li>
      <!-- <li class="nav-item nav-category">Products</li> -->
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-products" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Products</span>
          <i class="menu-arrow"></i> 
        </a>
        <div class="collapse" id="ui-basic-products">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('product.index') }}">Products</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('product.create') }}">Add Products</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
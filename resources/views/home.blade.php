@extends('layouts.app_login')

@section('content')
 <!-- Layout wrapper -->
 <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                    <input type="submit" class="btn btn-primary" value="Submit"></submit>
                </li>
                <li class="nav-item lh-1 me-3">
                    <a href="#" class="btn btn-danger">Logout</a>
                </li>

             </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                  <li class="nav-item">
                      <a class="nav-link" href="#"
                        ><i class="bx bx-bell me-1"></i> Gallery Tian Liong</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Gallery Produk</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"
                        ><i class="bx bx-bell me-1"></i> Video Tian Liong</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-connections.html"
                        ><i class="bx bx-link-alt me-1"></i> Data Tian Liong</a
                      >
                    </li>
                  </ul>
                  <div class="card mb-4">
                    <h5 class="card-header">Gallery Produk</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="row">
                        @foreach($product as $value)
                            <div class="col-3 mb-2">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://tianliong.co.id/info/assets/img/products/{{ $value->gambar }}" alt="No Image">
                                <div class="card-body">
                                <h5 class="card-title">{{ $value->nama_barang }}</h5>
                                <a href="#" class="btn btn-primary">View</a>
                                </div>
                            </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
      <a
        href="#"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Go to Website</a
      >
    </div>
@endsection

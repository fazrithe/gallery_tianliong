@extends('layouts.app_login')

@section('content')
<link
rel="stylesheet"
href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"
/>
 <!-- Layout wrapper -->
 <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @include('nav-user');

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                <div class="col-md-12">
                  @include('menu')
                  <div class="card mb-4">
                    <h5 class="card-header">Data Tian Liong</h5>
                    <div class="row card-header">
                        @foreach($category as $value)
                        <div class="col-sm-3"><a href="{{ URL::to('gallery-data/'.$value->id) }}">{{ $value->name }}</a></div>
                        @endforeach
                    </div>
                    <!-- Account -->
                    <div class="card-body">
                        <table
                          id="datatable"
                          class="table table-striped"
                        >
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>#</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($gallery as $value)
                            <tr>
                                <td>{{$value->name}}</td>
                                <td><a href="https://tianliong.co.id/stok/public/public/uploads/gallery/data/{{ $value->path }}">Download</a></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
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
        href="https://tianliong.co.id/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Go to Website</a
      >
    </div>

    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#datatable').DataTable();
      });
    </script>
@endsection

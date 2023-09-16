@extends('layouts.app_login')

@section('content')
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
                    <h5 class="card-header">Gallery Tian Liong</h5>
                    <div class="row card-header">
                        @foreach($category as $value)
                        <div class="col-sm-3"><a href="{{ URL::to('gallery-image/'.$value->id) }}">{{ $value->name }}</a></div>
                        @endforeach
                    </div>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="row">
                        @foreach($gallery as $value)
                            <div class="col-sm-4">
                            <div class="card text-center">
                                <div class="row">
                                    <div class="col-6">
                                <img class="card-img-top" src="https://tianliong.co.id/stok/public/public/uploads/gallery/img/{{ $value->path }}" onerror="this.onerror=null; this.src='{{asset('assets/img/noimage.png')}}'" alt="No Image">
                                    </div>
                                </div>
                                <div class="card-body">
                                <h5 class="card-title">{{ $value->name }}</h5>
                                <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#modal-{{$value->id}}">View</a>
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
        href="https://tianliong.co.id/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Go to Website</a
      >
    </div>

    <!-- Modal -->
    @foreach($gallery as $value)
<div class="modal fade" id="modal-{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{$value->name}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img class="card-img-top" src="https://tianliong.co.id/stok/public/public/uploads/gallery/img/{{ $value->path }}" alt="No Image">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection

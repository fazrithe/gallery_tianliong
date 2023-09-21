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
                    <h5 class="card-header">Gallery Produk</h5>
                    <!-- Account -->
                    <div class="row card-header">
                        <div class="col-sm-3">
                            <select class="form-control" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                <option>--category--</option>
                                @foreach($category as $value)
                                    <option value="{{url('gallery-product')}}/{{ $value->merk }}">{{ $value->merk }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        @foreach($product as $value)
                            <div class="col-sm">
                            <div class="card text-center" style="width: 18rem;">
                                <img class="card-img-top" src="https://tianliong.co.id/info/assets/img/products/{{ $value->gambar }}"  onerror="this.onerror=null; this.src='{{asset('assets/img/noimage.png')}}'" alt="No Image">
                                <div class="card-body">
                                <h5 class="card-title">{{ $value->nama_barang }}</h5>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-{{$value->id}}">View</a>
                                </div>
                            </div>
                            </div>
                        @endforeach
                        </div>
                        {{ $product->links() }}
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
      @foreach($product as $value)
      <div class="modal fade" id="modal-{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$value->nama_barang}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <img class="card-img-top" src="https://tianliong.co.id/info/assets/img/products/{{ $value->gambar }}"  onerror="this.onerror=null; this.src='{{asset('assets/img/noimage.png')}}'" alt="No Image">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        @endforeach
@endsection

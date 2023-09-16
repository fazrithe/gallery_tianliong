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
                {!! Form::open(array('route' => 'gallery.search','method'=>'POST')) !!}
                <div class="navbar-nav align-items-center">
                  <div class="nav-item d-flex align-items-center col-sm-8">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input
                    width="90px"
                      type="text"
                      name="search"
                      class="form-control border-0 shadow-none"
                      placeholder="Search..."
                      aria-label="Search..."
                    />

                  </div>
                  <input type="submit" class="btn btn-primary" value="Search">
                </div>
                {!! Form::close() !!}
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                {{-- <li class="nav-item lh-1 me-3">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </li> --}}
                <li class="nav-item lh-1 me-3">
                    <a href="#" class="btn btn-danger"  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

             </ul>
            </div>
          </nav>

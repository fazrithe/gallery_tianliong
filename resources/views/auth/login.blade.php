@extends('layouts.app_login')

@section('content')
    <!-- Content -->
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <img src="{{ asset('assets/img/logo2.png') }}" width="50%">
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">Tian Liong</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to Tian Liong! 👋</h4>
              <p class="mb-4">Please sign-in to your account and start the adventure</p>

              <form method="POST" action="{{ route('login') }}" id="formAuthentication" class="mb-3" >
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input id="email" type="email" value="user@user.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>

                  </div>
                  <div class="input-group input-group-merge">
                  <input id="password" type="password" value="secret" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>
@endsection

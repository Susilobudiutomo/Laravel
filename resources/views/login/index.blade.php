@extends('layout.main')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">

          @if(session()->has('succsess'))
          <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
         <strong>{{ session('succsess') }}</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
         <strong>{{ session('loginError') }}</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          @if(session()->has('logout'))
          <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
         <strong>{{ session('logout') }}</strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif



            <main class="form-signin w-100 m-auto">
              <h1 class=" mb-3 mt-5  text-center">Please Login</h1>
                <form action="/login" method="post">
                  @csrf
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-2">Not Registerd? <a href="/register" class="text-decoration-none"> Register Now!</a></small>
              </main>
-        </div>
    </div>
</div>

@endsection
@extends('layouts.main')

@section('container')
<div class="row justify-content-center bg-gray">
    <div class="col-md-4">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <main class="form-signin py-5">
            <img class="mb-4 d-block mx-auto text-center" src="/img/images_44.jpeg" alt="" width="100" height="100">
            <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
            <form action="/login" method="post" >
                @csrf
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" @error('email')is-invalid @enderror id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label name="email" for="email" class="pt-1">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <label for="password" class="pt-1">Password</label>
                </div>
            
                <div class="checkbox mb-3">
                    <label>
                    <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <small class="d-block text-center mt-3">Not Register? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>
@endsection
@extends('layouts.main', ['title' => 'Register'])
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        {{-- Jika kit berhasil melakukan registrasi alert ini akan muncul, alert ini diatur didlam RegisterController --}}
        @if (session('success'))
        {{ session('success') }}
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="container">
            <main class="form-register">
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control mt-2" id="name" placeholder="name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control mt-2" id="email"
                            placeholder="name@example.com">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control mt-2" id="password"
                            placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Submit</button>
                </form>
            </main>
        </div>
    </div>
</div>
@endsection
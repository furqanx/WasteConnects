@extends('layouts.main')

@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-5">

            <main class="form-signin">

                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
                <form>
                    {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
            
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    {{-- <p class="mt-5 mb-3 text-muted">&copy; 2023–2024</p> --}}
                </form>
                <small class="d-block text-center mt-3">Not registered ? <a href="/register">Register Now!</a></small>

            </main>

        </div>
    </div>
@endsection
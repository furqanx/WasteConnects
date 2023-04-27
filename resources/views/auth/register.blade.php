@extends('layouts.app')

@section('content')

    <div class="row justify-content-center ">
        <div class="col-md-5">

            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Register account</h1>

                <form action="/register/store" method="post">
                    @csrf

                    {{-- <div class="form-group">
                        <label for="imageFormInput">foto profil</label><br>
                        <div id="imagePreview"></div> --}}
                        {{-- <img src="img/profile.svg" class="image" /> --}}
                        {{-- <input type="file" class="form-control" id="imageInput" multiple accept="image/*" onchange="handleFiles(this.files) name="product_image">
                    </div>

                    <div class="form-group">
                        <label for="nameFormInput">Name</label><br>
                        <input type="text" class="form-control" id="nameInput" placeholder="name">
                    </div>
            
                    <div class="form-group">
                        <label for="statusFormInput">status</label><br>
                        <input type="text" class="form-control" id="statusInput" placeholder="status">
                    </div>
            
                    <div class="form-group">
                        <label for="DescriptionTextarea">Description</label><br>
                        <textarea class="form-control" id="descriptionTextarea" rows="3" placeholder="describe yourself"></textarea>
                    </div>
            
                    <div class="form-group">
                        <label for="emailFormInput">email</label><br>
                        <input type="text" class="form-control" id="emailInput" placeholder="name@gmail.com">
                    </div>
            
                    <div class="form-group">
                        <label for="addressFormInput">address</label><br>
                        <input type="text" class="form-control" id="addressInput" placeholder="address">
                    </div>
            
                    <div class="form-group">
                        <label for="birthdayFormInput">birthday</label><br>
                        <input type="date" class="form-control" id="birthdayInput">
                    </div> --}}




                    {{-- <div class="form-group">     
                        <input type="file" class="form-control" id="imageInput" multiple accept="image/*" onchange="handleFiles(this.files)" name="profile_picture">
                    </div> --}}
                    
                    <div class="form-group">
                        <input type="text" class="form-control" id="nameInput" name="name" placeholder="name" @required(true)>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="emailInput" name="email" placeholder="name@gmail.com" @required(true)>
                    </div>
                    
                    <div class="form-group">
                        <input type="password" class="form-control" id="passwordInput" name="password" placeholder="password" @required(true)>
                    </div>
                    
                    {{-- <div class="form-group">
                        <input type="text" class="form-control" id="statusInput" name="status" placeholder="status">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="descriptionTextarea" name="description" rows="3" placeholder="describe yourself"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="addressInput" name="address" placeholder="address">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="birthdayInput" name="birthday">
                    </div> --}}
            
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>

                <small class="d-block text-center mt-3">Have registered ? <a href="/login">Login</a></small>
            </main>

        </div>
    </div>
    
@endsection
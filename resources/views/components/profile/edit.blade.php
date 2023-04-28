<div class="container">    
    <div class="col-lg-8 mx-auto my-5">	

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }} <br/>
                @endforeach
            </div>
        @endif

        <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <div id="imagePreview"></div>
                {{-- <img src="img/profile.svg" class="image" /> --}}
                <input type="file" class="form-control" id="imageInput" multiple accept="image/*" onchange="handleFiles(this.files)" name="product_image">
            </div>

            <div class="form-group">
                <label for="nameFormInput">Nama</label><br>
                <input type="text" class="form-control" id="nameInput" placeholder="Ubah nama anda" name="user_name">
            </div>

            <div class="form-group">
                <label for="addressFormInput">Alamat</label><br>
                <input type="text" class="form-control" id="addressInput" placeholder="Ubah alamat anda" name="user_address">
            </div>
            
            <div class="form-group">
                <label for="birthdateFormInput">Tanggal Lahir</label><br>
                <input type="date" class="form-control" id="birthdateInput" name="user_birthdate">
            </div>

            <div class="form-group">
                <label for="genderFormInput">Jenis Kelamin</label>
                <select class="form-select" id="genderInput" aria-label="Select Gender" name="user_gender">
                    <option selected value="laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>     
            

            <input type="submit" class="form-group btn btn-primary form-control" id="submitAllInput" value="Upload">
        </form>

    </div>
</div>


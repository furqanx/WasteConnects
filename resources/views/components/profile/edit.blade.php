<div class="container">    
    <div class="col-lg-8 mx-auto my-5">	

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }} <br/>
                @endforeach
            </div>
        @endif

        <form action="{{ route('profile.update', ['id' => auth()->user()->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <div id="imagePreview"></div>
                <label for="nameFormInput">Upload Foto Profile</label><br>
                {{-- <img src="img/profile.svg" class="image" /> --}}
                <input type="file" class="form-control" id="imageInput" multiple accept="image/*" onchange="handleFiles(this.files)" name="path_gambar_user">
            </div>

            <div class="form-group">
                <label for="nameFormInput">Nama</label><br>
                <input type="text" class="form-control" id="nameInput" placeholder="Ubah nama anda" name="nama_user">
            </div>

            <div class="form-group">
                <label for="addressFormInput">Alamat</label><br>
                <input type="text" class="form-control" id="addressInput" placeholder="Ubah alamat anda" name="alamat_user">
            </div>
            
            <div class="form-group">
                <label for="birthdateFormInput">Tanggal Lahir</label><br>
                <input type="date" class="form-control" id="birthdateInput" name="tanggal_lahir_user">
            </div>

            <div class="form-group">
                <label for="genderFormInput">Jenis Kelamin</label>
                <select class="form-select" id="genderInput" aria-label="Select Gender" name="jenis_kelamin_user">
                    <option selected value="laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            

            <input type="submit" class="form-group btn btn-primary form-control" id="submitAllInput" value="Upload">
        </form>

    </div>
</div>


@extends('dashboard.layouts.mainform')
@section('container') 


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Bug Report</h1>
    </div>
    
    

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/bugreportadmin" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="input-group input-group-outline my-3">
              <label for="judul" class="form-label">Judul Laporan</label>
              <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required autofocus value="{{ old('judul') }}">
              @error('judul')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="input-group input-group-outline my-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug">
              @error('slug')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="aplikasi" class="form-label">Aplikasi / Web ditemukannya bug</label>
                <select class="form-select" name="aplikasi">
                    <option value="I-Tap">I-Tap</option>
                    <option value="Sales Agent">Sales Agent</option>
                    <option value="Indogriya.com">Indogriya.com</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jenis_laporan" class="form-label">Jenis Laporan</label>
                  <select class="form-select" name="jenis_laporan">
                      <option value="Bug">Bug</option>
                      <option value="Feature Request">Feature Request</option>
                  </select>
              </div>
            <div class="mb-3">
                <label for="role_akun" class="form-label">Akun yang digunakan</label>
                  <select class="form-select" name="role_akun">
                      <option value="1">Super Admin</option>
                      <option value="2">Board Of Director</option>
                      <option value="3">Project Manager</option>
                      <option value="4">Marketing</option>
                      <option value="5">Sales Agent</option>
                  </select>
            </div>
            <div class="input-group input-group-outline my-3">
              
              <label for="link" class="form-label">Link ditemukannya bug</label>
              <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" required autofocus value="{{ old('link') }}">
              @error('link')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="my-3">
              <label for="formFile" class="form-label">Upload Gambar Bug / Feature Request</label>
              <img class="img-preview img-fluid mb-3 col-sm-5">
              <input class="input-group-outline form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" required>
              @error('image')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="my-3">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              @error('deskripsi')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
              <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
              <trix-editor input="deskripsi"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Create Bug Report</button>
          </form>
    </div>

<script>
        const judul = document.querySelector("#judul");
        const slug = document.querySelector("#slug");

        judul.addEventListener("keyup", function() {
            let preslug = judul.value;
            preslug = preslug.replace(/ /g,"-");
            preslug = preslug.replace("/","-");
            slug.value = preslug.toLowerCase();
        });

        document.addEventListener('trix-file-accept', function(e) {
          e.preventDefault();
        })


        function previewImage(){
          const image = document.querySelector('#image');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';

          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);

          oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
          }
        }
</script>

@endsection
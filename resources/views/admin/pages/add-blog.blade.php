@extends('adminlte::page')
@section('title', 'Berita | Tropisianimal')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Berita</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('admin/berita') }}">Berita</a></li>
                    <li class="breadcrumb-item active">Tambah Berita</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content') 
    @error('judul')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Oops! Ada Kesalahan!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>   
    @enderror
    
    <div class="container-fluid" style="margin-bottom: 20vh">
        <form action="{{ route('tambahBeritaBaru') }}" method="post" class="form-item mb-5" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="cb" placeholder="Masukkan Judul Berita" value="">
                @error('judul')
                    <div class="invalid-feedback">
                        Judul is required
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image" class="form-label">Gambar/Thumbnail</label>
                <img class="img-preview img-fluid col-sm-2" alt="">
                <input id="formFile" class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        Image must to fill
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Isi Berita</label>
                <textarea id="editor" class="form-control @error('body') is-invalid @enderror" type="text" name="body"></textarea>
                @error('body')
                    <div class="invalid-feedback">
                        Body is Required!
                    </div>
                @enderror
            </div>
            <div class="float-sm-right mt-4">
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                <a name="kembali" class="btn btn-danger" href="{{ url('/admin/berita') }}" role="button" type="reset" onclick="return confirm('Apakah Anda Yakin?')">Kembali</a>
            </div>
        </form>
    </div>
@endsection

@section('footer')
    <strong>Copyright &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Dito Kostolani F - Tropisianimal</a>.</strong>
    All rights reserved.
@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    {{-- <script src="//cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script> --}}
    <script>
        ClassicEditor.create( document.querySelector( '#editor' ), {
        toolbar: {
            items: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo', '|', 'alignment']
        },
        alignment: {
            options: ['left', 'right', 'justify', 'center']
        },
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
            ]
        }
        } )
        .catch( error => {
            console.log( error );
        } );

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();

            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
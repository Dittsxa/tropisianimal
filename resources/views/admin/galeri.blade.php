@extends('adminlte::page')
@section('title', 'Galeri | Tropisianimal')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Galeri</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Galeri</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid d-flex justify-content-end">
        <a name="tambah" id="tambah" class="btn btn-primary float-sm-right mb-3" role="button" data-toggle="modal" data-target="#tambah_galeri">
            <i class="fas fa-plus"></i> Tambah Galeri
        </a>
    </div>  

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-error alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="container-fluid">
        <table class="table table-striped table-bordered e">
            <thead class="table-dark">
                <tr align="center">
                    <th>No</th>
                    <th>Image</th>
                    <th>Tanggal Upload</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galeri as $row )
                <tr>
                    <td align="center" width="50px">{{ ++$i }}</td>
                    <td width="200px" align="center">
                        <img src="{{ asset('storage/' . $row->image) }}" class="img-fluid" width="150px" height="150px" alt="">
                    </td>
                    <td width="150px" align="center">{{ $row->created_at }}</td>
                    <td width="100px" align="center">
                        <a name='edit' id='edit' class='btn btn-info' href="#" role='button' data-toggle="modal" data-target="#edit_buku">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a role="button" href="#" type="submit" class="btn btn-danger" name="delete" id="delete" onclick="return confirm('Apakah Anda Yakin?')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $galeri->links() !!}
    </div>

    @include('admin.pages.add-galeri')
@endsection

@section('footer')
    <strong>Copyright &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Dito Kostolani F - Tropisianimal</a>.</strong>
    All rights reserved.
@endsection
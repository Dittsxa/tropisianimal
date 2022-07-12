@extends('adminlte::page')
@section('title', 'Berita | Tropisianimal')

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

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
@endsection

@section('content')
    <div class="container-fluid">
        <a name="tambah" id="tambah" class="btn btn-primary float-sm-right mb-3" href="" role="button" data-bs-target="#tambah_buku" data-bs-toggle="modal">&#43;  Tambah Berita</a>
            <!-- Search Box -->
        <form action="{{ url('search') }}" method="GET" id="cari">
            @csrf
            <div class="input-group mb-3">
                <input type="search" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search by Judul">
                <button class="btn btn-primary" type="submit">&#128269;</button>
            </div>
        </form>
    </div>    

    <div class="container-fluid">
        <table class="table table-striped table-bordered e">
            <thead class="table-dark">
                <tr align="center">
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal Upload</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align="center" width="50px">1</td>
                    <td width="400px">Lorem ipsum .</td>
                    <td width="150px" align="center">20/07/2022</td>
                    <td width="100px" align="center">
                        <a name='edit' id='edit' class='btn btn-info' href="#" role='button' data-bs-toggle="modal" data-bs-target="#edit_buku">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a role="button" href="#" type="submit" class="btn btn-danger" name="delete" id="delete" onclick="return confirm('Apakah Anda Yakin?')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('footer')
    <strong>Copyright &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Dito Kostolani F - Tropisianimal</a>.</strong>
    All rights reserved.
@endsection
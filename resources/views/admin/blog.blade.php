@extends('adminlte::page')
@section('title', 'Berita | Tropisianimal')
@section('plugins.Datatables', true)

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Berita</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Berita</li>
                </ol>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <div class="container-fluid d-flex justify-content-end">
        <a name="tambah" id="tambah" class="btn btn-primary float-sm-right mb-3 mx-3" href="{{ route('tambahBerita') }}" role="button" data-bs-target="#tambah_buku" data-bs-toggle="modal">
            <i class="fas fa-plus"></i> Tambah Berita
        </a>
        <form action="{{ route('cari') }}" method="GET" id="cari">
            @csrf
            <div class="input-group mb-3">
                <input type="search" name="search" value="{{ old('search') }}" class="form-control" placeholder="Search by Judul">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>    

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
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
        <table class="table table-striped table-bordered table-responsive" id="example1">
            <thead class="table-dark">
                <tr align="center">
                    <th>No</th>
                    <th>Judul</th>
                    <th>Ringkasan</th>
                    <th>Tanggal Upload</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $row )
                    <tr>
                        <td align="center" width="50px">{{ ++$i }}</td>
                        <td width="600px">{{ $row->judul }}</td>
                        <td width="350px" align="center">{!! Str::limit($row->body, $limit = 50) !!}</td>
                        <td width="250px" align="center"> {{ $row->created_at }}</td>
                        <td width="250px" align="center">
                            <a name='edit' id='edit' class='btn btn-primary mb-1' href="{{ route('viewEditBerita', $row->id) }}" role='button'>
                                <i class="fas fa-edit"></i>
                            </a>
                            <a name='edit' id='edit' class='btn btn-info mb-1' role='button' data-toggle="modal" data-target="#detail_berita{{ $row->id }}"">
                                <i class="fas fa-info-circle"></i>
                            </a>
                            <form action="{{ route('deleteBerita', $row->id) }}" method="post" class="d-inline-flex">
                                @csrf
                                @method('POST')
                                <button  type="submit" class="btn btn-danger" name="delete" id="delete" onclick="return confirm('Apakah Anda Yakin?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Opps! Data Tidak Tersedia
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endforelse
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>

    @include('admin.pages.detail-blog')
@endsection

@section('footer')
    <strong>Copyright &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.linkedin.com/in/ditokostolanii/">Dito Kostolani F - Tropisianimal</a>.</strong>
    All rights reserved.
@endsection
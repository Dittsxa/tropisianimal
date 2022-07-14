@extends('adminlte::page')
@section('title', 'Contact | Tropisianimal')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>
    </div>

@endsection
    
@section('content')   
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
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
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr align="center">
                    <th>No</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Location</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $no => $row )
                <tr>
                    <td align="center" width="50px">{{ ++$no }}</td>
                    <td width="300px">{{ $row->email }}</td>
                    <td width="100px" align="center">{{ $row->telp }}</td>
                    <td width="150px" align="center">{!! $row->location !!}</td>
                    <td width="100px" align="center">
                        <a name='edit' id='edit' class='btn btn-info' href="#" role='button' data-toggle="modal" data-target="#detail_contact{{ $row->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('admin.pages.edit-contact')
@endsection

@section('footer')
    <strong>Copyright &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Dito Kostolani F - Tropisianimal</a>.</strong>
    All rights reserved.
@endsection
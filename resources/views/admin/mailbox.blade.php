@extends('adminlte::page')
@section('title', 'Mailbox | Tropisianimal')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">Mailbox</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Mailbox</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="container-fluid d-flex justify-content-end">
        <form action="{{ route('mailbox.search') }}" method="GET" id="cari">
            @csrf
            <div class="input-group mb-3">
                <input type="search" name="search" value="{{ old('search') }}" class="form-control" placeholder="Search">
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
        <table class="table table-striped table-bordered table-responsive" id="example1"">
            <thead class="table-dark">
                <tr align="center">
                    <th width="50px">No</th>
                    <th width="400px">Name</th>
                    <th width="300px">Email</th>
                    <th width="350px">Subject</th>
                    <th colspan="2" width="150px">Action</th>
                </tr>
            </thead>
            <tbody> 
                @forelse ($mail as $i => $row )
                <tr>
                    <td width="50px" align="center">{{ ++$i }}</td>
                    <td width="400px">{{ $row->name }}</td>
                    <td width="300px" align="center">{{ $row->email }}</td>
                    <td width="350px">{{ $row->subject }}</td>
                    <td width="150px" align="center">
                        <a name='detail' id='detail' class='btn btn-info mb-1' data-toggle="modal" data-target="#detail_mail{{ $row->id }}">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        <form action="{{ route('mailbox.delete', $row->id) }}" method="post" class="d-inline-flex">
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
        {{ $mail->links() }}
    </div>

    @include('admin.pages.detail-mail')
@endsection

@section('footer')
    <strong>Copyright &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.linkedin.com/in/ditokostolanii/">Dito Kostolani F - Tropisianimal</a>.</strong>
    All rights reserved.
@endsection
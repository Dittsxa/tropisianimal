@foreach ($contact as $row )
<div class="modal fade" id="detail_contact{{ $row->id }}" tabindex="-1" aria-labelledby="detail_contact{{ $row->id }}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Edit Contact | Tropisianimal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('editContact', $row->id) }}" method="post">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $row->email }}">
                </div>
    
                <div class="form-group">
                    <label for="telp">Telp</label>
                    <input type="text" name="telp" class="form-control" value="{{ $row->telp }}">
                </div>
    
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" class="form-control" value="{!! $row->location !!}">
                </div>

                <div class="float-sm-right">
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    <a name="kembali" class="btn btn-danger" href="{{ url('/admin/contact') }}" role="button" type="reset" onclick="return confirm('Apakah Anda Yakin?')">Kembali</a>
                </div>
            </form>
        </div>
      </div>
  </div>
</div>
@endforeach
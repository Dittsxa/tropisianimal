@foreach ($galeri as $row )
<div class="modal fade" id="edit_galeri" tabindex="-1" aria-labelledby="edit_galeri" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Edit Galeri| Tropisianimal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('galeri.edit', $row->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Gambar/Thumbnail</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
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
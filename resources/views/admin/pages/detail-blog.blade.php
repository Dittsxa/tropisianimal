@foreach ( $posts as $row )
<div class="modal fade" id="detail_berita{{ $row->id }}" tabindex="-1" aria-labelledby="detailBukuModal{{ $row->id }}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Detail Berita | Tropisianimal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="id">Judul Berita</label>
                <input type="text" name="judul" class="form-control" value="{{ $row->judul }}" readonly>
            </div>

            <div class="form-group">
                <label for="judul">Isi Berita</label>
                <div name="card" class="text-justify border" style="background-color: #e9ecef;">
                    <div class="card-body">
                        <div class="card-text">
                            {!! $row->body  !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="penerbit">Gambar/Thumbnail</label>
                <div name="card" class="text-justify border" style="background-color: #e9ecef;">
                    <div class="card-body">
                        <div class="card-text">
                            <img src="{{ asset("storage/" . $row->image) }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
</div>
@endforeach
@foreach ($mail as $row )
<div class="modal fade" id="detail_mail{{ $row->id }}" tabindex="-1" aria-labelledby="detailBukuModal{{ $row->id }}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Detail Mail | Tropisianimal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $row->name }}" readonly>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="{{ $row->email }}" readonly>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control" value="{{ $row->subject }}" readonly>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <div name="card" class="text-justify border" style="background-color: #e9ecef;">
                    <div class="card-body">
                        <div class="card-text" style="padding-left: -3rem">
                            {{  $row->description   }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>
</div>
@endforeach
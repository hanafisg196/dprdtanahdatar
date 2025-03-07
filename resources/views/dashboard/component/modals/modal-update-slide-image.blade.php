<form action="{{ route('dashboard.settings.slide-image.update', $item->id) }}" method="post" id="form"
    enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modal-{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle-2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Ubah Slide</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="baner">Judul</label>
                        <small class="form-text text-danger">
                            <i class="fas fa-info-circle"></i>
                            *
                        </small>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                            name="judul" placeholder="Judul" value="{{ $item->title }}">
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('storage/' . $item->file) }}" alt="Beautiful "
                            class="img-fluid rounded shadow" style="width: 250px; object-fit: cover;">
                    </div>

                    <div class="form-group">
                        <label for="baner">Gambar</label>
                        <small class="form-text text-danger">
                            <i class="fas fa-info-circle"></i>
                            *
                        </small>
                        <input type="file" class="filepond" id="file" name="file">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" style="display: block;" id="send" class="btn btn-primary">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Ubah</span>
                    </button>
                    <button type="button" style="display: none;" id="loading" class="btn btn-primary">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Tutup</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="modal fade" id="modal-addSlideLink" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable " role="document">
        <form action="{{ route('dashboard.settings.slide-link.create') }}" method="post" id="form">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Tautan</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <small class="form-text text-danger">
                            <i class="fas fa-info-circle"></i>
                             *
                        </small>
                        <select class="choices form-select" id="kategori" name="kategori">
                            @foreach ($data['categories'] as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                <div class="form-group">
                    <label for="subnama">Title</label>
                    <small class="form-text text-danger">
                    <i class="fas fa-info-circle"></i>
                        *
                    </small>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                        name="judul" placeholder="Judul Slide" value="{{ old('judul') }}">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sublink">Link</label>
                    <small class="form-text text-danger">
                    <i class="fas fa-info-circle"></i>
                        *
                    </small>
                    <input type="text" class="form-control @error('link') is-invalid @enderror"
                        name="link" placeholder="https://">
                    @error('link')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" style="display: block;" id="send" class="btn btn-primary">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Simpan</span>
                </button>
                <button type="submit" style="display: none;" id="loading" class="btn btn-primary">
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tutup</span>
                </button>
            </div>
        </div>
        </form>
    </div>
</div>

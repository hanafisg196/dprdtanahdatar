<div class="modal fade" id="modal-addMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable " role="document">
        <form action="{{ route('dashboard.settings.menu.create') }}" method="post" id="form">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Menu</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Nama menu</label>
                    <small class="form-text text-danger">
                    <i class="fas fa-info-circle"></i>
                        *
                    </small>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="judul"
                        name="nama" placeholder="Nama Menu" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-4 mb-4">
                    <div class="form-group">
                        <label for="type">Tipe</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipe" id="singleMenu"
                                value=0 {{ old('tipe') == 0 ? 'checked' : '' }}>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Single Menu
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipe" id="multipleMenu"
                                value=1 {{ old('tipe') == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Multiple Menu
                            </label>
                         </div>
                    </div>
                 </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <small class="form-text text-danger">
                    <i class="fas fa-info-circle"></i>
                        *
                    </small>
                    <input type="text" class="form-control @error('link') is-invalid @enderror" id="extraInput"
                        name="link" placeholder="https://" value="">
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
                    <span class="d-none d-sm-block">Ubah</span>
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

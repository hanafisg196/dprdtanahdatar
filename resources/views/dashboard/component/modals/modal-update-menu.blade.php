<div class="modal fade" id="modal-updateMenu-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle-1"
    aria-hidden="true">
    <form action="{{ route('dashboard.settings.menu.update', $item->id) }}" method="post" id="form">
        @csrf
    <div class="modal-dialog modal-dialog-scrollable " role="document">
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
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        name="nama" placeholder="Nama Menu" value="{{ $item->name }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="specialForm">
                    <div class="col-md-12 mb-4">
                        <div class="form-group">
                            <label for="type">Tipe</label>
                            <div class="form-check">
                                <input class="form-check-input singleMenuUpdate" type="radio" name="tipe" value="0"
                                    {{ $item->type == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="singleMenuUpdate">
                                    Single Menu
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input multipleMenuUpdate" type="radio" name="tipe" value="1"
                                    {{ $item->type == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="multipleMenuUpdate">
                                    Multiple Menu
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <small class="form-text text-danger">
                                <i class="fas fa-info-circle"></i> *
                            </small>
                            <input type="text" class="form-control dataInput @error('link') is-invalid @enderror"
                                name="link" placeholder="https://" value=""  data-id="{{ $item->link === '#' ? '' : $item->link }}">
                            @error('link')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
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
    </div>
    </form>
</div>
@include('dashboard.component.disable-input-update')

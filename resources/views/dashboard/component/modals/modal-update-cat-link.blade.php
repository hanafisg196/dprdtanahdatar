<div class="modal fade" id="updateCatLink-{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" style="max-height: 80vh;" role="document">
     <form action="{{ route('dashboard.settings.link.category.update', $category->id) }}" method="post" id="form">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Ubah Tautan</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="subnama">Nama</label>
                    <small class="form-text text-danger">
                    <i class="fas fa-info-circle"></i>
                        *
                    </small>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        name="nama" placeholder="Nama Kategori" value="{{$category->name}}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" style="display:block;" id="send" class="btn btn-primary">
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

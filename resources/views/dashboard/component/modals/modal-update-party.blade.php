<div class="modal fade" id="updateParty-{{ $party->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable " role="document">
    <form action="{{ route('dashboard.party.update', $party->id) }}" method="post" id="form">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Update Partai</h5>
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
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="name"
                        name="nama" placeholder="Nama anda" value="{{$party->name}}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="subnama">Update</label>
                    <small class="form-text text-danger">
                        <i class="fas fa-info-circle"></i>
                        *
                    </small>
                    <input type="text" class="form-control @error('singkatan') is-invalid @enderror" id="name"
                        name="singkatan" placeholder="Nama anda" value="{{$party->initial}}">
                    @error('singkatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <label for="profile">Logo</label>
                    <div class="form-group d-flex justify-content-center">
                        @if ($party->images)
                        <img src="{{asset('storage/' . $party->images->image) }}" alt="Profile"
                        width="150px;" height="150px;" style="object-fit: cover;">
                        @else
                        <img src="{{asset('/dist/assets/compiled/png/user.png') }}" alt="Profile"
                        width="150px;" height="150px;" style="object-fit: cover;">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="profile">Perbarui Logo</label>
                        <input type="file" class="filepond" id="file" name="file">
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

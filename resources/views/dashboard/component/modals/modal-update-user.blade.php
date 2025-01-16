<div class="modal fade" id="updateUser-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable " role="document">
        <form action="{{ route('dashboard.usermanager.update', $user->id) }}" method="post" id="form">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Perbarui Pengguna</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="opd">OPD</label>
                        <small class="form-text text-danger">
                            <i class="fas fa-info-circle"></i>
                                *
                        </small>
                        <select class="choices form-select" id="opd" name="opd">
                            @foreach ($users['opds'] as $opd)
                            @if (old('opd', $user->id) == $opd->id)
                            <option value="{{ $opd->id }}" selected>{{ $opd->nama_opd }}</option>
                        @else
                            <option value="{{ $opd->id }}">{{ $opd->nama_opd }}</option>
                        @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <h6>Role
                            <small class="form-text text-danger">
                                <i class="fas fa-info-circle"></i>
                                *
                            </small>
                        </h6>
                        <div class="form-check">
                            <input class="form-check-input @error('role') is-invalid @enderror" type="radio"
                                name="role" id="updateMember" value="2"
                                {{ old('role', $user->roles->contains('id', 2) ? 2 : null) == 2 ? 'checked' : '' }}>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Member
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input @error('role') is-invalid @enderror" type="radio"
                                name="role" id="updateAdmin" value="1"
                                {{ old('role', $user->roles->contains('id', 1) ? 1 : null) == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Admin
                            </label>
                            @error('role')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subnama">Nama</label>
                        <small class="form-text text-danger">
                            <i class="fas fa-info-circle"></i>
                            *
                        </small>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" placeholder="Nama anda" value="{{$user->name}}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sublink">Username</label>
                        <small class="form-text text-danger">
                            <i class="fas fa-info-circle"></i>
                            *
                        </small>
                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                            name="username" placeholder="Username anda" value="{{$user->username}}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sublink">Email</label>
                        <small class="form-text text-danger">
                            <i class="fas fa-info-circle"></i>
                            *
                        </small>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            placeholder="emailanda@gmail.com" value="{{$user->email}}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <label for="profile">Foto</label>
                    <div class="form-group d-flex justify-content-center">
                        @if ($user->images)
                        <img src="{{asset('storage/' . $user->images->image) }}" alt="Profile"
                        width="100px;" height="100px;" style="border-radius: 50%; object-fit: cover;">
                        @else
                        <img src="{{asset('/dist/assets/compiled/png/user.png') }}" alt="Profile"
                        width="100px;" height="100px;" style="border-radius: 50%; object-fit: cover;">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="profile">Perbarui Foto</label>
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

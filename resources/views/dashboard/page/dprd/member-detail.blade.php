@extends('dashboard.template.main')
@section('content')
@include('dashboard.component.floating-button')
<style>
    .float{
        right: 80px;
    }
</style>
    <section class="section">
        <form action="{{route('dashboard.member.update', $member->id)}}" method="post" id="form" enctype="multipart/form-data">
            @csrf
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center  mb-4" style="padding-left: 18%">
                <h4 class="card-title d-flex">
                    <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Perbarui Anggota
                </h4>
            </div>
            <div class="card-body" style="margin-top: -20px;">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 mb-4">
                        <div class="form-group">
                            <label for="sublink">Nama</label>
                            <small class="form-text text-danger">
                                <i class="fas fa-info-circle"></i>
                                *
                            </small>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                name="nama" placeholder="" value="{{ $member->nama }}">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-6">
                            <div class="form-group">
                                <label for="partai">Partai</label>
                                <small class="form-text text-danger">
                                    <i class="fas fa-info-circle"></i>
                                        *
                                </small>
                                <select class="choices form-select" id="partai" name="partai">
                                    @foreach ($parties as $party)
                                        @if (old('partai', $member->id) == $party->id)
                                            <option value="{{ $party->id }}" selected>{{ $party->name }}</option>
                                        @else
                                            <option value="{{ $party->id }}">{{ $party->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                         </div>
                        <div class="form-group">
                            <label for="sublink">Lahir</label>
                            <small class="form-text text-danger">
                                <i class="fas fa-info-circle"></i>
                                *
                            </small>
                            <input type="text" class="form-control @error('lahir') is-invalid @enderror"
                                name="lahir" placeholder="" value="{{ $member->lahir }}">
                            @error('lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="cat_id">Status</label>
                                <small class="form-text text-danger">
                                    <i class="fas fa-info-circle"></i>
                                    *
                                </small>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="flexRadioStatusNo"
                                        value="anggota" {{ old('status', $member->status) == 'anggota' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioStatusNo">
                                        Anggota
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="flexRadioStatusYes"
                                        value="ketua" {{ old('status', $member->status) == 'ketua' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioStatusYes">
                                        Ketua
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="flexRadioStatusYes"
                                        value="wakil ketua" {{ old('status', $member->status) == 'wakil ketua' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioStatusYes">
                                        Wakil Ketua
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <div style="padding-bottom: 10px;">
                                <livewire:detach-jabatan :jabatanId="$member->id" />
                            </div>
                            <label for="jabatan">Tambah Jabatan</label>
                            <div class="form-group with-title mb-3">
                                <textarea name="tags" rows="3" class="form-control @error('tags') is-invalid @enderror" placeholder="ex: Jabatan 1, Jabatan 2, Jabatan 3"></textarea>
                                @error('tags')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            @error('tags')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="sublink">Agama</label>
                            <small class="form-text text-danger">
                                <i class="fas fa-info-circle"></i>
                                *
                            </small>
                            <input type="text" class="form-control @error('agama') is-invalid @enderror"
                                name="agama" placeholder="" value="{{ $member->agama }}">
                            @error('agama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="dapil">Daerah Pemilihan</label>
                            <small class="form-text text-danger">
                                <i class="fas fa-info-circle"></i>
                                *
                            </small>
                            <input type="text" class="form-control @error('dapil') is-invalid @enderror"
                                name="dapil" placeholder="" value="{{ $member->dapil }}">
                            @error('dapil')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="profile">Foto</label>
                            <div class="form-group d-flex justify-content-center">
                                @if ($member->images)
                                <img src="{{asset('storage/' . $member->images->image) }}" alt="Profile"
                                width="200px;" height="220px;" style="object-fit: cover;">
                                @else
                                <img src="{{asset('/dist/assets/compiled/png/user.png') }}" alt="Profile"
                                width="150px;" height="150px;" style=" object-fit: cover;">
                                @endif
                            </div>
                            <label for="profile">Ganti Foto</label>
                            <input type="file" class="filepond" id="file" name="file">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="float" style="display: block" type="submit" id="send">
            <i class="bi bi-floppy-fill" style="font-size: 1.3rem"></i>
        </button>
        <button class="float" style="display: none" type="button" id="loading" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        </button>
        </form>
    </section>
@endsection
@include('dashboard.component.filepond')

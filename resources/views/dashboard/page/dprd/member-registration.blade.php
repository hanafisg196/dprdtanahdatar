@extends('dashboard.template.main')
@section('content')
@include('dashboard.component.floating-button')
<style>
    .float{
        right: 80px;
    }
</style>
    <section class="section">
        <form action="{{ route('dashboard.member.create') }}" method="post" id="form" enctype="multipart/form-data">
            @csrf
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center  mb-4" style="padding-left: 18%">
                <h4 class="card-title d-flex">
                    <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Registrasi Anggota
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
                                name="nama" placeholder="Nama anggota">
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
                                        <option value="{{ $party->id }}">{{ $party->name }}</option>
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
                                name="lahir" placeholder="ex : Tempat, Tanggal Bulan Tahun ">
                            @error('lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Jabatan</label>
                            <textarea name="tags" rows="3" class="form-control @error('description') is-invalid @enderror" placeholder="ex: Jabatan 1, Jabatan 2, Jabatan 3"></textarea>
                            @error('description')
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
                                name="agama" placeholder="ex: Islam">
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
                                name="dapil" placeholder="ex: Daearah Pemilihan Satu">
                            @error('dapil')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="profile">Foto</label>
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

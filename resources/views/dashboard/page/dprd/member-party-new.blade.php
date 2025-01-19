@extends('dashboard.template.main')
@section('content')
@include('dashboard.component.floating-button')
<style>
    .float{
        right: 80px;
    }
</style>
    <section class="section">
        <form action="{{ route('dashboard.party.create') }}" method="post" id="form" enctype="multipart/form-data">
            @csrf
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center  mb-4" style="padding-left: 18%">
                <h4 class="card-title d-flex">
                    <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Form Tambah Partai
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
                                name="nama" placeholder="ex : Partai Contoh Satu">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sublink">Singkatan</label>
                            <small class="form-text text-danger">
                                <i class="fas fa-info-circle"></i>
                                *
                            </small>
                            <input type="text" class="form-control @error('singkatan') is-invalid @enderror"
                                name="singkatan" placeholder="ex : PCS">
                            @error('singkatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo</label>
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

@extends('dashboard.template.main')
@section('content')
@include('dashboard.component.floating-button')
<style>
    .float{
        right: 80px;
    }
</style>
    <section class="section">
        <form action="{{ route('dashboard.usermanager.register') }}" method="post" id="form" enctype="multipart/form-data">
            @csrf
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center  mb-4" style="padding-left: 18%">
                <h4 class="card-title d-flex">
                    <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Form Registrasi
                </h4>
            </div>
            <div class="card-body" style="margin-top: -20px;">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 mb-4">
                        <div class="form-group">
                            <h6>Role
                                <small class="form-text text-danger">
                                    <i class="fas fa-info-circle"></i>
                                    *
                                </small>
                            </h6>
                            <div class="form-check">
                                <input class="form-check-input @error('role') is-invalid @enderror" type="radio"
                                    name="role" id="addMember" value="2" {{ old('role') == 2 ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Member
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('role') is-invalid @enderror" type="radio"
                                    name="role" id="addAdmin" value="1" {{ old('role') == 1 ? 'checked' : '' }}>
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
                                name="name" placeholder="Nama anda" value="{{ old('name') }}">
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
                                name="username" placeholder="Username anda" value="{{ old('username') }}">
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
                                placeholder="emailanda@gmail.com" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sublink">Password</label>
                            <small class="form-text text-danger">
                                <i class="fas fa-info-circle"></i>
                                *
                            </small>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" placeholder="Password">
                            @error('password')
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

@extends('dashboard.template.main')
@section('content')
@include('dashboard.component.floating-button-action')
<section class="section">
    <div class="row">
        <div class="col-12">
            @if (session()->has('errors'))
            <div class="alert alert-light-danger color-danger">
                <i class="bi bi-exclamation-circle"></i>
                Terjadi kesalahan saat menambahkan atau memperbarui data
            </div>
            @endif
            <div class="card-header d-flex justify-content-between align-items-center  mb-4">
                <h4 class="card-title d-flex">
                    <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Manajemen Anggota
                </h4>
                <a class="btn btn-md btn-primary" href="{{ route('dashboard.member.register') }}">
                   Tambah
                </a>
            </div>
            </div>
         </div>
    @include('dashboard.component.alert-delete')
</section>
@endsection
@include('dashboard.component.filepond')

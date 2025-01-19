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
                    <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Manajemen Pengguna
                </h4>
                <a class="btn btn-sm btn-primary" href="{{ route('dashboard.usermanager.create.form') }}">
                   Tambah
                </a>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($parties as $party)
                <div class="col">
                    <div class="card h-100 position-relative">
                      <img src="{{ asset('/dist/assets/compiled/png/profile_background.png') }}" class="card-img-top" alt="Palm Springs Road" />
                      <div class="profile-image">
                        @if ($party->images)
                        <img src="{{ asset('storage/'. $party->images->image) }}" class="rounded-circle" alt="Profile">
                        @else
                        <img src="{{ asset('/dist/assets/compiled/png/user.png') }}" class="rounded-circle" alt="Profile">
                        @endif
                      </div>
                        <div class="floating-buttons-action">
                        <form id="{{$party->id }}"
                            action="{{ route('dashboard.usermanager.delete', $party->id) }}"
                            method="POST">
                            @csrf
                        </form>
                        <button type="button" class="btn btn-success btn-sm"
                         data-bs-toggle="modal" data-bs-target="#updateUser-{{ $party->id }}">
                        <i class="bi bi-pencil"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm"
                            onclick="confirmDelete('{{ $party->id }}')">
                            <i class="bi bi-trash"></i>
                        </button>
                        </div>
                      <div class="card-body text-center" style="margin-top: -10px;">
                        <h6 class="card-title">{{ $party->name }}</h6>
                        <p class="card-text">{{ $party->email }}</p>
                        <p class="card-text" style="margin-top: -15px">{{ $user->opds->nama_opd }}</p>
                      </div>
                    </div>
                  </div>
                  @include('dashboard.component.modals.modal-update-user')
                @endforeach
              </div>
            </div>
         </div>
         {{ $users['users']->links() }}
    @include('dashboard.component.alert-delete')
</section>
@endsection
@include('dashboard.component.filepond')

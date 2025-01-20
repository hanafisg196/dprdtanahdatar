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
                    <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Partai
                </h4>
                <a class="btn btn-md btn-primary" href="{{ route('dashboard.party.new') }}">
                   Tambah
                </a>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
          @foreach ($parties as $party)
          <div class="col">
            <div class="card h-100" style="position: relative;">
                <img src="{{ asset('storage/' . $party->images->image) }}" class="card-img-top" alt="Logo Partai 1">
                <div style="position: absolute; top: 10px; right: 10px; z-index: 10;">
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#updateParty-{{$party->id}}"><i class="bi bi-pencil-square"></i></button>
                    <form id="{{$party->id }}"
                        action="{{ route('dashboard.party.delete', $party->id) }}"
                        method="POST">
                        @csrf
                    </form>
                    <button class="btn btn-sm btn-danger" onclick="confirmDelete('{{ $party->id }}')"><i class="bi bi-trash"></i></button>
                </div>
                <div class="card-body" style="margin-top: -10px;">
                    <h6>{{$party->name}}</h6>
                    <h5>{{$party->initial}}</h5>
                </div>
            </div>
           </div>
           @include('dashboard.component.modals.modal-update-party')
          @endforeach
        </div>
         </div>
         @include('dashboard.component.alert-delete')
</section>
@endsection
@include('dashboard.component.filepond')

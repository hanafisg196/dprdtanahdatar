@extends('dashboard.template.main')
@section('content')

<div id="page" class="page-content" style="display: none;">
        <div class="col-md-12">
            <div class="card widget-todo">
                <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                    <h4 class="card-title d-flex">
                        <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Slide Gambar
                    </h4>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-add">
                       Tambah
                    </button>
                </div>
                @include('dashboard.component.modals.modal-form-slide-image')
                <div class="card-body px-0 py-1 overflow-auto m-2">
                    @if ($slide->isEmpty())
                    <div class="d-flex justify-content-center mb-5 mt-5">
                        <p>Tidak ada data</p>
                    </div>
                    @else
                    @foreach ($slide as $item)
                    <ul class="widget-todo-list-wrapper" id="widget-todo-list">
                        <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                            <div class="widget-todo-title-area d-flex align-items-center gap-2">
                                <img src="{{ asset('storage/' . $item->file) }}"
                                     alt="Task"
                                     class="todo-item-img"
                                     style="width: 200px; object-fit: cover;">
                                <label for="checkbox-1" class="widget-todo-title ms-2">{{$item->title}}</label>
                            </div>
                            <div class="widget-todo-item-action d-flex align-items-center gap-2">
                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modal-{{ $item->id }}"><i class="bi bi-pencil-square"></i></button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $item->id }})">
                                <i class="bi bi-trash-fill"></i>
                               </button>
                               <form id="{{ $item->id }}" action="{{ route('dashboard.settings.slide-image.delete', $item->id) }}" method="POST">
                                 @csrf
                               </form>
                            </div>
                        </div>
                    </ul>
                    @include('dashboard.component.alert-delete')
                    @include('dashboard.component.modals.modal-update-slide-image')
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@include('placeholder.component.circle-loading-center')
@include('placeholder.script.loader-script')
@include('dashboard.component.buttonloading')
@endsection
@section('script')
@include('dashboard.component.filepond')
@endsection

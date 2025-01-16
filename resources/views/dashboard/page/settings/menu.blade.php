@extends('dashboard.template.main')
@section('content')
<div id="page" class="page-content" style="display: none;">
     <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                    @if (session()->has('errors'))
                    <div class="alert alert-light-danger color-danger"><i class="bi bi-exclamation-circle"></i>
                        Terjadi kesalahan saat menambahkan atau memperbarui data
                    </div>
                    @endif
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title d-flex">
                            <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Menu
                        </h4>
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-addMenu">
                            Tambah
                        </button>
                        @include('dashboard.component.modals.modal-add-menu')
                    </div>
                    <div class="card-content" style="margin-top: -4%">
                        <div class="card-body">
                            @if ($menus->isEmpty())
                                <div class="d-flex justify-content-center">
                                    <p>Tidak ada data</p>
                                </div>
                            @else
                                @foreach ($menus as $item)
                                    @if ($item->type == 0)
                                         @include('dashboard.component.accordion.menu-dropdown-single')
                                    @else
                                         @include('dashboard.component.accordion.menu-dropdown-multiple')
                                    @endif
                                    @include('dashboard.component.modals.modal-add-submenu')
                                    @include('dashboard.component.modals.modal-update-menu')
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            {{$menus->links()}}
            @include('dashboard.component.disable-input')
        </div>
     </div>
</div>
@include('placeholder.component.circle-loading-center')
@include('placeholder.script.loader-script')
@include('dashboard.component.alert-delete')
@endsection

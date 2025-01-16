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
                            <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Tautan
                        </h4>
                    </div>
                    <ul class="nav nav-tabs mb-4 mt-1 ms-2" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="list-ecor" data-bs-toggle="tab" href="#link"
                                role="tab" aria-controls="list" aria-selected="true">Tautan</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link " id="form-ecor" data-bs-toggle="tab" href="#category"
                             role="tab" aria-controls="form" aria-selected="true">Kategori Tautan</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="link" role="tabpanel"
                            aria-labelledby="table-tab">
                            <div class="col-11 text-end">
                            <a href="{{ route('dashboard.settings.link.addFrom') }}" class="btn btn-sm btn-primary" >
                                Tambah
                            </a>
                            </div>
                            <div class="col-12">
                                <div class="card ms-2 me-2">
                                    <div class="card-content">
                                        <!-- table striped -->
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Link</th>
                                                        <th>Kategori</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td class="text-bold-500"title="{{ $item->title }}">{{ wordLimiter($item->title,30) }}</td>
                                                            <td><a href="{{$item->link }}">
                                                                {{ wordLimiter($item->link,30) }}
                                                                </a>
                                                            </td>
                                                            <td>{{ $item->categories->name }}</td>
                                                            <td>
                                                                <button type="button" class="btn btn-sm btn-success"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#updateLink-{{$item->id}}">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-sm"
                                                                    onclick="confirmDelete('{{ $item->id }}')">
                                                                    <i class="bi bi-trash"></i>
                                                                </button>
                                                                <form id="{{ $item->id }}"
                                                                    action="{{ route('dashboard.settings.link.delete', $item->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        @include('dashboard.component.modals.modal-link-update')
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            @if ($data->isEmpty())
                                                <div class="d-flex justify-content-center mt-5">
                                                    <p>Tidak ada data</p>
                                                </div>
                                            @endif
                                        </div>
                                        {{ $data->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="category" role="tabpanel" aria-labelledby="table-tab">
                            <div class="col-12" style="margin-top: -2%">
                                    <div class="card">
                                        <div class="card-header">
                                            <form class="d-flex align-items-center" action="{{ route('dashboard.settings.link.category.create') }}" method="POST">
                                                @csrf
                                                <div class="form-group mb-0 me-2" style="width: 40%;">
                                                    <label for="nama" class="me-2">Nama</label>
                                                    <input  type="text" class="form-control" id="nama" name="nama">
                                                </div>
                                                <button class="btn btn-md btn-primary" type="submit" style="margin-top: 25px;">Tambah</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-12" style="margin-top: -5%">
                                <div class="card ms-2 me-2">
                                    <div class="card-content">
                                        <!-- table striped -->
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Kategori</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($categories as $category)
                                                        <tr>
                                                            <td class="text-bold-500">{{ $category->name }}</td>
                                                            <td>
                                                                <button type="button" class="btn btn-sm btn-success"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#updateCatLink-{{$category->id}}">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger btn-sm"
                                                                    onclick="confirmDelete('{{ $category->id }}')">
                                                                    <i class="bi bi-trash"></i>
                                                                </button>
                                                                <form id="{{ $category->id }}"
                                                                    action="{{ route('dashboard.settings.link.category.delete', $category->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                </form>
                                                            </td>
                                                         </tr>
                                                        @include('dashboard.component.modals.modal-update-cat-link')
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            @if ($data->isEmpty())
                                                <div class="d-flex justify-content-center mt-5">
                                                    <p>Tidak ada data</p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('placeholder.component.circle-loading-center')
@include('placeholder.script.loader-script')
@include('dashboard.component.alert-delete')
@include('dashboard.component.tab-active-session')
@endsection




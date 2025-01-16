@extends('dashboard.template.main')
@section('content')
@include('dashboard.component.floating-button-action')
<div class="page-heading d-flex justify-content-between align-items-center">
        <h5 class="ms-2">Pengumuman</h5>
        <a href="{{ route('dashboard.pengumuman.form') }}" class="btn btn-primary btn-md" style="margin-left: 10px;">
            <i class="bi bi-plus-lg"></i>&nbsp;Buat Pengumuman
        </a>
    </div>
    <div id="page" class="page-content" style="display:none">
    <div class="container d-flex justify-content-center">
        <div class="row">
            @if ($data->isEmpty())
            @include('placeholder.component.empty-data')
            @else
            @foreach ($data as $item)
            <div class="{{ count($data) == 1 ? 'col-xl-8' : 'col-xl-4 col-md-6 col-sm-12' }}">
                <div class="card position-relative">
                    <div class="card-content">
                        <div class="status-label shadow p-1 bg-body rounded position-absolute top-0 start-0 m-2"
                        style="font-size: 0.7rem">
                        {{ $item->status == 0 ? 'Belum Dipublikasi' : 'Dipublikasikan' }}
                        </div>
                        <img src="{{asset('dist/assets/compiled/jpg/anouncement.jpg')}}" class="card-img-top img-fluid" alt="singleminded">
                        <div class="floating-buttons-action">
                            <a href="{{ route('dashboard.pengumuman.show', encrypt($item->id)) }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            {{-- <a href="#" class="btn btn-primary btn-sm">
                                <i class="bi bi-eye-fill"></i>
                            </a> --}}
                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete('{{ encrypt($item->id) }}')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <p class="card-text" style="font-size: 0.8rem">{!! wordLimiter($item->title, 40) !!}</p>
                            <form id="{{ encrypt($item->id)}}" action="{{ route('dashboard.pengumuman.delete', encrypt($item->id)) }}" method="POST">
                                @csrf
                                <div class="d-flex justify-content-between align-items-center">
                                <label for="status" style=" font-size: 0.8rem; display: flex; justify-content: end;">Di posting - {{dateFormat($item->created_at)}}</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush"></ul>
                </div>
            </div>
            @endforeach
            {{ $data->links() }}
            @endif
        </div>
    </div>
    </div>
    @include('placeholder.component.card')
    @include('placeholder.script.loader-script')
    @include('dashboard.component.alert-delete')
@endsection

@extends('dashboard.template.main')
@section('content')
    @include('dashboard.component.floating-button')
    <form action="{{route('dashboard.pengumuman.create')}}" method="post" id="form" enctype="multipart/form-data">
        @csrf
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <small class="form-text text-danger">
                                    <i class="fas fa-info-circle"></i>
                                        *
                                </small>
                                <select class="choices form-select" id="kategori" name="kategori">
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="cat_id">Status</label>
                                <small class="form-text text-danger">
                                    <i class="fas fa-info-circle"></i>
                                        *
                                </small>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value= 0
                                        {{ old('status') == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Tidak Dulu
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value= 1
                                        {{ old('status') == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Publikasikan
                                    </label>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <small class="form-text text-danger">
                                    <i class="fas fa-info-circle"></i>
                                        *
                                </small>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                    id="judul" name="judul" placeholder="Judul Pengumuman" value="{{ old('judul') }}">
                                @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="description">Deskripsi Pendek <span class="text-muted">(Opsional)</span></label>
                                <small class="form-text text-secondary">
                                    <i class="fas fa-info-circle"></i>
                                    Fitur ini membantu memudahkan konten Anda ditemukan di mesin pencarian seperti
                                    Google.
                                </small>
                                <textarea name="description" rows="3" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="description">Keyword <span class="text-muted">(Opsional)</span></label>
                                <small class="form-text text-secondary">
                                    <i class="fas fa-info-circle"></i>
                                    Fitur ini membantu memudahkan konten Anda ditemukan di mesin pencarian seperti
                                    Google.
                                </small>
                                <input class="form-control @error('keyword') is-invalid @enderror"
                                    id="choices-text-remove-button" name="keyword" type="text"
                                    value="{{ old('keyword') }}" placeholder="Enter something"/>
                                @error('keyword')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Konten
                        <small class="form-text text-danger">
                            <i class="fas fa-info-circle"></i>
                                *
                        </small>
                    </h4>
                </div>
                <div class="card-body">
                    <textarea name="konten" rows="40" class="form-control my-editor @error('konten') is-invalid @enderror">{{ old('konten') }}</textarea>
                    @error('konten')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

        </section>
        <button class="float" style="display: block" type="submit" id="send">
            <i class="bi bi-floppy-fill" style="font-size: 1.3rem"></i>
        </button>
        <button class="float" style="display: none" type="button" id="loading" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        </button>
    </form>
    @include('dashboard.component.buttonloading')
    @include('dashboard.component.choices-script')
@endsection


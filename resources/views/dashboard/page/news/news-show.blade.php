@extends('dashboard.template.main')
@section('content')
    @include('dashboard.component.floating-button')
    <form action="{{ route('dashboard.news.post.update', encrypt($data->id)) }}" method="post" id="form"
        enctype="multipart/form-data">
        @csrf
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <label for="cat_id">Kategori</label>
                                <small class="form-text text-danger">
                                    <i class="fas fa-info-circle"></i>
                                        *
                                </small>
                                <select class="choices form-select" id="kategori" name="kategori">
                                    @foreach ($category as $item)
                                        @if (old('kategori', $data->cat_id) == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endif
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
                                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2"
                                        value="0" {{ old('status', $data->status) == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Tidak Dulu
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1"
                                        value="1" {{ old('status', $data->status) == 1 ? 'checked' : '' }}>
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
                                <input type="text" class="form-control" id="judul" value="{{ $data->title }}"
                                    name="judul" placeholder="Judul Berita">
                            </div>
                        </div>
                        <div>
                            <label for="baner">Cover</label>
                            <small class="form-text text-danger">
                                <i class="fas fa-info-circle"></i>
                                    *
                            </small>
                            <div class="form-group">
                                <div style="display: flex;justify-content:center;">
                                    @if ($data->images)
                                    <img class="img-fluid rounded shadow mb-2" id="image" alt="Banner"
                                    src="{{ asset('storage/' . $data->images->image) }}" style="max-width: 100%; height: 500px;" />
                                    @else
                                    <img class="img-fluid rounded shadow mb-2" id="image" alt="Banner"
                                     src="{{ asset('dist/assets/compiled/png/broken.png') }}" style="max-width: 100%; height: 500px;" />
                                    @endif
                                </div>
                                <label for="file">Ubah</label>
                                <input type="file" class="filepond" id="file" name="file">
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="description">Deskripsi Pendek <span class="text-muted">(Opsional)</span></label>
                                    <small class="form-text text-secondary">
                                        <i class="fas fa-info-circle"></i>
                                        Fitur ini membantu memudahkan konten Anda ditemukan di mesin pencarian seperti
                                        Google.
                                    </small>
                                    <textarea name="description" rows="3" class="form-control @error('description') is-invalid @enderror">{{$data->description}}</textarea>
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
                                        value="{{ $data->keyword }}" placeholder="Enter something"/>
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
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Konten
                        <small class="form-text text-danger">
                            <i class="fas fa-info-circle"></i>
                                *
                        </small>
                    </h5>

                </div>

                <div class="card-body">
                    <textarea name="konten" rows="40" class=" form-control my-editor @error('konten') is-invalid @enderror">
                {{ $data->body }}
                </textarea>
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
@include('dashboard.component.filepond')

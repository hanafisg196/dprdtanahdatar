@extends('dashboard.template.main')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Tautan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('dashboard.settings.link.create') }}" method="post" name="addLink">
                    @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput">Nama</label>
                            <input type="text" class="form-control" id="basicInput" name="title" placeholder="Masukan nama">
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Link</label>
                            <input type="text" class="form-control" id="basicInput" name="link" placeholder="http://example.com">
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group" style="margin-top:-12px;">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="choices form-select" id="category" name="category">
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-sm btn-primary">
                            <i class="bi bi-save"></i> Simpan
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
@endsection

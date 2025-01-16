@extends('dashboard.template.main')
@section('content')
    @include('dashboard.component.floating-button')
    <form action="{{route('dashboard.agenda.update', encrypt($data->id))}}" method="post" id="form"
        enctype="multipart/form-data">
        @csrf
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="form-group">
                                <h6>Kategori
                                    <small class="form-text text-danger">
                                        <i class="fas fa-info-circle"></i>
                                            *
                                    </small>
                                </h6>
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
                                <h6>Status
                                    <small class="form-text text-danger">
                                        <i class="fas fa-info-circle"></i>
                                            *
                                    </small>
                                </h6>
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
                        <div class="row">
                            <h6>Agenda
                                <small class="form-text text-danger">
                                    <i class="fas fa-info-circle"></i>
                                        *
                                </small>
                            </h6>
                            <div class="col-md-8" style="margin-top: -5px;">
                                <div class="form-group">
                                    <input type="agenda" class="form-control @error('agenda') is-invalid @enderror"
                                    id="agenda" name="agenda" placeholder="Agenda yang akan di lakukan" value="{{$data->title}}">
                                    @error('agenda')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <h6>Tanggal dan Waktu
                                <small class="form-text text-danger">
                                    <i class="fas fa-info-circle"></i>
                                        *
                                </small>
                            </h6>
                            <div class="col-md-5" style="margin-top: -5px;">
                                <div class="form-group">
                                   <label for="mulai">Mulai</label>
                                   <input type="datetime-local" class="form-control @error('mulai') is-invalid  @enderror"
                                   id="mulai" name="mulai" value="{{$data->waktu_mulai}}">
                                   @error('mulai')
                                   <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                   @enderror
                                </div>
                                <div class="form-group" style="margin-top: -10px;">
                                    <label for="selesai">Sampai dengan</label>
                                    <input type="datetime-local" class="form-control @error('selesai') is-invalid  @enderror"
                                    id="selesai" name="selesai" value="{{$data->waktu_selesai}}">
                                    @error('selesai')
                                    <div class="invalid-feedback">
                                     {{ $message }}
                                     </div>
                                    @enderror
                                 </div>
                             </div>
                            <div class="col-md-8">
                                <h6>Tempat
                                    <small class="form-text text-danger">
                                        <i class="fas fa-info-circle"></i>
                                            *
                                    </small>
                                </h6>
                                <div class="form-group" style="margin-top: -5px;">
                                    <input type="text" class="form-control @error('tempat') is-invalid @enderror"
                                    id="tempat" name="tempat" placeholder="Tempat Atau Lokasi Agenda" value="{{$data->tempat}}">
                                    @error('tempat')
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
        </section>
        <button class="float" style="display: block" type="submit" id="send">
            <i class="bi bi-floppy-fill" style="font-size: 1.3rem"></i>
        </button>
        <button class="float" style="display: none" type="button" id="loading" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        </button>
    </form>
    @include('dashboard.component.buttonloading')
@endsection


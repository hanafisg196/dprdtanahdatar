@extends('dprdtd.template.main')
@section('content')
<style>
    .profile-row {
        display: flex;
        align-items: flex-start; /* Elemen di atas */
        justify-content: space-between; /* Jarak kiri dan kanan */
    }

    .photo-img {
        max-width: 300px;
        height: auto; /* Jaga rasio gambar */
        object-fit: cover; /* Pastikan gambar terlihat rapi */
    }
</style>
    <div class="breadcrumbs">
        <div class="container">
            <a href="{{ route('home') }}">Beranda</a><i
                class="fa fa-long-arrow-right main-color"></i><span>{{ $memberDetail->nama }}</span>
        </div>
    </div>
    <div class="container" style="margin-top: 5px;">
        <div class="row">
            <!-- Profil Kiri -->
            <div class="col-md-8">
                <!-- Nama Besar -->
                <div class="name">
                    <h2>{{ $memberDetail->nama }}</h2>
                </div>
                <!-- Jabatan dan Detail -->
                <div>
                    <h3 style="display: flex; align-items: flex-start; font-size: 20px;">
                        <span style="min-width: 150px;">Jabatan</span>
                        <span style="margin-left: 10px;">:</span>
                        <span style="margin-left: 10px;">
                            @foreach ($memberDetail->tags as $jabatan)
                                <span style="display: inline-block; padding: 5px 10px; border-radius: 5px;">
                                    {{ $jabatan->name ?: 'Belum Di Isi' }}
                                </span>
                            @endforeach
                        </span>
                    </h3>
                </div>
                <div>
                    <h3 style="display: flex; align-items: flex-start; font-size: 20px;">
                        <span style="min-width: 150px;">Nama Lengkap</span>
                        <span style="margin-left: 10px;">:</span>
                        <span style="margin-left: 10px;">{{ $memberDetail->nama ?: 'Belum Di Isi' }}</span>
                    </h3>
                </div>
                <div>
                    <h3 style="display: flex; align-items: flex-start; font-size: 20px;">
                        <span style="min-width: 150px;">Lahir</span>
                        <span style="margin-left: 10px;">:</span>
                        <span style="margin-left: 10px;">{{ $memberDetail->lahir ?: 'Belum Di Isi' }}</span>
                    </h3>
                </div>
                <div>
                    <h3 style="display: flex; align-items: flex-start; font-size: 20px;">
                        <span style="min-width: 150px;">Agama</span>
                        <span style="margin-left: 10px;">:</span>
                        <span style="margin-left: 10px;">{{ $memberDetail->agama ?: 'Belum Di Isi' }}</span>
                    </h3>
                </div>
            </div>

            <!-- Foto Kanan -->
            <div>
                @if ($memberDetail->images)
                <img src="{{ asset('storage/' . $memberDetail->images->image) }}" alt="Foto Muharlion" class="photo-img">
                @else
                <img src="{{ asset('/dist/assets/compiled/png/placeholder_member.png') }}" alt="Foto Muharlion" class="photo-img">
                @endif

            </div>
        </div>

        <!-- Bagian Partai -->
        <div style="display: flex; flex-direction: column; align-items: flex-start; width: 100%;">
            <!-- Garis pembatas -->
            <hr style="width: 100%; margin: 0; border: 1px solid #ddd;">

            <!-- Judul Partai -->
            <h3 style="font-size: 18px; margin: 10px 0 0; color: #333;">
                <span style="min-width: 150px;">Partai</span>
            </h3>

            <!-- Kontainer untuk Partai -->
            <div class="party" style="display: flex; align-items: center; margin-top: 10px; gap: 15px;">
                <!-- Gambar Logo Partai -->
                @if ($memberDetail->parties->images)
                <img src="{{ asset('storage/' . $memberDetail->parties->images->image) }}"
                alt="Logo Partai"
                style="width: 200px;;object-fit: contain; margin-right: 10px; margin-bottom: 10px;">
                @else
                <img src="{{ asset('dist/assets/compiled/png/broken-image.png') }}"
                alt="Logo Partai"
                style="width: 200px;;object-fit: contain; margin-right: 10px; margin-bottom: 10px;">
                @endif


                <!-- Informasi Partai -->
                <div style="font-size: 14px; line-height: 1.5; color: #555;">
                    <p style="margin: 0; font-weight: bold; font-size: 16px; color: #000;">
                        {{ $memberDetail->parties->initial ?: 'Tidak Ada Data' }}
                    </p>
                    <p style="margin: 5px 0 0; font-size: 14px;">
                        {{ $memberDetail->dapil ?: 'Belum Di Isi' }}
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection

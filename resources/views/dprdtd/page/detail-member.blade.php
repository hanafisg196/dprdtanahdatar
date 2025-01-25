@extends('dprdtd.template.main')
@section('content')
    <style>
        .main-title {
            text-align: center;
            background-color: #c00;
            /* Warna merah */
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .main-title h1 {
            margin: 0;
            font-size: 32px;
            letter-spacing: 1px;
        }

        /* Nama Besar */
        .name h2 {
            font-size: 32px;
            color: #c00;
            /* Warna merah */
            margin-bottom: 10px;
        }

        .row {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            flex-wrap: wrap;
            /* Mencegah overflow */
        }

        .col-md-3,
        .col-md-1,
        .col-md-8,
        .col-md-4 {
            padding: 10px;
        }

        /* h3 {
            font-size: 18px;
            margin: 0;
        } */

        /* Foto Kanan Tengah */
        .photo-container {
            flex: 1;
            /* Memastikan kolom mengambil ruang yang tersedia */
            display: flex;
            justify-content: center;
            /* Mengatur foto di tengah secara horizontal */
            align-items: center;
            /* Mengatur foto di tengah secara vertikal */
            height: 100%;
            /* Memastikan tinggi kolom menyesuaikan */
            text-align: center;
            /* Tambahan agar gambar tetap simetris */
        }

        .photo-img {
            width: 70%;
            /* Membatasi ukuran foto */
            max-width: 300px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }


        .party {
            text-align: left;
            border-top: 1px solid #ddd;
            padding-top: 20px;
            margin-top: 20px;
        }

        .party img {
            width: 150px;
            /* Mengatur lebar logo */
            height: auto;
            /* Menjaga rasio aspek gambar */
            margin: 10px 0;
        }

        .party h3 {
            font-size: 20px;
            /* Menambah ukuran tulisan Partai */
            margin: 5px 0;
            /* Opsional untuk jarak */
        }

        .party p {
            margin: 5px 0;
            font-size: 18px;
        }
    </style>
    <div class="breadcrumbs">
        <div class="container">
            <a href="{{route('home')}}">Beranda</a><i
                class="fa fa-long-arrow-right main-color"></i><span>{{$memberDetail->nama}}</span>
        </div>
    </div>
    <div class="container" style="margin-top: 5px;">
        <!-- Bagian Profil -->
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
                                <span style="display: inline-block; padding: 5px 10px;  border-radius: 5px;">
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
                        <span style="margin-left: 10px;">{{ $memberDetail->nama ?: 'Belum Di Isi'}}</span>
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
                        <span style="margin-left: 10px;">{{ $memberDetail->agama ?: 'Belum Di Isi'}}</span>
                    </h3>
                </div>
            </div>

            <!-- Foto Kanan -->
            <div class="photo-container">
                <img src="{{ asset('storage/' . $memberDetail->images->image) }}" alt="Foto Muharlion"
                    class="photo-img">
            </div>
        </div>

        <!-- Bagian Partai -->
        <div style="display: flex; flex-direction: column; align-items: flex-start; width: 100%;">
            <hr style="width: 100%; margin: 0;">
            <h3 style="font-size: 20px; margin: 10px 0 0 0;">
                <span style="min-width: 150px;">Partai</span>
            </h3>
            <div class="party" style="display: flex; align-items: center; margin-top: 10px;">
                <img src="{{ asset('storage/' . $memberDetail->parties->images->image) }}" alt="Logo PKS"
                    style="margin-right: 20px;">
                <div>
                    <p><strong>{{ $memberDetail->parties->initial }}</strong></p>
                    <p>{{ $memberDetail->dapil }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

    @extends('dashboard.template.main')
    @section('content')
        @include('dashboard.component.floating-button-action')
        <section class="section">
            <div class="row">
                <div class="col-12">
                    @if (session()->has('errors'))
                        <div class="alert alert-light-danger color-danger">
                            <i class="bi bi-exclamation-circle"></i>
                            Terjadi kesalahan saat menambahkan atau memperbarui data
                        </div>
                    @endif
                    <div class="card-header d-flex justify-content-between align-items-center  mb-4">
                        <h4 class="card-title d-flex">
                            <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Anggota
                            <form action="{{ route('dashboard.member.search') }}" method="POST" class="d-flex ms-4">
                                @csrf
                                <input type="text" name="search" class="form-control form-control-sm"
                                    placeholder="Cari Anggota" style="width: 250px;">
                                <button type="submit" class="btn btn-primary btn-sm ms-2">
                                    <i class="bi bi-search"></i>
                                </button>
                            </form>
                        </h4>

                        <a class="btn btn-md btn-primary" href="{{ route('dashboard.member.register') }}">
                            Tambah
                        </a>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    @foreach ($members as $member)
                        <div class="col">
                            <div class="card h-100" style="position: relative;">
                                @if ($member->images)
                                    <img src="{{ asset('storage/' . $member->images->image) }}" width="200"
                                        height="250" class="card-img-top" alt="Logo Partai 1" style="object-fit: cover;">
                                @else
                                    <img src="{{ asset('/dist/assets/compiled/png/placeholder_member.png') }}"
                                        width="200" height="250" class="card-img-top" alt="Logo Partai 1"
                                        style="object-fit: cover;">
                                @endif
                                <div style="position: absolute; top: 10px; right: 10px;     ">
                                    <a class="btn btn-sm btn-primary"
                                        href="{{ route('dashboard.member.detail', $member->id) }}"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <form id="{{ $member->id }}"
                                        action="{{ route('dashboard.member.delete', $member->id) }}" method="POST">
                                        @csrf
                                    </form>
                                    <button class="btn btn-sm btn-danger" style="margin-top: 2px;"
                                        onclick="confirmDelete('{{ $member->id }}')"><i class="bi bi-trash"></i></button>
                                </div>
                                <div class="card-body" style="margin-top: -10px;">
                                    <h6>{{ $member->nama }}</h6>
                                    @if ($member->tags->isNotEmpty())
                                        <p>-{{ $member->tags->first()->name }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                {{ $members->links() }}
            </div>
            @include('dashboard.component.alert-delete')
        </section>
    @endsection
    @include('dashboard.component.filepond')

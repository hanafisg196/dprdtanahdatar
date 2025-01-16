<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="page-heading" style="margin-left: 110px;">
        <h5>Kategori Artikel</h5>
    </div>
    <section class="section">
        <div class="container justify-content-center">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <form wire:submit.prevent="add()" class="d-flex align-items-center">
                            @csrf
                            <div class="form-group mb-0 me-3" style="width: 40%;">
                                <label for="nama" class="me-2">Nama</label>
                                <input wire:model="nama" type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <button class="btn btn-md btn-primary" type="submit" style="margin-top: 25px;">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <span  class="btn btn-dark btn-sm me-2"><i class="bi bi-bookmarks-fill"></i></span>
                                        <span class="btn btn-dark btn-sm me-2">2K</span>

                                    </div>
                                    <div>
                                        <button wire:click="edit('{{ $item->id }}')" data-bs-toggle="modal"
                                            data-bs-target="#update" class="btn btn-primary btn-sm me-1"><i class="bi bi-pencil-square"></i></button>
                                        <button wire:click="delete('{{ $item->id }}')" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </div>
                                </div>
                                <h5 class="card-title mt-2">{{$item->nama}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $data->links()}}
            </div>
        </div>
    </section>
    @include('dashboard.component.modal-edit-category')
</div>

@extends('dashboard.template.main')
@section('content')
<div class="page-heading">
    <h3>Profil</h3>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <span  class="btn btn-dark btn-sm me-2"><i class="bi bi-bookmarks-fill"></i></span>
                            <span class="btn btn-dark btn-sm me-2">2K</span>

                        </div>
                        <div>
                            <a href="#" class="btn btn-primary btn-sm me-1"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </div>
                    </div>
                    <h5 class="card-title mt-2">Nama Kartu Nama Kartu</h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


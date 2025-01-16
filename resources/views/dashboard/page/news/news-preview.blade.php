@extends('dashboard.template.main')

@section('title', $data->title)
@section('description', $data->description)
@section('keywords', $data->keyword)
@section('ogurl', 'http://tanahdatarweb.test')
@section('ogtitle', $data->title)
@section('ogdesc', $data->description)
@section('ogimage', asset('storage/' . $data->images->image))
@section('content')
<section class="section me-5 ms-5">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
           <h5>Tampilan Berita</h5>
            <a href="{{ route('dashboard.news.post.show', encrypt($data->id)) }}" class="btn btn-primary btn-md">
                <i class="bi bi-pencil-square"></i> Edit Postingan
            </a>
        </div>
        <div class="card-body">
            <div class="content">
                <h4 class="card-title mb-4 text-center" style="font-size: 1.5rem;">{{ $data->title }}</h4>
                <div class="d-flex justify-content-center">
                <img class="img-fluid rounded shadow mb-5" id="image" alt="Banner" src="{{ asset('storage/' . $data->images->image) }}"
                style="max-width: 100%; height: 400px;" />
                </div>
                {!! $data->body !!}
            </div>
        </div>
    </div>
</section>
@endsection

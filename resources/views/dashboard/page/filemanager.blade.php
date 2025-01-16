@extends('dashboard.template.main')
@section('content')
<div class="page-content" id="page">
<section class="row" style="margin-top: -30px;">
    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">File Manager</h5>
                <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-bottom: 2%;">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="table-tab" data-bs-toggle="tab" href="#document" role="tab" aria-controls="tableContent" aria-selected="true">Dokumen</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="other-tab" data-bs-toggle="tab" href="#image" role="tab" aria-controls="otherContent" aria-selected="false">Gambar</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="document" role="tabpanel" aria-labelledby="table-tab">
                            <iframe src="/laravel-filemanager?editor" style="width: 100%; height: 60vh; overflow: hidden; border: none;"></iframe>
                        </div>
                        <div class="tab-pane fade" id="image" role="tabpanel" aria-labelledby="other-tab">
                            <iframe src="/laravel-filemanager?editor=src&type=images" style="width: 100%; height: 60vh; overflow: hidden; border: none;"></iframe>
                        </div>
                    </div>
              </div>
        </div>
    </div>
   </div>
</section>
</div>
{{-- @include('placeholder.component.center-spinner') --}}
{{-- @include('placeholder.script.loader-script') --}}
@include('dashboard.component.tab-active-session')
@endsection


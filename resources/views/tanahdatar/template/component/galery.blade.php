<div class="sm-padding p-t-0">
    <div class="heading style4">
        <h4>Galeri Foto</h4>
    </div>
    <div class="gallery">
        <div class="anim-imgs just-gallery" data-row-height="120">
            @foreach ($galery as $galeries)
            <a class="zoom" href="{{ asset('storage/' . $galeries->image) }}">
                <img alt="" src="{{ asset('storage/' . $galeries->thumbnail) }}">
            </a>
            @endforeach
        </div>
    </div>
</div>

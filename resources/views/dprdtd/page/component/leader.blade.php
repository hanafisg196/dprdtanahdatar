<div class="container" style="margin-top: 20px;">
    <div class="row">
        @foreach ($data['leaders'] as $leader)
            <div class="col-md-3" style="margin: 5px;">
                <div class="card-member" style="">
                    <a href="{{ route('dprd.member.detail', $leader->slug) }}">
                        <img src="{{ $leader->images ? asset('storage/' . $leader->images->image) : asset('/dist/assets/compiled/png/placeholder_member.png') }}"
                        alt="{{ $leader->nama }}"class="img-circle">
                    </a>
                    <h5 class="text-uppercase" style="margin-top: 10px; font-weight: bold;">{{ $leader->status }}</h5>
                    <h5 class="text-uppercase" style="font-weight: bold;">{{ $leader->nama }}</h5>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="tab-content">
        <div class="tab-pane fade in active" id="pemerintah">
            <div class="widget-content">
                <ul>
                    @foreach ($pemerintah as $pem)
                    <li><a href="{{$pem->link}}">{{ $pem->title }}</a><span></span></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="tab-pane fade" id="opd">
            <div class="widget-content">
                <ul>
                    @foreach ($opd as $opds)
                    <li><a href="{{$opds->link}}">{{ $opds->title }}</a><span></span></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

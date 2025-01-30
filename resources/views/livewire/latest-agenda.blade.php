<div>
    <ul>
        @foreach ($agendas as $agenda)
            <li>
                <div class="post-img">
                    <a href="{{ route('dprd.agenda.list') }}"><img src="{{ asset('dist/assets/compiled/jpg/agenda.jpg') }}"
                        alt=""></a>
                </div>
                <div class="widget-post-info">
                    <h5><a href="{{ route('dprd.agenda.list') }}">{{ $agenda->title }}</a></h5>
                    <div class="meta">
                        <span><i class="fa fa-clock-o"></i>{{ $agenda->waktu_mulai }}</span><br>
                        <span><i class="fa fa-map-marker"></i>{{ $agenda->tempat }}</span>
                    </div>

                </div>
            </li>
        @endforeach
    </ul>
</div>

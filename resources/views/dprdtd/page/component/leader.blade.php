<div class="container gry-bg" style="padding: 20px; margin-top: 30px; margin-bottom: 30px;">
    <div class="row" style="justify-content: center; margin-left: -5px; margin-right: -5px;">
        @foreach($data['leaders'] as $leader )
        <div class="col-xs-3" style="padding: 5px;">
            <div class="thumbnail" style="background-color: #fff; margin: 0; position: relative; overflow: hidden;">
                <img src="{{ asset('storage/'. $leader->images->image) }}" alt="Foto" style="height: 300px;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.5); color: white; text-align: center; padding: 10px; font-size: 14px;">
                    {{ strtoupper($leader->status) }}
                </div>
            </div>
            <p class="text-center">{{ $leader->nama }}</p>
        </div>
        @endforeach
    </div>
</div>

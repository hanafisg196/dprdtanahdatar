<div class="container gry-bg" style="padding: 20px; margin-top: 30px; margin-bottom: 30px;">
    <div class="row" style="justify-content: center; margin-left: -5px; margin-right: -5px;">
        @foreach(range(1, 4) as $item)
        <div class="col-xs-3" style="padding: 5px;">
            <div class="thumbnail" style="background-color: #fff; margin: 0; position: relative; overflow: hidden;">
                <img src="https://dprd.padang.go.id/uploads/images/image_big_671725456e3c1.jpg" alt="Foto" class="img-responsive">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.5); color: white; text-align: center; padding: 10px; font-size: 14px;">
                    WAKIL KETUA {{$item}}
                </div>
            </div>
            <p class="text-center">TEST NAME</p>
        </div>
        @endforeach

        {{-- @for ($i = 0; $i < 3; $i++)
        <div class="col-xs-6 custom-col" style="padding: 5px;">
            <a class="btn rect-angles btn-gry-border" href="#" style="width: 260px;">
                <i class="fa fa-crop"></i> Angled Button
            </a>
        </div>
        @endfor --}}
    </div>
</div>

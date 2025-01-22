<div class="container gry-bg" style="padding: 20px; margin-top: 50px; margin-bottom: 30px;">
    <div class="tabs bordered gr-bg">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#vision3" data-toggle="tab">Anggota</a></li>
            <li><a href="#mission3" data-toggle="tab">Gerindra</a></li>
            <li><a href="#strategy3" data-toggle="tab">PKS</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="vision3">
                <div class="swiper mySwiper" style="position: relative;">
                    <div class="swiper-wrapper">
                        @foreach ( $data['members'] as  $member)
                        <div class="swiper-slide">
                            <a class="zoom"
                                href="{{ asset('storage/'. $member->images->image) }}">
                                <img alt=""
                                    src="{{ asset('storage/'. $member->images->image) }}"
                                    style="max-width: 100%; height: auto;">
                                <div class="swiper-caption">
                                    {{$member->nama }}
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button swiper-next"><i class="fa fa-angle-right"></i></div>
                    <div class="swiper-button swiper-prev"><i class="fa fa-angle-left"></i></div>
                </div>
            </div>
            <div class="tab-pane fade" id="mission3">
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-2">
                        <div class="card position-relative">
                            <img src="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg"
                                class="card-img-top" alt="member" style="border: 3px solid #ccc; border-radius: 5px;">
                            <div
                                class="card-body position-absolute bottom-0 start-0 w-100 bg-dark text-white text-center">
                                <h5 class="card-title mb-0" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Title 1
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="strategy3">
                <div class="col-md-2">
                    <div class="card position-relative">
                        <img src="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg"
                            class="card-img-top" alt="member" style="border: 3px solid #ccc; border-radius: 5px;">
                        <div
                            class="card-body position-absolute bottom-0 start-0 w-100 bg-dark text-white text-center">
                            <h5 class="card-title mb-0" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Title 1
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

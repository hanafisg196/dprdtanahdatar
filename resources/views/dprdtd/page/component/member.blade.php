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
                        @for ($i = 0; $i < 7; $i++)
                            <div class="swiper-slide">
                                <a class="zoom"
                                    href="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                                    <img alt=""
                                        src="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg"
                                        style="max-width: 100%; height: auto;">
                                    <div class="swiper-caption">
                                        Christian Rudi Kurniawan
                                    </div>
                                </a>
                            </div>
                        @endfor
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
                                class="card-img-top" alt="Image 1" style="border: 3px solid #ccc; border-radius: 5px;">
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
                Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula
                imperdiet, eros est egestas odio, at aliquet elit nulla sed massa.
                cursus massa at urnaaculis estie.Mauris in quam tristique, dignissim urna in, molestie felis.
                Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed massa. Ut
                cursus massa at urnaaculis estie.
            </div>
        </div>
    </div>
</div>

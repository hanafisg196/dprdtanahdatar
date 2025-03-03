<div class="container gry-bg" style="padding: 20px; margin-top: 50px; margin-bottom: 30px;">
    <div class="tabs bordered gr-bg">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#vision3" data-toggle="tab">Anggota</a></li>
            @foreach ($data['partiesMember'] as $index => $party)
                <li class="{{ $index === 0 ? '' : '' }}">
                    <a href="#mission{{ $party->id }}"
                       data-toggle="tab"
                       role="tab">
                       {{ $party->initial }}
                    </a>
                </li>
            @endforeach
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="vision3">
                <div class="swiper mySwiper" style="position: relative;">
                    <div class="swiper-wrapper">
                        @foreach ($data['members'] as $member)
                        <div class="swiper-slide">

                            <a href="{{ route('dprd.member.detail', $member->slug) }}">
                            <div class="icon-box t-center light-gry-border rect-angles">
                                @if ($member->images)
                                <img
                                src="{{ asset('storage/'. $member->images->image) }}"
                                alt="{{ $member->nama }}"
                                class="img-circle"
                                style="width: 160px; height: 160px; object-fit: cover; border: 2px solid #ccc; margin-top: 5px;">
                                @else
                                <img
                                src="{{ asset('/dist/assets/compiled/png/placeholder_member.png') }}"
                                alt="{{ $member->nama }}"
                                class="img-circle"
                                style="width: 160px; height: 160px; object-fit: cover; border: 2px solid #ccc; margin-top: 5px;">
                                @endif
                                <h6 class="uppercase mt-1">{{ $member->nama }}</h6>
                            </div>

                        </a>
                        </div>

                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            @foreach ($data['partiesMember']  as $index => $party)
                <div class="tab-pane fade"
                     id="mission{{ $party->id }}"
                     role="tabpanel">
                    <div class="row">
                        @foreach ($party->members as $partyMember)
                        <div class="col-md-2">
                            <a href="{{ route('dprd.member.detail', $partyMember->slug) }}">
                            <div class="card">
                                <div class="icon-box t-center light-gry-border rect-angles">
                                    @if ($partyMember->images)
                                        <img
                                        src="{{ asset('storage/'. $partyMember->images->image) }}"
                                        alt="{{ $partyMember->nama }}"
                                        class="img-circle"
                                        style="width: 160px; height: 160px; object-fit: cover; border: 2px solid #ccc; margin-top: 5px;">
                                        @else
                                        <img
                                        src="{{ asset('/dist/assets/compiled/png/placeholder_member.png') }}"
                                        alt="{{ $partyMember->nama }}"
                                        class="img-circle"
                                        style="width: 160px; height: 160px; object-fit: cover; border: 2px solid #ccc; margin-top: 5px;">
                                        @endif


                                    <h6 class="uppercase mt-1">{{ $partyMember->nama }}</h6>

                                </div>
                            </div>
                             </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div>
    {{-- The whole world belongs to you. --}}
        <div class="col-md-12">
            <div class="tabs bordered gr-bg top-border">
                <ul class="nav nav-tabs">
                    <li class="{{ $categoryName === 'Sekretariat' ? 'active' : '' }}">
                        <a href="#" wire:click.prevent="changeCategory('Sekretariat')">
                            <i class="fa fa-external-link main-color"></i> Sekretariat
                        </a>
                    </li>
                    <li class="{{ $categoryName === 'Inspektorat' ? 'active' : '' }}">
                        <a href="#" wire:click.prevent="changeCategory('Inspektorat')">
                            <i class="fa fa-external-link main-color"></i> Inspektorat
                        </a>
                    </li>
                    <li class="{{ $categoryName === 'Dinas' ? 'active' : '' }}">
                        <a href="#" wire:click.prevent="changeCategory('Dinas')">
                            <i class="fa fa-external-link main-color"></i> Dinas
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="vision5">
                        <div class="md-padding" style="margin-top: -6%;">
                            <div class="portfolio p-1-col simple" id="container">
                                @foreach ($links as $link)
                                <div class="portfolio-item develop">
                                    <div class="name-holder" style="margin-bottom: -3%">
                                        <h4>
                                            <i class="fa fa-institution" aria-hidden="true"></i>
                                            <a href="portfolio-single.html">{{ $link->title }}</a>
                                        </h4>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </div>


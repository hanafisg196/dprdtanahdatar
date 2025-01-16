<style>
    .shimmer {
    animation-duration: 3.2s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: shimmer;
    animation-timing-function: linear;
    background: #ddd;
    background: linear-gradient(to right, #F6F6F6 8%, #F0F0F0 18%, #F6F6F6 33%);
    background-size: 1200px 100%;
    }

    @-webkit-keyframes shimmer {
        0% {
            background-position: -100% 0;
        }

        100% {
            background-position: 100% 0;
        }
    }

    @keyframes shimmer {
        0% {
            background-position: -1200px 0;
        }

        100% {
            background-position: 1200px 0;
        }
    }

    /* Shimmer styles for skeleton items */
    .shimmer-title {
        width: 70%;
        height: 1.2rem;
        margin: 0.5rem 0;
        border-radius: 4px;
    }

    .shimmer-thumbnail {
        width: 100%;
        height: 150px;
        border-radius: 8px;
    }

    .shimmer-button {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin: 0.3rem;
    }
</style>
<div id="loader" class="page-content" style="display:block">
<div class="container d-flex justify-content-center">
    <div class="row">
        @for ($i = 1; $i <= 6; $i++)
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card position-relative">
                    <div class="card-content" style="width: 340px; height: 340px;">
                        <div class="shimmer shimmer-thumbnail"></div>
                        <div class="floating-buttons-action d-flex justify-content-center">
                            <div class="shimmer shimmer-button"></div>
                            <div class="shimmer shimmer-button"></div>
                            <div class="shimmer shimmer-button"></div>
                        </div>
                        <div class="card-body">
                            <div class="shimmer shimmer-title"></div>
                            <div class="shimmer shimmer-title" style="width: 50%;"></div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush"></ul>
                </div>
            </div>
        @endfor
    </div>
</div>
</div>

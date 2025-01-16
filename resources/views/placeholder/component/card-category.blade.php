
<div class="container mt-5">
    <div class="row">
        <div class="card p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <span class="placeholder placeholder-glow me-2" style="width: 2rem; height: 2rem;"></span>
                    <span class="placeholder placeholder-wave me-2" style="width: 3rem; height: 1rem;"></span>
                </div>
            </div>
            <div class="placeholder mt-3  placeholder-wave" style="width: 50%; height: 1.5rem;"></div>
        </div>
        @for ($i = 1; $i <= 9; $i++)
        <div class="col-md-4 mb-3">
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <span class="placeholder placeholder-glow me-2" style="width: 2rem; height: 2rem;"></span>
                        <span class="placeholder placeholder-wave me-2" style="width: 3rem; height: 1rem;"></span>
                    </div>
                    <div>
                        <span class="placeholder placeholder-glow me-1" style="width: 2rem; height: 2rem;"></span>
                        <span class="placeholder placeholder-wave" style="width: 2rem; height: 2rem;"></span>
                    </div>
                </div>
                <div class="placeholder mt-3 placeholder-wave" style="width: 100%; height: 1.5rem;"></div>
            </div>
        </div>
        @endfor
    </div>
</div>


 <div class="container" style="margin-top: 20px;">
     <div class="row">
         @foreach ($data['leaders'] as $leader)
             <div class="col-md-3">
                 <div class="icon-box t-center light-gry-border rect-angles" style="max-height: 358px;">
                     <a href="{{ route('dprd.member.detail', $leader->slug) }}">
                        @if ($leader->images)
                        <img src="{{ asset('storage/' . $leader->images->image) }}" alt="Person 1" class="img-circle"
                        style="width: 250px; height: 250px; object-fit: cover; border: 2px solid #ccc; border-radius: 50%; margin-top: 5px;">
                        @else
                        <img src="{{ asset('/dist/assets/compiled/png/placeholder_member.png') }}" alt="Person 1" class="img-circle"
                        style="width: 250px; height: 250px; object-fit: cover; border: 2px solid #ccc; border-radius: 50%; margin-top: 5px;">
                        @endif

                     </a>
                     <h5 class="uppercase">{{ $leader->status }}</h5>
                     <h5 class="uppercase">{{ $leader->nama }}</h5>
                 </div>
             </div>
         @endforeach
     </div>
 </div>

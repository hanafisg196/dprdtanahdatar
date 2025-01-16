<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
        <!-- .post-item end -->
        <div class="comments">
            <div class="heading style4">
                <h4 class="main-color">Komentar</h4>
            </div>

            <p class="hint t-right m-b-2 bold">There are <span class="main-color">{{ $comments->total() }}</span> comments on this post</p>
            <ul class="comment-list">
                @foreach ($comments as $comment)
                <li>
                    <div class="comment-avatar gry-bg">
                        <img src="/dist/assets/compiled/png/user.png" alt="avatar">
                    </div>
                    <div class="comment-content">
                        <h6><a href="#">{{ $comment->name }}</a></h6>
                        <div class="meta">
                            <span class="comment-date">Jan 15, 2014 - at 11:05 am</span><a href="#" class="main-color">Reply</a>
                        </div>
                        <p>{{ $comment->message }}</p>
                    </div>
                </li>
                @endforeach
            </ul>
            @if ($comments->hasMorePages())
            <div class="d-flex justify-content-center mt-2 mb-1" style="display:flex;  justify-content: center;">
                <button wire:click="loadMore" class="btn btn-primary rounded-pill">Load More</button>
            </div>
            @endif
        </div>
    <form wire:submit.prevent="makeComment()" class="leave-comment contact-form">
        @csrf
        <div class="heading style4">
            <h4 class="main-color">Tinggalkan Komentar</h4>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" wire:model="nama" class="form-control" placeholder="Full name">
                    <div>
                        @error('nama') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="email"  wire:model="email"  class="form-control" placeholder="Email">
                    <div>
                        @error('email') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group">
                <input type="text"  wire:model="website" class="form-control" placeholder="WebSite">
                <div>
                    @error('website') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <textarea  wire:model="komentar" class="txt-box form-control" name="message"
                    cols="40" rows="7" id="messageTxt"  placeholder="Message" spellcheck="true"></textarea>
                    <div>
                        @error('komentar') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-lg main-bg" value="Post Comment">
            </div>
        </div>
    </form>
</div>

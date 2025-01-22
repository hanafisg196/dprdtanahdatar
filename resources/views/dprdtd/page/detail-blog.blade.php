@extends('dprdtd.template.main')
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <a href="#">Home</a><i class="fa fa-long-arrow-right main-color"></i><a
            href="#">Blog</a><i class="fa fa-long-arrow-right main-color"></i><span>Blog Post
            Details</span>
    </div>
</div>

<div class="container">
    <div class="post-info-container">
        <div class="post-info">
            <h2>Blog post title with Image</h2>
            <ul class="post-meta">
                <li><i class="fa fa-book post-icon main-color"></i></li>
                <li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">John Martin</a>
                </li>
                <li class="meta_date"><i class="fa fa-clock-o"></i>15 May, 2016</li>
                <li><i class="fa fa-folder-open"></i>Category: <a href="#">Corporate News</a></li>
            </ul>
        </div>
    </div>
    <div class="row row-eq-height">
    <div class="col-md-9 md-padding main-content">

            <div class="blog-single">

                <div class="post-item">

                    <div class="details-img">
                        <img src="assets/images/blog/large/1.jpg" alt="Our Blog post image goes here">
                    </div>

                    <article class="post-content">


                        <p>
                            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut
                            neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc.
                            Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur
                            malesuada. Vestibulum a velit eu ante scelerisque vulputate.Mauris mauris ante,
                            blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi
                            metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec
                            suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada.
                            Vestibulum a velit eu ante scelerisque vulputate.<br><br>
                            Phasellus tristique libero vel justo aliquam pellentesque. Maecenas vestibulum
                            velit est, in tincidunt arcu fermentum id. Morbi ipsum arcu, iaculis nec sapien
                            vel, egestas viverra eros. Phasellus ac dolor elit. Donec nisl tellus, posuere
                            in commodo ac, placerat a elit. Nulla fringilla venenatis metus, sed laoreet
                            nisi varius non. Nunc placerat tempor orci id mattis. Suspendisse pulvinar nisl
                            neque, rutrum pellentesque neque commodo non. Maecenas ultrices tortor sit amet
                            suscipit tempor. Aenean et nunc pharetra, pulvinar nibh sed, mattis urna. Morbi
                            vel lectus convallis, tristique mi non, feugiat eros.
                        </p>
                        <br>
                        <p>
                            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut
                            neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc.
                            Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur
                            malesuada. Vestibulum a velit eu ante scelerisque vulputate.Mauris mauris ante,
                            blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi
                            metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec
                            suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada.
                            Vestibulum a velit eu ante scelerisque vulputate.<br><br>
                            Phasellus tristique libero vel justo aliquam pellentesque. Maecenas vestibulum
                            velit est, in tincidunt arcu fermentum id. Morbi ipsum arcu, iaculis nec sapien
                            vel, egestas viverra eros. Phasellus ac dolor elit. Donec nisl tellus, posuere
                            in commodo ac, placerat a elit. Nulla fringilla venenatis metus, sed laoreet
                            nisi varius non. Nunc placerat tempor orci id mattis. Suspendisse pulvinar nisl
                            neque, rutrum pellentesque neque commodo non. Maecenas ultrices tortor sit amet
                            suscipit tempor. Aenean et nunc pharetra, pulvinar nibh sed, mattis urna. Morbi
                            vel lectus convallis, tristique mi non, feugiat eros.
                        </p>

                        <div class="post-tools">
                            <div class="post-tags">
                                <i class="fa fa-tags"></i><span class="main-color"><strong>Tags: </strong>
                                </span>
                                <a href="#">Responsive</a>,
                                <a href="#"> Business</a>,
                                <a href="#"> HTML</a>,
                                <a href="#"> Design</a>,
                                <a href="#"> WordPress</a>
                            </div>

                            <div class="share-post">
                                <div class="f-left m-t-2 custom-font font-15 main-color">Share This Post on
                                    :</div>
                                <div class="f-right" id="share_btns" data-easyshare
                                    data-easyshare-url="">

                                    <button class="facebook" data-easyshare-button="facebook">
                                        <span class="fa fa-facebook"></span>
                                        <span class="share_num"
                                            data-easyshare-button-count="facebook"></span>
                                    </button>

                                    <button class="twitter" data-easyshare-button="twitter"
                                        data-easyshare-tweet-text="">
                                        <span class="fa fa-twitter"></span>
                                        <span class="share_num"
                                            data-easyshare-button-count="twitter"></span>
                                    </button>

                                    <button class="googleplus" data-easyshare-button="google">
                                        <span class="fa fa-google-plus"></span>
                                        <span class="share_num"
                                            data-easyshare-button-count="google"></span>
                                    </button>

                                    <button class="linkedin" data-easyshare-button="linkedin">
                                        <span class="fa fa-linkedin"></span>
                                        <span class="share_num"
                                            data-easyshare-button-count="linkedin"></span>
                                    </button>

                                    <button class="pinterest" data-easyshare-button="pinterest">
                                        <span class="fa fa-pinterest-p"></span>
                                        <span class="share_num"
                                            data-easyshare-button-count="pinterest"></span>
                                    </button>

                                    <button class="xing" data-easyshare-button="xing">
                                        <span class="fa fa-xing"></span>
                                        <span class="share_num" data-easyshare-button-count="xing"></span>
                                    </button>

                                    <button class="total-shrs" data-easyshare-button="total">
                                        <span data-easyshare-total-count>0</span>
                                        <span class="share_num">Shares</span>
                                    </button>

                                    <div data-easyshare-loader>Loading...</div>
                                </div>
                            </div>



                        </div>

                    </article>
                </div><!-- .post-item end -->


            </div>

        </div>

        <div class="col-md-3 md-padding sidebar">
            <div class="sidebar-widgets">
                <ul>
                    <li class="widget search-widget">
                        <h4 class="widget-title"><span class="main-color">Blog</span> Search</h4>
                        <div class="widget-content">
                            <form action="#" method="get">
                                <input type="text" name="t" id="t2-search" class="txt-box"
                                    placeholder="Enter search keyword..." />
                                <button type="submit" class="main-color"><i
                                        class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>

                    <li class="widget w-recent-posts">
                        <h4 class="widget-title"><span class="main-color">Recent </span>Posts</h4>
                        <div class="widget-content">
                            <ul>
                                <li>
                                    <div class="post-img">
                                        <a href="blog-single.html"><img
                                                src="assets/images/blog/small/1.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-post-info">
                                        <h5><a href="blog-single.html">Blog post title with Image</a></h5>
                                        <div class="meta">
                                            <span><i class="fa fa-clock-o"></i>Dec 28, 2013,</span><a
                                                href="blog-single.html"><i
                                                    class="fa fa-comments"></i>15</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-img">
                                        <a href="blog-single.html"><img
                                                src="assets/images/blog/small/2.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-post-info">
                                        <h5><a href="blog-single.html">Blog post title</a></h5>
                                        <div class="meta">
                                            <span><i class="fa fa-clock-o"></i>Dec 28, 2013,</span><a
                                                href="blog-single.html"><i
                                                    class="fa fa-comments"></i>15</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-img">
                                        <a href="blog-single.html"><img
                                                src="assets/images/blog/small/3.jpg" alt=""></a>
                                    </div>
                                    <div class="widget-post-info">
                                        <h5><a href="blog-single.html">Blog post title with Image</a></h5>
                                        <div class="meta">
                                            <span><i class="fa fa-clock-o"></i>Dec 28, 2013,</span><a
                                                href="blog-single.html"><i
                                                    class="fa fa-comments"></i>15</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

            </div>
        </div>
    </div>

</div>

@endsection


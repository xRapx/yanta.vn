@extends('index')

@section('breadcrumb')
Blog Grid
@endsection

@section('layout')
<section class="ls s-py-60 s-py-md-80 s-py-xl-150">
	<div class="container">

		<div class="row c-mb-30">
			<main class="offset-lg-1 col-lg-10">
				<div class="row isotope-wrapper masonry-layout blog-grid">
					@foreach ($blogs as $blog)
					<div class="col-xl-4 col-md-6">
						<article class="vertical-item text-center content-padding padding-small post type-post status-publish format-standard has-post-thumbnail">
							<div class="item-media post-thumbnail">
								<a href="{{route('blog.details')}}">
									<img src="{{ asset('images/gallery/' . $blog->image) }}" alt="">
								</a>
							</div><!-- .post-thumbnail -->
							<div class="item-content">
								<header class="entry-header">
									<h5 class="entry-title">
										<a href="" rel="bookmark">
											{{$blog->title}}
										</a>
									</h5>
								</header>
								<!-- .entry-header -->

								<div class="entry-content">
									@foreach(explode('.', $blog['description']) as $desc)
										@if(!empty(trim($desc)))
										<p>{{ $desc }}</p>
										@endif
									<!-- <p>{{$blog->desc}}</p> -->
									@endforeach
								</div><!-- .entry-content -->
								<div class="entry-meta">
									<span class="screen-reader-text">Posted on</span>
									<a href="" rel="bookmark">
										<time class="entry-date published updated" datetime="2018-03-11T15:15:12+00:00">{{$blog->created_at}}</time>
									</a>
								</div>
								<!-- .entry-meta -->
							</div><!-- .item-content -->
						</article><!-- #post-## -->
					</div>
					@endforeach
				</div>

				<nav class="navigation pagination justify-content-center" role="navigation">
					<h2 class="screen-reader-text">Posts navigation</h2>
					<div class="nav-links">
						<a class="prev page-numbers" href="blog-right.html">
							<i class="fa fa-chevron-left"></i>
							<span class="screen-reader-text">Previous page</span>
						</a>
						<a class="page-numbers" href="blog-right.html">
							<span class="meta-nav screen-reader-text">Page </span>
							1
						</a>
						<span class="page-numbers current">
							<span class="meta-nav screen-reader-text">Page </span>
							2
						</span>
						<a class="page-numbers" href="blog-right.html">
							<span class="meta-nav screen-reader-text">Page </span>
							3
						</a>
						<a class="next page-numbers" href="blog-right.html">
							<span class="screen-reader-text">Next page</span>
							<i class="fa fa-chevron-right"></i>
						</a>
					</div>
				</nav>
			</main>
		</div>

	</div>
</section>
@endsection
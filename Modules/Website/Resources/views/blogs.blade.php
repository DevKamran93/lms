@extends('website::layouts.webLayout')
<?php
use Carbon\Carbon;
?>
@section('content')
        <!-- Page Header section start here -->
        <div class="pageheader-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pageheader-content text-center">
                            <h2>Our Blog Posts</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="">Home</a></li>

                                    {{-- <li class="breadcrumb-item"><a href="{{ route('holidays') }}">Home</a></li> --}}
                                    <li class="breadcrumb-item active" aria-current="page">Blog Posts</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header section ending here -->


        <!-- blog section start here -->
        <div class="blog-section padding-tb section-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <article>
                            <div class="section-wrapper">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 justify-content-center g-4">
                                    {{-- @foreach ($blogs as $blog)
                                    <div class="col">
                                        <div class="post-item">
                                            <div class="post-inner">
                                                <div class="post-thumb">
                                                    <a href="{{ route('singleBlog',$blog->id) }}"><img src="{{ Storage::url($blog->imagePath) }}" alt="blog thumb"></a>
                                                </div>
                                                <div class="post-content">
                                                    <a href="{{ route('singleBlog',$blog->id) }}"><h4>{{ $blog->title }}</h4></a>
                                                    <div class="meta-post">
                                                        <ul class="lab-ul">
                                                            <li><a href="{{ route('singleProfile',['model'=>get_class($blog->linkable),'id'=>$blog->linkable->id]) }}"><i class="icofont-ui-user"></i>{{ $blog->linkable->name }}</a></li>
                                                            <li><i class="icofont-calendar"></i>
                                                                @if ($blog->created_at->isToday())
                                                                    Today at {{ Carbon::parse($blog->created_at)->format('g:i A') }}
                                                                    @elseif ($blog->created_at->isYesterday())
                                                                    Yesterday at {{ Carbon::parse($blog->created_at)->format('g:i A') }}
                                                                    @else
                                                                    {{ Carbon::parse($blog->created_at)->format('F d, Y ') }}
                                                                @endif
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <p>{{ implode(' ', array_slice(str_word_count($blog->excerpt, 1), 0, 10)) }}...</p>
                                                </div>
                                                <div class="post-footer">
                                                    <div class="pf-left">
                                                        <a href="{{ route('singleBlog',$blog->id) }}" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
                                                    </div>
                                                    <div class="pf-right">
                                                        <i class="icofont-comment"></i>
                                                        <a href="{{ route('singleBlog',$blog->id) }}#comments" class="comment-count">{{ $blog->blogComments->count() }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach --}}
                                </div>
                                {{-- <ul class="default-pagination lab-ul">
                                    <li>
                                        <a href="#"><i class="icofont-rounded-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="#">01</a>
                                    </li>
                                    <li>
                                        <a href="#" class="active">02</a>
                                    </li>
                                    <li>
                                        <a href="#">03</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icofont-rounded-right"></i></a>
                                    </li>
                                </ul> --}}
                                {{-- {{ $blogs->links('pagination::custom-pagination') }} --}}
                            </div>
                        </article>
                    </div>
                    {{-- <div class="col-lg-4 col-12">
                        <aside>
                            <div class="widget widget-search">
                                <form action="{{ route('blogs') }}" class="search-wrapper">
                                    <input type="text" name="search" placeholder="Search...">
                                    <button type="submit"><i class="icofont-search-2"></i></button>
                                </form>
                            </div>
                            <div class="widget widget-category">
                                <div class="widget-header">
                                    <h5 class="title">Post Categories</h5>
                                </div>
                                <ul class="widget-wrapper">
                                    @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('blogs','search='.$category->name)  }}" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>{{ $category->name }}</span><span>{{ $category->blog->count() }}</span></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="widget widget-post">
                                <div class="widget-header">
                                    <h5 class="title">Most Popular Posts</h5>
                                </div>
                                <ul class="widget-wrapper">
                                    @foreach ($popular_blogs as $blog)
                                    <li class="d-flex flex-wrap justify-content-between">
                                        <div class="post-thumb">
                                            <a href="{{ route('singleBlog',$blog->id) }}"><img src="{{ Storage::url($blog->imagePath) }}" alt="Photo"></a>
                                        </div>
                                        <div class="post-content">
                                            <a href="{{ route('singleBlog',$blog->id) }}"><h6>{{ $blog->title }}</h6></a>
                                            <p>{{ $blog->created_at->diffForHumans() }}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="widget widget-archive">
                                <div class="widget-header">
                                    <h5 class="title">Our Archives</h5>
                                </div>
                                <ul class="widget-wrapper">
                                    <li><a href="archive.html" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>January</span><span>2021</span></a> </li>
                                    <li><a href="archive.html" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>February</span><span>2020</span></a></li>
                                    <li><a href="archive.html" class="d-flex active flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>March</span><span>2019</span></a></li>
                                    <li><a href="archive.html" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>April</span><span>2018</span></a></li>
                                    <li><a href="archive.html" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>June</span><span>2017</span></a></li>
                                    <li><a href="archive.html" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>June</span><span>2016</span></a></li>
                                    <li><a href="archive.html" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>February</span><span>2015</span></a></li>
                                </ul>
                            </div>

                            <div class="widget widget-instagram">
                                <div class="widget-header">
                                    <h5 class="title">Gallery Photos</h5>
                                </div>
                                <ul class="widget-wrapper d-flex flex-wrap justify-content-center">
                                    <li><a data-rel="lightcase" href="assets/images/blog/01.jpg"><img src="assets/images/blog/01.jpg" alt="product"></a></li>
                                    <li><a data-rel="lightcase" href="assets/images/blog/02.jpg"><img src="assets/images/blog/02.jpg" alt="product"></a></li>
                                    <li><a data-rel="lightcase" href="assets/images/blog/03.jpg"><img src="assets/images/blog/03.jpg" alt="product"></a></li>
                                    <li><a data-rel="lightcase" href="assets/images/blog/04.jpg"><img src="assets/images/blog/04.jpg" alt="product"></a></li>
                                    <li><a data-rel="lightcase" href="assets/images/blog/05.jpg"><img src="assets/images/blog/05.jpg" alt="product"></a></li>
                                    <li><a data-rel="lightcase" href="assets/images/blog/06.jpg"><img src="assets/images/blog/06.jpg" alt="product"></a></li>
                                    <li><a data-rel="lightcase" href="assets/images/blog/07.jpg"><img src="assets/images/blog/07.jpg" alt="product"></a></li>
                                    <li><a data-rel="lightcase" href="assets/images/blog/08.jpg"><img src="assets/images/blog/08.jpg" alt="product"></a></li>
                                    <li><a data-rel="lightcase" href="assets/images/blog/09.jpg"><img src="assets/images/blog/09.jpg" alt="product"></a></li>
                                </ul>
                            </div>

                            <div class="widget widget-tags">
                                <div class="widget-header">
                                    <h5 class="title">Popular Tags</h5>
                                </div>
                                <ul class="widget-wrapper">
                                    @foreach ($tags as $tag)
                                    <li><a href="{{ route('blogs','search='.$tag)  }}">{{ ucWords($tag) }}</a></li>
                                    @endforeach
                                    <li><a href="#" class="active">themeforest</a></li>
                                    <li><a href="#">codecanyon</a></li>
                                    <li><a href="#">videohive</a></li>
                                    <li><a href="#">audiojungle</a></li>
                                    <li><a href="#">3docean</a></li>
                                    <li><a href="#">envato</a></li>
                                    <li><a href="#">themeforest</a></li>
                                    <li><a href="#">codecanyon</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- blog section ending here -->
@endsection

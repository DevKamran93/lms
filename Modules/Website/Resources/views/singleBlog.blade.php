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
                            {{-- <h2>{{ $blog->title }}</h2> --}}
                            <h2>Blog Title</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header section ending here -->


        <!-- blog section start here -->
        <div class="blog-section blog-single padding-tb section-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <article>
                            <div class="section-wrapper">
                                <div class="row row-cols-1 justify-content-center g-4">
                                    <div class="col">
                                        <div class="post-item style-2">
                                            <div class="post-inner">
                                                <div class="post-thumb">
                                                    <img src="{{ Storage::url('$blog->imagePath') }}" alt="Blog Image Missing" class="w-100">
                                                </div>
                                                <div class="post-content">
                                                    <h2>{{ $blog->title }}</h2>
                                                    <div class="meta-post">
                                                        <ul class="lab-ul">
                                                            <li><a><i class="icofont-calendar"></i>
                                                                @if ($blog->created_at->isToday())
                                                                Today at {{ Carbon::parse($blog->created_at)->format('g:i A') }}
                                                                @elseif ($blog->created_at->isYesterday())
                                                                Yesterday at {{ Carbon::parse($blog->created_at)->format('g:i A') }}
                                                                @else
                                                                {{ Carbon::parse($blog->created_at)->format('F d, Y g:i A') }}
                                                            @endif
                                                            </a></li>
                                                            <li><a href="{{ route('singleProfile',['model'=>get_class($blog->linkable),'id'=>$blog->linkable->id]) }}"><i class="icofont-ui-user"></i>{{ $blog->linkable->name }}</a></li>
                                                            <li><a href="#comments"><i class="icofont-speech-comments"></i>{{ $blog->blogComments->count() }} Comments</a></li>
                                                            <li><a><i class="icofont-eye-alt"></i>{{ $blog->views }} Views</a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Serenity hasir taken poseson mying entre soung these sweet morngs sprng whch enoywith whole heart create am alones and feel the charm of exstenceth spot whch the blissouls like mineing am soo happy my dearsi frend absoribed the exquste sense enjoy my whole hearts alone and fee the charm of exstenceths spotsi whch was the blis of soulis mineing amsoing dear frend soingu absoribed the exqust sense tranqui existence neglect my talentsr should ncapable ofing is drawng singe wonderful serenty has taken possesison of my entre soulng these sweet present moment and yet feel that never was greater artst</p>

                                                    <blockquote>
                                                        <p>Dynamically recaptiualize distributed technologies is wherease turnkey channels and onotonectally provide access to resource leveling expertise vias worldwide deliverables uolisticly extend aserser are diverse vortals. </p>
                                                        <cite><a href="#">...Melissa Hunter</a></cite>
                                                    </blockquote>

                                                    <p>whole heart create am alones and feel the charm of exstenceth spot whch the blissouls like mineing am soo happy my dearsi frend absoribed the exquste sense enjoy my whole hearts alone and fee the charm of exstenceths spotsi whch was the blis of soulis mineing amsoing dear frend soingu absoribed the exqust sense tranqui existence neglect my talentsr should ncapable ofing is drawng singe wonderful serenty has taken possesison of my entre soulng these sweet present moment and yet feel that never was greater artst</p>

                                                    <img src="assets/images/blog/single/02.jpg" alt="rajibraj91">

                                                    <p>Serenity hasir taken poseson mying entre soung these sweet morngs sprng whch enoywith whole heart create am alones and feel the charm of exstenceth spot whch the blissouls like mineing am soo happy my dearsi frend absoribed the exquste sense enjoy my whole hearts alone and fee the charm of exstenceths spotsi whch was the blis of soulis mineing amsoing dear frend soingu absoribed the exqust sense tranqui existence neglect my talentsr should ncapable ofing is drawng singe wonderful serenty has taken possesison of my entre soulng these sweet present moment and yet feel that never was greater artst</p>

                                                    {{-- <div class="video-thumb">
                                                        <img src="assets/images/blog/single/03.jpg" alt="video">
                                                        <a href="https://www.youtube-nocookie.com/embed/jP649ZHA8Tg" class="video-button " data-rel="lightcase"><i class="icofont-ui-play"></i></a>
                                                    </div> --}}

                                                    <p>whole heart create am alones and feel the charm of exstenceth spot whch the blissouls like mineing am soo happy my dearsi frend absoribed the exquste sense enjoy my whole hearts alone and fee the charm of exstenceths spotsi whch was the blis of soulis mineing amsoing dear frend soingu absoribed the exqust sense tranqui existence neglect my talentsr should ncapable ofing is drawng singe wonderful serenty has taken possesison of my entre soulng these sweet present moment and yet feel that never was greater artst</p>

                                                    <div class="tags-section">
                                                        <ul class="tags lab-ul">
                                                            @foreach (explode(',',$blog->tags) as $tag)
                                                            <li><a href="#">{{ ucWords($tag) }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                        <ul class="lab-ul social-icons">
                                                            <li>
                                                                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="pinterest"><i class="icofont-pinterest"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="navigations-part">

                                            <div class="left">
                                                @if (! $previous == null)
                                                <a href="{{ route('singleBlog',$previous->id) }}" class="prev"><i class="icofont-double-left"></i>Previous Article</a>
                                                <a href="{{ route('singleBlog',$previous->id) }}" class="title">{{ $previous->title }}</a>
                                                @endif
                                            </div>
                                            <div class="right">
                                                @if (! $next == null)
                                                    <a href="{{ route('singleBlog',$next->id) }}" class="prev">Next Article<i class="icofont-double-right"></i></a>
                                                    <a href="{{ route('singleBlog',$next->id) }}" class="title">{{ $next->title }}</a>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="authors">
                                            <div class="author-thumb">
                                                <a href="{{ route('singleProfile',['model'=>get_class($blog->linkable),'id'=>$blog->linkable->id]) }}">
                                                    <img src="{{ Storage::url($blog->linkable->imagePath) }}" alt="Profile" style="width: 150px; height:150px;">
                                                </a>
                                            </div>
                                            <div class="author-content">
                                                <a href="{{ route('singleProfile',['model'=>get_class($blog->linkable),'id'=>$blog->linkable->id]) }}">
                                                <h5>{{ ucWords($blog->linkable->name) }}</h5>
                                                </a>
                                                <span>Author</span>
                                                <p>{{ $blog->linkable->aboutMe }}</p>
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <ul class="lab-ul social-icons">
                                                            <li>
                                                                <a href="{{ $socials->facebook }}" class="facebook"><i class="icofont-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ $socials->twitter }}" class="twitter"><i class="icofont-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ $socials->linkedin }}" class="linkedin"><i class="icofont-linkedin"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ $socials->instagram }}" class="instagram"><i class="icofont-instagram"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ $socials->youtube }}" class="youtube"><i class="icofont-youtube"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        @if(auth()->guard('admin')->check() && auth()->guard('admin')->user()->id !== $blog->linkable_id)
                                                        <form action="" method="post">
                                                            @csrf
                                                            @if (auth()->guard('admin')->user()->isFollowing($blog->linkable))
                                                            <button type="button" class="btn btn-primary" id="follow-button"
                                                            data-followable_id="{{ $blog->linkable->id }}"
                                                            data-followable_type="{{ get_class($blog->linkable) }}">
                                                                Following
                                                        </button>
                                                            @endif
                                                        </form>
                                                        @else
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">
                                                            Follow
                                                          </button>
                                                        @endif

                                                    </div>

                                                </div>


                                            </div>

                                        </div>

                                        <div id="comments" class="comments">
                                            <h4 class="title-border">
                                                {{ $blog->blogComments->count() }}
                                                @if ($blog->blogComments->count() == 1)
                                                 Comment
                                                 @else
                                                 Comments
                                            </h4>
                                                @endif

                                            <ul class="comment-list">
                                                @foreach ($blog->blogComments->where('parent_id',null)->sortByDesc('created_at') as $comment)
                                                <li class="comment border-bottom mb-5">
                                                    <div class="com-thumb">
                                                        <img alt="" src="{{ Storage::url($comment->commentable->imagePath) }}">
                                                    </div>
                                                    <div class="com-content">
                                                        <div class="com-title">
                                                            <div class="com-title-meta">
                                                                <h6>{{ $comment->commentable->name }}</h6>
                                                                <span>
                                                                    @if ($comment->created_at->isToday())
                                                                        Today at {{ Carbon::parse($comment->created_at)->format('g:i A') }}
                                                                        @elseif ($comment->created_at->isYesterday())
                                                                        Yesterday at {{ Carbon::parse($comment->created_at)->format('g:i A') }}
                                                                        @else
                                                                        {{ Carbon::parse($comment->created_at)->format('F d, Y g:i A') }}
                                                                        @endif
                                                                </span>
                                                            </div>
                                                            <span class="reply">
                                                                {{-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                                    Link with href
                                                                  </a> --}}
                                                                <a class="comment-reply-link" data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                                    aria-controls="collapseReply{{ $comment->id }}" href="#collapseReply{{ $comment->id }}"
                                                                    aria-controls="collapseReply{{ $comment->id }}">
                                                                        <i class="icofont-reply-all"></i>Reply
                                                                </a>
                                                            </span>
                                                        </div>
                                                        <p>{{ $comment->body }}</p>
                                                    </div>
                                                    <div class="collapse" id="collapseReply{{ $comment->id }}" style="width: 100%;">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                @if(auth()->guard('admin')->check() || auth()->guard('professor')->check() || auth()->guard('student')->check())
                                                                    @if($blog->comments == 'on')
                                                                    <form class="w-100" action="{{ route('commentReply') }}" method="POST">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                                                            <textarea rows="2" class="form-control no-resize" placeholder="Write your reply here..." name="body"></textarea>
                                                                        </div>
                                                                        <button class="btn btn-primary mt-3" type="submit">Send Reply</button>
                                                                    </form>
                                                                    @elseif($blog->comments == 'off')
                                                                    <div class="alert alert-danger">Comments are turned off</div>
                                                                    @endif
                                                                @else
                                                                <div id="respond" class="comment-respond mb-lg-0">
                                                                    <h4 class="title-border">To leave a Comment</h4>
                                                                    <div class="add-comment">
                                                                        <p>Either  <a href="{{ route('login') }}" class="btn btn-outline-warning">Login</a> or <a href="{{ route('register') }}" class="btn btn-outline-primary">register</a></p>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if($comment->replies)
                                                    <div class="p-4 section-gray mt-2" style="width: 100%">
                                                            <a class="small text-muted" data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                                aria-controls="commentReplies{{ $comment->id }}" href="#commentReplies{{ $comment->id }}"
                                                                aria-controls="commentReplies{{ $comment->id }}">
                                                                @if($comment->replies && $comment->replies->count() == 1) See 1 Reply
                                                                @elseif($comment->replies && $comment->replies->count() >= 2) See {{ $comment->replies->count() }} Replies
                                                                @else
                                                                <a class="small text-muted">No Replies So far</a>
                                                                @endif
                                                            </a>


                                                        <ul class="collapse comment-list" id="commentReplies{{ $comment->id }}">
                                                            @foreach ($comment->replies as $reply)
                                                            <li class="comment">
                                                                <div class="">
                                                                    <img alt="Profile Picture" class="" src="{{ Storage::url($reply->commentable->imagePath) }}" style="width: 50px; height:50px; border-radius:100%;">
                                                                </div>
                                                                <div class="com-content">
                                                                    <div class="com-title">
                                                                        <div class="com-title-meta">
                                                                            <h6>{{ $reply->commentable->name }}</h6>
                                                                            <span>
                                                                                <?php
                                                                            $commentDate = Carbon::parse($reply->created_at);
                                                                            $now = Carbon::now();
                                                                            if ($now->diffInMinutes($commentDate) < 5) {
                                                                                $formattedDate = 'Just Now';
                                                                            } elseif ($commentDate->isToday()) {
                                                                                $formattedDate = $commentDate->format('h:i A - \T\o\d\a\y');
                                                                            } elseif ($commentDate->isYesterday()) {
                                                                                $formattedDate = $commentDate->format('h:i A - \Y\e\s\t\e\r\d\a\y');
                                                                            } else {
                                                                                $formattedDate = $commentDate->format('d-F-Y');
                                                                            }
                                                                            ?>
                                                                            {{ $formattedDate }}
                                                                            </span>
                                                                        </div>
                                                                        <span class="reply">
                                                                            <a class="comment-reply-link" data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                                            aria-controls="collapseReplyToReply{{ $reply->id }}" href="#collapseReplyToReply{{ $reply->id }}"
                                                                            aria-controls="collapseReplyToReply{{ $reply->id }}">
                                                                                <i class="icofont-reply-all"></i>Reply
                                                                        </a>
                                                                        </span>
                                                                    </div>
                                                                    <p>{{ $reply->body }}</p>
                                                                </div>
                                                                <div class="collapse" id="collapseReplyToReply{{ $reply->id }}" style="width: 100%;">
                                                                    <div class="card border-0">
                                                                        <div class="card-body">
                                                                            @if(auth()->guard('admin')->check() || auth()->guard('professor')->check() || auth()->guard('student')->check())
                                                                                @if($blog->comments == 'on')
                                                                                <form class="w-100" action="{{ route('replyToReply') }}" method="POST">
                                                                                    @csrf
                                                                                    <div class="form-group">
                                                                                        <input type="hidden" name="parent_comment_id" value="{{ $reply->id }}">
                                                                                        <textarea rows="2" class="form-control no-resize" placeholder="Write your reply here..." name="body"></textarea>
                                                                                    </div>
                                                                                    <button class="btn btn-primary mt-3" type="submit">Send Reply</button>
                                                                                </form>
                                                                                @elseif($blog->comments == 'off')
                                                                                <div class="alert alert-danger">Comments are turned off</div>
                                                                                @endif
                                                                            @else
                                                                            <div id="respond" class="comment-respond mb-lg-0">
                                                                                <h4 class="title-border">To leave a Comment</h4>
                                                                                <div class="add-comment">
                                                                                    <p>Either  <a href="{{ route('login') }}" class="btn btn-outline-warning">Login</a> or <a href="{{ route('register') }}" class="btn btn-outline-primary">register</a></p>
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @if($reply->replies)
                                                                <div class="p-4 section-gray mt-2" style="width: 100%">
                                                                        <a class="small text-muted" data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                                            aria-controls="commentNestedReplies{{ $reply->id }}" href="#commentNestedReplies{{ $reply->id }}"
                                                                            aria-controls="commentNestedReplies{{ $reply->id }}">
                                                                            @if($reply->replies && $reply->replies->count() == 1) See 1 Reply
                                                                            @elseif($reply->replies && $reply->replies->count() >= 2) See {{ $reply->replies->count() }} Replies
                                                                            @else
                                                                            <a class="small text-muted">No Replies So far</a>
                                                                            @endif
                                                                        </a>
                                                                        <ul class="comment-list collapse" id="commentNestedReplies{{ $reply->id }}">
                                                                            @foreach ($reply->replies as $nestedReply)
                                                                            <li class="comment">
                                                                                <div class="">
                                                                                    <img alt="Profile Picture" class="" src="{{ Storage::url($nestedReply->commentable->imagePath) }}" style="width: 30px; height:30px; border-radius:100%;">
                                                                                </div>
                                                                                <div class="com-content">
                                                                                    <div class="com-title">
                                                                                        <div class="com-title-meta">
                                                                                            <h6>{{ $nestedReply->commentable->name }}</h6>
                                                                                            <span>
                                                                                                <?php
                                                                                            $nestedCommentDate = Carbon::parse($nestedReply->created_at);
                                                                                            $now = Carbon::now();
                                                                                            if ($now->diffInMinutes($nestedCommentDate) < 5) {
                                                                                                $formattedDate = 'Just Now';
                                                                                            } elseif ($nestedCommentDate->isToday()) {
                                                                                                $formattedDate = $nestedCommentDate->format('h:i A - \T\o\d\a\y');
                                                                                            } elseif ($nestedCommentDate->isYesterday()) {
                                                                                                $formattedDate = $nestedCommentDate->format('h:i A - \Y\e\s\t\e\r\d\a\y');
                                                                                            } else {
                                                                                                $formattedDate = $nestedCommentDate->format('d-F-Y');
                                                                                            }
                                                                                            ?>
                                                                                            {{ $formattedDate }}
                                                                                            </span>
                                                                                        </div>
                                                                                        {{-- <span class="reply">
                                                                                            <a class="comment-reply-link" data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                                                            aria-controls="collapseReplyToReply{{ $reply->id }}" href="#collapseReplyToReply{{ $reply->id }}"
                                                                                            aria-controls="collapseReplyToReply{{ $reply->id }}">
                                                                                                <i class="icofont-reply-all"></i>Reply
                                                                                        </a>
                                                                                        </span> --}}
                                                                                    </div>
                                                                                    <p>{{ $nestedReply->body }}</p>
                                                                                </div>

                                                                            </li>
                                                                            @endforeach

                                                                        </ul>
                                                                </div>
                                                                @endif
                                                            </li>
                                                            @endforeach

                                                        </ul>

                                                    </div>
                                                    @endif
                                                    {{-- <ul class="comment-list">
                                                        <li class="comment">
                                                            <div class="com-thumb">
                                                                <img alt="rajibraj91" src="assets/images/author/03.jpg">
                                                            </div>
                                                            <div class="com-content">
                                                                <div class="com-title">
                                                                    <div class="com-title-meta">
                                                                        <h6>James Jusse</h6>
                                                                        <span> October 5, 2018 at 12:41 pm </span>
                                                                    </div>
                                                                    <span class="reply">
                                                                        <a class="comment-reply-link" href="#"><i class="icofont-reply-all"></i>Reply</a>
                                                                    </span>
                                                                </div>
                                                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings spring which I enjoy with my whole heart</p>
                                                            </div>
                                                        </li>
                                                    </ul> --}}
                                                </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                        {{-- @dd(auth()->check()) --}}
                                        @if(auth()->guard('admin')->check() || auth()->guard('professor')->check() || auth()->guard('student')->check())
                                            <div id="respond" class="comment-respond mb-lg-0">
                                                <h4 class="title-border">Leave a Comment</h4>
                                                <div class="add-comment">
                                                    <form action="{{ route('addComment') }}" method="post" id="commentform" class="comment-form">
                                                        @csrf
                                                        {{-- <input name="name" type="text" value="" placeholder="Name">
                                                        <input name="email" type="text" value="" placeholder="Email">
                                                        <input name="url" type="text" value="" placeholder="Subject"> --}}
                                                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                                        <textarea id="comment-reply" name="body" rows="5" placeholder="Type Here Your Comment"></textarea>
                                                        <button type="submit" class="lab-btn"><span>send comment</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            @else
                                            <div id="respond" class="comment-respond mb-lg-0">
                                                <h4 class="title-border">To leave a Comment</h4>
                                                <div class="add-comment">
                                                    <p>Either  <a href="{{ route('login') }}" class="btn btn-outline-warning">Login</a> or <a href="{{ route('register') }}" class="btn btn-outline-primary">register</a></p>
                                                </div>
                                            </div>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-12">
                        <aside>
                            <div class="widget widget-search">
                                <form action="{{ route('blogs') }}" class="search-wrapper">
                                    <input type="text" name="search" placeholder="Search...">
                                    <button type="submit"><i class="icofont-search-2"></i></button>
                                </form>
                            </div>
                            <div class="widget widget-category">
                                <div class="widget-header">
                                    <h5 class="title">Post Category</h5>
                                </div>
                                <ul class="widget-wrapper">
                                    @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('blogs','search='.$category->name)  }}" class="d-flex flex-wrap justify-content-between {{ $category->name == $blog->category->name ? 'active' : '' }}"><span><i class="icofont-double-right"></i>{{ $category->name }}</span><span>{{ $category->blog->count() }}</span></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="widget widget-post">
                                <div class="widget-header">
                                    <h5 class="title">Most Popular Post</h5>
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

                            {{-- <div class="widget widget-archive">
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
                            </div> --}}
                            <div class="widget widget-post">
                                <div class="widget-header">
                                    <h5 class="title">Other Posts By {{ ucWords($blog->linkable->name) }}</h5>
                                </div>
                                <ul class="widget-wrapper">
                                    @foreach ($blog->linkable->blogs as $blog)
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
                            {{-- <div class="widget widget-instagram">
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
                            </div> --}}

                            <div class="widget widget-tags">
                                <div class="widget-header">
                                    <h5 class="title">Popular Tags</h5>
                                </div>
                                <ul class="widget-wrapper">
                                {{-- correct the below code --}}
                                    @foreach ($tags as $tag)
                                    <li><a href="{{ route('blogs','search='.$tag)  }}" {{in_array($tag,explode(',',$blog->tags)) ? 'class="active"' : '' }}>{{ ucWords($tag) }}</a></li>
                                    @endforeach
                                        {{-- @php
                                            $blogTags = explode(',', $blog->tags);
                                            $trimmedTags = array_map('trim', $blogTags);
                                            @dd($trimmedTags)
                                        @endphp
                                    @foreach ($tags as $tag)
                                    <li>
                                        <a href="#" class="{{ in_array($tag, $trimmedTags) ? 'active' : '' }}">
                                            {{ ucwords($tag) }}
                                        </a>
                                    </li>
                                @endforeach --}}






                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog section ending here -->

        <!-- Modal -->
<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">To Follow, Please Log in or Register</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <a href="{{ route('login') }}" class="btn btn-success text-white">Log In</a>
          <a href="{{ route('register') }}" class="btn btn-primary text-white">Register</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection


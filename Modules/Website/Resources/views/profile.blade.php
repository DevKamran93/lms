@extends('website::layouts.webLayout')
@php
  use Carbon\Carbon;
// dd($user);
@endphp
@section('content')
        <!-- Page Header section start here -->
        <div class="pageheader-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pageheader-content text-center">
                            <h2>{{ ucWords($user->name) }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Profiles</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ ucWords($user->name) }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header section ending here -->


        <!-- instructor Single Section Starts Here -->
        <section class="instructor-single-section padding-tb section-bg">
            <div class="container">
                <div class="instructor-wrapper">
                    <div class="instructor-single-top">
                        <div class="instructor-single-item d-flex flex-wrap justify-content-between">
                            <div class="instructor-single-thumb">
                                <img src="{{ Storage::url($user->imagePath) }}" alt="instructor">
                            </div>
                            <div class="instructor-single-content">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="title">{{ ucWords($user->name) }}</h4>
                                        <p class="ins-dege">{{ ucWords($user->type) }}</p>
                                        <span class="ratting">
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <div>
                                              @php
                                                // dd($user);
                                                  if(auth()->guard('admin')->check()){
                                                    $loggedInUser = auth()->guard('admin')->user();

                                                  }elseif(auth()->guard('professor')->check()){
                                                    $loggedInUser = auth()->guard('professor')->user();

                                                  }elseif(auth()->guard('student')->check()){
                                                    $loggedInUser = auth()->guard('student')->user();
                                                  }

                                              @endphp
                                            @if (isset($loggedInUser))
                                                @if ($loggedInUser->id !== $user->id)

                                                    <form action="" method="post">
                                                        @csrf
                                                        @if ($loggedInUser->isFollowing($user))


                                                            <button type="button" class="btn btn-danger" id="follow-button"
                                                                    data-followable_id="{{ $user->id }}"
                                                                    data-followable_type="{{ get_class($user) }}">
                                                                Unfollow
                                                            </button>
                                                        @else
                                                        {{-- @dd($user); --}}
                                                            <button type="button" class="btn btn-primary" id="follow-button"
                                                                    data-followable_id="{{ $user->id }}"
                                                                    data-followable_type="{{ get_class($user) }}">
                                                                Follow
                                                            </button>
                                                        @endif
                                                    </form>
                                                @endif
                                                @else
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">
                                                    Follow
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <p class="ins-desc"><strong>Member Since : </strong>
                                    @if ($user->created_at->isToday())
                                        Joined Today
                                        @elseif ($user->created_at->isYesterday())
                                        Yesterday
                                        @else
                                        {{ Carbon::parse($user->created_at)->format('F d, Y') }}
                                    @endif

                                </p>
                                <h6 class="subtitle">Personal Statement</h6>
                                <p class="ins-desc">{{ $user->aboutMe }}</p>
                                <ul class="lab-ul">
                                    <li class="d-flex flex-wrap justify-content-start">
                                        <span class="list-name">Adress</span>
                                        <span class="list-attr">{{ ucWords($user->address) }}</span>
                                    </li>
                                    <li class="d-flex flex-wrap justify-content-start">
                                        <span class="list-name">Email</span>
                                        <a href="mailto:{{ $user->email }}"class="list-attr">{{ $user->email }}</a>
                                    </li>
                                    <li class="d-flex flex-wrap justify-content-start">
                                        <span class="list-name">Phone</span>
                                        <a href="tel:{{ $user->phone }}" class="list-attr">{{ $user->phone }}</a>
                                    </li>
                                    <li class="d-flex flex-wrap justify-content-start">
                                        <span class="list-name">Followers</span>
                                        <span class="list-attr">{{ $user->followers->count() }}</span>
                                    </li>
                                    <li class="d-flex flex-wrap justify-content-start">
                                        <span class="list-name">Following</span>
                                        <span class="list-attr">{{ $user->followings->count() }}</span>
                                    </li>
                                    <li class="d-flex flex-wrap justify-content-start">
                                        <span class="list-name">Follow Me</span>
                                        <ul class="lab-ul list-attr d-flex flex-wrap justify-content-start">
                                            @if($user->socialLinks->count() == 1)
                                            @foreach ($user->socialLinks as $link)
                                            <li>
                                                <a class="twitter" href="{{ $link->twitter }}"><i class="icofont-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a class="instagram" href="{{ $link->instagram }}"><i class="icofont-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a class="youtube" href="{{ $link->youtube }}"><i class="icofont-youtube"></i></a>
                                            </li>
                                            <li>
                                                <a class="linkedin" href="{{ $link->linkedin }}"><i class="icofont-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a class="facebook" href="{{ $link->facebook }}"><i class="icofont-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a class="web" href="{{ $link->website }}"><i class="icofont-web"></i></a>
                                            </li>
                                            @endforeach
                                            @endif

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- @dd($user->blogs) --}}
                    <div class="instructor-single-bottom d-flex flex-wrap mt-4">
                        <div class="col-xl-6 pb-5 pb-xl-0 d-flex flex-wrap justify-content-lg-start justify-content-between">
                            <h4 class="subtitle">Personal Language Skill</h4>
                            <div class="text-center skill-item">
                                <div class="skill-thumb">
                                    <div class="circles text-center">
                                        <div class="circle first" data-percent="80">
                                            <strong>80<i>%</i></strong>
                                        </div>
                                    </div>
                                </div>
                                <p>English</p>
                            </div>
                            <div class="text-center skill-item">
                                <div class="skill-thumb">
                                    <div class="circles text-center">
                                        <div class="circle second" data-percent="70">
                                            <strong>70<i>%</i></strong>
                                        </div>
                                    </div>
                                </div>
                                <p>Hindi</p>
                            </div>
                            <div class="text-center skill-item">
                                <div class="skill-thumb">
                                    <div class="circles text-center">
                                        <div class="circle third" data-percent="60">
                                            <strong>60<i>%</i></strong>
                                        </div>
                                    </div>
                                </div>
                                <p>Bangla</p>
                            </div>
                        </div>
                        <div class="col-xl-6 d-flex flex-wrap justify-content-lg-start justify-content-between">
                            <h4 class="subtitle">Recognitions Award</h4>
                            <div class="skill-item text-center">
                                <div class="skill-thumb">
                                    {{-- <img src="assets/images/instructor/single/icon/01.png" alt="instructor"> --}}
                                    <img src="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/images/instructor/single/icon/01.png') }}" alt="">
                                </div>
                                <p>Award 2018</p>
                            </div>
                            <div class="skill-item text-center">
                                <div class="skill-thumb">
                                    <img src="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/images/instructor/single/icon/02.png') }}" alt="instructor">
                                </div>
                                <p>Award 2019</p>
                            </div>
                            <div class="skill-item text-center">
                                <div class="skill-thumb">
                                    <img src="{{ asset('landing pages/LMS/Edukon Main HTML Template/buyer-file/edukon/assets/images/instructor/single/icon/03.png') }}" alt="instructor">
                                </div>
                                <p>Award 2020</p>
                            </div>
                        </div>
                    </div>
                    <!-- Section: Timeline -->
                    <section class="py-5 instructor-single-bottom mt-5">
                        <ul class="timeline">
                            @foreach ($user->blogs as $blog)
                            <li class="timeline-item mb-5">
                                <h5 class="fw-bold "> <a href="{{ route('singleBlog',$blog->id) }}">{{ $blog->title }}</a></h5>
                                <p class="text-muted mb-2 fw-bold">
                                    @if ($blog->created_at->isToday())
                                    Today at {{ Carbon::parse($blog->created_at)->format('g:i A') }}
                                    @elseif ($blog->created_at->isYesterday())
                                    Yesterday at {{ Carbon::parse($blog->created_at)->format('g:i A') }}
                                    @else
                                    {{ Carbon::parse($blog->created_at)->format('F d, Y ') }}
                                @endif
                                </p>
                                <p class="text-muted">
                                {{$blog->excerpt}}
                                </p>
                                    <div class="post-footer d-flex justify-content-between">
                                        <div class="pf-left">
                                            <a href="{{ route('singleBlog',$blog->id) }}" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
                                        </div>
                                        <div class="pf-right ">
                                            <div>
                                                <i class="icofont-comment"></i>
                                                <a href="{{ route('singleBlog',$blog->id) }}#comments" class="comment-count">{{ $blog->blogComments->count() }} Comments</a>


                                            </div>
                                            <div>
                                                <a><i class="icofont-eye-alt"></i>{{ $blog->views }} Views</a>
                                            </div>
                                        </div>
                                    </div>

                            </li>
                            @endforeach



                        </ul>
                    </section>
  <!-- Section: Timeline -->
                </div>
            </div>
        </section>

        <!-- instructor Single Section Ends Here -->
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

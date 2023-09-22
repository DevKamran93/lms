<!DOCTYPE html>
<html lang="en">
<?php
use Carbon\Carbon;

// Assuming $startDate and $endDate are the start and end dates of the event
$startDate = Carbon::parse($event->fromtDate);
$endDate = Carbon::parse($event->toDate);

// Get the month name and day with ordinal suffix for the start and end dates
$startMonthDay = $startDate->format('F jS');
$endMonthDay = $endDate->format('jS');

// Check if the start and end dates are in the same month
if ($startDate->month === $endDate->month) {
    // If the dates are in the same month, only show the end day
    $dateRange = $startMonthDay . ' to ' . $endMonthDay;
} else {
    // If the dates are in different months, show the full end date
    $dateRange = $startMonthDay . ' to ' . $endDate->format('F jS');
}

?>
<head>
    <meta charset="utf-8">
    <title>Eventbiz - Event and Conference Website Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Eventbiz is event and conference website template">
    <meta name="keywords" content="camp, conference, conference theme, event, event schedule, event website, event wordpress theme, exhibition, expo">
    <meta name="author" content="">

    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

    <!-- CSS Files
    ================================================== -->
    {{-- <link rel="stylesheet" href="css/bootstrap.css" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('landing pages/LMS/Eventbiz/HTML/css/bootstrap.css') }}">
    {{-- <link rel="stylesheet" href="css/animate.css" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('landing pages/LMS/Eventbiz/HTML/css/animate.css') }}">
    {{-- <link rel="stylesheet" href="css/owl.carousel.css" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('landing pages/LMS/Eventbiz/HTML/css/owl.carousel.css') }}">
    {{-- <link rel="stylesheet" href="css/magnific-popup.css" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('landing pages/LMS/Eventbiz/HTML/css/magnific-popup.css') }}">
    {{-- <link rel="stylesheet" href="css/jquery.countdown.css" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('landing pages/LMS/Eventbiz/HTML/css/jquery.countdown.css') }}">
    {{-- <link rel="stylesheet" href="css/style.css" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('landing pages/LMS/Eventbiz/HTML/css/style.css') }}">
        {{-- <style>
            @media only screen and (max-width: 600px) {
            iframe {
                width: 600px;
            }
            }

            @media only screen and (max-width: 600px) {
            iframe {
                width: 600px;
            }
            }
        </style> --}}
    <!-- background -->
    {{-- <link rel="stylesheet" href="css/bg.css" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('landing pages/LMS/Eventbiz/HTML/css/bg.css') }}">

    <!-- color -->
    {{-- <link rel="stylesheet" href="css/colors/orange.css" type="text/css"> --}}
    <link rel="stylesheet" href="{{ asset('landing pages/LMS/Eventbiz/HTML/css/colors/orange.css') }}">
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header class="autoshow">
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="col"><span class="id-color"><i class="fa fa-map-marker"></i></span>100 Mainstreet Center, Sydney</div>
                            <div class="col"><span class="id-color"><i class="fa fa-clock-o"></i></span>Saturday 3 August 2023 14:00 PM - 16:00
                                PM</div>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="rsvp.html" class="btn btn-custom btn-small">I'm Attending</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                                <img class="logo" src="images/logo-light.png" alt="">
                                <img class="logo-2" src="images/logo-dark.png" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a class="active" href="#top">Home</a>
									{{-- <ul>
										<li><a href="02_index_multipage.html">New: Multipage</a></li>
										<li><a href="index.html">Homepage 1</a></li>
										<li><a href="index_2.html">Homepage 2</a></li>
										<li><a href="index_3.html">Homepage 3</a></li>
										<li><a href="index_4.html">Homepage 4</a></li>
										<li><a href="index_5.html">Homepage 5</a></li>
										<li><a href="index_6.html">Homepage 6</a></li>
										<li><a href="index_7.html">Homepage 7</a></li>
										<li><a href="index_8.html">Homepage 8</a></li>
										<li><a href="index_9.html">Homepage 9</a></li>
										<li><a href="index_10.html">Homepage 10</a></li>
										<li><a href="index_11.html">[New] Homepage 11</a></li>
										<li><a href="index_12.html">[New] Homepage 12</a></li>
										<li><a href="index_anim_1.html">[New] Animated 1</a></li>
									</ul> --}}
								</li>
                                <li><a href="#section-speakers">Speakers</a></li>
                                <li><a href="#section-schedules">Schedules</a></li>
                                <li><a href="#section-sponsors">Sponsors</a></li>
                                <li><a href="#section-tickets">Tickets</a></li>
                                <li><a href="#section-info">Info</a></li>
                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            <div id="top"></div>

            <!-- section begin -->
            <section id="section-intro-8" class="full-height no-top no-bottom text-light" data-stellar-background-ratio=".2">
                <div class="overlay-bg t50">

                    <div class="center-y fadeScroll text-center relative" data-scroll-speed="4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="spacer-double"></div>
                                    <div class="subtitle s2"><span><i class="fa fa-calendar-o id-color"></i>{{ $dateRange }}</span><span><i class="fa fa-map-marker id-color"></i>{{ $event->venueName }}</span></div>
                                    <div class="spacer-single"></div>
                                    <h1 class="ultra-big">EVENTBIZ <span class="id-color">'23</span></h1>
                                    <div class="spacer-single"></div>
                                    <h3>{{ $event->title }}</h3>
                                    <div class="spacer-single"></div>
                                    <a href="#section-tickets" class="btn btn-custom">See Tickets</a>&nbsp;
                                    <a href="#" class="btn btn-border">View Tour</a>
                                    <div class="spacer-double"></div>
                                    <div id="defaultCountdown" class="countdown-s1"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-intro-text" data-bgcolor="#eeeeee">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 wow fadeInUp">
                            {{-- <img src="images/misc/screen-1.png" class="img-responsive" alt=""> --}}
                            {{-- <img src="{{ asset('landing pages/LMS/Eventbiz/HTML/images/misc/screen-1.png') }}" alt=""> --}}
                        </div>

                        <div class="col-md-7 wow fadeInRight">
                            <h2>What is Eventbiz?</h2>
                            <p class="lead">Eventbiz is largest digital event of this year. We use large audiotorium with capacity of fifty
                                thousand participants is also equipped with advanced facilities.</p>

                            <div class="de_tab tab_style_2">
                                <ul class="de_nav">
                                    <li class="active" data-link="#section-services-tab">
                                        <span>Topics</span>
                                    </li>
                                    <li data-link="#section-services-tab">
                                        <span>Workshops</span>
                                    </li>
                                    <li data-link="#section-services-tab">
                                        <span>Information</span>
                                    </li>
                                </ul>

                                <div class="de_tab_content text-left">

                                    <div id="tab_a1" class="tab_single_content">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="{{ asset('landing pages/LMS/Eventbiz/HTML/images/misc/1.jpg') }}" class="img-circle img-responsive" alt="">
                                            </div>
                                            <div class="col-md-9">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                                                ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                                sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                odit aut fugit, sed quia consequuntur magni dolores.
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab_a2" class="tab_single_content">
                                        <div class="row">
                                            <div class="col-md-9">
                                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                                voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                                                dolor sit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam.
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{ asset('landing pages/LMS/Eventbiz/HTML/images/misc/2.jpg') }}" class="img-circle img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab_a3" class="tab_single_content">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="{{ asset('landing pages/LMS/Eventbiz/HTML/images/misc/3.jpg') }}" class="img-circle img-responsive" alt="">
                                            </div>
                                            <div class="col-md-9">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                                                ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                                                sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

        </div>
    </div>
    </div>
    </section>
    <!-- section close -->


    <!-- section begin -->
    <section id="section-speakers">
        <div class="container relative">
            <div class="row">
                <div class="col-md-12 text-center wow fadeInUp">
                    <h2><span class="id-color">Event</span> Speakers</h2>
                    <p class="lead">We invite digital experts from arround the world</p>
                    <div class="spacer-single"></div>
                </div>
            </div>
            <div class="container">
                <div class="sequence row justify-content-center">

                    @foreach ($event->speakers as $speaker)
                    <div class="col-sm-4 wow sq-item">
                        <div class="profile_pic text-center">
                            <figure class="picframe mb30">
                                @if($speaker->linkable_id == null)
                                <a class="image-popup" href="{{ Storage::url($speaker->imagePath) }}">
                                        <span class="overlay-v">
                                            <span>{{ $speaker->about }}</span>
                                        </span>
                                    </a>
                                <img src="{{ Storage::url($speaker->imagePath) }}" class="img-responsive " alt="" width="" height="300">
                                @else
                                <a class="image-popup" href="{{ Storage::url($speaker->linkable->imagePath) }}">
                                    <span class="overlay-v">
                                        <span>{{ $speaker->linkable->about }}</span>
                                    </span>
                                </a>
                            <img src="{{ Storage::url($speaker->linkable->imagePath) }}" class="img-responsive " alt="" width="" height="300">
                                @endif
                            </figure>
                            @if($speaker->linkable_id == null)
                            <h3>{{ ucWords($speaker->name) }}</h3>
                            <span class="subtitle">{{ ucWords($speaker->designation) }}</span>
                            @else
                            <h3>{{ ucWords($speaker->linkable->name) }}</h3>
                            <span class="subtitle">{{ ucWords($speaker->linkable->type) }}</span>
                            @endif
                        </div>
                    </div>
                    @endforeach

                </div>
                    {{-- <div class="col-md-4 mb30 wow sq-item">
                        <div class="profile_pic text-center">
                            <figure class="picframe mb30">
                                <a class="image-popup" href="images/team/2.jpg">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                <img src="images/team/2.jpg" class="img-responsive" alt="">
                            </figure>

                            <h3>Sophie Lana</h3>
                            <span class="subtitle">Founder & CEO</span>
                        </div>
                    </div>

                    <div class="col-md-4 mb30 wow sq-item">
                        <div class="profile_pic text-center">
                            <figure class="picframe mb30">
                                <a class="image-popup" href="images/team/3.jpg">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                <img src="images/team/3.jpg" class="img-responsive" alt="">
                            </figure>

                            <h3>James Hoult</h3>
                            <span class="subtitle">Founder & CEO</span>
                        </div>
                    </div> --}}
                {{-- <div class="sequence row">
                    <div class="col-md-3 mb30 wow sq-item">
                        <div class="profile_pic text-center">
                            <figure class="picframe mb30">
                                <a class="image-popup" href="images/team/4.jpg">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                <img src="images/team/4.jpg" class="img-responsive" alt="">
                            </figure>

                            <h3>Oscar Helman</h3>
                            <span class="subtitle">Founder & CEO</span>
                        </div>
                    </div> --}}

                    {{-- <div class="col-md-3 mb30 wow sq-item">
                        <div class="profile_pic text-center">
                            <figure class="picframe mb30">
                                <a class="image-popup" href="images/team/5.jpg">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                <img src="images/team/5.jpg" class="img-responsive" alt="">
                            </figure>

                            <h3>Rose Shipp</h3>
                            <span class="subtitle">Founder & CEO</span>
                        </div>
                    </div>

                    <div class="col-md-3 mb30 wow sq-item">
                        <div class="profile_pic text-center">
                            <figure class="picframe mb30">
                                <a class="image-popup" href="images/team/6.jpg">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                <img src="images/team/6.jpg" class="img-responsive" alt="">
                            </figure>

                            <h3>Isaac Nicholas</h3>
                            <span class="subtitle">Founder & CEO</span>
                        </div>
                    </div>

                    <div class="col-md-3 mb30 wow sq-item">
                        <div class="profile_pic text-center">
                            <figure class="picframe mb30">
                                <a class="image-popup" href="images/team/7.jpg">
                                        <span class="overlay-v">
                                            <span>Interested in all the digital things. Has earned several awards and has been a speaker at many world-class seminars.</span>
                                        </span>
                                    </a>
                                <img src="images/team/7.jpg" class="img-responsive" alt="">
                            </figure>

                            <h3>John Arnold</h3>
                            <span class="subtitle">Founder & CEO</span>
                        </div>
                    </div> --}}
                </div>
                </div>
        </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-fun-facts" class="no-top no-bottom text-light" data-stellar-background-ratio=".2">
        <div class="overlay-bg pt80 pb80">
            <div class="container">

                <div class="row">
                    <div class="col-md-3 wow fadeIn" data-wow-delay="0">
                        <div class="de_count">
                            <i class="icon_id-2 id-color" data-animation="fadeInDown" data-delay="0"></i>
                            <h3 class="timer" data-to="8800" data-speed="2500">0</h3>
                            <span>Participants</span>
                        </div>
                    </div>

                    <div class="col-md-3 wow fadeIn" data-wow-delay=".25s">
                        <div class="de_count">
                            <i class="icon_easel  id-color" data-animation="fadeInDown" data-delay="200"></i>
                            <h3 class="timer" data-to="{{ $total_topics }}" data-speed="2500">0</h3>
                            <span>Topics</span>
                        </div>
                    </div>

                    <div class="col-md-3 wow fadeIn" data-wow-delay=".5s">
                        <div class="de_count">
                            <i class="icon_headphones  id-color" data-animation="fadeInDown" data-delay="400"></i>
                            <h3 class="timer" data-to="{{ $event->speakers->count() }}" data-speed="2500">0</h3>
                            <span>Speakers</span>
                        </div>
                    </div>

                    <div class="col-md-3 wow fadeIn" data-wow-delay=".75s">
                        <div class="de_count">
                            <i class="icon_globe id-color" data-animation="fadeInDown" data-delay="600"></i>
                            <h3 class="timer" data-to="20" data-speed="2500">0</h3>
                            <span>Awards</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-schedules" aria-label="section-services-tab" data-bgcolor="#f5f5f5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center wow fadeInUp">
                    <h2><span class="id-color">Event</span> Schedules</h2>
                    <p class="lead">Do not miss it and be sure to attend</p>
                    <div class="spacer-single"></div>
                </div>

                <div class="col-md-12 wow fadeInUp">
                    <div class="de_tab tab_style_4 text-center">
                        <ul class="de_nav">

                            @foreach ($event->eventDays as $key => $day)
                                @if ($day->topics->count() > 0)
                                    <li class="{{ $key == 0 ? ' active' : '' }}" data-link="#section-services-tab">
                                        <?php
                                            $day_parts = explode(' ', $day->name);
                                            $day_number = $day_parts[1];
                                        ?>
                                        <h3>Day <span>{{ $day_number }}</span></h3>
                                        <h4>{{ Carbon::parse($day->date)->format('j F, Y') }}</h4>
                                    </li>
                                @else
                                    @continue
                                @endif
                            @endforeach
                        </ul>

                        <div class="de_tab_content text-left">
                            @foreach ($event->eventDays as $day)
                                <div id="tab1" class="tab_single_content">
                                    @foreach ($day->topics as $topic)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="schedule-listing">
                                                <div class="schedule-item">
                                                    <?php
                                                    $from_time = Carbon::createFromFormat('H:i:s', $topic->fromTime)->format('h:i A');
                                                    $to_time = Carbon::createFromFormat('H:i:s', $topic->toTime)->format('h:i A');
                                                    $time_range = $from_time . ' - ' . $to_time;
                                                    ?>
                                                    <div class="sc-time">{{ $time_range }}</div>
                                                    @if(! $topic->speaker->linkable_id == null)
                                                    <div class="sc-pic">
                                                        <img src="{{ Storage::url($topic->speaker->linkable->imagePath) }}" class="img-circle" alt="{{ $topic->speaker->linkable->name }}" width="80px" height="80px">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>{{ ucWords($topic->speaker->linkable->name) }}</h4>
                                                        <span>{{ ucWords($topic->speaker->linkable->type) }}</span>
                                                    </div>
                                                    @elseif($topic->speaker->linkable_id == null)
                                                    <div class="sc-pic">
                                                        <img src="{{ Storage::url($topic->speaker->imagePath) }}" class="img-circle" alt="{{ $topic->speaker->name }}" width="80px" height="80px">
                                                    </div>
                                                    <div class="sc-name">
                                                        <h4>{{ ucWords($topic->speaker->name) }}</h4>
                                                        <span>{{ ucWords($topic->speaker->designation) }}</span>
                                                    </div>
                                                    @endif
                                                    <div class="sc-info">
                                                        <h3>{{ ucWords($topic->topic) }}</h3>
                                                        <p>{{$topic->body}}</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-testimonial" class="text-light no-top no-bottom" data-stellar-background-ratio=".2">
        <div class="overlay-bg pt80 pb80">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeInUp">
                        <h2><span class="id-color">They</span> Says</h2>
                        <div class="spacer-single"></div>
                    </div>


                    <div id="testimonial-carousel" class="de_carousel wow fadeInUp">

                        <div class="col-md-6 item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>I'm very happy with this event. I will recommend this to my family and friends. The speakers
                                        are professional. It's worth quality for the price.</p>
                                    <div class="de_testi_by">
                                        John, Freelancer
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="col-md-6 item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>A wonderful event thank you! The best event as it proved by quality. I learn many digital
                                        things. I would definitely return for future events.</p>
                                    <div class="de_testi_by">
                                        Sarah, College Student
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="col-md-6 item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>I will recommend this to my family and friends. I'm very happy with this event. The speakers
                                        are professional. It's worth quality for the price.</p>
                                    <div class="de_testi_by">
                                        Michael, Office Staff
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="col-md-6 item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>I learn many digital things! A wonderful event thank you! The best event as it proved
                                        by quality. I would definitely return for future events.</p>
                                    <div class="de_testi_by">
                                        Jenny, Student
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-sponsors">
        <div class="container relative">
            <div class="row">
                <div class="col-md-12 text-center wow fadeInUp">
                    <h2><span class="id-color">Event</span> Sponsors</h2>
                    <p class="lead">Check who make this event possible</p>
                    <div class="spacer-single"></div>
                </div>

                <div class="col-md-12 text-center sequence wow fadeInUp">
                    <h3>Gold Sponsors</h3>
                    <div class="spacer-single"></div>
                    @foreach ($goldSponsors as $sponsor)
                    <img src="{{ Storage::url($sponsor->logo) }}" alt="{{ $sponsor->name }}" class="sq-item wow" width="350px" height="200px">
                    @endforeach



                    <div class="spacer-double"></div>

                    <h3>Silver Sponsors</h3>
                    <div class="spacer-single"></div>
                    @foreach ($silverSponsors as $sponsor)
                    <img src="{{ Storage::url($sponsor->logo) }}" alt="{{ $sponsor->name }}" class="sq-item wow" width="100px" height="80px">

                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-tickets" class="text-light no-top no-bottom" data-stellar-background-ratio=".2">
        <div class="overlay-bg pt80 pb80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeInUp">
                        <h2><span class="id-color">Get</span> Tickets</h2>
                        <p class="lead">Join the biggest digital event of the year</p>
                        <div class="spacer-single"></div>
                    </div>

                    <div class="col-md-12 wow fadeInUp">
                        <div class="item pricing">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="pricing-s1 mb30">
                                            <div class="top">
                                                <h2>Early Bird</h2>
                                                <p class="price"><span class="currency">$</span> <b>@if($event->pricing){{ $basic->price }}@endif</b> <span class="month">/1 person</span></p>
                                            </div>
                                            <div class="bottom">
                                                @if($event->pricing)
                                                <ul>
                                                    <li><i class="icon_check"></i>{{ $basic->conferenceDays }} Conference Day</li>
                                                    <li><i class="icon_check"></i>{{ $basic->workshopDays }} Workshop Day</li>
                                                    <li><i class="icon_check"></i>{{ ucWords($basic->seating) }} Seat</li>
                                                    @if ($basic->freeCoffeeLunch == 'yes')
                                                    <li><i class="icon_check"></i>Free Coffee/Lunch</li>
                                                    @endif
                                                    <li><i class="icon_check"></i>One Certificate</li>
                                                </ul>
                                                @else
                                                <ul>
                                                    <li><i class="icon_check"></i>0 Conference Day</li>
                                                    <li><i class="icon_check"></i>0 Workshop Day</li>
                                                    <li><i class="icon_check"></i>0 Seat</li>
                                                    <li><i class="icon_check"></i>Free Coffee/Lunch</li>
                                                    <li><i class="icon_check"></i>One Certificate</li>
                                                </ul>
                                                @endif
                                                <a href="" class="btn btn-custom" data-toggle="modal" data-target="#purchasingTicket" title="Purchase Ticket">Get Ticket</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="pricing-s1 featured mb30">
                                            <div class="ribbon">Best Selling</div>
                                            <div class="top">
                                                <h2>Regular</h2>
                                                <p class="price"><span class="currency">$</span> <b>@if($event->pricing){{ $regular->price }}@endif</b> <span class="month">/1 person</span></p>
                                            </div>
                                            <div class="bottom">
                                                @if($event->pricing)
                                                <ul>
                                                    <li><i class="icon_check"></i>{{ $regular->conferenceDays }} Conference Day</li>
                                                    <li><i class="icon_check"></i>{{ $regular->workshopDays }} Workshop Day</li>
                                                    <li><i class="icon_check"></i>{{ ucWords($regular->seating) }} Seat</li>
                                                        @if($regular->freeCoffeeLunch=='yes')
                                                    <li><i class="icon_check"></i>Free Coffee/Lunch</li>
                                                    @endif
                                                    <li><i class="icon_check"></i>Two Certificate</li>
                                                </ul>
                                                @else
                                                <ul>
                                                    <li><i class="icon_check"></i>0 Conference Day</li>
                                                    <li><i class="icon_check"></i>0 Workshop Day</li>
                                                    <li><i class="icon_check"></i>0 Seat</li>
                                                    <li><i class="icon_check"></i>Free Coffee/Lunch</li>
                                                    <li><i class="icon_check"></i>One Certificate</li>
                                                </ul>
                                                @endif
                                                <a href="" class="btn btn-custom" data-toggle="modal" data-target="#purchasingTicket" title="Purchase Ticket">Get Ticket</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="pricing-s1 mb30">
                                            <div class="top">
                                                <h2>Exclusive</h2>
                                                <p class="price"><span class="currency">$</span> <b>@if($event->pricing){{ $exclusive->price }}@endif</b> <span class="month">/1 person</span></p>
                                            </div>
                                            <div class="bottom">
                                                @if($event->pricing)
                                                <ul>
                                                    <li><i class="icon_check"></i>Full Conference Day</li>
                                                    <li><i class="icon_check"></i>Full Workshop Day</li>
                                                    <li><i class="icon_check"></i>VIP Seat</li>
                                                    <li><i class="icon_check"></i>Free Coffee/Lunch</li>
                                                    <li><i class="icon_check"></i>Three Certificate</li>
                                                </ul>
                                                @else
                                                <ul>
                                                    <li><i class="icon_check"></i>0 Conference Day</li>
                                                    <li><i class="icon_check"></i>0 Workshop Day</li>
                                                    <li><i class="icon_check"></i>0 Seat</li>
                                                    <li><i class="icon_check"></i>Free Coffee/Lunch</li>
                                                    <li><i class="icon_check"></i>One Certificate</li>
                                                </ul>
                                                @endif
                                                <a href="" class="btn btn-custom" data-toggle="modal" data-target="#purchasingTicket" title="Purchase Ticket">Get Ticket</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center wow fadeInUp">
                    <h2><span class="id-color">Venue</span> Information</h2>
                    <p class="lead">Everything you need, 24 hours</p>
                    <div class="spacer-single"></div>
                </div>

                <div class="col-md-4 text-center wow fadeInUp">
                    <i class="icon-flag id-color mb20 size40"></i>
                    <h3>Venue</h3>
                    <p>Large audiotorium with capacity of fifty thousand participants is also equipped with advanced facilities
                        for your pleasure.</p>
                </div>

                <div class="col-md-4 text-center wow fadeInUp">
                    <i class="icon-bike id-color mb20 size40"></i>
                    <h3>Transport</h3>
                    <p>The location of the seminar is located in the city center so it is easily reached by private or public
                        vehicles which available for 24 hours.</p>
                </div>

                <div class="col-md-4 text-center wow fadeInUp">
                    <i class="icon-map id-color mb20 size40"></i>
                    <h3>Hotel</h3>
                    <p>There are many hotels available around the event location for temporary residence as long as you follow
                        this event, from motels to 5 stars.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-map" class="no-top no-bottom" aria-label="map-container">
        {{-- <div id="map"></div> --}}
        <div class="container-fluid">
            {{-- {!! $event->map_address !!} --}}
            {{-- <iframe src="" frameborder="0"></iframe> --}}
            <iframe src="{{ $event->map_address }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-quick-contact" class="bordertop">
        <div class="container">
            <div class="row text-center wow fadeInUp">
                <div class="col-md-4">
                    <div class="wm-1"></div>
                    <i class="icon_mobile id-color size40 mb20"></i>
                    <h5>Call Us</h5>
                    <h4><a href="tel:{{ $event->linkable->phone }}">{{ $event->linkable->phone }}</a></h4>
                </div>

                <div class="col-md-4">
                    <div class="wm-1"></div>
                    <i class="icon_house_alt id-color size40 mb20"></i>
                    <h5>Address</h5>
                    <h4>{{ $event->venueName }}</h4>
                    <h4>{{ $event->venueAddress }}</h4>
                </div>

                <div class="col-md-4">

                    <div class="wm-1"></div>
                    <i class="icon_mail_alt id-color size40 mb20"></i>
                    <h5>Email Us</h5>
                    <h4><a href="mailto:{{ $event->linkable->email }}">{{ $event->linkable->email }}</a></h4>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    </div>
    <!-- content close -->

    <!-- footer begin -->
    <footer>
        <div class="container text-center text-light">
            <div class="row">
                <div class="col-md-12">
                    <div class="social-icons big">
                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                        <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="subfooter">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        &copy; Copyright 2023 - Eventbiz by Designesia
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer close -->

    <a href="#" id="back-to-top"></a>
    <div id="preloader">
        <div class="preloader1"></div>
    </div>
    </div>

    <div class="modal fade " id="purchasingTicket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel">Purchasing Ticket</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
            </div>
            <form action="" method="post" class="d-inline" id="purchaseForm">
                <div class="modal-body">
                    @csrf
                    @method('PATCH')
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" name="name" value="{{ old('name') }}" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="xyz@email.com" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        <input type="hidden" name="event_id" id="event_id">
                        <input type="hidden" name="ticket_type" id="ticket_type">
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Confirm</button>
                </div>
            </form>
        </div>
        </div>
    </div>


    <!-- Javascript Files
    ================================================== -->
    {{-- <script src="js/jquery.min.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Eventbiz/HTML/js/jquery.min.js') }}"></script>
    {{-- <script src="js/bootstrap.min.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Eventbiz/HTML/js/bootstrap.min.js') }}"></script>
    {{-- <script src="js/jquery.isotope.min.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Eventbiz/HTML/js/jquery.isotope.min.js') }}"></script>
    {{-- <script src="js/easing.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Eventbiz/HTML/js/easing.js') }}"></script>
    {{-- <script src="js/owl.carousel.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Eventbiz/HTML/js/owl.carousel.js') }}"></script>
    {{-- <script src="js/jquery.countTo.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Eventbiz/HTML/js/jquery.countTo.js') }}"></script>
    {{-- <script src="js/wow.min.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Eventbiz/HTML/js/wow.min.js') }}"></script>
    {{-- <script src="js/jquery.magnific-popup.min.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Eventbiz/HTML/js/jquery.magnific-popup.min.js') }}"></script>
    {{-- <script src="js/enquire.min.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Eventbiz/HTML/js/enquire.min.js') }}"></script>
    {{-- <script src="js/jquery.stellar.min.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Eventbiz/HTML/js/jquery.stellar.min.js') }}"></script>
    {{-- <script src="js/jquery.plugin.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Eventbiz/HTML/js/jquery.plugin.js') }}"></script>
    {{-- <script src="js/jquery.countdown.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Eventbiz/HTML/js/jquery.countdown.js') }}"></script>
    {{-- <script src="js/countdown-custom.js"></script> --}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc5d1RS_0yWJ1Hyw2hGWfbRZ9KKaxFAZo"></script>
    {{-- <script src="js/map.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Eventbiz/HTML/js/map.js') }}"></script>
    {{-- <script src="js/designesia.js"></script> --}}
    <script src="{{ asset('landing pages/LMS/Eventbiz/HTML/js/designesia.js') }}"></script>

</body>

</html>

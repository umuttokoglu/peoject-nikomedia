@extends('layouts.app')

@section('content')
    <div dir="ltr" class="rev_slider_wrapper fullscreenbanner-container">
        <div id="rev-slider-1" data-version="5.4.5" class="mad-d-none rev-slider with-overlay fullscreenabanner">
            <ul>
                <li data-transition="fade">
                    <img src="{{ asset('assets/images/therapy.jpg') }}" alt="" data-bgposition="top center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina/>

                    <div
                        data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-y="center" data-voffset="['-196', '-196', '-196', '-156']"
                        data-width="['98%', '98%', '98%', '98%']" data-height="['auto']" data-textAlign="['center']"
                        class="tp-caption tp-resizeme rev-sub-title">
                        <div class="mad-pre-title">psychotherapy and counselling</div>
                    </div>

                    <div
                        data-frames='[{"delay":400,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-y="center" data-voffset="['-90', '-90', '-90', '-70']"
                        data-width="['98%', '98%', '98%', '98%']" data-height="['auto']" data-textAlign="['center']"
                        data-color="['#ffffff']" data-fontsize="['72']" data-lineheight="['88']"
                        class="tp-caption tp-resizeme tp-layer-section-title"> Take Charge Of Your <br/> Mental Health
                    </div>

                    <div
                        data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-y="center" data-voffset="['48', '48', '48', '38']"
                        data-width="['98%', '98%', '98%', '98%']" data-height="['auto']" data-textAlign="['center']"
                        data-color="['#E8E9EA']" data-fontsize="['18']" data-lineheight="['32']"
                        class="tp-caption tp-resizeme">
                        <p> Psychotherapy and cognitive behavioural therapy for a range of issues, <br/> from day-to-day
                            worries
                            to complex psychological conditions </p>
                    </div>

                    <div
                        data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-x="center" data-y="center" data-voffset="['170', '170', '170', '170']"
                        data-width="['98%', '98%', '98%', '98%']" data-textAlign="['center']"
                        class="tp-caption tp-resizeme">
                        <div class="btn-set justify-content-center">
                            <a href="pages_book.html" class="btn btn-huge">Book Online</a>
                            <a href="pages_services.html" class="btn btn-huge style-3">our services</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="mad-content no-pd">
        <div class="container-fluid">
            <div
                class="mad-section mad-img-section section-with-img no-pb mad-section--stretched mad-colorizer--scheme-color-4 with-texture10">
                <div class="row no-row-gap">
                    <div class="col-xl-6">
                        <div class="mad-img-container">
                            <div class="mad-img"><img src="{{ asset('assets/images/birebir.png') }}" alt=""/></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mad-img-content">
                            <div class="row justify-content-center">
                                <div class="col-xxl-8">
                                    <div class="mad-pre-title">Welcome to</div>
                                    <h2 class="mad-title"> Private Psychiatry <br/> & Therapy Clinic </h2>
                                    <div class="mad-text-medium content-element-6">
                                        <p> Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor,
                                            dapibus eget,
                                            elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam
                                            erat v olutpat. Duis
                                            ac turpis. Integer rutrum ante eu lacus. Pellentesque sed dolor. Aliquam
                                            congue fermentum nisl.
                                        </p>
                                        <p> Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque.
                                            Quisque diam lorem,
                                            interdum vitae,dapibus ac, scelerisque vitae, pede. Donec eget tellus non
                                            erat lacinia
                                            fermentum. Donec in velit vel ipsum auctor pulvinar. Nulla venenatis. </p>
                                    </div>
                                    <a href="pages_team.html" class="btn style-2 btn-big">meet our team</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mad-section no-pb">
                <div class="mad-title-wrap align-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="mad-pre-title">WHAT WE OFFER</div>
                            <h2 class="mad-title">Our Services</h2>
                            <p> Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget,
                                elementum
                                vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat v olutpat. Duis ac
                                turpis. </p>
                        </div>
                    </div>
                </div>
                <!--================ Icon Boxes ================-->
                <div class="mad-icon-boxes grid-type item-col-4 with-btn-bg">
                    <div class="mad-col">
                        <!--================ Icon Box ================-->
                        <a href="pages_services.html" class="mad-icon-box">
                            <div class="mad-icon-box-content">
                                <i class="mad-icon-box-icon"><img class="svg"
                                                                  src="../../public/assets/psychologist_icons_svg/individual.svg"
                                                                  alt=""/></i>
                                <h6 class="mad-icon-box-title">Individual Therapy</h6>
                                <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor
                                    wisi et. Aliquam
                                    erat volutpat. Duis ac turpis.</p>
                                <div class="mad-text-link">Read More</div>
                            </div>
                        </a>
                        <!--================ End of Icon Box ================-->
                    </div>
                    <div class="mad-col">
                        <!--================ Icon Box ================-->
                        <a href="pages_services.html" class="mad-icon-box"
                           data-bg-image-src="images/bireyselTerapi4.png"> </a>
                        <!--================ End of Icon Box ================-->
                    </div>
                    <div class="mad-col">
                        <!--================ Icon Box ================-->
                        <a href="pages_services.html" class="mad-icon-box">
                            <div class="mad-icon-box-content">
                                <i class="mad-icon-box-icon"><img class="svg"
                                                                  src="../../public/assets/psychologist_icons_svg/couple.svg"
                                                                  alt=""/></i>
                                <h6 class="mad-icon-box-title">Couple Therapy</h6>
                                <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit
                                    amet,
                                    consecvtetuer adipiscing elit.</p>
                                <div class="mad-text-link">Read More</div>
                            </div>
                        </a>
                        <!--================ End of Icon Box ================-->
                    </div>
                    <div class="mad-col">
                        <!--================ Icon Box ================-->
                        <a href="pages_services.html" class="mad-icon-box">
                            <div class="mad-icon-box-content">
                                <i class="mad-icon-box-icon"><img class="svg"
                                                                  src="../../public/assets/psychologist_icons_svg/group.svg"
                                                                  alt=""/></i>
                                <h6 class="mad-icon-box-title">Group Therapy</h6>
                                <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus
                                    eget, elementum
                                    vel, cursus eleifend, elit.</p>
                                <div class="mad-text-link">Read More</div>
                            </div>
                        </a>
                        <!--================ End of Icon Box ================-->
                    </div>
                    <div class="mad-col">
                        <!--================ Icon Box ================-->
                        <a href="pages_services.html" class="mad-icon-box"
                           data-bg-image-src="images/aileTerapi1.png"> </a>
                        <!--================ End of Icon Box ================-->
                    </div>
                    <div class="mad-col">
                        <!--================ Icon Box ================-->
                        <a href="pages_services.html" class="mad-icon-box">
                            <div class="mad-icon-box-content">
                                <i class="mad-icon-box-icon"><img class="svg"
                                                                  src="../../public/assets/psychologist_icons_svg/family.svg"
                                                                  alt=""/></i>
                                <h6 class="mad-icon-box-title">Family Therapy</h6>
                                <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum
                                    ante eu lacus.
                                    Vestibulum libero nisl, porta vel.</p>
                                <div class="mad-text-link">Read More</div>
                            </div>
                        </a>
                        <!--================ End of Icon Box ================-->
                    </div>
                    <div class="mad-col">
                        <!--================ Icon Box ================-->
                        <a href="pages_services.html" class="mad-icon-box"
                           data-bg-image-src="images/OnlineTerapi.png"> </a>
                        <!--================ End of Icon Box ================-->
                    </div>
                    <div class="mad-col">
                        <!--================ Icon Box ================-->
                        <a href="pages_services.html" class="mad-icon-box">
                            <div class="mad-icon-box-content">
                                <i class="mad-icon-box-icon"><img class="svg"
                                                                  src="../../public/assets/psychologist_icons_svg/online.svg"
                                                                  alt=""/></i>
                                <h6 class="mad-icon-box-title">Online Therapy</h6>
                                <p> Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit.
                                    Mauris fermentum
                                    dictum magna. Sed laoreet aliquam leo. </p>
                                <div class="mad-text-link">Read More</div>
                            </div>
                        </a>
                        <!--================ End of Icon Box ================-->
                    </div>
                </div>
                <!--================ End of Icon Boxes ================-->
            </div>
            <div class="mad-section mad-section--stretched mad-colorizer--scheme-color-6 mad-colorizer--scheme-light">
                <div class="mad-texture-holder">
                    <span class="mad-texture-img"><img src="../../public/assets/images/texture12.svg" alt=""
                                                       class="svg"/></span>
                </div>
                <div class="container">
                    <div class="mad-title-wrap align-center">
                        <div class="mad-pre-title">Testimonials</div>
                        <h2 class="mad-title">What Clients Say</h2>
                    </div>
                    <!--================ Testimonials ================-->
                    <div class="mad-testimonials align-center style-2">
                        <div class="mad-grid mad-grid--cols-1 owl-carousel dots-color-2 nav-color-2">
                            <!-- owl item -->
                            <div class="mad-grid-item">
                                <div class="mad-testimonial">
                                    <div class="mad-testimonial-info">
                                        <blockquote>
                                            <p> "Excellent practice with highly trained clinicians who truly care about
                                                their clients'
                                                well-being. Highly recommend to anyone seeking psychotherapy!" </p>
                                        </blockquote>
                                    </div>
                                    <div class="mad-author">
                                        <div class="mad-author-info">
                                            <span class="mad-author-name">Rebecca Johnson, CA, USA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / owl item -->
                            <!-- owl item -->
                            <div class="mad-grid-item">
                                <div class="mad-testimonial">
                                    <div class="mad-testimonial-info">
                                        <blockquote>
                                            <p> "A great job of steering discussions in a way that allows the patient to
                                                make connections
                                                and self-reflective discoveries that they otherwise would'nt have
                                                made." </p>
                                        </blockquote>
                                    </div>
                                    <div class="mad-author">
                                        <div class="mad-author-info">
                                            <span class="mad-author-name">Sara Smith, CA, USA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / owl item -->
                            <!-- owl item -->
                            <div class="mad-grid-item">
                                <div class="mad-testimonial">
                                    <div class="mad-testimonial-info">
                                        <blockquote>
                                            <p> “I felt listened to and understood by my psychologist and felt that her
                                                compassionate stance
                                                allowed me to develop greater self compassion and make changes over
                                                time” </p>
                                        </blockquote>
                                    </div>
                                    <div class="mad-author">
                                        <div class="mad-author-info">
                                            <span class="mad-author-name">Alessander Ambrosio, CA, USA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / owl item -->
                        </div>
                    </div>
                    <!--================ End of Testimonials ================-->
                </div>
            </div>
            <div class="mad-section mad-section--stretched mad-colorizer--scheme-color-7 with-texture11">
                <div class="container">
                    <div class="mad-title-wrap align-center">
                        <div class="mad-pre-title">Meet our Therapist</div>
                        <h2 class="mad-title">Our Team</h2>
                    </div>
                    <!--================ Team Members ================-->
                    <div class="mad-team owl-carousel mad-grid mad-grid--cols-3">
                        <div class="mad-col">
                            <!--================ Team Member ================-->
                            <figure class="mad-team-member">
                                <a href="pages_team.html" class="mad-team-member-photo"><img
                                        src="../../public/assets/images/bireyselTerapi4.png"
                                        alt=""/></a>
                                <figcaption class="mad-team-member-info">
                                    <div class="mad-info-header">
                                        <h5 class="mad-team-member-name">
                                            <a href="pages_team.html">Alan Smith</a>
                                        </h5>
                                        <div class="mad-member-stat">Clinical Director | Psychologist</div>
                                    </div>
                                </figcaption>
                            </figure>
                            <!--================ End Of Team Member ================-->
                        </div>
                        <div class="mad-col">
                            <!--================ Team Member ================-->
                            <figure class="mad-team-member">
                                <a href="pages_team.html" class="mad-team-member-photo"><img
                                        src="../../public/assets/images/birebir.png"
                                        alt=""/></a>
                                <figcaption class="mad-team-member-info">
                                    <div class="mad-info-header">
                                        <h5 class="mad-team-member-name">
                                            <a href="pages_team.html">Nikki Anderson</a>
                                        </h5>
                                        <div class="mad-member-stat">Clinical Director | Psychologist</div>
                                    </div>
                                </figcaption>
                            </figure>
                            <!--================ End Of Team Member ================-->
                        </div>
                        <div class="mad-col">
                            <!--================ Team Member ================-->
                            <figure class="mad-team-member">
                                <a href="pages_team.html" class="mad-team-member-photo"><img
                                        src="../../public/assets/images/bireyselTerapi4.png"
                                        alt=""/></a>
                                <figcaption class="mad-team-member-info">
                                    <div class="mad-info-header">
                                        <h5 class="mad-team-member-name">
                                            <a href="pages_team.html">Bradley Grosh</a>
                                        </h5>
                                        <div class="mad-member-stat">Psychologist</div>
                                    </div>
                                </figcaption>
                            </figure>
                            <!--================ End Of Team Member ================-->
                        </div>
                        <div class="mad-col">
                            <!--================ Team Member ================-->
                            <figure class="mad-team-member">
                                <a href="pages_team.html" class="mad-team-member-photo"><img
                                        src="../../public/assets/images/birebir.png"
                                        alt=""/></a>
                                <figcaption class="mad-team-member-info">
                                    <div class="mad-info-header">
                                        <h5 class="mad-team-member-name">
                                            <a href="pages_team.html">Alan Smith</a>
                                        </h5>
                                        <div class="mad-member-stat">Clinical Director | Psychologist</div>
                                    </div>
                                </figcaption>
                            </figure>
                            <!--================ End Of Team Member ================-->
                        </div>
                        <div class="mad-col">
                            <!--================ Team Member ================-->
                            <figure class="mad-team-member">
                                <a href="pages_team.html" class="mad-team-member-photo"><img
                                        src="../../public/assets/images/bireyselTerapi4.png"
                                        alt=""/></a>
                                <figcaption class="mad-team-member-info">
                                    <div class="mad-info-header">
                                        <h5 class="mad-team-member-name">
                                            <a href="pages_team.html">Nikki Anderson</a>
                                        </h5>
                                        <div class="mad-member-stat">Clinical Director | Psychologist</div>
                                    </div>
                                </figcaption>
                            </figure>
                            <!--================ End Of Team Member ================-->
                        </div>
                        <div class="mad-col">
                            <!--================ Team Member ================-->
                            <figure class="mad-team-member">
                                <a href="pages_team.html" class="mad-team-member-photo"><img
                                        src="../../public/assets/images/bireyselTerapi4.png"
                                        alt=""/></a>
                                <figcaption class="mad-team-member-info">
                                    <div class="mad-info-header">
                                        <h5 class="mad-team-member-name">
                                            <a href="pages_team.html">Bradley Grosh</a>
                                        </h5>
                                        <div class="mad-member-stat">Psychologist</div>
                                    </div>
                                </figcaption>
                            </figure>
                            <!--================ End Of Team Member ================-->
                        </div>
                        <div class="mad-col">
                            <!--================ Team Member ================-->
                            <figure class="mad-team-member">
                                <a href="pages_team.html" class="mad-team-member-photo"><img
                                        src="../../public/assets/images/birebir.png"
                                        alt=""/></a>
                                <figcaption class="mad-team-member-info">
                                    <div class="mad-info-header">
                                        <h5 class="mad-team-member-name">
                                            <a href="pages_team.html">Alan Smith</a>
                                        </h5>
                                        <div class="mad-member-stat">Clinical Director | Psychologist</div>
                                    </div>
                                </figcaption>
                            </figure>
                            <!--================ End Of Team Member ================-->
                        </div>
                        <div class="mad-col">
                            <!--================ Team Member ================-->
                            <figure class="mad-team-member">
                                <a href="pages_team.html" class="mad-team-member-photo"><img
                                        src="../../public/assets/images/bireyselTerapi4.png"
                                        alt=""/></a>
                                <figcaption class="mad-team-member-info">
                                    <div class="mad-info-header">
                                        <h5 class="mad-team-member-name">
                                            <a href="pages_team.html">Nikki Anderson</a>
                                        </h5>
                                        <div class="mad-member-stat">Clinical Director | Psychologist</div>
                                    </div>
                                </figcaption>
                            </figure>
                            <!--================ End Of Team Member ================-->
                        </div>
                        <div class="mad-col">
                            <!--================ Team Member ================-->
                            <figure class="mad-team-member">
                                <a href="pages_team.html" class="mad-team-member-photo"><img
                                        src="../../public/assets/images/birebir.png"
                                        alt=""/></a>
                                <figcaption class="mad-team-member-info">
                                    <div class="mad-info-header">
                                        <h5 class="mad-team-member-name">
                                            <a href="pages_team.html">Bradley Grosh</a>
                                        </h5>
                                        <div class="mad-member-stat">Psychologist</div>
                                    </div>
                                </figcaption>
                            </figure>
                            <!--================ End Of Team Member ================-->
                        </div>
                    </div>
                    <!--================ End Of Team Members ================-->
                </div>
            </div>
            <div class="mad-section">
                <div class="container">
                    <div class="mad-title-wrap align-center">
                        <div class="mad-pre-title">From The Blog</div>
                        <h2 class="mad-title">Latest Articles</h2>
                    </div>
                    <div class="mad-entities type-2 item-col-3">
                        <div class="mad-col">
                            <!--================ Entity ================-->
                            <article class="mad-entity">
                                <div class="mad-entity-media">
                                    <a href="blog_single_sidebar.html"><img src="../../public/assets/images/birebir.png"
                                                                            alt=""/></a>
                                </div>
                                <div class="mad-entity-content">
                                    <div class="mad-entity-header">
                                        <div class="mad-entity-tags">
                                            <span><a href="blog_list_sidebar.html" class="mad-link">News</a></span>
                                            <span><a href="blog_single_sidebar.html"
                                                     class="mad-link">August 26, 2022</a></span>
                                        </div>
                                        <h5 class="mad-entity-title">
                                            <a href="blog_single_sidebar.html">Praesent justo dolor, lobortis quis,
                                                lobortis dignissim.</a>
                                        </h5>
                                        <p> Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit
                                            amet eros. Lorem
                                            ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                                        <a href="blog_single.html" class="mad-text-link"> Read More </a>
                                    </div>
                                </div>
                            </article>
                            <!--================ End of Entity ================-->
                        </div>
                        <div class="mad-col">
                            <!--================ Entity ================-->
                            <article class="mad-entity">
                                <div class="mad-entity-media">
                                    <a href="blog_single_sidebar.html"><img src="../../public/assets/images/birebir.png"
                                                                            alt=""/></a>
                                </div>
                                <div class="mad-entity-content">
                                    <div class="mad-entity-header">
                                        <div class="mad-entity-tags">
                                            <span><a href="blog_list_sidebar.html" class="mad-link">News</a></span>
                                            <span><a href="blog_single.html" class="mad-link">August 23, 2022</a></span>
                                        </div>
                                        <h5 class="mad-entity-title">
                                            <a href="blog_single_sidebar.html">Aenean auctor wisi et urna. Aliqua erat
                                                volutpat. </a>
                                        </h5>
                                        <p> Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel,
                                            cursus eleifend, elit.
                                            Aenean auctor wisi et urna. Aliquam erat volutpat. </p>
                                        <a href="blog_single.html" class="mad-text-link"> Read More </a>
                                    </div>
                                </div>
                            </article>
                            <!--================ End of Entity ================-->
                        </div>
                        <div class="mad-col">
                            <!--================ Entity ================-->
                            <article class="mad-entity">
                                <div class="mad-entity-media">
                                    <a href="blog_single_sidebar.html"><img src="../../public/assets/images/birebir.png"
                                                                            alt=""/></a>
                                </div>
                                <div class="mad-entity-content">
                                    <div class="mad-entity-header">
                                        <div class="mad-entity-tags">
                                            <span><a href="blog_list_sidebar.html" class="mad-link">News</a></span>
                                            <span><a href="#" class="mad-link">August 18, 2022</a></span>
                                        </div>
                                        <h5 class="mad-entity-title">
                                            <a href="blog_single_sidebar.html">Sed laoreet aliquam leo. Ut tellus dolor,
                                                dapibus eget.</a>
                                        </h5>
                                        <p> Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean
                                            auctor wisi et
                                            urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. </p>
                                        <a href="blog_single.html" class="mad-text-link"> Read More </a>
                                    </div>
                                </div>
                            </article>
                            <!--================ End of Entity ================-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="mad-section no-pb with-overlay-1 mad-section--stretched mad-colorizer--scheme-"
                 data-bg-image-src="images/OnlineTerapi.png">
                <div class="container">
                    <div class="mad-element-holder justify-content-end">
                        <div class="mad-contact-element">
                            <div class="mad-title-wrap align-center">
                                <div class="mad-pre-title">contact us Today</div>
                                <h2 class="mad-title">Get a Consultation!</h2>
                            </div>
                            <p class="content-element-4 align-center"> We are happy to answer your questions, and help
                                you find the
                                services you need. Please message us to get started. </p>
                            <form class="mad-contact-form mad-form style-2 item-col-2">
                                <div class="mad-col">
                                    <div class="mad-form-item">
                                        <input type="text" id="cf_name" name="cf_name" required=""
                                               placeholder="First name*"/>
                                    </div>
                                </div>
                                <div class="mad-col">
                                    <div class="mad-form-item">
                                        <input type="text" id="cf_lname" name="cf_lname" required=""
                                               placeholder="Last Name"/>
                                    </div>
                                </div>
                                <div class="mad-col">
                                    <div class="mad-form-item">
                                        <input type="email" id="cf_email" name="cf_email" required=""
                                               placeholder="Email*"/>
                                    </div>
                                </div>
                                <div class="mad-col">
                                    <div class="mad-form-item">
                                        <input type="tel" id="cf_phone" name="cf_phone" placeholder="Phone*"/>
                                    </div>
                                </div>
                                <div class="mad-col full-width">
                                    <div class="mad-form-item">
                                        <div class="mad-custom-select">
                                            <select data-default-text="Service of Interest" id="cf_country"
                                                    name="cf_country">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mad-col full-width">
                                    <div class="mad-form-item">
                      <textarea rows="4" id="message" name="cf_message" required=""
                                placeholder="Additional Information"></textarea>
                                    </div>
                                    <div class="mad-form-item align-center">
                                        <button type="submit" class="btn btn-big"><span>Submit</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="mad-section pt-size-2 medium-size mad-section--stretched mad-colorizer--scheme-color-6 with-texture7">
                <!--================ Icon Boxes ================-->
                <div class="mad-icon-boxes with-border style-2 align-center small-size item-col-4">
                    <div class="mad-col">
                        <!--================ Icon Box ================-->
                        <article class="mad-icon-box">
                            <i class="mad-icon-box-icon"><img class="svg"
                                                              src="../../public/assets/psychologist_icons_svg/loc2.svg"
                                                              alt=""/></i>
                            <div class="mad-icon-box-content">
                                <p> 135 Shoreditch High St, <br/> London E1 6JE, UK </p>
                            </div>
                        </article>
                        <!--================ End of Icon Box ================-->
                    </div>
                    <div class="mad-col">
                        <!--================ Icon Box ================-->
                        <article class="mad-icon-box">
                            <i class="mad-icon-box-icon"><img class="svg"
                                                              src="../../public/assets/psychologist_icons_svg/phone2.svg"
                                                              alt=""/></i>
                            <div class="mad-icon-box-content">
                                <p> +1 800 603 6035 <br/>
                                    <a href="mailto:mail@companyname.com">mail@companyname.com</a>
                                </p>
                            </div>
                        </article>
                        <!--================ End of Icon Box ================-->
                    </div>
                    <div class="mad-col">
                        <!--================ Icon Box ================-->
                        <article class="mad-icon-box">
                            <i class="mad-icon-box-icon"><img class="svg"
                                                              src="../../public/assets/psychologist_icons_svg/clock2.svg"
                                                              alt=""/></i>
                            <div class="mad-icon-box-content">
                                <p> Monday - Saturday: 8AM -10PM <br/> Sunday: 10AM - 8PM </p>
                            </div>
                        </article>
                        <!--================ End of Icon Box ================-->
                    </div>
                    <div class="mad-col">
                        <!--================ Icon Box ================-->
                        <article class="mad-icon-box">
                            <i class="mad-icon-box-icon"><img class="svg"
                                                              src="../../public/assets/psychologist_icons_svg/network2.svg"
                                                              alt=""/></i>
                            <div class="mad-icon-box-content">
                                <p>
                                    <a href="https://facebook.com" target="blank">Facebook</a> - <a
                                        href="https://instagram.com"
                                        target="blank">Instagram</a> - <a href="https://twitter.com" target="blank">Twitter</a>-
                                    <br/>
                                    <a href="https://youtube.com" target="blank">Youtube</a> - <a
                                        href="https://linkedin.com"
                                        target="blank">Linkedin</a>
                                </p>
                            </div>
                        </article>
                        <!--================ End of Icon Box ================-->
                    </div>
                </div>
                <!--================ End of Icon Boxes ================-->
            </div>
            <div class="mad-section mad-section--stretched mad-colorizer--scheme-color-7">
                <div class="mad-title-wrap align-center">
                    <div class="mad-pre-title">AS FEATURED IN</div>
                </div>
                <!--================ Partners ================-->
                <div class="mad-sponsors">
                    <div class="mad-grid-item">
                        <!--================ Partners Item ================-->
                        <a href="https://themeforest.net/user/monkeysan/portfolio" target="_blank">
                            <img src="../../public/assets/images/272x96_award1.svg" alt=""/>
                        </a>
                        <!--================ End of Partners Item ================-->
                    </div>
                    <div class="mad-grid-item">
                        <!--================ Partners Item ================-->
                        <a href="https://themeforest.net/user/monkeysan/portfolio" target="_blank">
                            <img src="../../public/assets/images/272x96_award2.svg" alt=""/>
                        </a>
                        <!--================ End of Partners Item ================-->
                    </div>
                    <div class="mad-grid-item">
                        <!--================ Partners Item ================-->
                        <a href="https://themeforest.net/user/monkeysan/portfolio" target="_blank">
                            <img src="../../public/assets/images/272x96_award3.svg" alt=""/>
                        </a>
                        <!--================ End of Partners Item ================-->
                    </div>
                    <div class="mad-grid-item">
                        <!--================ Partners Item ================-->
                        <a href="https://themeforest.net/user/monkeysan/portfolio" target="_blank">
                            <img src="../../public/assets/images/272x96_award4.svg" alt=""/>
                        </a>
                        <!--================ End of Partners Item ================-->
                    </div>
                    <div class="mad-grid-item">
                        <!--================ Partners Item ================-->
                        <a href="https://themeforest.net/user/monkeysan/portfolio" target="_blank">
                            <img src="../../public/assets/images/272x96_award5.svg" alt=""/>
                        </a>
                        <!--================ End of Partners Item ================-->
                    </div>
                    <div class="mad-grid-item">
                        <!--================ Partners Item ================-->
                        <a href="https://themeforest.net/user/monkeysan/portfolio" target="_blank">
                            <img src="../../public/assets/images/272x96_award6.svg" alt=""/>
                        </a>
                        <!--================ End of Partners Item ================-->
                    </div>
                </div>
                <!--================ End Of Partners ================-->
            </div>
        </div>
    </div>
@endsection

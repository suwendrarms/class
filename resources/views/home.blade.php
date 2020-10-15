@extends('Public.Layouts.app')
@section('content')
<div class="page text-center">
    <!-- Page Head-->
    <header class="page-head page-head-main">
        <div class="swiper-wrapper">
            <div class="swiper-container swiper-slider bg-white" data-loop="true" data-height=""
                data-slide-effect="fade" data-dragable="false" data-min-height="400px" data-autoplay="5000">
                <div class="swiper-wrapper text-center">
                    <div class="swiper-slide" id="page-loader"
                        data-slide-bg="{{ asset('publicArea/images/baner1.png') }}">
                        <div class="swiper-caption">
                            <div class="swiper-slide-caption">
                                <div class="shell">
                                    <div class="range">
                                        <div class="cell-md-7 section-slider-custom">
                                            <div class="inset-lg-right-80 text-md-left">
                                                <h2>Take Care of<br class="veil reveal-md-block"> Your Future
                                                </h2>
                                                <h5 class="veil reveal-md-block mw-400">At Nenabima Education Platform, we are
                                                    dedicated
                                                    to diagnosing all kinds of Errors of yor Education life.</h5><a
                                                    class="btn btn-ellipse btn-white offset-top-24"
                                                    href="{{ route('login') }}">get
                                                    started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="{{ asset('publicArea/images/baner2.png') }}">
                        <div class="swiper-caption">
                            <div class="swiper-slide-caption">
                                <div class="shell">
                                    <div class="range">
                                        <div class="cell-md-6 section-slider-custom to-front">
                                            <div class="text-md-left">
                                                <h2>Years of<br class="veil reveal-md-block">Experience
                                                </h2>
                                                <h5 class="veil reveal-md-block mw-400">Since our foundation, we
                                                    deliver the best solutions in diagnosing various eooros of life.</h5>
                                                <a class="btn btn-ellipse btn-white offset-top-24"
                                                    href="{{ route('login') }}">get
                                                    started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="{{ asset('publicArea/images/baner3.png') }}">
                        <div class="swiper-caption">
                            <div class="swiper-slide-caption">
                                <div class="shell">
                                    <div class="range">
                                        <div class="cell-md-7 section-slider-custom">
                                            <div class="text-md-left">
                                                <h2>Qualified Team<br class="veil reveal-md-block">of Experts</h2>
                                                <h5 class="veil reveal-md-block mw-400">Our team of diagnosticians
                                                    is always ready to help you be more Education.</h5><a
                                                    class="btn btn-ellipse btn-white offset-top-24"
                                                    href="{{ route('login') }}">get
                                                    started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </header>
    <!--Sheldue-->
    <section class="bg-white-liac">
        <div class="shell section-top-34 section-lg-top-0">
            <div
                class="range range-condensed range-xs-center range-lg-left offset-lg-top-34-negative sheldue text-xs-left to-front">
                <div class="cell-sm-8 cell-md-5 cell-lg-3">
                    <div class="sheldue-item first">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs text-white-50"><i class="far fa-clock"></i></div>
                            <h6 class="small reveal-inline-block inset-left-10 text-white">දැනුම​</h6>
                            <hr style="margin-bottom: 5px;">
                            <div class="offset-top-24 text-gray-light">
                                <p>ගෝලීයකරණයත් සමග මිනිසා දැනුම සෙවිමට යොමු විය​.එමෙන්ම තරගකාරිත්වය මත විකාශනය වන ඉගෙනුම් රටාවක්ද බිහි විය​.
                                    ඒ තුළ ගමන් කරන ඔබේ දරුවා දැනුමෙන් සන්නද්ධ කිරීම අපේ අරමුණයි. </p>
                            </div>
                        </div>
                        <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect"
                                href="{{route('work')}}">READ
                                MORE</a>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-8 cell-md-5 cell-lg-3 offset-top-70 offset-md-top-0">
                    <div class="sheldue-item light">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs text-white-50"><i class="fas fa-calendar-day"></i></div>
                            <h6 class="small reveal-inline-block inset-left-10 text-white">ආකල්ප​</h6>
                            <hr style="margin-bottom: 5px;">
                            <div class="offset-top-12 text-gray-light">
                                <p>දැනුම පමණක් නොව දිවි ගමන සාර්ථක කර ගැනිමට අවශ්‍ය වන 
                                    අධ්‍යාත්මික ගුණාංගයන් හදවත් තුළ රෝපණය කරමින් දරුවාගේ ආකල්ප සංවර්ධනය කර යහපත් පුරවැසියෙකු දායාද කිරීම අපේ අරමුණයි.</p>
                            </div>
                        </div>
                        <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect"
                                href="{{route('work')}}">READ
                                MORE</a></div>
                    </div>
                </div>
                <div class="cell-sm-8 cell-md-5 cell-lg-3 offset-top-70 offset-lg-top-0">
                    <div class="sheldue-item">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs text-white-50"><i class="fas fa-flug"></i>
                            </div>
                            <h6 class="small reveal-inline-block inset-left-10 text-white">කුසලතා</h6>
                            <hr style="margin-bottom: 5px;">
                            <div class="offset-top-24 text-gray-light">
                                <p>දැනුම ,ආකල්ප වලින් පිරිපුන් කල දරුවන් කුසලතාවයන් පිරි දරු පරපුරක් බවට පත් කොට ශිල්ප 
                                    ඥානය ප්‍රායෝගිකව තම දියුණුවටත් සමාජ යහපතටත් යෙදවිය හැකි දරුවෙකු බිහි කිරීම​ අපේ අරමුණයි.<p>
                            </div>
                        </div>
                        <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect"
                                href="{{route('work')}}">READ
                                MORE</a></div>
                    </div>
                </div>
                <div class="cell-sm-8 cell-md-5 cell-lg-3 offset-top-70 offset-lg-top-0">
                    <div class="sheldue-item light last">
                        <div class="sheldue-item-body">
                            <div class="icon icon-xs text-white-50"><i class="fas fa-first-aid"></i></div>
                            <h6 class="small reveal-inline-block inset-left-10 text-white">
                                ස්වයං අධ්‍යයනය</h6>
                            <hr>
                            <div class="offset-top-24 text-gray-light">
                                <p>ගුරුවරයා යනු මග පෙන්වන්නෙකි.ගෝලීයකරණයත් සමග ගුරුකේන්ඳ්‍රීය අධ්‍යාපනයෙන් මිදී ශිෂ්‍යකේන්ඳ්‍රීය 
                                    අධ්‍යාපන රටාවකට යොමු විම හේතුවෙන් ස්වයං අධ්‍යයනයේ නිරත වීම​ සුවිශේෂය.</p>
                            </div>
                        </div>
                        <div class="sheldue-more"><a class="btn btn-white btn-block btn-rect"
                        href="{{route('work')}}">READ
                                MORE</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--What makes us different-->
    <section class="section-98 section-sm-110 bg-white-liac">
        <div id="about" class="shell">
            <h3>About Us</h3>
            <h6 style="text-transform:none;">The Nenabima Education Platform offers a range of home study courses 
                including school in the SriLanka and overseas.Also nenabima have lots 
                of e-publications based on education. We always following and applying to our education system new update technologies.We have 
                a powerful lecturers panel and we are always trying to swipe to new page for future with innovations for developing our education system. 
                We are doing some fight to pull up the education level of our world's students always.</h6>
                <h6 style="text-transform:none;">නැණබිම​ අධ්‍යාපන වේදිකාව ශ්‍රී ලංකාවේ සහ විදේශයන්හි පාසල් සිසුන්ට ඔවුන්ගේ 
                    නැණස විවෘත කර ගැනීමට උපකාර වන්නෙමු .
                    එසේම අධ්‍යාපනය මත පදනම් වූ විද්‍යුත් ප්‍රකාශන රාශියක් ඇත. 
                    අපි සෑම විටම අපගේ අධ්‍යාපන පද්ධතියට නව යාවත්කාලීන තාක්‍ෂණයන් අනුගමනය කරමින් නිමැවුම් කරන්නෙමු. 
                    අපට ප්‍රබල ගුරු මණ්ඩලයක් සිටින අතර අපගේ අධ්‍යාපන ක්‍රමය සංවර්ධනය කිරීම සඳහා 
                    නව්‍යකරණයන් සමඟ අනාගතය සඳහා නව පිටුවකට මාරුවීමට අපි සැමවිටම උත්සාහ කරමු. 
                    අපේ ලෝකයේ සිසුන්ගේ අධ්‍යාපන මට්ටම සෑම විටම ඉහළ නැංවීම සඳහා  සටන් කරමින් සිටිමු.</h6>
            <div class="range offset-top-60">
                <div class="cell-md-4">
                    <div class="icon icon-xlg icon-circle icon-default  icon-pills-xl"></div>
                    <h5 class="text-bold text-gray-darkest">Worldwide</h5>
                    <p>Nenabima Education Platform provides a efficient and effective learning management system services for educational needs not only in 
                        Sri Lanka but worldwide. </p>
                    <p>
                        නැණබිම අධ්‍යාපන වේදිකාව ශ්‍රී ලංකාවේ පමණක් නොව ලොව පුරා අධ්‍යාපන අවශ්‍යතා සඳහා කාර්යක්ෂම 
                        හා  ප​ලදායී ඉගෙනුම් කළමනාකරණ පද්ධති සේවාවන් සපයයි.
                    </p>

                </div>
                <div class="cell-md-4 offset-top-50 offset-md-top-0">
                    <div class="icon icon-xlg icon-circle icon-default icon-doctor-xl"></div>
                    <h5 class="text-bold text-gray-darkest">Online Study</h5>
                    <p>Nenabima Education Platform has many courses specially prepared for students to
                         study online that are conducted by highly qualified lecturers. </p>
                         <p>
                             
                        ඉහළ සුදුසුකම් ලත් ගුරුවරුන් විසින් පවත්වනු ලබන දේශන, අන්තර්ජාලය හැදෑරීම සඳහා 
                        විශේෂයෙන් සකස් කරන ලද අධ්‍යාපන වේදිකාවකි.
                         </p>
                </div>
                <div class="cell-md-4 offset-top-50 offset-md-top-0">
                    <div class="icon icon-xlg icon-circle icon-default icon-doctor-01"></div>
                    <h5 class="text-bold text-gray-darkest">For Lecturers</h5>
                    <p>Nenabima Education Platform has a learning management system that enables lecturers to carry out teaching 
                        work extensively and effectively with most advanced technology. </p>
                    <p>
                        
                        නැණබිම අධ්‍යාපන වේදිකාවට ඉගෙනුම් කළමණාකරණ පද්ධතියක් ඇති අතර එමඟින් ගුරුවරුන්ට 
                වඩාත් දියුණු තාක්‍ෂණයෙන් ඉගැන්වීමේ කටයුතු පුළුල්ව හා  පලදායී ලෙස සිදු කිරීමට හැකි වේ.
                    </p>
                </div>
                <div class="cell-md-4 offset-top-50 offset-md-top-0">
                    <div class="icon icon-xlg icon-circle icon-default icon-medical-car-xl"></div>
                    <h5 class="text-bold text-gray-darkest">Responsibility</h5>
                    <p>We are always committed to providing quality and effective reliable service to all  tutors and students alike.
                    </p>

                    <p>
                        
                සියලුම ගුරුවරුන්ට සහ සිසුන්ට ගුණාත්මක හා පලදායී විශ්වසනීය සේවාවක් සැපයීමට අපි සැමවිටම කැපවී සිටිමු.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Material Parallax-->
    <section id="services" class="parallax-container" data-parallax-img="{{ asset('publicArea/images/baner5.png') }}">
        <div class="parallax-content section-98 section-sm-110 context-dark">
            <div class="shell text-left">
                <div class="range range-xs-center range-md-left">
                    <div class="col-lg-8">
                        <h2>ඔබ ජය ගත යුතුය​<br class="veil reveal-lg-inline-block">අපි ඔබව මෙහෙයවන්නෙමු...</h2>
                    </div>
                    <div class="cell-sm-10 cell-md-8 cell-lg-5">
                        {{-- <p class="offset-top-30 text-white">From cutting edge medical care, to hidden legal medical
                            settlements - all at no cost!</p> --}}
                        <div class="offset-top-30"><a class="btn btn-ellipse btn-white"
                                href="{{ route('register') }}">Create 100% free account now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main services-->
    <section class="section-98 section-sm-110">
        <div id="advantages" class="shell">
            <h3>Subject(6-11 ශ්‍රේණි විෂයන්)</h3>
            <div class="offset-top-41">
                <p class="custom-paragraph">
                    ඉගෙනුම් ඉගැන්වීම් ක්‍රියාවලියේ වසර තුනක පළපුරුද්ද සහිත ඇදුරු මඩුල්ල සාම්ප්‍රදායික ඉගැන්වීම් ක්‍රමවේද 
                    අභිභවා යමින් නව තාක්‍ෂණික ක්‍රමවේද යොදා ගනිමින් සිසු හඳවත් දිනා ගනිමින් අධ්‍යාපනය ලබා දීම​.</p>
            </div>
            <div class="range offset-top-60 text-md-left">
                <div class="container cell-sm-6 cell-md-4">
                    <div class="service"><img class="img-responsive"
                            src="{{ asset('../publicArea/images/sub1.png') }}" width="320" height="320"
                            alt="" />
                        <div class="overlay">
                            <div class="text">6-11 ශ්‍රේණි</div>
                            <div class="text">ගණිතය​</div>
                        </div><a class="service-desc h6" href="{{  route('register') }}">Mathematics</a>
                    </div>
                </div>
                <div class="container cell-sm-6 cell-md-4 offset-top-50 offset-sm-top-0">
                    <div class="service"><img class="img-responsive"
                            src="{{ asset('../publicArea/images/sub2.png') }}" width="320" height="320" alt="" />
                        <div class="overlay">
                            <div class="text">6-11 ශ්‍රේණි</div>
                            <div class="text textit">තොරතුරු හා සන්නිවේදන තාක්ෂණය </div>
                        </div><a class="service-desc h6" href="{{  route('register') }}">Information and Communication Technology </a>
                    </div>
                </div>
                <div class="container cell-sm-6 cell-md-4 offset-top-50 offset-md-top-0">
                    <div class="service"><img class="img-responsive"
                            src="{{ asset('../publicArea/images/sub1.png') }}" width="320" height="320" alt="" />
                        <div class="overlay">
                            <div class="text">6-11 ශ්‍රේණි</div>
                            <div class="text">විද්‍යාව </div>
                        </div><a class="service-desc h6" href="{{  route('register') }}">Sceience</a>
                    </div>
                </div>
                <div class="container cell-sm-6 cell-md-4 offset-top-50">
                    <div class="service"><img class="img-responsive"
                            src="{{ asset('../publicArea/images/sub4.png') }}" width="320" height="320" alt="" />
                        <div class="overlay">
                            <div class="text">6-11 ශ්‍රේණි</div>
                            <div class="text">ඉතිහාසය </div>
                        </div><a class="service-desc h6" href="{{  route('register') }}">History</a>
                    </div>
                </div>
                <div class="container cell-sm-6 cell-md-4 offset-top-50">
                    <div class="service"><img class="img-responsive"
                            src="{{ asset('../publicArea/images/sub1.png') }}" width="320" height="320" alt="" />
                        <div class="overlay">
                            <div class="text">6-11 ශ්‍රේණි</div>
                            <div class="text">සිංහල භාෂාව හා සාහිත්‍යය.</div>
                        </div><a class="service-desc h6" href="{{  route('register') }}">Sinhala</a>
                    </div>
                </div>
                <div class="container cell-sm-6 cell-md-4 offset-top-50">
                    <div class="service"><img class="img-responsive"
                            src="{{ asset('../publicArea/images/sub3.png') }}" width="320" height="320" alt="" />
                        <div class="overlay">
                            <div class="text">6-11 ශ්‍රේණි</div>
                            <div class="text">බුද්ධ ධර්මය
                            </div>
                        </div><a class="service-desc h6" href="{{  route('register') }}">Buddhism</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team-->
    {{--  <section>
        <div class="reveal-md-flex range-xs-center">
            <!-- Thumbnail Josip-->
            <figure class="thumbnail-josip thumbnail-big odd"><a href="team-member.html"><img width="384" height="410"
                        src="{{ asset('publicArea/images/our-team-05-384x410.jpg') }}" alt="" /></a>
    <div class="thumbnail-desc">
        <h5 class="thumbnail-josip-title text-medium text-white">Dr. Scott Riley</h5>
        <p class="veil reveal-md-block text-italic text-white offset-top-0">Chief Medical Officer,
            Pathologist</p>
    </div>
    <figcaption><a class="btn btn-block btn-rect text-md-left btn-white" href="team-member.html">view
            full profile</a></figcaption>
    </figure>
    <!-- Thumbnail Josip-->
    <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0"><a href="team-member.html"><img
                width="384" height="410" src="{{ asset('publicArea/images/our-team-06-384x410.jpg') }}" alt="" /></a>
        <div class="thumbnail-desc">
            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Jane Fowler</h5>
            <p class="veil reveal-md-block text-italic text-white offset-top-0">Clinical Laboratory
                Technologist</p>
        </div>
        <figcaption><a class="btn btn-block btn-rect text-md-left btn-white" href="team-member.html">view
                full profile</a></figcaption>
    </figure>
    <!-- Thumbnail Josip-->
    <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0 odd"><a href="team-member.html"><img
                width="384" height="410" src="{{ asset('publicArea/images/our-team-07-384x410.jpg') }}" alt="" /></a>
        <div class="thumbnail-desc">
            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Eric Snyder</h5>
            <p class="veil reveal-md-block text-italic text-white offset-top-0">MRI Technologist</p>
        </div>
        <figcaption><a class="btn btn-block btn-rect text-md-left btn-white" href="team-member.html">view
                full profile</a></figcaption>
    </figure>
    <!-- Thumbnail Josip-->
    <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0"><a href="team-member.html"><img
                width="384" height="410" src="{{ asset('publicArea/images/our-team-08-384x410.jpg') }}" alt="" /></a>
        <div class="thumbnail-desc">
            <h5 class="thumbnail-josip-title text-medium text-white">Dr. Martha Schmidt</h5>
            <p class="veil reveal-md-block text-italic text-white offset-top-0">EKG Technician</p>
        </div>
        <figcaption><a class="btn btn-block btn-rect text-md-left btn-white" href="">view
                full profile</a></figcaption>
    </figure>
    <!-- Thumbnail Josip-->
    <figure class="thumbnail-josip thumbnail-big offset-top-41 offset-md-top-0 odd"><a href="team-member.html"><img
                width="384" height="410" src="{{ asset('publicArea/images/our-team-09-384x410.jpg') }}" alt="" /></a>
        <div class="thumbnail-desc short">
            <h5 class="thumbnail-josip-title text-medium text-white">Dr. James Wilson</h5>
            <p class="veil reveal-md-block text-italic text-white offset-top-0">Radiology Technician</p>
        </div>
        <figcaption><a class="btn btn-block btn-rect text-md-left btn-white" href="team-member.html">view
                full profile</a></figcaption>
    </figure>
</div>
</section> --}}
<!-- testimonials-->
{{-- <section id="testimonials" class="section-98 section-sm-110 bg-white-liac">
    <div class="shell">
        <h3>Testimonials</h3>
        <div class="offset-top-66">
            <div class="owl-carousel owl-carousel-default owl-carousel-class-light" data-loop="false" data-items="1"
                data-dots="true" data-mouse-drag="false" data-md-items="2" data-nav="false">
                <div class="owl-item">
                    <blockquote class="quote quote-classic">
                        <div class="quote-body">
                            <p class="text-italic text-gray-dark">
                                <q>I had a colonoscopy at Medina Diagnostic Center. From the moment I entered
                                    the center, I was greeted and treated warmly and respectfully and it was the
                                    best experience.</q>
                            </p>
                            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60"
                                        height="60" src="{{ asset('publicArea/images/user-betty-wade-60x60.jpg') }}"
alt="" />
</div>
<div class="unit-body unit-item-wide">
    <h5 class="quote-author text-capitalize text-bold text-primary">
        <cite class="text-normal">Betty Wade</cite>
    </h5>
    <p class="quote-desc text-capitalize text-gray text-italic">Patient</p>
</div>
</div>
</div>
</blockquote>
</div>
<div class="owl-item">
    <blockquote class="quote quote-classic">
        <div class="quote-body">
            <p class="text-italic text-gray-dark">
                <q>I would like to thank and compliment the staff at Medina, including the
                    outpatient, laboratory staff and cardiac division during my stay at your
                    facility on July 9th and 10th.</q>
            </p>
            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60" height="60"
                        src="{{ asset('publicArea/images/user-bryan-green-60x60.jpg') }}" alt="" />
                </div>
                <div class="unit-body unit-item-wide">
                    <h5 class="quote-author text-capitalize text-bold text-primary">
                        <cite class="text-normal">Bryan Green</cite>
                    </h5>
                    <p class="quote-desc text-capitalize text-gray text-italic">Patient</p>
                </div>
            </div>
        </div>
    </blockquote>
</div>
<div class="owl-item">
    <blockquote class="quote quote-classic">
        <div class="quote-body">
            <p class="text-italic text-gray-dark">
                <q>I had a colonoscopy at Medina Diagnostic Center. From the moment I entered
                    the center, I was greeted and treated warmly and respectfully and it was the
                    best experience.</q>
            </p>
            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60" height="60"
                        src="{{ asset('publicArea/images/user-bryan-green-60x60.jpg') }}" alt="" />
                </div>
                <div class="unit-body unit-item-wide">
                    <h5 class="quote-author text-capitalize text-bold text-primary">
                        <cite class="text-normal">Bryan Green</cite>
                    </h5>
                    <p class="quote-desc text-capitalize text-gray text-italic">Patient</p>
                </div>
            </div>
        </div>
    </blockquote>
</div>
<div class="owl-item">
    <blockquote class="quote quote-classic">
        <div class="quote-body">
            <p class="text-italic text-gray-dark">
                <q>I would like to thank and compliment the staff at Medina, including the
                    outpatient, laboratory staff and cardiac division during my stay at your
                    facility on July 9th and 10th.</q>
            </p>
            <div class="quote-meta unit unit-horizontal unit-spacing-sm unit-middle">
                <div class="unit-left unit-item-narrow"><img class="img-circle quote-img" width="60" height="60"
                        src="{{ asset('publicArea/images/user-betty-wade-60x60.jpg') }}" alt="" />
                </div>
                <div class="unit-body unit-item-wide">
                    <h5 class="quote-author text-capitalize text-bold text-primary">
                        <cite class="text-normal">Betty Wade</cite>
                    </h5>
                    <p class="quote-desc text-capitalize text-gray text-italic">Patient</p>
                </div>
            </div>
        </div>
    </blockquote>
</div>
</div>
</div>
</div>
<!-- RD Parallax-->
</section> --}}
<section class="parallax-container" data-parallax-img="{{ asset('publicArea/images/baner4.png') }}">
    <div class="parallax-content section-98 section-sm-110 context-dark">
        <div class="shell text-left">
            <div class="range range-xs-center range-md-left">
                <div class="cell-sm-10 cell-md-8 cell-lg-5">
                    <h2>ඔබේ ජීවිතය අප සමග එක්ව පෙළගසමු​</h2>
                    <p class="offset-top-30 text-white">දරුවාගේ ඉගෙනුම් ඉගැන්වීම් ක්‍රියාවලිය සම්බන්ධව අපගේ උපදෙස් ලබා ගැනීමට ඇදුරු 
                        මඩුල්ල සම්බන්ධීකරණය කර ගැනීම​.</p>
                    <div class="offset-top-30"><a class="btn btn-ellipse btn-white"
                    href="{{route('login')}}">Connect As Teachers</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- latest blog posts-->
{{--  <section class="section-98 section-sm-110">
    <div class="shell">
        <h3>Latest Blog Posts</h3>
        <div class="range range-xs-center offset-top-60">
            <div class="cell-sm-8 cell-md-4">
                <!-- Post Modern-->
                <article class="post post-modern post-modern-classic">
                    <!-- Post media-->
                    <div class="post-media"><a class="link-image" href="single-post.html"><img
                                class="img-responsive img-cover" width="370" height="250"
                                src="{{ asset('publicArea/images/post-13-370x250.jpg') }}" alt="" /></a>
</div>
<!-- Post content-->
<section class="post-content text-left">
    <!-- Post Title-->
    <div class="post-title offset-top-8">
        <h5 class="text-bold"><a href="single-post.html">Reasons to Visit a Breast
                Specialist</a></h5>
    </div>
    <ul class="list-inline list-inline-dashed">
        <li>June 21, 2018 at 8:12pm</li>
        <li><a class="text-primary" href="blog-masonry.html">News</a></li>
    </ul>
    <!-- Post Body-->
    <div class="post-body">
        <p>There are a lot of women that are unaware of the numerous risks associated with
            their health and eventually ignore the importance of visiting...</p>
    </div>
    <div class="tags group group-sm">
    </div>
</section>
</article>
</div>
<div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
    <!-- Post Modern-->
    <article class="post post-modern post-modern-classic">
        <!-- Post media-->
        <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover"
                    width="370" height="250" src="{{ asset('publicArea/images/post-14-370x250.jpg') }}" alt="" /></a>
        </div>
        <!-- Post content-->
        <section class="post-content text-left">
            <!-- Post Title-->
            <div class="post-title offset-top-8">
                <h5 class="text-bold"><a href="single-post.html">Picking the Right Diagnostic
                        Services for Efficient Results</a></h5>
            </div>
            <ul class="list-inline list-inline-dashed">
                <li>June 21, 2018 at 8:12pm</li>
                <li><a class="text-primary" href="blog-masonry.html">News</a></li>
            </ul>
            <!-- Post Body-->
            <div class="post-body">
                <p>There have been a lot of cases in which people were not provided with accurate
                    reports that eventually affected their medical treatment. There is always...</p>
            </div>
            <div class="tags group group-sm">
            </div>
        </section>
    </article>
</div>
<div class="cell-sm-8 cell-md-4 offset-top-50 offset-md-top-0">
    <!-- Post Modern-->
    <article class="post post-modern post-modern-classic">
        <!-- Post media-->
        <div class="post-media"><a class="link-image" href="single-post.html"><img class="img-responsive img-cover"
                    width="370" height="250" src="{{ asset('publicArea/images/post-15-370x250.jpg') }}" alt="" /></a>
        </div>
        <!-- Post content-->
        <section class="post-content text-left">
            <!-- Post Title-->
            <div class="post-title offset-top-8">
                <h5 class="text-bold"><a href="single-post.html">Preparing for an ECG in 8 Easy
                        Steps: Tips From Our Diagnosticians</a></h5>
            </div>
            <ul class="list-inline list-inline-dashed">
                <li>June 21, 2018 at 8:12pm</li>
                <li><a class="text-primary" href="blog-masonry.html">News</a></li>
            </ul>
            <!-- Post Body-->
            <div class="post-body">
                <p>An ECG stands for an "electrocardiogram," which is a test that measures and
                    records the electrical activity of the heart. It is used by doctors to obtain...
                </p>
            </div>
            <div class="tags group group-sm">
            </div>
        </section>
    </article>
</div>
</div>
<div class="offset-top-50"><a class="btn btn-ellipse btn-primary" href="blog-grid.html">View all blog
        posts</a></div>
</div>
</section> --}}
</div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        var pathname = $(location).attr('hash');
        if (pathname == '#about') {
            $('ul').find('li.active').removeClass('active');
            $('#abt').addClass('active');
        } else if (pathname == '#advantages') {
            $('ul').find('li.active').removeClass('active');
            $('#adv').addClass('active');
        } else if (pathname == '#testimonials') {
            $('ul').find('li.active').removeClass('active');
            $('#testi').addClass('active');
        }
    });

</script>
@endsection
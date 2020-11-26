@extends('layouts.index')
<!-- END header -->
@section('body')
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('img/slider-1.jpg');">
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate">
                    <h1>Welcome to {{config('app.name')}}</h1>
                    <p class="mb-5">It is made for the people by the people to pray in the church of God.</p>
                    <p><a href="#" class="btn btn-white btn-outline-white">Request a prayer</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END slider -->
<section class="element-animate worship-time">
    <div class="half d-md-flex d-block">
        <div class="bg campmeeting" style="background-image: url(img/event_campmeeting.jpg);">
            <h2>Camp Meeting Will Start Soon</h2>
            <div class="mb-3" id="date-countdown"></div>
            <p><a href="#" class="btn btn-white btn-outline-white">Join Now</a></p>
        </div>
        <div>
            <h2 class="mb-5">Upcoming Events</h2>
            <a href="#" class="event-list-item first">
                <span class="date">APR 14</span>
                <p>Child Dedication</p>
                <span class="more">More Info</span>
            </a>
            <a href="#" class="event-list-item">
                <span class="date">APR 14</span>
                <p>Church Fellowship</p>
                <span class="more">More Info</span>
            </a>
            <a href="#" class="event-list-item">
                <span class="date">APR 14</span>
                <p>Mass Baptism</p>
                <span class="more">More Info</span>
            </a>
            <a href="#" class="event-list-item">
                <span class="date">APR 14</span>
                <p>School of the Prophets</p>
                <span class="more">More Info</span>
            </a>
        </div>
    </div>
</section>
<!-- END section -->
<section class="section pt-5 pb-2 bg-light">
    <div class="container">
        <div class="row mb-5 justify-content-center element-animate">
            <div class="col-md-12">
                <h2>Audio Sermons</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 mb-5">
                <div class="sermon element-animate">
                    <img src="img/ximg_1.jpg.pagespeed.ic.pWGuDOLege.jpg" alt="" class="img-fluid">
                    <div class="sermon-text">
                        <h2><a href="#">Arise, Shine</a></h2>
                        <p class="sermon-meta">by <a href="#">Luis Matthew</a> on March 28, 2018</p>
                    </div>
                    <div class="player">
                        <audio id="player2" preload="none" controls style="max-width: 100%">
                            <source src="../../../www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                        </audio>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-5">
                <div class="sermon element-animate">
                    <img src="img/ximg_2.jpg.pagespeed.ic.mMIgsl8zZx.jpg" alt="" class="img-fluid">
                    <div class="sermon-text">
                        <h2><a href="#">Filled in Him</a></h2>
                        <p class="sermon-meta">by <a href="#">Luis Matthew</a> on March 28, 2018</p>
                    </div>
                    <div class="player">
                        <audio id="player3" preload="none" controls style="max-width: 100%">
                            <source src="../../../www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                        </audio>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-5">
                <div class="sermon element-animate">
                    <img src="img/ximg_3.jpg.pagespeed.ic.2zuQymamLB.jpg" alt="" class="img-fluid">
                    <div class="sermon-text">
                        <h2><a href="#">Jehovah the Creator</a></h2>
                        <p class="sermon-meta">by <a href="#">Luis Matthew</a> on March 28, 2018</p>
                    </div>
                    <div class="player">
                        <audio id="player4" preload="none" controls style="max-width: 100%">
                            <source src="../../../www.largesound.com/ashborytour/sound/AshboryBYU.mp3" type="audio/mp3">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
<section class="section ">
    <div class="container">
        <div class="row mb-5 justify-content-center element-animate">
            <div class="col-md-12">
                <h2>Latest Events</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 element-animate">
                <div class="media custom-media">
                    <img class="mr-3" width="30" src="img/30xNximg_1.jpg.pagespeed.ic.MACIWqgq2r.jpg"
                         alt="Generic placeholder image">
                    <div class="media-body">
                        <h3 class="mt-0"><a href="#">Prayer &amp; Devotional for Children</a></h3>
                        <p class="post-meta">May 12, 2018, <a href="#">Children Ministries</a></p>
                        <p>"Pray then like this: 'Our Father in heaven, hallowed be your name. Your kingdom come, your
                            will be done, on earth as it is in heaven. Give us this day our daily bread, and forgive us
                            our debts, as we also have forgiven our debtors. And lead us not into temptation, but
                            deliver us from evil.'"</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 element-animate">
                <div class="media custom-media">
                    <img class="mr-3" width="30" src="img/img_2.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h3 class="mt-0"><a href="#">We Must Walk In The Middle of The Road</a></h3>
                        <p class="post-meta">May 12, 2018, <a href="#">Missions</a></p>
                        <p>"Pray then like this: 'Our Father in heaven, hallowed be your name. Your kingdom come, your
                            will be done, on earth as it is in heaven. Give us this day our daily bread, and forgive us
                            our debts, as we also have forgiven our debtors. And lead us not into temptation, but
                            deliver us from evil.'"</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 element-animate">
                <div class="media custom-media">
                    <img class="mr-3" width="30" src="img/img_3.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h3 class="mt-0"><a href="#">Tracts Giving</a></h3>
                        <p class="post-meta">May 12, 2018, <a href="#">Care Ministry</a></p>
                        <p>"Pray then like this: 'Our Father in heaven, hallowed be your name. Your kingdom come, your
                            will be done, on earth as it is in heaven. Give us this day our daily bread, and forgive us
                            our debts, as we also have forgiven our debtors. And lead us not into temptation, but
                            deliver us from evil.'"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->
<section class="section bg-light">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-8  text-center">
                <h2>Personal Testimony</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="owl-carousel testimony-slider">
                    <div>
                        <img src="img/xpastor_1.jpg.pagespeed.ic.NGae0iTF5f.jpg" alt="Image placeholder">
                        <blockquote>
                            <p>"Pray then like this: 'Our Father in heaven, hallowed be your name. Your kingdom come,
                                your will be done, on earth as it is in heaven. Give us this day our daily bread, and
                                forgive us our debts, as we also have forgiven our debtors. And lead us not into
                                temptation, but deliver us from evil.'"</p>
                        </blockquote>
                        <p>&mdash; Jeremy Watson</p>
                    </div>
                    <div>
                        <img src="img/xpastor_2.jpg.pagespeed.ic.O90vKAJDKQ.jpg" alt="Image placeholder">
                        <blockquote>
                            <p>"Pray then like this: 'Our Father in heaven, hallowed be your name. Your kingdom come,
                                your will be done, on earth as it is in heaven. Give us this day our daily bread, and
                                forgive us our debts, as we also have forgiven our debtors. And lead us not into
                                temptation, but deliver us from evil.'"</p>
                        </blockquote>
                        <p>&mdash; Albert White</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

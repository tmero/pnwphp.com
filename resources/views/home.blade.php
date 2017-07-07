@extends('layout')

@section('content')
	<?php
	$cfpUrl = 'http://cfp.pnwphp.com';
	?>


    <div class="wrapper wrapper-blue-dark">
        <div class="wrapper-content">
            <h2>Be Part of PNWPHP</h2>
            <div class="container">
                <div class="row boxes-two">
                    <div id="become-a-sponsor" class="box outline">
                       <p>
                          Would you or your company like to sponsor PNWPHP?
                          Please get in touch!
                       </p>
                        <a href="mailto:pnwphp@seaphp.com" class="btn-reverse">Yes I'll Sponsor</a>
                    </div>
                    <div id="current-status" class="box outline">
                        <p>
                            Early Bird Tickets are now available.<br>
                            <strong>Get your tickets today!</strong>
                        </p>
                        <a class="btn-reverse" href="https://www.eventbrite.com/e/pacific-northwest-php-conference-2017-pnwphp-tickets-36005273743">Buy Tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-blue">
        <div class="wrapper-content">
            <h2>PNWPHP Conference</h2>
            <div class="container">
                <div class="row">
                    <div class="main-content">
                        <p class="lead">
                            The <strong>Pacific Northwest PHP Conference</strong> is a
                            3-day event in Seattle, Washington for PHP and Web developers.
                            Our past conferences have included <strong>world renown
                            speakers</strong> from the PHP community, about a <strong>wide
                            range of topics</strong> &mdash; from APIs and CMS to unit
                            testing and version control.
                        </p>

                        <p class="lead">
                            <em>Stay tuned!</em> We will <strong>announce the speakers</strong> of our upcoming 2017 conference, when we complete our review.
                        </p>

                    </div>
                    <div class="schedule">
                        <!--
                        September 2017
                        Su Mo Tu We Th Fr Sa
                        1  2
                        3  4  5  6  7  8  9
                        10 11 12 13 14 15 16
                        17 18 19 20 21 22 23
                        24 25 26 27 28 29 30
                        -->
                        <table class="table table-bordered">
                            <tr>
                                <th class="bg-info">Wed, Sep 6th</th>
                                <td>
                                    <ul class="list-unstyled">
                                        <li><strong>Meetup</strong></li>
                                        <li><strong>Drinkup</strong></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-info">Thu, Sep 7th</th>
                                <td>
                                    <ul class="list-unstyled">
                                        <li><strong>Workshops</strong></li>
                                        <li><strong>Speaker Dinner</strong></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-info">Fri, Sep 8th</th>
                                <td>
                                    <ul class="list-unstyled">
                                        <li><strong>Conference</strong></li>
                                        <li><strong>Social</strong></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-info">Sat, Sep 9th</th>
                                <td>
                                    <ul class="list-unstyled">
                                        <li><strong>Conference</strong></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-info">Sun, Sep 10th</th>
                                <td>
                                    <ul class="list-unstyled">
                                        <li><strong>WurstConSEA</strong></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <a href="https://twitter.com/PNWPHP" target="_blank" class="btn-reverse">
                            <i class="fa fa-twitter"></i>&ensp;Follow @PNWPHP
                        </a>

                        <a href="https://twitter.com/seaphp" target="_blank" class="btn-reverse">
                            <i class="fa fa-twitter"></i>&ensp;Follow @SeaPHP
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="wrapper wrapper-green">
        <div class="wrapper-content">
            <h2>University of Washington</h2>
            <div class="container">
                <div class="row boxes-two">
                   <div class="box">
                      <div id="location-map">
                         <a href="https://www.google.com/maps/place/Kane+Hall+(KNE)/@47.6567215,-122.311249,17z/data=!3m1!4b1!4m5!3m4!1s0x5490148d297e703f:0x46fb837b5e7c7474!8m2!3d47.6567215!4d-122.3090603">
                            <img src="/img/2017-uw-kane-hall-johnson-hall.png"
                                 style="width: 100%;"
                                 alt="map of PNWPHP Venues - Kane Hall and Johnson Hall">
                         </a>

                      </div>
                   </div>
                   <div class="box">
                      <p class="lead" style="margin-top: 0;">
                           <strong>University of Washington</strong>
                            is an excellent University, located in the heart of Seattle. The main conference will be
                            held at <strong>Kane Hall</strong>, and the workshops in nearby <strong>Johnson
                            Hall</strong>.
                      </p>
                   </div>
                </div>
            </div>
        </div>
    </div>

    {{-- @include('sections.sponsors') --}}

@stop

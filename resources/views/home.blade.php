@extends('layout')

@section('content')
<div class="head-banner">
    <div class="bg"></div>
</div>
<div class="head-banner-content">
    <div>
        <h1>Pacific Northwest PHP</h1>
        <h2>September 10th–12th, 2015 &#8226 Seattle, WA</h2>
        <a class="btn btn-lg btn-info" target="_blank" href="https://pnwphp2015.busyconf.com/bookings/new"><i class="fa fa-ticket"></i> REGISTER NOW</a>
    </div>
</div>

<div class="wrapper wrapper-white">
    <div class="title">PNWPHP Conference</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <p class="lead text-center">
                        <strong>New:</strong> Can't make it in person?
                        <a href="https://pnwphp2015.busyconf.com/bookings/new#ticket_type_54dd586d49a161a49e00000c">
                        Register as a Virtual Attendee</a> to watch the live stream of the event.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <img src="img/pnwphp.png" width="160" />
            </div>
            <div class="col-md-6">
                <p class="lead">
                    The <strong>Pacific Northwest PHP Conference</strong> is a <em>3-day</em> event for PHP developers
                    living in the Pacific Northwest region. We've invited world-renowned <a href="./speakers">speakers</a>
                    from the PHP community to teach about <a href="./tags">topics</a> ranging from continuous
                    integration to the cloud. Join us for the amazing presentations, catered food, musical numbers,
                    the <a href="./events-hackathon">hackathon</a>, and the live blog.
                </p>
            </div>
            <div class="col-md-4">
                <a href="https://twitter.com/PNWPHP" target="_blank" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-twitter"></i>&ensp;Follow @PNWPHP
                </a>
                <a href="http://joind.in/event/view/3451" target="_blank" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-star-half-o"></i>&ensp;Rate Talks on Joind.in
                </a>
                <a href="https://gitter.im/pnwphp/PNWPHP" target="_blank" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-users"></i>&ensp;Chat w/ Us on Gitter
                </a>
                <a href="http://eepurl.com/9bHLT" target="_blank" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-envelope"></i>&ensp;Join the Mailing List
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered text-center">
                    <tr class="bg-info">
                        <th class="text-center">SEP 9TH</th>
                        <th class="text-center">SEP 10TH</th>
                        <th class="text-center">SEP 11TH</th>
                        <th class="text-center">SEP 12TH</th>
                        <th class="text-center">SEP 13TH</th>
                    </tr>
                    <tr>
                        <td rowspan="2">
                            <ul class="list-unstyled text-center">
                                <li><a href="./events#seaphp-meetup">SeaPHP Meetup</a></li>
                                <li><a href="./events#pnwphp-workshops">SeaPHP Drinkup</a></li>
                            </ul>
                        </td>
                        <td rowspan="2">
                            <ul class="list-unstyled text-center">
                                <li><a href="./events#pnwphp-workshops">Workshops</a></li>
                                <li><a href="./events-hackathon">AWS Hackathon</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><a href="./events#conference">PNWPHP Conference</a></li>
                                <li><a href="./events#uncon">UnCon</a></li>
                                <li><a href="./events#social">Evening Social</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><a href="./events#pnwphp">PNWPHP Conference</a></li>
                                <li><a href="./events#uncon">UnCon</a></li>
                                <li>Prizes</li>
                                <li><a href="./events#podcast-devhell">/dev/hell Podcast</a></li>
                                <li><a href="./events#podcast-townhall">PHP Townhall Podcast</a></li>
                            </ul>
                        </td>
                        <td rowspan="2">
                            <ul class="list-unstyled text-center">
                                <li><a href="./events#wurstcon">WurstConSEA</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="bg-warning">
                        <th colspan="2" class="text-center"><a href="./online-events">Live Stream</a></th>
                    </tr>
                    <tr class="bg-success">
                        <th class="text-center">Free</th>
                        <th class="text-center">$49</th>
                        <th colspan="2" class="text-center">$99&ndash;$349 (see below)</th>
                        <th class="text-center">Free</th>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                @if ($sponsor = $conference->sponsors->filter(function ($sponsor) {return $sponsor->rank >= 1070;})->random(1))
                    <p class="text-center">PNWPHP is sponsored in part by:</p>
                    <a target="_blank" href="{{ $sponsor->url }}" title="{{ $sponsor->name }}">
                        <img src="{{ $sponsor->logo }}" alt="{{ $sponsor->name }}" class="img-responsive center-block"/>
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="wrapper wrapper-light">
    <div class="title">Registration</div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="text-center">FOR STUDENTS</h4>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead"><strong>$99</strong></p>
                        <p>Available to full and part time students; student ID required at the event.</p>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-info" href="https://pnwphp2015.busyconf.com/bookings/new"><i class="fa fa-ticket"></i> REGISTER NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="text-center">FOR INDIVIDUALS</h4>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead"><strong>$249</strong></p>
                        <p>Available to attendees who are paying for their own tickets.</p>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-info" href="https://pnwphp2015.busyconf.com/bookings/new"><i class="fa fa-ticket"></i> REGISTER NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="text-center">FOR EMPLOYEES</h4>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead"><strong>$349</strong></p>
                        <p>Available to attendees whose tickets are being paid for or reimbursed by their company/employer.</p>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-info" href="https://pnwphp2015.busyconf.com/bookings/new"><i class="fa fa-ticket"></i> REGISTER NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    <p class="lead text-center"><strong>NOTE:</strong> The Workshops and AWS Hackathon require a separate <strong>$49</strong> ticket.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper wrapper-dark">
    <div class="title">The Venue</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Impact Hub Seattle</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div id="location-map"></div>
            </div>
            <div class="col-md-4">
                <p>
                    <img class="img-responsive img-thumbnail" src="img/impacthub.jpg" alt=""/>
                </p>
                <p class="lead">
                    <a href="http://www.impacthubseattle.com" target="_blank">Impact Hub Seattle</a> is a coworking space, events space, and launch pad for purpose-driven ventures that create more value than they capture. Impact hub is located in the historic Pioneer Square landmark.
                </p>
                {{--<p class="lead"><a href="./venue"><i class="fa fa-hand-o-right"></i> More Details</a></p>--}}
            </div>
        </div>
    </div>
</div>

@include('sections.sponsors')

@stop

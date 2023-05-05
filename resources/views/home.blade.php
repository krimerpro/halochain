@extends('layouts.default')
@section('content')

<!-- BANNER AREA START -->
<section id="banner">
    <div class="design-layer"></div>
    <div class="backtotop">
        <a href="#banner"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
    </div>
    <div class="container zindex">
        <div class="row">
            <div class="col-lg-7 banner-txt">
                <h3>Abraham Simpson Coin</h3>
                <p>Invest in $Abraham, the most hype and safe play memecoin inspired by Abraham Simpson.</p>
                <a href="#">Join Us</a>
                <a href="#">Buy $Abraham</a>
            </div>
            <div class="col-lg-5">
                <div class="banner-img">
                    <img src="{{ asset('images/logo.png') }}" alt="banner-img" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BANNER AREA ENDS -->

<!-- FEATURE AREA START -->
<section id="overview">
    <div class="container">
        <div class="row header-text text-center">
            <div class="col-lg-12">
                <h3>FEA<span>T</span>URE</h3>
            </div>
        </div>
        <div class="row over-pa">
            <div class="col-lg-9 col-sm-12 m-auto">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="over-item txt-right unique-style3">
                            <i class="fa fa-book over-i" aria-hidden="true"></i>
                            <div class="break"></div>
                            <h3>Creative Idea</h3>
                            <div class="over-btn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="over-item txt-left unique-style">
                            <i class="fa fa-video-camera over-i" aria-hidden="true"></i>
                            <div class="break"></div>
                            <h3>Strong Community</h3>
                            <div class="over-btn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="over-item txt-right unique-style2">
                            <i class="fa fa-star over-i" aria-hidden="true"></i>
                            <div class="break"></div>
                            <h3>Hype Name</h3>
                            <div class="over-btn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="over-item txt-left unique-style4">
                            <i class="fa fa-lock over-i" aria-hidden="true"></i>
                            <div class="break"></div>
                            <h3>Highly Secured</h3>
                            <div class="over-btn">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FEATURE AREA ENDS -->

<!-- ABOUT AREA START -->
<section id="aboutus">
    <div class="container">
        <div class="row header-text text-center about-header">
            <div class="col-lg-12">
                <h3>AB<span>O</span>UT</h3>
            </div>
        </div>
        <div class="row about-pa">
            <div class="col-lg-10 col-md-12 m-auto about-item">
                <div class="row">
                    <div class="col-lg-4 col-sm-8 m-sm-auto col-md-5 text-center">
                        <div class="about-img ai-one">
                            <img src="{{ asset('images/about1.png') }}" alt="about-img" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-7 col-md-6">
                        <div class="about-txt">
                            <span class="separet-span">About Us</span>
                            <h3>Abraham Simpson Coin</h3>
                            <p>Following the simpson hype, we bring you Abraham's version. We have a target to make this project the most hype in bsc!</p>
                            <p class="separate-p tab-hider">Strong holders will be needed in this project!</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 m-auto about-item col-md-12" id="tokenomics">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="about-txt sm-reduce-pa">
                            <span class="separet-span">Tokenomics</span>
                            <div class="p-bars">
                                <div class="col-lg-12 p-bar">
                                    <span>Pancakeswap LP</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-bar">
                                    <span>R&D</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-bar">
                                    <span>Marketing</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row counter-main">
                            <div class="counter-1 col-4 col-lg-4 col-sm-3 col-md-4">
                                <div class="chart" data-percent="75">
                                </div>
                                <h5>2</h5>
                                <span>2 BNB Initial LP</span>
                            </div>
                            <div class="counter-1 col-4 col-lg-4  col-sm-3 col-md-4">
                                <div class="chart" data-percent="65">
                                </div>
                                <h5>10%</h5>
                                <span>Tax</span>
                            </div>
                            <div class="counter-1 col-4 col-lg-4 col-sm-3 col-md-4">
                                <div class="chart" data-percent="55">
                                </div>
                                <h5>1%</h5>
                                <span>Max Tx & Wallet</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-4 text-center mob-hide sm-hide col-md-5">
                        <div class="about-img ai-two">
                            <img src="{{ asset('images/about2.png') }}" alt="about-img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 m-auto about-item col-md-12">
                <div class="row">
                    <div class="col-lg-4 col-sm-8 m-sm-auto text-center col-md-5">
                        <div class="about-img ai-three">
                            <img src="{{ asset('images/about3.png') }}" alt="about-img" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-7 col-md-6">
                        <div class="about-txt">
                            <span class="separet-span">NFTs</span>
                            <h3>About Abraham Simpson Coin NFTs</h3>
                            <p>Upcoming NFTs will be ready soon! You can mint directly on our website once it's released!</p>
                            <a href="#">Coming Soon</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT AREA ENDS -->

<!-- SUBSCRIBE AREA START -->
<section id="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="sub-main">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <h3>Join Our Official Telegram Group</h3>
                        </div>
                        <div class="col-lg-3 col-md-5 subscripe-btn">
                            <a href="https://t.me/" >JOIN US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SUBSCRIBE AREA END -->
@stop

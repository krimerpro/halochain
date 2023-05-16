@extends('layouts.default')
@section('content')

<section id="banner">
    <div class="design-layer"></div>
    <div class="backtotop">
        <a href="#banner"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
    </div>
    <div class="container zindex">
        <div class="row">
            <div class="col-lg-7 banner-txt">
                <h3 style="color:#EFC005">HALO CHAIN</h3>
                <p style="color:#EFC005">投资$HALO，Halo Chain是一个去中心化的公链和加密货币项目，完全开源。 Halo Chain 正在开发智能合约平台</p>
                <a style="background-color:#EFC005" href="https://t.me/HaloChainPortal">加入我们</a>
                <a style="background-color:#EFC005" href="https://pancakeswap.finance/swap?outputCurrency=0x32C561CdEf8c8485c59EFCF86C9ABB0707d5c6d2">购买 $HALO</a>
            </div>
            <div class="col-lg-5">
                <div class="banner-img">
                    <img src="{{ asset('images/logo.png') }}" alt="banner-img" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="overview">
    <div class="container">
        <div class="row header-text text-center">
            <div class="col-lg-12">
                <h3><span style="color:#EFC005">特征</span></h3>
            </div>
        </div>
        <div class="row over-pa">
            <div class="col-lg-9 col-sm-12 m-auto">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="over-item txt-right unique-style3">
                            <i class="fa fa-book over-i" aria-hidden="true" style="background-color:#EFC005"></i>
                            <div class="break"></div>
                            <h3>革命性的智能合约平台</h3>
                            <div class="over-btn">
                                <a href="#" style="color:#EFC005">阅读更多</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="over-item txt-left unique-style">
                            <i class="fa fa-video-camera over-i" aria-hidden="true" style="background-color:#EFC005"></i>
                            <div class="break"></div>
                            <h3>先进的技术和可扩展的区块链</h3>
                            <div class="over-btn">
                                <a href="#" style="color:#EFC005">阅读更多</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="over-item txt-right unique-style2">
                            <i class="fa fa-star over-i" aria-hidden="true" style="background-color:#EFC005"></i>
                            <div class="break"></div>
                            <h3>抵押您的代币并获得高额利息</h3>
                            <div class="over-btn">
                                <a href="#" style="color:#EFC005">阅读更多</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="over-item txt-left unique-style4">
                            <i class="fa fa-lock over-i" aria-hidden="true" style="background-color:#EFC005"></i>
                            <div class="break"></div>
                            <h3>高度安全</h3>
                            <div class="over-btn">
                                <a href="#" style="color:#EFC005">阅读更多</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="aboutus">
    <div class="container">
        <div class="row header-text text-center about-header">
            <div class="col-lg-12">
                <h3><span style="color:#EFC005">关于我们<span></h3>
            </div>
        </div>
        <div class="row about-pa">
            <div class="col-lg-10 col-md-12 m-auto about-item">
                <div class="row">
                    <div class="col-lg-4 col-sm-8 m-sm-auto col-md-5 text-center">
                        <div class="about-img ai-one">
                            <img src="{{ asset('images/logo.png') }}" alt="about-img" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-7 col-md-6">
                        <div class="about-txt">
                            <span class="separet-span">关于我们</span>
                            <h3>HALO CHAIN</h3>
                            <p>Halo Chain 是一个区块链项目，专注于扩展基础设施，以便交易可以快速且低廉的汽油费。 我们旨在提供先进的区块链技术和革命性的智能合约平台。我们的平台易于使用且具有非常复杂的功能，因此将吸引许多开发人员使用我们的平台。 我们支持各种智能合约标准，例如 ERC-20、ERC-721 等，使开发人员能够轻松与现有的区块链生态系统集成。</p>
                            <p class="separate-p tab-hider">这个项目需要强大的持有者！</p>
                            <a href="#">阅读更多</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 m-auto about-item col-md-12" id="tokenomics">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="about-txt sm-reduce-pa">
                            <span class="separet-span" style="color:#EFC005">代币经济学</span>
                            <div class="p-bars">
                                <div class="col-lg-12 p-bar">
                                    <span>Pancakeswap 流动资金池</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="background:#EFC005"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-bar">
                                    <span>研究与开发</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-bar">
                                    <span>营销</span>
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
                                <span>2 BNB 初始流动资金池</span>
                            </div>
                            <div class="counter-1 col-4 col-lg-4  col-sm-3 col-md-4">
                                <div class="chart" data-percent="65">
                                </div>
                                <h5>2%</h5>
                                <span>税</span>
                            </div>
                            <div class="counter-1 col-4 col-lg-4 col-sm-3 col-md-4">
                                <div class="chart" data-percent="55">
                                </div>
                                <h5>4%</h5>
                                <span>最大交易和最大钱包</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-4 text-center mob-hide sm-hide col-md-5">
                        <div class="about-img ai-two">
                            <img src="{{ asset('images/logo.png') }}" alt="about-img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="sub-main" style="background-color:#EFC005">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <h3>加入我们的官方电报群</h3>
                        </div>
                        <div class="col-lg-3 col-md-5 subscripe-btn">
                            <a href="https://t.me/HaloChainPortal" >加入我们</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

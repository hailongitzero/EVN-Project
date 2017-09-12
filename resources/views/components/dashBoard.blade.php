<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/1/2017
 * Time: 10:26 AM
 */
?>
<div class="apps-container-wrap page-container">
    <div class="page-content">
        <div class="container-fluid">
            <div class="dashBoard-section-1 nmbr-statistic-area">
                <div class="row">
                    <div class="col-md-12">
                        <marquee behavior="" direction="" class="marquee-title">Xin Chào
                            @foreach($userData as $user)<span>{{ isset($user) && $user ? $user->name : '' }}</span>
                            @endforeach
                            ! Chúc Bạn Một Ngày Mới Tốt Lành.</marquee>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box-widget box-cate">
                            <div class="nmbr-statistic-block user-statistic">
                                <div class="nmbr-statistic-info">
                                    <span class="teal-text pl-4 d-md-inline-flex box-title">Văn Bản Mẫu
                                        <span class="number">
                                                @if(isset($documentSumGroup))
                                                @foreach($documentSumGroup as $sumGrp)
                                                    @if($sumGrp->cate_group == 1)
                                                        {{ $sumGrp->doc_count }}
                                                    @endif
                                                @endforeach
                                            @endif
                                        </span>
                                    </span>
                                    @if(isset($documentCateGroup))
                                        @foreach($documentCateGroup as $docCate)
                                            @if($docCate->cate_group == 1)
                                                <span class="a-meta-title"><a href="">{{ $docCate->cate_name }}</a> - ({{ isset($docCate->doc_count) ? $docCate->doc_count : 0 }})</span>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                                <span class="nmbr-statistic-icon ti-file"></span>
                            </div><!-- nmbr-statistic-block -->
                        </div><!-- widget-module -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box-widget box-cate">
                            <div class="nmbr-statistic-block visitors-statistic">
                                <div class="nmbr-statistic-info">
                                    <span class="teal-text pl-4 d-md-inline-flex box-title">Mẫu Iso
                                        <span class="number">
                                            @if(isset($documentSumGroup))
                                                @foreach($documentSumGroup as $sumGrp)
                                                    @if($sumGrp->cate_group == 2)
                                                        {{ $sumGrp->doc_count }}
                                                    @endif
                                                @endforeach
                                            @endif
                                        </span>
                                    </span>
                                    @if(isset($documentCateGroup))
                                        @foreach($documentCateGroup as $docCate)
                                            @if($docCate->cate_group == 2)
                                                <span class="a-meta-title"><a href="">{{ $docCate->cate_name }}</a> - ({{ isset($docCate->doc_count) ? $docCate->doc_count : 0 }})</span>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                                <span class="nmbr-statistic-icon ti-file"></span>
                            </div>
                        </div><!-- widget-module -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box-widget box-cate">
                            <div class="nmbr-statistic-block sales-statistic">
                                <div class="nmbr-statistic-info">
                                    <span class="teal-text pl-4 d-md-inline-flex box-title">Mẫu Đào Tạo
                                        <span class="number">
                                                @if(isset($documentSumGroup))
                                                @foreach($documentSumGroup as $sumGrp)
                                                    @if($sumGrp->cate_group == 3)
                                                        {{ $sumGrp->doc_count }}
                                                    @endif
                                                @endforeach
                                            @endif
                                        </span>
                                    </span>
                                    @if(isset($documentCateGroup))
                                        @foreach($documentCateGroup as $docCate)
                                            @if($docCate->cate_group == 3)
                                                <span class="a-meta-title"><a href="">{{ $docCate->cate_name }}</a> - ({{ isset($docCate->doc_count) ? $docCate->doc_count : 0 }})</span>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                                <span class="nmbr-statistic-icon ti-file"></span>
                            </div><!-- nmbr-statistic-block -->
                        </div><!-- widget-module -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box-widget box-cate">
                            <div class="nmbr-statistic-block Subscribers-statistic">
                                <div class="nmbr-statistic-info">
                                    <span class="teal-text pl-4 d-md-inline-flex box-title">Tài Liệu Kỹ Thuật
                                        <span class="number">
                                                @if(isset($documentSumGroup))
                                                @foreach($documentSumGroup as $sumGrp)
                                                    @if($sumGrp->cate_group == 4)
                                                        {{ $sumGrp->doc_count }}
                                                    @endif
                                                @endforeach
                                            @endif
                                        </span>
                                    </span>
                                    @if(isset($documentCateGroup))
                                        @foreach($documentCateGroup as $docCate)
                                            @if($docCate->cate_group == 4)
                                                <span class="a-meta-title"><a href="">{{ $docCate->cate_name }}</a> - ({{ isset($docCate->doc_count) ? $docCate->doc_count : 0 }})</span>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                                <span class="nmbr-statistic-icon ti-file"></span>
                            </div><!-- nmbr-statistic-block -->
                        </div><!-- widget-module -->
                    </div>
                </div>
            </div><!-- nmbr-statistic-area -->
            <div class="dashBoard-section-2">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="box-widget widget-module">
                            <div class="widget-body">
                                <div id="canvas-holder1" style="width:100%;">
                                    <canvas id="line_chart"></canvas>
                                </div>
                            </div>
                        </div><!-- widget-module -->
                    </div>
                    <div class="col-lg-4">
                        <div class="box-widget">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Top Upload</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="container" style="width: 100%;">
                                        <canvas id="bar_chart"></canvas>
                                    </div>
                                </div><!--panel Body -->
                            </div><!--panel -->
                        </div><!-- widget-module -->
                    </div>
                    <div class="col-lg-3">
                        <div class="box-widget widget-module dasboard-doghunt-chart">
                            <div class="widget-body">
                                <div id="canvas-holder" style="width:100%">
                                    <canvas id="doghunt_chart_2"></canvas>
                                </div>
                            </div>
                        </div><!-- widget-module -->
                    </div>
                </div>
            </div><!-- chart-area -->
            <div class="dashBoard-section-3">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" src="/resources/assets/images/slider/slider1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="/resources/assets/images/slider/slider2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="/resources/assets/images/slider/slider3.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card" style="width: 100%">
                                <img class="card-img-top" src="/resources/assets/images/news/autum.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="tab-one tab-common">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs md-pills pills-ins" role="tablist">
                                    <li class="nav-item">
                                        <a class="btn btn-raised btn-primary waves-effect waves-light active" data-toggle="tab" href="#panel" role="tab">Tin Tức</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-raised btn-primary waves-effect waves-light" data-toggle="tab" href="#pane2" role="tab">Thông Báo</a>
                                    </li>
                                </ul>
                                <!-- Tab panels -->
                                <div class="tab-content">
                                    <!--Panel 1-->
                                    <div class="tab-pane fade in show active" id="panel" role="tabpanel">
                                        <div class="news">
                                            <a href="#" class="new-item">Lorem ipsum dolor sit amet, arcu quam ut maecenas purus</a>
                                            <a href="#" class="new-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                            <a href="#" class="new-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                            <a href="#" class="new-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                        </div>
                                    </div>
                                    <!--/.Panel 1-->

                                    <!--Panel 2-->
                                    <div class="tab-pane fade" id="pane2" role="tabpanel">
                                        <h5>Many software publishing and web app</h5>
                                        <p>
                                            It is a long established fact that a reader will be
                                            distracted by the readable content of a page when
                                            looking at its layout. The point of using Lorem
                                            Ipsum is that it has a more-or-less normal distribution.
                                        </p>
                                        <p>
                                            of letters, as opposed to using 'Content here,
                                            content here', making it look like readable
                                            English. Many desktop publishing packages and
                                            web page editors now use Lorem Ipsum as their
                                            default model text, and a search for
                                            'lorem ipsum' will uncover
                                        </p>
                                    </div>
                                    <!--/.Panel 2-->
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="col-sm-12">
                    <div class="footer-divider">

                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fa fa-map-marker edit-icon"></i>
                            <span>332 Độc Lập (QL51), TT Phú Mỹ, Tân Thành, Tỉnh Bà Rịa - Vũng Tàu, Việt Nam</span>
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-phone edit-icon"></i>
                            <span>(84-254) 392 4436</span>
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-fax edit-icon"></i>
                            <span>(84-254) 392 4437</span>
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-envelope-o edit-icon"></i>
                            <span>eps@genco3.evn.vn</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- page-content -->
</div><!-- page-container -->

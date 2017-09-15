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
                        <div class="box-widget">
                            <div class="box-header amber">
                                <span class="box-title">Văn Bản Mẫu
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

                            </div>
                            <div class="box-content light-blue">
                                @if(isset($documentCateGroup))
                                    @foreach($documentCateGroup as $docCate)
                                        @if($docCate->cate_group == 1)
                                            <span class="a-meta-title"><a href="{{ url('document/'.$docCate->id) }}">{{ $docCate->cate_name }}</a> <span class="doc-count">{{ isset($docCate->doc_count) ? $docCate->doc_count : 0 }}</span></span>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            <span class="nmbr-statistic-icon ti-file"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box-widget">
                            <div class="box-header orange">
                                <span class="box-title">Mẫu Iso
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

                            </div>
                            <div class="box-content light-blue">
                                @if(isset($documentCateGroup))
                                    @foreach($documentCateGroup as $docCate)
                                        @if($docCate->cate_group == 2)
                                            <span class="a-meta-title"><a href="{{ url('document/'.$docCate->id) }}">{{ $docCate->cate_name }}</a> <span class="doc-count">{{ isset($docCate->doc_count) ? $docCate->doc_count : 0 }}</span></span>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            <span class="nmbr-statistic-icon ti-file"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box-widget">
                            <div class="box-header red">
                                <span class="box-title">Mẫu Đào Tạo
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

                            </div>
                            <div class="box-content light-blue">
                                @if(isset($documentCateGroup))
                                    @foreach($documentCateGroup as $docCate)
                                        @if($docCate->cate_group == 3)
                                            <span class="a-meta-title"><a href="{{ url('document/'.$docCate->id) }}">{{ $docCate->cate_name }}</a> <span class="doc-count">{{ isset($docCate->doc_count) ? $docCate->doc_count : 0 }}</span></span>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            <span class="nmbr-statistic-icon ti-file"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box-widget">
                            <div class="box-header pink">
                                <span class="box-title">Tài Liệu Kỹ Thuật
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

                            </div>
                            <div class="box-content light-blue">
                                @if(isset($documentCateGroup))
                                    @foreach($documentCateGroup as $docCate)
                                        @if($docCate->cate_group == 4)
                                            <span class="a-meta-title"><a href="{{ url('document/'.$docCate->id) }}">{{ $docCate->cate_name }}</a> <span class="doc-count">{{ isset($docCate->doc_count) ? $docCate->doc_count : 0 }}</span></span>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            <span class="nmbr-statistic-icon ti-file"></span>
                        </div>
                    </div>
                </div>
            </div><!-- nmbr-statistic-area -->
            <div class="dashBoard-section-2">
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
                                <div class="box-data dashboard-fix-box">
                                    <div class="box-heading">
                                        <div class="box-title">
                                            <h4>Hình Ảnh</h4>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div id="container" style="width: 100%;">
                                            <div class="news">
                                                @if(isset($pictureLib))
                                                    @foreach($pictureLib as $pic)
                                                        <a href="{{ url('picture-gallery/'.$pic->id) }}" class="new-item">{{ $pic->name }}</a>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div><!--panel Body -->
                                </div><!-- widget-module -->
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="box-data dashboard-fix-box">
                                    <div class="box-heading">
                                        <div class="box-title">
                                            <h4>Bài Mới</h4>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div id="container" style="width: 100%;">
                                            <div class="news">
                                                <a href="#" class="new-item">Tờ Trình 1</a>
                                                <a href="#" class="new-item">Tờ Trình 2</a>
                                                <a href="#" class="new-item">Tờ Trình 3</a>
                                                <a href="#" class="new-item">Tờ Trình 4</a>
                                            </div>
                                        </div>
                                    </div><!--panel Body -->
                                </div><!-- widget-module -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashBoard-section-3">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="box-data">
                                <div class="box-heading">
                                    <div class="box-title">
                                        <h4>Top Upload</h4>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="container" style="width: 100%;">
                                        <canvas id="line_chart"></canvas>
                                    </div>
                                </div><!--panel Body -->
                        </div><!-- widget-module -->
                    </div>
                    <div class="col-lg-4">
                        <div class="box-data">
                            <div class="box-heading">
                                <div class="panel-title">
                                    <h4>Top Upload</h4>
                                </div>
                            </div>
                            <div class="box-body">
                                <div id="container" style="width: 100%;">
                                    <canvas id="bar_chart"></canvas>
                                </div>
                            </div><!--panel Body -->
                        </div><!-- widget-module -->
                    </div>
                    <div class="col-lg-4">
                        <div class="box-data">
                            <div class="box-heading">
                                <div class="panel-title">
                                    <h4>Top Upload</h4>
                                </div>
                            </div>
                            <div class="box-body">
                                <div id="container" style="width: 100%;">
                                    <canvas id="bar_chart1"></canvas>
                                </div>
                            </div><!--panel Body -->
                        </div><!-- widget-module -->
                    </div>
                </div>
            </div><!-- chart-area -->
        </div>
    </div><!-- page-content -->
</div><!-- page-container -->

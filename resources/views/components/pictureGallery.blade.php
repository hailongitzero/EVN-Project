<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/13/2017
 * Time: 7:54 PM
 */?>
<div class="apps-container-wrap page-container">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-title-block">
                        <h4>Thư Viện Hình</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="ti-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin">Thư Viện</a></li>
                            <li class="breadcrumb-item active">Thư Viện Hình</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box-data">
                        <div class="box-heading">
                            <div class="box-title">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4 class="text-red">Thư Viện Hình</h4>
                                    </div>
                                    <div class="col-md-8 text-right">
                                        <div class="page-title-block top-add-icon">
                                            <a href="#" class="btn btn-rounded btn-cyan" data-toggle="modal" data-target="#addImageModal">
                                                <i class="fa fa-upload edit-icon"></i> Tải Lên
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="row justify-content-center">
                                <div class="col-md-8" id="carousel-bounding-box">
                                    <div id="flex-slider" class="flexslider">
                                        <ul class="slides">
                                            @if(isset($pictureGallery))
                                                @foreach($pictureGallery as $pic)
                                                    <li><img src="{{ url($pic->pic_url) }}" alt=""></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                    <div id="flex-carousel" class="flexslider">
                                        <ul class="slides">
                                            @if(isset($pictureGallery))
                                                @foreach($pictureGallery as $pic)
                                                    <li><img src="{{ url($pic->pic_url) }}"></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <!--/Slider-->
                            </div>
                        </div><!--panel Body -->
                    </div><!-- widget-module -->
                </div>
            </div>
        </div>
    </div>
</div>
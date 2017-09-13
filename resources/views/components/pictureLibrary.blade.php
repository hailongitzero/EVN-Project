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

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box-widget widget-module">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Thư Viện Hình</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="basic-datatable-block">
                                    <table id="docCateTable" class="display table table-bordered basic-data-table">
                                        <thead>
                                        <tr>
                                            <th>Bài Đăng</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($pictureList))
                                            @foreach($pictureList as $pic)
                                                <tr>
                                                    <td class="picLib"><a href="{{ url('picture-gallery/'.$pic->id) }}" target="_blank">{{ $pic->name }}</a></td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div><!-- basic-table-block -->
                            </div><!--panel Body -->
                        </div><!--panel -->
                    </div><!-- widget-module -->
                </div>
            </div>

            <footer class="footer">
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
            </footer>
        </div>
    </div>
</div>
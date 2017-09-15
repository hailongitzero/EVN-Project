<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/13/2017
 * Time: 7:53 PM
 */?>
<div class="apps-container-wrap page-container">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-title-block">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="ti-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin">Tài Liệu</a></li>
                            <li class="breadcrumb-item active">Tra Cứu</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form id="frmSearchDocument" class="form-common" action="searchFile" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row search-layout">
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="docName" name="docName" placeholder="Tên Tài Liệu">
                            </div>
                            <div class="col-lg-2">
                                <input type="text" class="form-control" id="authName" name="authName" placeholder="Người Đăng">
                            </div>
                            <div class="col-lg-2">
                                <div class="form-check">
                                    <select id="cateId" name="cateId" class="custom-select">
                                        <option value="0" selected>Tất Cả</option>
                                        @foreach(  $userCateList as $lst )
                                            <option value="{{ $lst->doc_cate_id }}">{{ $lst->category->cate_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <input type="text" class="form-control" id="fromDate" name="fromDate" value="01-09-2017" placeholder="Từ Ngày">
                            </div>
                            <div class="col-lg-2">
                                <input type="text" class="form-control" id="toDate" name="toDate" value="30092017" placeholder="Đến Ngày">
                            </div>
                            <div class="col-md-1">
                                <div class="form-btn-block">
                                    <button type="submit" class="btn btn-raised btn-primary waves-effect waves-light">Tìm Kiếm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box-data">
                        <div class="box-heading">
                            <div class="box-title">
                                    <h4>Tra Cứu</h4>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="basic-datatable-block">
                                <table id="docCateTable" class="display table table-bordered basic-data-table">
                                    <thead>
                                    <tr>
                                        <th>Tên Tài Liệu</th>
                                        <th>Hiệu Lực</th>
                                        <th>Từ Ngày</th>
                                        <th>Đến Ngày</th>
                                        <th>Ngày Đăng</th>
                                        <th>Người Đăng</th>
                                        <th></th>
                                        <th>Download</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($searchResult))
                                        @foreach($searchResult as $rsl)
                                            <tr>
                                                <td class="cateName">{{ $rsl->doc_name }}</td>
                                                <td>{{ $rsl->total_time }}</td>
                                                <td>{{ !is_null($rsl->start_date) ? date('d-m-Y', strtotime($rsl->start_date)) : ''}}</td>
                                                <td>{{ !is_null($rsl->end_date) ? date('d-m-Y', strtotime($rsl->end_date)) : ''}}</td>
                                                <td>{{$rsl->created_at}}</td>
                                                <td>{{ $rsl->author }}</td>
                                                <td class="controller-column">
                                                    @if($rsl->doc_tp == 'docx' || $rsl->doc_tp == 'doc')
                                                        <i class="fa fa-file-word-o edit-icon"></i>
                                                    @elseif($rsl->doc_tp == 'xslx' || $rsl->doc_tp == 'xsl')
                                                        <i class="fa fa-file-excel-o edit-icon"></i>
                                                    @elseif($rsl->doc_tp == 'ppt' || $rsl->doc_tp == 'pptx')
                                                        <i class="fa fa-file-powerpoint-o edit-icon"></i>
                                                    @elseif($rsl->doc_tp == 'pdf')
                                                        <i class="fa fa-file-pdf-o edit-icon"></i>
                                                    @elseif($rsl->doc_tp == 'jpg' || $rsl->doc_tp == 'png' || $rsl->doc_tp == 'jpeg')
                                                        <i class="fa fa-file-image-o edit-icon"></i>
                                                    @elseif($rsl->doc_tp == 'mp4' || $rsl->doc_tp == 'mkv' || $rsl->doc_tp == 'flv' || $rsl->doc_tp == '.wmv' || $rsl->doc_tp == 'm4p')
                                                        <i class="fa fa-file-video-o edit-icon"></i>
                                                    @else
                                                        <i class="fa fa-file edit-icon"></i>
                                                    @endif
                                                </td>
                                                </td>
                                                <td class="controller-column">
                                                    <a href="{{ url($rsl->doc_url) }}">
                                                        <i class="fa fa-download edit-icon"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div><!-- basic-table-block -->
                        </div><!--panel Body -->
                    </div><!-- widget-module -->
                </div>
            </div>
        </div>
    </div>
</div>

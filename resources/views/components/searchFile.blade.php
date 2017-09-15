<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/13/2017
 * Time: 7:53 PM
 */?>
<div class="apps-container-wrap page-container">
    <div class="page-content">
        <form class="container-fluid">
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
                <form id="frmAddDoc" class="form-common" action="">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label for="inpDocName">Tên Tài Liệu</label>
                            <input type="text" class="form-control" id="inpDocName" name="inpDocName" placeholder="Tên Tài Liệu">
                        </div>
                        <div class="col-lg-6">
                            <label for="inpDocName">Người Đăng</label>
                            <input type="text" class="form-control" id="inpDocName" name="username" placeholder="Tên Tài Liệu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <div class="form-check">
                                <select class="custom-select">
                                    <option selected>Danh Mucj</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="fromDate" name="fromDate" placeholder="Từ Ngày">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="toDate" name="toDate" placeholder="Đến Ngày">
                        </div>
                    </div>
                </form>
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
                                            <th>Ngày Đăng</th>
                                            <th>Từ Ngày</th>
                                            <th>Đến Ngày</th>
                                            <th>Người Đăng</th>
                                            <th></th>
                                            <th>Download</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {{--@if(isset($documentList))--}}
                                            {{--@foreach($documentList as $doc)--}}
                                                {{--<tr>--}}
                                                    {{--<td class="cateName">{{ $doc->doc_name }}</td>--}}
                                                    {{--<td>{{ !is_null($doc->created_at) ? $doc->created_at->format('d-m-Y') : ''}}</td>--}}
                                                    {{--<td>{{ $doc->documentAuthor->name }}</td>--}}
                                                    {{--<td class="controller-column">--}}
                                                        {{--@if($doc->doc_tp == 'docx' || $doc->doc_tp == 'doc')--}}
                                                            {{--<i class="fa fa-file-word-o edit-icon"></i>--}}
                                                        {{--@elseif($doc->doc_tp == 'xslx' || $doc->doc_tp == 'xsl')--}}
                                                            {{--<i class="fa fa-file-excel-o edit-icon"></i>--}}
                                                        {{--@elseif($doc->doc_tp == 'ppt' || $doc->doc_tp == 'pptx')--}}
                                                            {{--<i class="fa fa-file-powerpoint-o edit-icon"></i>--}}
                                                        {{--@elseif($doc->doc_tp == 'pdf')--}}
                                                            {{--<i class="fa fa-file-pdf-o edit-icon"></i>--}}
                                                        {{--@elseif($doc->doc_tp == 'jpg' || $doc->doc_tp == 'png' || $doc->doc_tp == 'jpeg')--}}
                                                            {{--<i class="fa fa-file-image-o edit-icon"></i>--}}
                                                        {{--@elseif($doc->doc_tp == 'mp4' || $doc->doc_tp == 'mkv' || $doc->doc_tp == 'flv' || $doc->doc_tp == '.wmv' || $doc->doc_tp == 'm4p')--}}
                                                            {{--<i class="fa fa-file-video-o edit-icon"></i>--}}
                                                        {{--@else--}}
                                                            {{--<i class="fa fa-file edit-icon"></i>--}}
                                                        {{--@endif--}}
                                                    {{--</td>--}}
                                                    {{--</td>--}}
                                                    {{--<td class="controller-column">--}}
                                                        {{--<a href="{{ url($doc->doc_url) }}">--}}
                                                            {{--<i class="fa fa-download edit-icon"></i></a>--}}
                                                    {{--</td>--}}
                                                {{--</tr>--}}
                                            {{--@endforeach--}}
                                        {{--@endif--}}
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

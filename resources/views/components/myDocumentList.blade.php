<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/13/2017
 * Time: 12:15 PM
 */?>
<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/7/2017
 * Time: 9:20 PM
 */?>
<div class="apps-container-wrap page-container">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-title-block">
                            <h4>Tài Liệu Của Tôi</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href=""><i class="ti-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="admin">Tài Liệu</a></li>
                                <li class="breadcrumb-item active">Tài Liệu Của Tôi</li>
                            </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box-widget widget-module">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Tài Liệu Của Tôi</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="basic-datatable-block">
                                    <table id="docCateTable" class="display table table-bordered basic-data-table">
                                        <thead>
                                        <tr>
                                            <th>Tên Tài Liệu</th>
                                            <th>Thời Gian</th>
                                            <th>Từ Ngày</th>
                                            <th>Đến Ngày</th>
                                            <th>Ngày Đăng</th>
                                            <th>Người Đăng</th>
                                            <th></th>
                                            <th>Download</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($documentList))
                                            @foreach($documentList as $doc)
                                                <tr>
                                                    <td class="cateName">{{ $doc->doc_name }}</td>
                                                    <td>{{ $doc->total_time }}</td>
                                                    <td>{{ !is_null($doc->start_date) ? date('d-m-Y', strtotime($doc->start_date)) : ''}}</td>
                                                    <td>{{ !is_null($doc->end_date) ? date('d-m-Y', strtotime($doc->end_date)) : ''}}</td>
                                                    <td>{{ !is_null($doc->created_at) ? $doc->created_at->format('d-m-Y') : ''}}</td>
                                                    <td>{{ $doc->documentAuthor->name }}</td>
                                                    <td class="controller-column">
                                                        @if($doc->doc_tp == 'docx' || $doc->doc_tp == 'doc')
                                                            <i class="fa fa-file-word-o edit-icon"></i>
                                                        @elseif($doc->doc_tp == 'xslx' || $doc->doc_tp == 'xsl')
                                                            <i class="fa fa-file-excel-o edit-icon"></i>
                                                        @elseif($doc->doc_tp == 'ppt' || $doc->doc_tp == 'pptx')
                                                            <i class="fa fa-file-powerpoint-o edit-icon"></i>
                                                        @elseif($doc->doc_tp == 'pdf')
                                                            <i class="fa fa-file-pdf-o edit-icon"></i>
                                                        @elseif($doc->doc_tp == 'jpg' || $doc->doc_tp == 'png' || $doc->doc_tp == 'jpeg')
                                                            <i class="fa fa-file-image-o edit-icon"></i>
                                                        @elseif($doc->doc_tp == 'mp4' || $doc->doc_tp == 'mkv' || $doc->doc_tp == 'flv' || $doc->doc_tp == '.wmv' || $doc->doc_tp == 'm4p')
                                                            <i class="fa fa-file-video-o edit-icon"></i>
                                                        @else
                                                            <i class="fa fa-file edit-icon"></i>
                                                        @endif
                                                    </td>
                                                    </td>
                                                    <td class="controller-column">
                                                        <a href="{{ url($doc->doc_url) }}">
                                                            <i class="fa fa-download edit-icon"></i></a>
                                                        {{--{{ strtotime(date("Y-m-d H:i:s"))-strtotime($doc->created_at) > 86400 }}--}}
                                                        @if(strtotime(date("Y-m-d H:i:s"))-strtotime($doc->created_at) < 86400)
                                                            <a href="javascript:void(0)" class="myFileDelete">
                                                                <i class="fa fa-trash-o delete-icon"></i>
                                                                <input type="hidden" id="deleteFileId" value="{{ $doc->id }}">
                                                            </a>
                                                        @endif
                                                    </td>
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
    </div>
</div>


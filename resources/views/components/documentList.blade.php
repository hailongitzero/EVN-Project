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
                        @if(isset($documentCate->category))
                            <h4>{{ $documentCate->category->cate_name }}</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href=""><i class="ti-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="admin">Tài Liệu</a></li>
                                <li class="breadcrumb-item active">{{ $documentCate->category->cate_name }}</li>
                            </ol>
                        @endif
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
                                        @if(isset($documentCate->category))
                                            <h4 class="text-red">{{ $documentCate->category->cate_name }}</h4>
                                        @endif
                                    </div>
                                    <div class="col-md-8 text-right">
                                        <div class="page-title-block top-add-icon">
                                            @if($documentCate->upload_auth == 1)
                                                <a href="#" class="btn btn-rounded btn-cyan" data-toggle="modal" data-target="#addDocumentModal">
                                                    <i class="fa fa-upload edit-icon"></i> Tải Lên
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(isset($documentCate->category) && ($documentCate->category->id == 1 || $documentCate->category->id == 2))
                            <div class="box-body">
                                <div class="basic-datatable-block">
                                    <table id="docCateTable" class="display table table-bordered basic-data-table">
                                        <thead>
                                        <tr>
                                            <th>Tên Tài Liệu</th>
                                            <th width="12%">Thời Gian Hoàn Thành</th>
                                            <th width="10%">Ngày Đăng</th>
                                            <th width="10%">Người Đăng</th>
                                            <th width="10%">Xem Trước</th>
                                            <th width="10%">Tải Xuống</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($documentList))
                                            @foreach($documentList as $doc)
                                                <tr>
                                                    <td class="cateName" data-toggle="tooltip" data-placement="top" title="{{ $doc->description }}">{{ $doc->doc_name }}</td>
                                                    <td>{{ isset($doc->total_time) ? $doc->total_time.' ngày' : '' }}</td>
                                                    <td>{{ !is_null($doc->created_at) ? $doc->created_at->format('d-m-Y') : ''}}</td>
                                                    <td>{{ $doc->documentAuthor->name }}</td>
                                                    <td class="controller-column">
                                                        <a href="javascript:void(0)" class="reviewDoc" data="{{ url($doc->doc_url) }}" data-toggle="modal" data-target="#viewDocModal">
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
                                                        </a>
                                                    </td>
                                                    </td>
                                                    <td class="controller-column">
                                                        <a href="{{ url($doc->doc_url) }}">
                                                            <i class="fa fa-download edit-icon"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div><!-- basic-table-block -->
                            </div><!--panel Body -->
                        @elseif(isset($documentCate->category) && ($documentCate->category->id == 7 || $documentCate->category->id == 8 || $documentCate->category->id == 9))
                            <div class="box-body">
                                <div class="basic-datatable-block">
                                    <table id="docCateTable" class="display table table-bordered basic-data-table">
                                        <thead>
                                        <tr>
                                            <th>Tên Tài Liệu</th>
                                            <th width="10%">Từ Ngày</th>
                                            <th width="10%">Đến Ngày</th>
                                            <th width="10%">Ngày Đăng</th>
                                            <th width="10%">Người Đăng</th>
                                            <th width="10%">Xem Trước</th>
                                            <th width="10%">Tải Xuống</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($documentList))
                                            @foreach($documentList as $doc)
                                                <tr>
                                                    <td class="cateName" data-toggle="tooltip" data-placement="top" title="{{ $doc->description }}">{{ $doc->doc_name }}</td>
                                                    <td>{{ !is_null($doc->start_date) ? date('d-m-Y', strtotime($doc->start_date)) : ''}}</td>
                                                    <td>{{ !is_null($doc->end_date) ? date('d-m-Y', strtotime($doc->end_date)) : ''}}</td>
                                                    <td>{{ !is_null($doc->created_at) ? $doc->created_at->format('d-m-Y') : ''}}</td>
                                                    <td>{{ $doc->documentAuthor->name }}</td>
                                                    <td class="controller-column">
                                                        <a href="javascript:void(0)" class="reviewDoc" data="{{ url($doc->doc_url) }}" data-toggle="modal" data-target="#viewDocModal">
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
                                                        </a>
                                                    </td>
                                                    </td>
                                                    <td class="controller-column">
                                                        <a href="{{ url($doc->doc_url) }}">
                                                            <i class="fa fa-download edit-icon"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div><!-- basic-table-block -->
                            </div><!--panel Body -->
                        @else
                            <div class="box-body">
                                <div class="basic-datatable-block">
                                    <table id="docCateTable" class="display table table-bordered basic-data-table">
                                        <thead>
                                        <tr>
                                            <th>Tên Tài Liệu</th>
                                            <th width="10%">Ngày Đăng</th>
                                            <th width="10%">Người Đăng</th>
                                            <th width="10%">Xem Trước</th>
                                            <th width="10%">Tải Xuống</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($documentList))
                                            @foreach($documentList as $doc)
                                                <tr>
                                                    <td class="cateName" data-toggle="tooltip" data-placement="top" title="{{ $doc->description }}">{{ $doc->doc_name }}</td>
                                                    <td>{{ !is_null($doc->created_at) ? $doc->created_at->format('d-m-Y') : ''}}</td>
                                                    <td>{{ $doc->documentAuthor->name }}</td>
                                                    <td class="controller-column">
                                                        <a href="javascript:void(0)" class="reviewDoc" data="{{ url($doc->doc_url) }}" data-toggle="modal" data-target="#viewDocModal">
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
                                                        </a>
                                                    </td>
                                                    </td>
                                                    <td class="controller-column">
                                                        <a href="{{ url($doc->doc_url) }}">
                                                            <i class="fa fa-download edit-icon"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div><!-- basic-table-block -->
                            </div><!--panel Body -->
                        @endif
                    </div><!-- widget-module -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Thêm mới danh mục tài liệu -->
<div class="modal fade" id="addDocumentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tải Tài Liệu Lên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-block">
                    <form id="frmAddDoc" class="form-common" action="">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="inpDocName" name="inpDocName" placeholder="Tên Tài Liệu">
                                @if(isset($documentCate->category))
                                    <input type="hidden" id="inpDocCateId" value="{{ $documentCate->category->id }}">
                                @else
                                    <input type="hidden" id="inpDocCateId" value="0">
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="inpDocDesc" name="inpDocDesc" placeholder="Mô tả tài liệu" rows="4"></textarea>
                            </div>
                        </div>
                        @if(isset($documentCate->category) && ($documentCate->category->id == 1 || $documentCate->category->id == 2))
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="number" class="form-control" id="inpDocTime" name="inpDocTime" placeholder="Thời Gian Hoàn Thành">
                                </div>
                            </div>
                        @endif
                        @if(isset($documentCate->category) && ($documentCate->category->id == 5 || $documentCate->category->id == 6 || $documentCate->category->id == 7 ))
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="fromDate" name="fromDate" placeholder="Từ Ngày">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="toDate" name="toDate" placeholder="Đến Ngày">
                                </div>
                            </div>
                        @endif
                        <div class="form-group text-right">
                            <label id="lblInpFile" for="inpFile" class="col-md-6 col-form-label left-align">Tài Liệu Tải Lên</label>
                            <div class="col-lg-6 btn btn-primary waves-effect waves-light">
                                <span><i class="fa fa-cloud-upload" aria-hidden="true"></i> Chọn Tài Liệu</span>
                                <input type="file" id="inpFile" accept="model/vnd-dwf, image/vnd.dwg, application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,text/plain, application/pdf">
                            </div>
                        </div>
                        <div class="form-btn-block text-center">
                            <button type="button" id="btnAddDoc" class="btn btn-raised btn-primary btn-rounded waves-effect waves-light">Tải Lên</button>
                            <button type="button" class="btn btn-outline-default btn-xs btn-raised btn-rounded waves-effect" data-dismiss="modal" aria-label="Close">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="cateEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chỉnh Sửa Danh Mục</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-block">
                    <form class="form-common" action="">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Tên Danh Mục</label>
                            <input type="text" class="form-control" id="mdCateName" name="mdCateName" placeholder="Tên Danh Mục">
                            <input type="hidden" id="mdCateId" name="mdCateId" value="">
                        </div>
                        <div class="form-btn-block text-center">
                            <button type="button" id="btnUpdateDocCate" class="btn btn-raised btn-primary waves-effect waves-light">Cập Nhật</button>
                            <button type="button" class="btn btn-outline-default btn-xs btn-raised waves-effect" data-dismiss="modal" aria-label="Close">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- View Document Modal -->
<div class="modal fade" id="viewDocModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xem Trước Tài Liệu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body docView">
                <iframe src="" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>

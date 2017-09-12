<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/4/2017
 * Time: 4:50 PM
 */?>

<div class="apps-container-wrap page-container">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-title-block">
                        <h4>Danh Mục Tài Liệu</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="ti-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin">Quản Lý</a></li>
                            <li class="breadcrumb-item active">Danh Mục Tài Liệu</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-3 page-title-block">
                    <a href="#" class="btn btn-raised btn-info" data-toggle="modal" data-target="#addCateDocModal">Thêm Mới</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box-widget widget-module">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Quản Lý Danh Mục Tài Liệu</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="basic-datatable-block">
                                    <table id="docCateTable" class="display table table-bordered basic-data-table">
                                        <thead>
                                        <tr>
                                            <th>Danh Mục</th>
                                            <th width="20%">Trạng Thái</th>
                                            <th width="20%">Cập Nhật</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($documentCate))
                                            @foreach($documentCate as $cate)
                                                <tr>
                                                    <td class="cateName">{{ $cate->cate_name }}</td>
                                                    <td>
                                                        <div class="switch-block form-common">
                                                            <div class="form-group row">
                                                                <label class="has-warning">
                                                                    <input type="hidden" id="cateId" name="cateId" value="{{ $cate->id }}">
                                                                    <input type="checkbox" id="chkActive" name="chkActive" {{ $cate->active == 1 ? "checked" : "" }} data-toggle="toggle" data-style="ios">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="controller-column">
                                                        <a href="" id="cateModal" data-toggle="modal" data-target="#cateEditModal"><i class="fa fa-pencil edit-icon"></i></a>
                                                        <i id="saveDocCate" class="fa fa-save edit-icon"></i>
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
            <!-- Modal Thêm mới danh mục tài liệu -->
            <div class="modal fade" id="addCateDocModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thêm Mới Danh Mục</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-block">
                                <form class="form-common" action="">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Tên Danh Mục</label>
                                        <input type="text" class="form-control" id="mdAddCateName" name="mdCateName" placeholder="Tên Danh Mục">
                                    </div>
                                    <div class="form-btn-block">
                                        <button type="button" id="btnAddDocCate" class="btn btn-raised btn-primary waves-effect waves-light">Thêm Mới</button>
                                        <button type="button" class="btn btn-outline-default btn-xs btn-raised waves-effect" data-dismiss="modal" aria-label="Close">Hủy</button>
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
                                    <div class="form-btn-block">
                                        <button type="button" id="btnUpdateDocCate" class="btn btn-raised btn-primary waves-effect waves-light">Cập Nhật</button>
                                        <button type="button" class="btn btn-outline-default btn-xs btn-raised waves-effect" data-dismiss="modal" aria-label="Close">Hủy</button>
                                    </div>
                                </form>
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
    </div>
</div>
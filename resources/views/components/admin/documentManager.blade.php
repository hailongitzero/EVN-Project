<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/8/2017
 * Time: 8:38 AM
 */?>
<div class="apps-container-wrap page-container">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-title-block">
                        <h4>Quản Lý Tài Liệu</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="ti-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin">Quản Lý</a></li>
                            <li class="breadcrumb-item active">Quản Lý Tài Liệu</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box-data">
                            <div class="box-heading">
                                <div class="box-title">
                                    <h4>Quản Lý Tài Liệu</h4>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="basic-datatable-block">
                                    <table id="tbDocumentManager" class="display table table-bordered basic-data-table">
                                        <thead>
                                        <tr>
                                            <th>Danh Mục</th>
                                            <th>Tên Tài Liệu</th>
                                            <th>Ngày Hết Hiệu Lực</th>
                                            <th>Trạng Thái</th>
                                            <th>Người Upload</th>
                                            <th>Cập Nhật</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($documentList))
                                            @foreach($documentList as $doc)
                                                <tr>
                                                    <td class="name">{{ $doc->documentCategory->cate_name }}</td>
                                                    <td>{{ $doc->doc_name }}</td>
                                                    <td>{{ $doc->end_date }}</td>
                                                    <td>
                                                        <div class="switch-block form-common">
                                                            <div class="form-group row">
                                                                <label class="has-warning">
                                                                    <input type="checkbox" id="chkActive" name="chkActive" {{ $doc->active == 1 ? "checked" : "" }} data-toggle="toggle" data-style="ios">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $doc->documentAuthor->name }}</td>
                                                    <td class="controller-column">
                                                        <input type="hidden" id="docId" value="{{ $doc->id }}">
                                                        {{--<a href="" id="btnDocView" data-toggle="modal" data-target="#viewDocModal{{ $doc->id }}"><i class="fa fa-eye edit-icon"></i></a>--}}
                                                        <i id="btnUpdateDocument" class="fa fa-save edit-icon"></i>
                                                        <i class="fa fa-trash-o delete-icon"></i>
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

<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/5/2017
 * Time: 3:37 PM
 */

//foreach ($userList as $user){
//    var_dump(count($user->documentCategory));
//}
//dd($user)
?>
<div class="apps-container-wrap page-container">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-title-block">
                        <h4>Quản Lý Người Dùng</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="ti-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin">Quản Lý</a></li>
                            <li class="breadcrumb-item active">Quản Lý Người Dùng</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-3 page-title-block">
                    <a href="#" class="btn btn-raised btn-info" data-toggle="modal" data-target="#addUserModal">Thêm Mới</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box-widget widget-module">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Quản Lý Người Dùng</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="basic-datatable-block">
                                    <table id="userTable" class="display table table-bordered basic-data-table">
                                        <thead>
                                        <tr>
                                            <th>Họ Tên</th>
                                            <th>Điện Thoại</th>
                                            <th>Email</th>
                                            <th>Phòng Ban</th>
                                            <th>Chức Vụ</th>
                                            <th>Trạng Thái</th>
                                            <th>Cập Nhật</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($userList))
                                            @foreach($userList as $user)
                                                <tr>
                                                    <td class="name">{{ $user->name }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->department->dept_name }}</td>
                                                    <td>{{ $user->position }}</td>
                                                    <td>
                                                        <div class="switch-block form-common">
                                                            <div class="form-group row">
                                                                <label class="has-warning">
                                                                    <input type="hidden" id="cateId" name="cateId" value="{{ $user->id }}">
                                                                    <input type="checkbox" id="chkActive" name="chkActive" {{ $user->active == 1 ? "checked" : "" }} data-toggle="toggle" data-style="ios">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="controller-column">
                                                        <input type="hidden" id="userId" value="{{ $user->id }}">
                                                        <a href="" id="btnUserDoc" data-toggle="modal" data-target="#userDocCateModal{{ $user->id }}"><i class="fa fa-file edit-icon"></i></a>
                                                        <a href="" id="btnUserEdit" data-toggle="modal" data-target="#editUserModal{{ $user->id }}"><i class="fa fa-pencil edit-icon"></i></a>
                                                        <i id="btnUpdateUserList" class="fa fa-save edit-icon"></i>
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
            <!-- Modal Thêm mới danh mục tài liệu -->
            @if(isset($userList))
                @foreach($userList as $user)
                    <div class="modal fade" id="userDocCateModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog table-modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ $user->name }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="panel-body">
                                        <div class="basic-datatable-block">
                                            <table id="tbUserDocumentCateAut" class="display table table-bordered basic-data-table tbUserDocumentCateAut">
                                                <thead>
                                                    <tr>
                                                        <th>Danh Mục</th>
                                                        <th>Upload</th>
                                                        <th>Kích Hoạt</th>
                                                        <th>Cập Nhật</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @if(isset($user->documentCategory) && count($user->documentCategory) > 0)
                                                    @foreach($user->documentCategory as $docCate)
                                                    <tr>
                                                        <td>
                                                            @if(count($docCate->category) > 0)
                                                            {{ $docCate->category->cate_name }}
                                                            <input type="hidden" id="userId" name="userId" value="{{ $docCate->user_id }}">
                                                            @endif
                                                            <input type="hidden" id="cateId" name="cateId" value="{{ $docCate->doc_cate_id }}">
                                                        </td>
                                                        <td>
                                                            <div class="switch-block form-common">
                                                                <div class="form-group row">
                                                                    <label class="has-warning">
                                                                        <input type="checkbox" id="chkUpload" name="chkUpload" {{ $docCate->upload_auth == 1 ? "checked" : "" }} data-toggle="toggle" data-style="ios">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><div class="switch-block form-common">
                                                                <div class="form-group row">
                                                                    <label class="has-warning">
                                                                        <input type="checkbox" id="chkActive" name="chkActive" {{ $docCate->active == 1 ? "checked" : "" }} data-toggle="toggle" data-style="ios">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="controller-column">
                                                            <i id="btnUpdateDocCateAuth" class="fa fa-save edit-icon btnUpdateDocCateAuth"></i>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div><!-- basic-table-block -->
                                    </div><!--panel Body -->
                                </div><!--panel -->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            <!-- Add new User Modal -->
            <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thêm Người Dùng Mới</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-block">
                                <form class="form-common" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="form-group col-lg-6 {{ $errors->has('name') ? ' has-error ' : '' }}">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Họ Tên">
                                        </div>
                                        <div class="form-group col-lg-6 {{ $errors->has('username') ? ' has-error ' : '' }}">
                                            <input type="text" class="form-control renter-block" id="username" name="username" placeholder="Tên Đăng Nhập">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group password-group col-lg-6 {{ $errors->has('password') ? ' has-error ' : '' }}">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group password-group col-lg-6 {{ $errors->has('password_confirmation') ? ' has-error ' : '' }}">
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control renter-block" placeholder="Re type password">
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('email') ? ' has-error ' : '' }}">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group {{ $errors->has('address') ? ' has-error ' : '' }}">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Địa Chỉ">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6 {{ $errors->has('phone') ? ' has-error ' : '' }}">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Di Động">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control renter-block" id="office_phone" name="office_phone" placeholder="Điện Thoại Bàn">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6 {{ $errors->has('emp_cd') ? ' has-error ' : '' }}">
                                            <input type="text" class="form-control renter-block" id="emp_cd" name="emp_cd" placeholder="Mã Nhân Viên">
                                        </div>
                                        <div class="form-group col-lg-6 {{ $errors->has('position') ? ' has-error ' : '' }}">
                                            <input type="text" class="form-control renter-block" id="position" name="position" placeholder="Chức Danh">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6 {{ $errors->has('company') ? ' has-error ' : '' }}">
                                            <div class="form-check">
                                                <select class="custom-select" id="company" name="company" style="width: 100%">
                                                    <option selected>Công Ty</option>
                                                    @if(isset($company))
                                                        @foreach($company as $cmp)
                                                            <option value="{{ $cmp->id }}">{{ $cmp->company_name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 {{ $errors->has('dept_id') ? ' has-error ' : '' }}">
                                            <div class="form-check">
                                                <select class="custom-select" id="dept_id" name="dept_id" style="width: 100%">
                                                    <option class="none" value="0" selected>Phòng Ban</option>
                                                    @if(isset($department))
                                                        @foreach($department as $dept)
                                                            <option value="{{ $dept->id }}" class="{{ $dept->company_id }}" style="display: none;">{{ $dept->dept_name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-btn-block">
                                        <button type="button" id="btnAddNewUser" class="btn btn-raised btn-primary waves-effect waves-light btn-block">Đăng Ký</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- edit User Modal -->
            @if(isset($userList))
                @foreach($userList as $user)
                <div class="modal fade editUserModal" id="editUserModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Thông Tin - {{ $user->name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="updateUserInforForm" class="form-block">
                                    <div class="form-common">
                                        <div class="row">
                                            <div class="form-group col-lg-6 {{ $errors->has('name') ? ' has-error ' : '' }}">
                                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="Họ Tên">
                                                <input type="hidden" id="userId" name="userId" value="{{ $user->id }}">
                                            </div>
                                            <div class="form-group col-lg-6 {{ $errors->has('username') ? ' has-error ' : '' }}">
                                                <input type="text" class="form-control renter-block" id="username" name="username" placeholder="Tên Đăng Nhập" value="{{ $user->username }}" disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group password-group col-lg-6 {{ $errors->has('password') ? ' has-error ' : '' }}">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                            </div>
                                            <div class="form-group password-group col-lg-6 {{ $errors->has('password_confirmation') ? ' has-error ' : '' }}">
                                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control renter-block" placeholder="Re type password">
                                            </div>
                                        </div>
                                        <div class="form-group {{ $errors->has('email') ? ' has-error ' : '' }}">
                                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Email">
                                        </div>
                                        <div class="form-group {{ $errors->has('address') ? ' has-error ' : '' }}">
                                            <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}" placeholder="Địa Chỉ">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6 {{ $errors->has('phone') ? ' has-error ' : '' }}">
                                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" placeholder="Di Động">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <input type="text" class="form-control renter-block" id="office_phone" name="office_phone" value="{{ $user->office_phone }}" placeholder="Điện Thoại Bàn">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6 {{ $errors->has('emp_cd') ? ' has-error ' : '' }}">
                                                <input type="text" class="form-control renter-block" id="emp_cd" name="emp_cd"  value="{{ $user->emp_cd }}" placeholder="Mã Nhân Viên">
                                            </div>
                                            <div class="form-group col-lg-6 {{ $errors->has('position') ? ' has-error ' : '' }}">
                                                <input type="text" class="form-control renter-block" id="position" name="position" value="{{ $user->position }}" placeholder="Chức Danh">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-6 {{ $errors->has('company') ? ' has-error ' : '' }}">
                                                <div class="form-check">
                                                    <select class="custom-select" id="company" name="company" style="width: 100%">
                                                        <option selected>Công Ty</option>
                                                        @if(isset($company))
                                                            @foreach($company as $cmp)
                                                                <option value="{{ $cmp->id }}" {{ $user->department->company_id == $cmp->id ? 'selected' : ''}}>{{ $cmp->company_name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 {{ $errors->has('dept_id') ? ' has-error ' : '' }}">
                                                <div class="form-check">
                                                    <select class="custom-select" id="dept_id" name="dept_id" style="width: 100%">
                                                        <option class="none" value="0" selected>Phòng Ban</option>
                                                        @if(isset($department))
                                                            @foreach($department as $dept)
                                                                <option value="{{ $dept->id }}" class="{{ $dept->company_id }}" style="display: none;" {{ $user->dept_id == $dept->id ? 'selected' : '' }}>{{ $dept->dept_name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-btn-block">
                                            <button id="btnUpdateUserInfor" type="button" class="btn btn-raised btn-primary waves-effect waves-light btn-block">Cập Nhật</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
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
<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/1/2017
 * Time: 3:53 PM
 */?>
<div class="apps-container-wrap page-container widget-page">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="page-banner">
                    <div class="banner-logo-block">
                        <a href="signup.html#">
                            <img src="resources/assets/images/logo-vertical.png" alt="img">
                        </a>
                    </div>
                </div>
            </div>
            <div class="widget-form-block">
                <div class="box-widget">
                    <div class="panel-default">
                        <div class="widget-block-title">
                            <h3>Sign up now</h3>
                            <p>Please enter your data to register.</p>
                        </div>
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
                                    <button type="submit" class="btn btn-raised btn-primary waves-effect waves-light btn-block">Đăng Ký</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- panel -->
                </div>
            </div>
        </div>
    </div>
</div>

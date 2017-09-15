<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/1/2017
 * Time: 10:25 AM
 */?>
<script type="text/javascript">
    @if(session('docAuthError'))
        alert('{!! session('docAuthError') !!}');
    @endif
</script>
<div class="apps-header navbar">
    <div class="apps-logo-block">
        <a href="{{ url('') }}">
            <img src="/resources/assets/images/logo-vertical.png" alt="img" class="img-responsive">
            {{--<div class="logo-text-block">--}}

                {{--<h3 class="logo-text">EPS</h3>--}}
            {{--</div>--}}
            {{--<div class="logo-text-img-block">--}}
                {{--<img src="/resources/assets/images/eps-logo-title.png" alt="EPS" class="logo-title">--}}
            {{--</div>--}}
        </a>
    </div>
    <div class="top-menu">
        <div class="row">
            {{--<div class="col-md-3">--}}
                {{--<ul class="top-controller-icons pull-left">--}}
                    {{--<li>--}}
                        {{--<h4 style="color:#ff6a53">Thư Viện Điện Tử</h4>--}}
                        {{--<a id="showLeftPush" href="javascript:void(0)" class="toggolebtn">--}}
                            {{--<span class="ti-view-grid"></span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            <div class="col-md-10 text-center">
                <img src="/resources/assets/images/banner_top.jpg" alt="" class="banner-top">
            </div>
            <div class="col-md-2">
                <ul class="nav navbar-nav text-right">
                    <li class="dropdown icon-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <div class="ripple-container"></div>
                        </a>
                        <ul class="dropdown-menu card-dropdown left">
                            <li><div class="drop-title">Quản Lý Tài Khoản - <span style="color:#ff6a53">{{ isset($userData) && $userData ? $userData->name : '' }}</span></div></li>
                            <li>
                                <div class="card-inner-block notification-block">
                                    <a href="javascript:void(0)">
                                        <i class="notification-icon fa fa-users info-bg"></i>
                                        <div class="notification-details mt-3">
                                            <h5>Tài Khoản</h5>
                                        </div>
                                    </a>
                                    <a href="{{ url('my-file') }}">
                                        <i class="notification-icon fa fa-files-o info-bg"></i>
                                        <div class="notification-details mt-3">
                                            <h5>Tài Liệu Của Tôi</h5>
                                        </div>
                                    </a>
                                    <a href="{{ url('login') }}" id="login">
                                        <i class="notification-icon fa fa-sign-in primary-bg"></i>
                                        <div class="notification-details mt-3">
                                            <h5 id="login">Đăng Nhập</h5>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" id="logout">
                                        <i class="notification-icon fa fa-sign-out primary-bg"></i>
                                        <div class="notification-details mt-3">
                                            <h5>Đăng Xuất</h5>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div><!-- apps-header -->

<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/1/2017
 * Time: 10:25 AM
 */?>
<div class="slide-menu-wrap">
    <nav id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
        <div class="menu-button">
            <a id="showLeftPush" href="javascript:void(0)" class="toggolebtn">
                <span class="ti-view-grid"></span>
            </a>
        </div>
        <div class="user-profile-block">
            <div class="user-thumb">
                <img src="/resources/assets/images/profile/user-thumb.jpg" alt="img" class="img-responsive">
            </div>
            <div class="user-info">
                <h5>
                    Trung Thiên
                </h5>
                <span>Engineer</span>
            </div>
        </div>
        <div class="accordion-menu responsive-menu" data-accordion-group>
            <div class="slide-navigation-wrap" data-accordion>
                <div class="nav-item has-sub" >
                    <a href="{{ url('') }}">
                        <span class="menu-icon-wrap icon ti-home"></span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
            </div>
            <div class="slide-navigation-wrap" data-accordion>
                <div class="nav-item has-sub" data-control>
                    <a href="javascript:void(0)">
                        <span class="menu-icon-wrap icon ti-settings"></span>
                        <span class="menu-title">Quản Lý</span>
                    </a>
                </div>
                <div class="menu-content" data-content>
                    <div class="nav-item">
                        <a href="{{ url('admin/danh-muc-tai-lieu') }}">
                            <span class="menu-icon-wrap bullet"></span>
                            <span class="menu-title">Quản Lý Danh Mục TL</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="{{ url('admin/document-manager') }}">
                            <span class="menu-icon-wrap bullet"></span>
                            <span class="menu-title">Quản Lý Tài Liệu</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="{{ url('admin/user') }}">
                            <span class="menu-icon-wrap bullet"></span>
                            <span class="menu-title">Người Dùng</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="#">
                            <span class="menu-icon-wrap bullet"></span>
                            <span class="menu-title">Danh Mục</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="#">
                            <span class="menu-icon-wrap bullet"></span>
                            <span class="menu-title">Công Ty</span>
                        </a>
                    </div>
                </div>
            </div>
            @if(isset($menuData))
                @foreach( $menuData as $menu)
                    <div class="slide-navigation-wrap" data-accordion>
                        <div class="nav-item has-sub" >
                            <a href="{{ url('admin/document/'.$menu->id) }}">
                                <span class="menu-icon-wrap icon ti-folder"></span>
                                <span class="menu-title">{{ $menu->cate_name }}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="slide-navigation-wrap" data-accordion>
                <div class="nav-item has-sub" >
                    <a href="{{ url('') }}">
                        <span class="menu-icon-wrap icon ti-search"></span>
                        <span class="menu-title">Tra Cứu</span>
                    </a>
                </div>
            </div>
            <div class="slide-navigation-wrap" data-accordion>
                <div class="nav-item has-sub" >
                    <a href="{{ url('') }}">
                        <span class="menu-icon-wrap icon ti-image"></span>
                        <span class="menu-title">Thư Viện Ảnh</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>

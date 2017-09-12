<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/1/2017
 * Time: 10:25 AM
 */
?>
<div class="slide-menu-wrap">
    <nav id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
        <div class="menu-button">
            <a id="showLeftPush" href="javascript:void(0)" class="toggolebtn">
                <span class="ti-view-grid"></span>
            </a>
        </div>

        @foreach($userData as $user)
            @if(isset($user->id))
            <div class="user-profile-block">
                <div class="user-thumb">
                    <img src="{{ url($user->img_url) }}" alt="img" class="img-responsive">
                </div>
                <div class="user-info">
                    <h5>{{ $user->name }}</h5>
                    <span>{{ $user->position }}</span>
                </div>
            </div>
            @else
                <div class="user-profile-block">
                    <div class="user-thumb">
                        <img src="{{ url('resources/assets/images/No-Avatar.png') }}" alt="img" class="img-responsive">
                    </div>
                    <div class="user-info">
                        <h5><a href="{{ url('login') }}">Login</a></h5>
                    </div>
                </div>
            @endif
        @endforeach
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
                        <span class="menu-icon-wrap icon ti-folder"></span>
                        <span class="menu-title">Văn Bản Mẫu</span>
                    </a>
                </div>
                <div class="menu-content" data-content>
                    @if(isset($documentCate) && $documentCate)
                        @foreach( $documentCate as $menu)
                            @if($menu->category->cate_group == 1)
                                <div class="nav-item">
                                    <a href="{{ url('document/'.$menu->category->id) }}">
                                        <span class="menu-icon-wrap bullet"></span>
                                        <span class="menu-title">{{ $menu->category->cate_name }}</span>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="slide-navigation-wrap" data-accordion>
                <div class="nav-item has-sub" data-control>
                    <a href="javascript:void(0)">
                        <span class="menu-icon-wrap icon ti-folder"></span>
                        <span class="menu-title">Mẫu Iso</span>
                    </a>
                </div>
                <div class="menu-content" data-content>
                    @if(isset($documentCate) && $documentCate)
                        @foreach( $documentCate as $menu)
                            @if($menu->category->cate_group == 2)
                                <div class="nav-item">
                                    <a href="{{ url('document/'.$menu->category->id) }}">
                                        <span class="menu-icon-wrap bullet"></span>
                                        <span class="menu-title">{{ $menu->category->cate_name }}</span>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="slide-navigation-wrap" data-accordion>
                <div class="nav-item has-sub" data-control >
                    <a href="javascript:void(0)">
                        <span class="menu-icon-wrap icon ti-folder"></span>
                        <span class="menu-title">Mẫu Đào Tạo</span>
                    </a>
                </div>
                <div class="menu-content" data-content>
                    @if(isset($documentCate) && $documentCate)
                        @foreach( $documentCate as $menu)
                            @if($menu->category->cate_group == 3)
                                <div class="nav-item">
                                    <a href="{{ url('document/'.$menu->category->id) }}">
                                        <span class="menu-icon-wrap bullet"></span>
                                        <span class="menu-title">{{ $menu->category->cate_name }}</span>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="slide-navigation-wrap" data-accordion>
                <div class="nav-item has-sub" data-control >
                    <a href="javascript:void(0)">
                        <span class="menu-icon-wrap icon ti-folder"></span>
                        <span class="menu-title">Tài Liệu Kỹ Thuật</span>
                    </a>
                </div>
                <div class="menu-content" data-content>
                    @if(isset($documentCate) && $documentCate)
                        @foreach( $documentCate as $menu)
                            @if($menu->category->cate_group == 4)
                                <div class="nav-item">
                                    <a href="{{ url('document/'.$menu->category->id) }}">
                                        <span class="menu-icon-wrap bullet"></span>
                                        <span class="menu-title">{{ $menu->category->cate_name }}</span>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
            @if(isset($documentCate) && $documentCate)
                @foreach( $documentCate as $menu)
                    @if( $menu->category->cate_group != 1 &&  $menu->category->cate_group != 2 && $menu->category->cate_group != 3 && $menu->category->cate_group != 4 )
                        <div class="slide-navigation-wrap" data-accordion>
                            <div class="nav-item has-sub" >
                                <a href="{{ url('document/'.$menu->category->id) }}">
                                    <span class="menu-icon-wrap icon ti-files"></span>
                                    <span class="menu-title">{{ $menu->category->cate_name }}</span>
                                </a>
                            </div>
                        </div>
                    @endif
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

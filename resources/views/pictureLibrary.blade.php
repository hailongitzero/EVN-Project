<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/13/2017
 * Time: 9:43 PM
 */?>
<!--extends master template-->
@extends('layouts.master')
<!--end extends master template-->

<!--title site setting-->
@section('title', isset($title) ? $title : 'EVN-GENCO 3 EPS')
<!--end title site setting-->

@section('meta-title', isset($metaTitle) ? $metaTitle : 'EVN-GENCO 3 EPS')
<!--end title site setting-->

<!--description site setting-->
@section('description', isset($description) ? $description : 'EVN-GENCO 3 EPS')
<!--end description site setting-->

<!--content site section-->
@section('page-content')
    <!-- header page-->
    @if(isset($userData))
        @include('components.header', $userData)
    @else
        @include('components.header')
    @endif
    <!-- menu page-->
    @include('components.menu', $menuData)

    @if(isset($layoutData))
        @include('components.pictureLibrary', $layoutData)
    @else
        @include('components.pictureLibrary')
    @endif
@endsection
<!--end content site section-->

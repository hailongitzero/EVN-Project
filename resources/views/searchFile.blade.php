<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/15/2017
 * Time: 2:17 AM
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
        @include('components.searchFile', $layoutData)
    @else
        @include('components.searchFile')
    @endif
    <!-- footer page-->
    @include('components.footer')
@endsection
<!--end content site section-->


<?php

namespace App\Http\Controllers;

use App\DocumentCategory;
use App\PictureLibrary;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CommonController;

class IndexController extends CommonController
{
    public function showIndexPage(){
        $userData = $this->userInfoData();
        $layoutData = array(
            'userData' => $userData,
            'menuData' => $this->userMenuData(),//data for menu
//            'menuData' => DocumentCategory::where('active', 1)->get(),
            'documentCateGroup' => $this->getSumDocumentByCate(),
            'documentSumGroup' => $this->getSumDocumentByCateGroup(),
            'pictureLib' => PictureLibrary::orderBy('created_at', 'desc')->take(10)->get(),
        );
//        dd($layoutData);
        return view('index', $layoutData);
    }

    public function showAdminPage(){
        $userData = $this->userInfoData();
        $layoutData = array(
            'userData' => $userData,
//            'menuData' => $this->userMenuData(),//data for menu
            'menuData' => DocumentCategory::where('active', 1)->get(),
            'documentCateGroup' => $this->getSumDocumentByCate(),
            'documentSumGroup' => $this->getSumDocumentByCateGroup(),
            'pictureLib' => PictureLibrary::orderBy('created_at', 'desc')->take(10)->get(),
        );
//        dd($layoutData);
        return view('admin.admin', $layoutData);
    }
}

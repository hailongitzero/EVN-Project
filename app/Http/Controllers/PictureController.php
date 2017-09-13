<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/13/2017
 * Time: 9:36 PM
 */

namespace App\Http\Controllers;

use App\PictureLibrary;
use App\PictureDetail;

class PictureController extends CommonController
{
    public function getPictureList(){
        $userData = $this->userInfoData();
        $layoutData = array(
            'userData' => $userData,
            'menuData' => $this->userMenuData(),//data for menu
//            'menuData' => DocumentCategory::where('active', 1)->get(),
            'pictureList' => PictureLibrary::orderBy('created_at', 'desc')->get(),
        );
//        dd($layoutData);
        return view('pictureLibrary', $layoutData);
    }

    public function getPictureGallery($grpId){
        $userData = $this->userInfoData();
        $layoutData = array(
            'userData' => $userData,
            'menuData' => $this->userMenuData(),//data for menu
            'pictureGallery' => PictureDetail::where('pic_lib_id', $grpId)->orderBy('created_at', 'desc')->get(),
        );
//        dd($layoutData);
        return view('pictureGallery', $layoutData);
    }

}
<?php

namespace App\Http\Controllers;

use App\User;
use App\Document;
use App\DocumentCategory;
use App\UserDocumentCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class CommonController extends Controller
{
    /*
     * get data for user layout
     */
    public function userMenuData(){
        if (Auth::check()){
            $id = Auth::user()->id;

//            $userDocCate = User::find($id)->userDocumentGroup;
            $userDocCate = UserDocumentCategory::with('category')->where('user_id', $id)->where('active', 1)->get();

            //array pass to Left menu
            $menuData = array(
                'documentCate' => $userDocCate,
            );
            return $menuData;
        }else{
            $menuData = array(
                'documentCate' => false,
            );
            return $menuData;
        }
    }
    /*
     * getUserInfo data
     */
    public function userInfoData(){
        if (Auth::check()){
            $id = Auth::user()->id;

//            $userDocCate = User::find($id)->userDocumentGroup;
            $userData = User::find(Auth::user()->id);

            //array pass to Left menu
            $userData = array(
                'userData' => $userData,
            );
            return $userData;
        }else{
            $userData = array(
                'userData' => false,
            );
            return $userData;
        }
    }


    /*
     * get all document by document category
     */
    public function getSumDocumentByCate(){
        $documentCate = DocumentCategory::whereIn('cate_group', [1,2,3,4])->orderBy('srt_seq', 'asc')->orderBy('cate_group', 'asc')->get();
        $data = DB::table('document_cate')
            ->select(
                "id"
                , "srt_seq"
                , "cate_name"
                , "cate_group"
                , DB::raw("(Select COUNT(*) From document where document.doc_cate_id = document_cate.id group by document_cate.id) as doc_count")
            )
//            ->whereIn('cate_group', [1,2,3,4])
            ->where('active', 1)
            ->groupBy('document_cate.id', 'document_cate.srt_seq', 'document_cate.cate_name', 'document_cate.cate_group')
            ->orderBy('srt_seq', 'asc')
            ->get();
        return $data;
    }

    public function getSumDocumentByCateGroup(){
        $data = DB::table('document_cate')
            ->join('document', 'document_cate.id', '=', 'document.doc_cate_id')
            ->select(
                "cate_group"
                , DB::raw("COUNT(*) as doc_count")
            )
            ->whereIn('cate_group', [1,2,3,4])
            ->groupBy('cate_group')
            ->orderBy('srt_seq', 'asc')
            ->orderBy('cate_group', 'asc')
            ->get();

        return $data;
    }
}

<?php

namespace App\Http\Controllers;

use App\Document;
use App\User;
use App\UserDocumentCategory;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\DocumentCategory;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class DocumentController extends CommonController
{
    public function showDocumentCategory(){
        $userData = $this->userInfoData();
        $layoutData = array(
            'userData' => $userData,
//            'menuData' => $this->userMenuData(),//data for menu
            'menuData' => DocumentCategory::where('active', 1)->get(),
            'documentCate' =>documentCategory::orderBy('cate_name', 'desc')->get(),
        );
//        dd($layoutData);
        return view('admin.documentCategory', $layoutData);
    }

    /*
     * Update Document category
     */
    public function updateDocumentCategory(Request $request){
        try{
            $docCate = DocumentCategory::find($request->cateId);
            if (isset($request->cateName)){
                $docCate->cate_name = $request->cateName;
            }
            if (isset($request->cateActive)){
                $docCate->active = $request->cateActive;
            }
            $docCate->save();

            return response()->json(['info' => 'success', 'Content' => 'Cập nhật thành công'], 200);
        }catch (QueryException $e){
            return response()->json(['info' => 'fail', 'Content' => 'Cập nhật không thành công. Lỗi hệ thống.'], 200);
        }

    }

    /*
     * Insert new Document Category
     */
    public function insertDocumentCategory(Request $request){
        try{
            $docCate = new DocumentCategory();
            if (isset($request->cateName)){
                $docCate->cate_name = $request->cateName;
            }
            $docCate->save();

            return response()->json(['info' => 'success', 'Content' => 'Thêm mới thành công'], 200);
        }catch (QueryException $e){
            return response()->json(['info' => 'fail', 'Content' => 'Thêm mới không thành công. Lỗi hệ thống.'], 200);
        }

    }

    /*
     * Hiển thị tất cả các tài liệu theo danh mục tài liệu
     */
    public function getDocumentGroup($docId){
        if (Auth::check()) {
            $userId = Auth::user()->id;
            if(UserDocumentCategory::where('doc_cate_id', $docId)->where('user_id', $userId)->count() > 0){
                $document = Document::with('documentCategory', 'documentAuthor')
                    ->where( DB::raw('(now()'), '<=', DB::raw('end_date or end_date is null)') )
                    ->where('doc_cate_id', '=', $docId)
                    ->where('active', '=', 1)->get()
                ;
//                $documentCate = DocumentCategory::find($docId);
                $documentCate = UserDocumentCategory::with('category')->where('user_id', $userId)->where('doc_cate_id', $docId)->first();
                $userData = $this->userInfoData();
                $layoutData = array(
                    'userData' => $userData,
                    'menuData' => $this->userMenuData(),//data for menu
//                    'menuData' => DocumentCategory::where('active', 1)->get(),
                    'documentList' => $document,
                    'documentCate' => $documentCate,
                );
//        dd($layoutData);
                return view('documentList', $layoutData);
            }else{
                $error = array(
                    'docAuthError' => 'Bạn không được phân quyền truy xuất thư mục này.'
                );
//                $validate = Validator::make($error);

                return Redirect::back()->with('docAuthError', 'Bạn không được phân quyền truy xuất thư mục này. Liên hệ ban quản trị để biết thêm thông tin');
            }
        }
    }

    /*
     * function view document list by document category for admin
     */
    public function getDocumentGroupAdmin($docId){
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $document = Document::with('documentCategory', 'documentAuthor')
                ->where( DB::raw('(now()'), '<=', DB::raw('end_date or end_date is null)') )
                ->where('doc_cate_id', '=', $docId)
                ->where('active', '=', 1)->get()
            ;
            $documentCate = DocumentCategory::find($docId);
//            $documentCate = UserDocumentCategory::with('category')->where('user_id', $userId)->where('doc_cate_id', $docId)->first();
            $userData = $this->userInfoData();
            $layoutData = array(
                'userData' => $userData,
//            'menuData' => $this->userMenuData(),//data for menu
                'menuData' => DocumentCategory::where('active', 1)->get(),
                'documentList' => $document,
                'documentCate' => $documentCate,
            );
//                dd($layoutData);
            return view('admin.adminDocumentList', $layoutData);
        }
    }

    /*
     * file download
     */
    public function downloadFile($id){
        $file = Document::find($id);
        $filePath = $file->doc_url;
        $header = [
            'Content-Type: application/pdf',
            'Content-Type: application/pdf',
            'Content-Type: image/png',
            'Content-Type: image/jpeg',
            'Content-Type: image/jpeg',
            'Content-Type: image/jpeg',
            'Content-Type: image/gif',
        ];
        return response()->download($filePath);
    }

    public function getDocumentManagerList(){
        $documentList =  Document::with(['documentCategory', 'documentAuthor'])->orderBy('doc_name', 'asc')->get();
        $userData = $this->userInfoData();
        $layoutData = array(
            'userData' => $userData,
//            'menuData' => $this->userMenuData(),//data for menu
            'menuData' => DocumentCategory::where('active', 1)->get(),
            'documentList' =>$documentList,
        );
//        dd($layoutData);
        return view('admin.documentManager', $layoutData);
    }

    public function validateUploadFile(array $data)
    {
        return Validator::make($data, [
            'file' => 'required|max:102400'
            ]);
    }

    /*
     * upload document
     */
    public function uploadDocument(Request $request){

        $this->validateUploadFile($request->all())->validate();

        if (Auth::check()) {
            $path = 'resources/assets/documents/others';
            $documentCate = DocumentCategory::find($request->cateId);
            $cateGroup = null;
            $folder = null;

            $folder = $documentCate->folder_url;
            $path = 'resources/assets/'.$documentCate->folder_url;
            $cateGroup = $documentCate->cate_group;
            $userId = Auth::user()->id;
            $cateId = $request->cateId;
            $fileName = $request->fileName;
            $description = $request->description;
            $totalTime = $request->totalTime;
            $fromDate = $request->fromDate;
            $toDate = $request->toDate;
            $extension = '';

            $file = $request->file('file');
            if($file)
            {
                $extension =  $file->clientExtension();
            }
            $newFileName = time().$file->getClientOriginalName();
            $request->file->move($path,  $newFileName);

            try{
                $fileData = new Document();

                $fileData->doc_cate_id = $cateId;
                $fileData->doc_name = $fileName;
                $fileData->description = $description;
                $fileData->doc_url = $path.'/'.$newFileName;
                $fileData->doc_tp = strtolower($extension);
                $fileData->upload_user_id = $userId;
                if (isset($totalTime)){
                    $fileData->total_time = $totalTime;
                }
                if (isset($fromDate) || !is_null($fromDate) || !empty($fromDate) || !strlen($fromDate) > 1){
                    $fileData->start_date = date('Y-m-d', strtotime($fromDate));
                }
                if (isset($toDate) || !is_null($toDate) || !empty($toDate) || !strlen($toDate) < 1 ){
                    $fileData->end_date = date('Y-m-d', strtotime($toDate));
                }

                $fileData->save();
                return response()->json(['info' => 'success', 'Content' => 'Thêm mới thành công'], 200);
            }catch (QueryException $e){
                return response()->json(['info' => 'fail', 'Content' => 'Thêm mới không thành công. Lỗi hệ thống.'], 200);
            }
        }
    }

    public function myFile(){
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $documentList = Document::where('upload_user_id', $userId)->where('active', 1)->get();
//            $documentCate = UserDocumentCategory::with('category')->where('user_id', $userId)->where('doc_cate_id', $docId)->first();
            $userData = $this->userInfoData();
            $layoutData = array(
                'userData' => $userData,
//            'menuData' => $this->userMenuData(),//data for menu
                'menuData' => $this->userMenuData(),//data for menu
                'documentList' => $documentList,
//                'documentCate' => $documentCate,
            );
//        dd($layoutData);
            return view('myDocumentList', $layoutData);
        }
    }

    public function deleteMyFile(Request $request){
        if (Auth::check()){
            $userId = Auth::user()->id;
            $check = true;
            $file = Document::where('id', $request->docId)->where('upload_user_id', $userId)->first();
            if (Document::where('id', $request->docId)->where('upload_user_id', $userId)->count() < 1){
                $check = false;
            }
            if (strtotime(date("Y-m-d H:i:s"))-strtotime($file->created_at) > 86400){
                $check = false;
            }

            if ($check == true){
                $documemt = Document::find($request->docId);
                $documemt->active = 0;
                $documemt->save();
                return response()->json(['info' => 'fail', 'Content' => 'Xóa file thành công.'], 200);
            }else{
                return response()->json(['info' => 'fail', 'Content' => 'Xóa file thất bại. File không tồn tại hoặc tồn tại quá một ngày.'], 200);
            }
        }
    }

    public function showSearchFile(){
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $documentList = Document::where('upload_user_id', $userId)->where('active', 1)->get();
//            $documentCate = UserDocumentCategory::with('category')->where('user_id', $userId)->where('doc_cate_id', $docId)->first();
            $userData = $this->userInfoData();
            $layoutData = array(
                'userData' => $userData,
                'menuData' => $this->userMenuData(),//data for menu
//                'menuData' => DocumentCategory::where('active', 1)->get(),
                'userCateList' => UserDocumentCategory::with('category')->where('user_id', $userId)->get(),
                'documentList' => $documentList,
//                'documentCate' => $documentCate,
            );
//        dd($layoutData);
            return view('searchFile', $layoutData);
        }
    }

    public function searchFile(Request $request){
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $sql = 'select *, user.name as author from document doc, users user WHERE 1 = 1 and doc.upload_user_id = user.id';
            if (strlen($request->authName) > 1){
                $sql .= " and doc.upload_user_id in (select id from users where name like  '%". $request->authname ."%')";
            }
            if ($request->cateId == 0 || $request->cateId == '0'){
                $sql .= " and doc.doc_cate_id IN (SELECT doc_cate_id from user_doc_cate WHERE user_id IN (SELECT id FROM users WHERE id = ".$userId."))";
            }else{
                $sql .= "and doc.doc_cate_id = ".$request->cateId;
            }
            if (strlen($request->docName) > 1){
                $sql .= " and doc.doc_name LIKE '%".$request->docName."%'";
            }

            $sql .= " AND date(doc.created_at) BETWEEN date('".date('Y-m-d', strtotime($request->fromDate))."') AND date('".date('Y-m-d', strtotime($request->toDate))."')";
//            dd($sql);
            $searchResult = DB::select(DB::raw($sql));
            $documentList = Document::where('upload_user_id', $userId)->where('active', 1)->get();
//            $documentCate = UserDocumentCategory::with('category')->where('user_id', $userId)->where('doc_cate_id', $docId)->first();
            $userData = $this->userInfoData();
            $layoutData = array(
                'userData' => $userData,
                'menuData' => $this->userMenuData(),//data for menu
//                'menuData' => DocumentCategory::where('active', 1)->get(),
                'userCateList' => UserDocumentCategory::with('category')->where('user_id', $userId)->get(),
                'documentList' => $documentList,
//                'documentCate' => $documentCate,
                'searchResult' => $searchResult,
            );
//            dd($layoutData);
            return view('searchFile', $layoutData);
        }
    }
}

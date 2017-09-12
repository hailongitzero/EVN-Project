<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Company;
use App\Department;
use App\UserDocumentCategory;
use App\DocumentCategory;
use DB;

class UserController extends CommonController
{
    /*
     * show user table
     */
    public function showUserList(){
        $userList = User::with(['department', 'documentCategory', 'documentCategory.category'])->get();
        $userData = $this->userInfoData();
        $layoutData = array(
            'userData' => $userData,
//            'menuData' => $this->userMenuData(),//data for menu
            'menuData' => DocumentCategory::where('active', 1)->get(),
            'userList' => $userList, //get user list
            "company" => Company::where('active', 1)->orderBy('company_name', 'desc')->get(),
            "department" => Department::where('active', 1)->orderBy('dept_name', 'desc')->get(),
        );
//        dd($layoutData);
        return view('admin.userManager', $layoutData);
    }

    /*
     * Update User information
     */
    public function updateUser(Request $request){
        try{
            $user = User::find($request->userId);
            if (isset($request->name)){
                $user->name = $request->name;
            }
            if (isset($request->isActive)){
                $user->active = $request->isActive;
            }
            $user->save();

            return response()->json(['info' => 'success', 'Content' => 'Cập nhật thành công'], 200);
        }catch (QueryException $e){
            return response()->json(['info' => 'fail', 'Content' => 'Cập nhật không thành công. Lỗi hệ thống.'], 200);
        }
    }

    /*
     * Update User Document Category Authority
     */
    public function updateUserDocumentCategory(Request $request){
        try{
            UserDocumentCategory::where('user_id', $request->userId)
                ->where('doc_cate_id', $request->cateId)
                ->update(['upload_auth' => $request->isUpload, 'active'=>$request->isActive]);

            return response()->json(['info' => 'success', 'Content' => 'Cập nhật thành công'], 200);
        }catch (QueryException $e){
            return response()->json(['info' => 'fail', 'Content' => 'Cập nhật không thành công. Lỗi hệ thống.'], 200);
        }
    }

    /*
     * validate for register new User
     */
    protected function userValidator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'dept_id' => 'required',
            'position' => 'required'
        ]);
    }

    /*
     * validate for register Update User
     */
    protected function userValidatorUpdate(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'dept_id' => 'required',
            'position' => 'required'
        ]);
    }

    /*
     *register new user by admin
     */
    public function registerUser(Request $request){

        $this->userValidator($request->all())->validate();

        try{
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->email = $request->email;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->office_phone = $request->office_phone;
            $user->emp_cd = $request->emp_cd;
            $user->position = $request->position;
            $user->dept_id = $request->dept_id;

            $user->save();

            return response()->json(['info' => 'success', 'Content' => 'Thêm mới thành công'], 200);

        }catch (QueryException $e){
            return response()->json(['info' => 'fail', 'Content' => 'Thêm mới thất bại.'], 200);
        }
    }

    /*
     *register new user by admin
     */
    public function updateUserInfo(Request $request){

        $this->userValidatorUpdate($request->all())->validate();

        try{
            $user = User::find($request->userId);
            if (isset($request->name) && !is_null($request->name)){
                $user->name = $request->name;
            }
            if (isset($request->username) && !is_null($request->username)){
                $user->username = $request->username;
            }
            if (isset($request->password) && !is_null($request->password)){
                $user->password = bcrypt($request->password);
            }
            if (isset($request->email) && !is_null($request->email)){
                $user->email = $request->email;
            }
            if (isset($request->address) && !is_null($request->address)){
                $user->address = $request->address;
            }
            if (isset($request->phone) && !is_null($request->phone)){
                $user->phone = $request->phone;
            }
            if (isset($request->office_phone) && !is_null($request->office_phone)){
                $user->office_phone = $request->office_phone;
            }
            if (isset($request->emp_cd) && !is_null($request->emp_cd)){
                $user->emp_cd = $request->emp_cd;
            }
            if (isset($request->position) && !is_null($request->position)){
                $user->position = $request->position;
            }
            if (isset($request->dept_id) && !is_null($request->dept_id)){
                $user->dept_id = $request->dept_id;
            }

            $user->save();

            return response()->json(['info' => 'success', 'Content' => 'Cập nhật thông tin user thành công'], 200);

        }catch (QueryException $e){
            return response()->json(['info' => 'fail', 'Content' => 'Cập nhật thông tin user thất bại.'], 200);
        }
    }
}

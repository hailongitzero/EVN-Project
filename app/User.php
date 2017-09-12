<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'phone', 'office_phone', 'address', 'emp_cd', 'dept_id', 'position', 'join_date', 'img_url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'role' => 'boolean',
    ];

    public function isAdmin()
    {
        return $this->role;
    }

    /*
     * get document group list of user
     */
    public function userDocumentGroup(){
        return $this->belongsToMany('App\DocumentCategory', 'user_doc_cate', 'user_id', 'doc_cate_id');
    }

    /*
     * get User List + department
     */
    public function department(){
        return $this->hasOne('App\Department', 'id', 'dept_id');
    }

    public function documentCategory(){
        return $this->hasMany('App\UserDocumentCategory', 'user_id', 'id');
    }
}

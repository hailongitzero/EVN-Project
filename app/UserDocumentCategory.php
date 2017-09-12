<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDocumentCategory extends Model
{
    protected $table = 'user_doc_cate';

    public function category(){
        return $this->hasOne('App\DocumentCategory', 'id', 'doc_cate_id');
    }
}

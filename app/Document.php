<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'document';

    public function documentCategory(){
        return $this->belongsTo('App\DocumentCategory', 'doc_cate_id', 'id');
    }

    public function documentAuthor(){
        return $this->belongsTo('App\User', 'upload_user_id', 'id');
    }
}

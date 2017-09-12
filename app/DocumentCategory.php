<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentCategory extends Model
{
    protected $table = 'document_cate';

    /**
     * @return array
     */
    public function document()
    {
        return $this->hasMany('App\Document', 'doc_cate_id', 'id');
    }

    public function documentCategoryAuth(){

    }
}

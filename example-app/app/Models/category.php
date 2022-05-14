<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'categoryID';
    protected $keyType = 'string';
    public function product(){
        return $this->hasMany('App\Models\product','categoryID');
    }
}

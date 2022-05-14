<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $primaryKey ='productID';
    protected $keyType = 'string';
    protected $fillable = ['productID','productname','categoryID',
    'description','image','discount','tag','price'];
    public function category(){
        return $this->belongsTo('App\Models\category','categoryID');
    }
}

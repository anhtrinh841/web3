<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = 'categories';
    // use HasFactory;
    public function search($key){
        $result = self::where('categories_name', 'LIKE', '%'.$key.'%')->orWhere('categories_id', 'LIKE', '%'.$key.'%');
        return $result;
    }
}

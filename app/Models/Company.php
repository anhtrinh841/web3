<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    // use HasFactory;
    public function search($key){
        $result = self::where('trainer_name', 'LIKE', '%'.$key.'%')->orWhere('trainer_email', 'LIKE', '%'.$key.'%');
        return $result;
    }
}

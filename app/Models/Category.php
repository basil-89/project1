<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DoctorInfo;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'category_name',
        'image',
        'detail',
        'status',
    ];


    public function doctorinfo(){
        return  $this->hasMany(DoctorInfo::class,'department');
              
      }
}

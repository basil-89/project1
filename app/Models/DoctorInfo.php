<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class DoctorInfo extends Model
{
    use HasFactory;

    protected $table = 'doctor_info';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'detail',
        'specializations',
        'education',
        'memberships',
        'registrations',
        'web',
        'address',
        'country',
        'city',
        'joined',
        'department',
        'image',
        'state',
        'experience',
        'mobile',
        'service',
        'status',
        'facebook',
        'twitter',
    ];

        
    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'user_profiles';
    protected $fillable = ['user_id', 'firstname', 'lastname', 'avatar', 'birthday', 'preferences', 'phone','adress',];
    protected $allowedFields = ['id', 'user_id', 'firstname', 'lastname', 'avatar', 'birthday', 'preferences', 'phone','adress',];
}

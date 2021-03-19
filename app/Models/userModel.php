<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    use HasFactory;

    protected  $table = "users";
    protected $fillable =["name","email","password","address","city"];
    protected $hidden =["created_at","updated_at"];
}



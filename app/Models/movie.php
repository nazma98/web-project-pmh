<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $fillable=['Movie_Name','Movie_Director','Movie_Image','Movie_Description','Movie_Link'];
}

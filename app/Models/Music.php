<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class music extends Model
{
    protected $fillable=['Music_Name','Music_Singer','Music_Image','Music_Audio_File','Movie_Link'];
}

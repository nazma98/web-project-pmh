<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
     protected $fillable=['Video_Name','Video_Image','Video_Link'];
}

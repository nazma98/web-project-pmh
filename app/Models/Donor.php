<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donor extends Model
{
    protected $fillable=['name','email','address','contact_no','want_to_donate','blood_group'];
}

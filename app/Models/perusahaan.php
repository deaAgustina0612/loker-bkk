<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    use HasFactory;
    protected $table = "perusahaans";
    // protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";
}

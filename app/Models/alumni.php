<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;
// use Illuminate\Foundation\Auth\User as Models;


class alumni extends Model
{
    use HasFactory;
    protected $table = "alumnis";
    // protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";
}

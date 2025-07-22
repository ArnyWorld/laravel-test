<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['id', 'name', 'email', 'password', 'rol', 'created_at', 'updated_at', 'deleted'];
}

<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    public $timestamps = false;
}

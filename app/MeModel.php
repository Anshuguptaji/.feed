<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeModel extends Model
{
    protected $table = 'me_tabel';
    protected $primaryKey = 'user_id';
    public $timestamps = true;
}

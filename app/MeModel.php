<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeModel extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'post_id';
    public $timestamps = true;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $primarykey = 'id_category';
    
    protected $table = 'categories';

    public $timestamps = false;
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crudplat extends Model
{
    use HasFactory;
    protected $table="crudplats";
    protected $fillable=[
        'id','photo','name','components','new_price','old_price','category','available','created_at','updated_at'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crudcombobox extends Model
{
    use HasFactory;
    protected $table = "crudcombobox";
    protected $fillable = [
        'name_addition1', 'choiceOne1', 'choiceTowe1', 'choiceThree', 'name_addition2', 'choiceOne2', 'choiceTowe2', 'choiceThree2', 'name_addition3', 'choiceOne3', 'choiceTowe3', 'choiceThree3', 'created_at', 'updated_at'
    ];
}

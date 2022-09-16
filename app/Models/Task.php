<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_task',
        'id_user',
        'description',
        'start',
        'end',
        'color',
        'status',
    ];
    protected $primaryKey = 'id_task';
}

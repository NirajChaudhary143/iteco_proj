<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'project_title',
        'client_name',
        'uv_association',
        'start_date',
        'end_date',
        'image',
        'status',
        'description',
        'sectors'
    ];
}

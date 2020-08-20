<?php

namespace Domain\Tasks;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];
}

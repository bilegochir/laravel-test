<?php

namespace Domain\Tasks;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];

    public function project()
    {
        return $this->belongsTo('Domain\Projects\Project');
    }
}

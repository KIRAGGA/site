<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];

    public function completed($completed = true){
        $this->updated(compact('completed'));
    }
    public function project(){
        return $this->belongsTo(Project::class);
    }
}

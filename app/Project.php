<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model{

    protected $fillable = ['title','sub_title','description','status','user_id'];



    public function post(){
        return $this->belongsTo('App\Post');
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Session\Store;

class Todo extends Model
{
    protected $fillable = ['title', 'content', 'creator_id'];

    public function users(){
        return $this->belongsToMany('App\User');
    }
}

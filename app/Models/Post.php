<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{

    // public function post() {
    //     return $this->belongsTo('App\Models\Category');
    // }

    protected $fillable = [
        'title','content','image','slug'
    ];
}
// $table->foreign('user_id')
//                   ->references('id')
//                   ->on('users');

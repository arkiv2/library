<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function borrowers()
    {
    	return $this->hasMany('App\Student', 'borrowed_books');
    }
}

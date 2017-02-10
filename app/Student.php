<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticable
{
	use Notifiable;

    public function booksBorrowed()
    {
    	return $this->hasMany('App\Book', 'borrowed_books')
    }

    public function borrowBook(Book $book)
    {
    	$this->booksBorrowed->toggle($book->id);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $fillable = ['user_id', 'book_id', 'status'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
     protected $table = 'todos';

    public $fillable = ['user_id','title', 'description', 'urgency', 'status'];
}

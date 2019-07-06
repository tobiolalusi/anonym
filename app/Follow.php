<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
	protected $fillable = ['story_id', 'user_id'];
}

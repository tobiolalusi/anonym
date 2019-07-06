<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = ['title', 'content'];
    protected $appends = ['num_follows'];

	public function follows() {
		return $this->hasMany(Follow::class);
	}

	public function getNumFollowsAttribute() {
		return $this->follows()->count();
	}
}

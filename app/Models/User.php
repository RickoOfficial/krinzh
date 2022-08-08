<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	use HasFactory;

	protected $fillable = [
		'name', 'email', 'password',
		'image',
		'admin', 'ban',
	];

	protected $casts = [
		'admin' => 'boolean',
		'ban' => 'boolean',
	];

	protected $hidden = [
		'password', 'remember_token',
	];
}

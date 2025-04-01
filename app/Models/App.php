<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    // use HasFactory;
    protected $table = 'applications';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'imie', 'nazwisko', 'wiek', 'opis', 'letterid', 'status', 'target', 'user'
	];
}

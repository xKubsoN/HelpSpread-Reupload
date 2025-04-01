<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wolontariats extends Model
{
    // use HasFactory;
    protected $table = 'helpspread_wolontariat';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'wolontariat_firma', 'wolontariat_opisk', 'wolontariat_opisd', 'wolontariat_wiek', 'wolontariat_miejsca', 'wolontariat_datap', 'wolontariat_datak', 'wolontariat_adresn', 'wolontariat_adresu', 'wolontariat_adresk', 'wolontariat_adresm', 'wolontariat_godzp', 'wolontariat_godzk', 'status', 'creator'
	];
}

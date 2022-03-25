<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maile extends Model
{
    protected $table = 'Mailes';
    protected $fillable = [
		'Id', 'Imie','Email', 'Wiadomosc',
	];
}

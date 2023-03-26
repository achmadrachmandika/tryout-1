<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuSoal extends Model
{
    use HasFactory;
    protected $table = 'kartusoals';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'idKartu', 
        'idSoal', 
        'kunci' 
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Range extends Model
{
    use HasFactory;
    protected $fillable = [ 'max', ];

    public function countries()
    {
        return $this->belongsTo(Country::class, 'colissimos')->withPivot('price');
    }
}

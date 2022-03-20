<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'professionnal',
        'address',
        'civility',
        'name',
        'firstname',
        'phone',
        'addressbis',
        'postal',
        'company',
        'city',
        'country_id'
];
  public function country(){

    return $this->belongsTo(Country::class);
  }

}

    
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;
    protected $fillable = ['name','tax'];

  public function rangs()
  {
      return $this->belongsTomany(Range::class,'colissimos')->withPivot('id','price');
  }

  public function addresses()
  {
      return $this->hasMany(Address::class);
  }
  public function order_address()
  {
      return $this->hasMany(OrderAddress::class);
  }

 
}
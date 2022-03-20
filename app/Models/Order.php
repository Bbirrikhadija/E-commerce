<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
            'reference',
            'shipping',
            'total',
            'tax',
           'payment',
           'pick',
           'invoice_id',
           'invoice_number',
            'purchase_order'
    ];

  public function adresses(){
    return $this->hasMany(OrderAddress::class);
  }

  public function products(){
    return $this->hasMany(OrderProduct::class);
  }
   
  public function state(){
    return $this->belongsTo(State::class);
  }
  public function user(){
    return $this->belongsTo(User::class);
  }

  public function payment_infos(){
    return $this->hasOne(Payment::class);
  }

  public function getPaymentgetAttribute(){
      $texts = [
          'carte' => 'carte bancaire',
          'virement' => 'virement',
          'cheque' => 'chèque', 
          'mandat' => 'mandat administratif',
      ];
      return $texts [$this->payment];

  }



  public function getTotalOrderAttribute()
  {
      return $this->total+$this->shipping;
  }

  public function getvaAttribut()
  {
      return $this->tax > 0 ?$this->total /(1+$this->tax) *$this->tax : 0;
    
    }
 public function getHtAttribute()
 {
     return $this->total/(1+$this->tax);
 }


}

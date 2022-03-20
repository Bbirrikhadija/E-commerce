<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name'=>$this->faker->sentence(3),
        'address'=>$this->faker->address,
        'email' =>$this->faker->email,
        'phone'=>$this->faker->phoneNumber,
        'holder' => strtoupper($this->faker ->sentence(6)),
        'bic' => strtoupper(Str::random(8)),
        'iban' =>$this->faker->iban,
        'bank' =>$this->faker->sentence(8),
        'bank_address' =>$this->faker->address,
        'facebook' =>$this->faker->url,
        'home' =>$this->faker->sentence(),
        'home_infos' =>$this->faker->text,
        'home_shipping' =>$this->faker->text,
    
    
        ];
    }
}

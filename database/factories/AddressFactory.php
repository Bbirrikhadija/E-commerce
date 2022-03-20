<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $prof = $this->faker->boolean();
         if($prof){
             $name = $this->faker->name();
              $firstname = $this->faker->firstName();
         }
         else{
              $name=null;
              $firstname=null;
         }
        return ['professionnal'=>$prof, 
                'civility'=>$this->faker->boolean() ? 'Mme':'M',
                'name'=>$name,
                'firstname'=>$firstname,
                'company' => $prof ? $this->faker->company() : null,
                'address'=>$this->faker->streetAddress(),
                'addressbis'=>$this->faker->boolean() ? $this->faker->secondaryAddress:null,
                'bp'=>$this->faker->boolean() ? $this->faker->numberBetween(100,900):null,
                'postal'=>$this->faker->numberBetween(10000,90000),
                'city'=>$this->faker->city(),
                'country_id'=>mt_rand(1,4),
                'phone'=>$this->faker->numberBetween(100000000,900000000),
    ];
    }

}
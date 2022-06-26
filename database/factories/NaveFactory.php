<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NaveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type_id'=> rand(1,3),
            'name'=> $this->faker->sentence(2),
            'featured'=> $this->faker->imageUrl(1280,720) ,
            'country'=> $this->faker->sentence(1),
            'fuel'=> $this->faker->sentence(2),
            
            'uptime'=> $this->faker->sentence(2),
            
        ];
    }
    
    
    
    
}

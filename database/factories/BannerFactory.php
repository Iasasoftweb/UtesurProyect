<?php

namespace Database\Factories;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BannerFactory extends Factory
{
    protected $model = Banner::class;

    public function definition()
    {
        return [
			'nombrebanner' => $this->faker->name,
			'estado' => $this->faker->name,
			'imagen' => $this->faker->name,
			'posicion' => $this->faker->name,
			'links' => $this->faker->name,
        ];
    }
}

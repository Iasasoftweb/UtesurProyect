<?php

namespace Database\Factories;

use App\Models\Noticia;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NoticiaFactory extends Factory
{
    protected $model = Noticia::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(),
            'descripcion' => $this->faker->text(),
            'imagen' => $this->faker->image('/img/noticias', 640, 680, null, false),
            'categorias_id' => $this->faker->name,
            'estatus' => $this->faker->name,
            'slug' => $this->faker->name,
            'path' => $this->faker->image('/img/noticias', 640, 680, null, false),
            'path2' => $this->faker->image('/img/noticias', 640, 680, null, false),
            'path3' => $this->faker->image('/img/noticias', 640, 680, null, false),
            'path4' => $this->faker->image('/img/noticias', 640, 680, null, false),
        ];
    }
}

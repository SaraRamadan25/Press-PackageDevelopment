<?php
use Illuminate\Database\Eloquent\Factories\Factory;
use SaraRamadan\Press\Post;

class PostFactory extends Factory
{
public function definition()
{
return [
    'identifier' => $this->faker->str_random(10),
    'title' => $this->faker->name(),
    'slug' => $this->faker->name(),
    'body' => $this->faker->paragraph(),
    'extra' => json_encode(['test' => 'value'])
];
}
}

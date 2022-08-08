<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
	protected $model = User::class;
	
	public function definition()
	{
		return [
			'name' => $this->faker->name(),
			'email' => $this->faker->unique()->safeEmail(),
			'image' => $this->faker->text(10),
			'password' => bcrypt('12345'),
			'admin' => $this->faker->numberBetween(0, 1),
			'ban' => $this->faker->numberBetween(0, 1),
		];
	}
}

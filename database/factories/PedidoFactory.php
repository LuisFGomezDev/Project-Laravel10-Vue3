<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Pedido;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PedidoFactory extends Factory
//class Pedido extends Factory
{
    protected $model = Pedido::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //EXAMPLE:
            /*
            'product_name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            */

            'product_name' => $this->faker->name(),
            'quantity' => $this->faker->randomNumber(4),
            'unit_price' => $this->faker->randomNumber(5)

        ];
    }
}

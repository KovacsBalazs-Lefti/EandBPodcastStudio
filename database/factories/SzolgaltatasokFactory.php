<?php

namespace Database\Factories;

use App\Models\Szolgaltatasok;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Szolgaltatasok>
 */
class SzolgaltatasokFactory extends Factory
{
    protected $model = Szolgaltatasok::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $allfelhasznaloid = User::all()-puck('felhasznaloid');
        $user_felhasznaloid = $this->faker->randomElement($allfelhasznaloid);
        $allfelhasznaloid = Foglalas::all()-puck('felhasznaloid');

        return [
            'szolgaltatasnev' => $this->faker->sentence(10),
            'leiras' => $this->faker->paragraph,
            'ar'$this->faker->numberBetween(25000, 180000),
            'user_felhasznaloid' => $user_felhasznaloid,

            'foglalasid_szolgaltatas'
        ];
    }
}

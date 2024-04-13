<?php

namespace Database\Factories;

use App\Models\Szolgaltatasok;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Foglalas;
use App\Models\User;
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
        $allfelhasznaloid = User::all()->pluck('felhasznaloid');
        $user_felhasznaloid = $this->faker->randomElement($allfelhasznaloid);

        $allfoglalasid_szolgaltatas = Foglalas::all()->pluck('foglalasid_szolgaltatas');
        $foglalasid_szolgaltatas = $this->faker->randomElement($allfoglalasid_szolgaltatas);

        return [
            'szolgaltatasnev' => $this->faker->sentence(10),
            'leiras' => $this->faker->paragraph(),
            'ar'=> $this->faker->numberBetween(25000, 180000),
            'user_felhasznaloid' => $user_felhasznaloid,
            'foglalasid_szolgaltatas' => $foglalasid_szolgaltatas,
        ];
    }
}

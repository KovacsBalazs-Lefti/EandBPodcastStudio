<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nev' => $this->faker->name(),
        'email' => $this->faker->unique()->safeEmail(),
        'jelszo' => bcrypt('pistike48'), // Biztonságos jelszó generálása
        'telefonszam' => $this->faker->phoneNumber(),
        'szemelyi_szam' => $this->faker->numerify('##########'), // 10 jegyű személyi szám generálása
        'szuletesi_datum' => $this->faker->date('Y-m-d', '-40 years'), // 40 évvel ezelőtti dátum generálása
        'ceg' => true,
        'cegnev' => $this->faker->company(),
        'ceg_tipus' => $this->faker->randomElement(['Bt', 'Kft', 'Zrt']),
        'ado_szam' => $this->faker->numerify('##########'), // 10 jegyű adószám generálása
        'bankszamlaszam' => $this->faker->iban('HU'), // Magyar bankszámlaszám generálása
        'orszag' => 'Magyarország',
        'iranyitoszam' => $this->faker->postcode(),
        'varos' => $this->faker->city(),
        'utca' => $this->faker->streetName(),
        'utca_jellege' => $this->faker->randomElement(['út', 'utca', 'köz', 'tér']),
        'hazszam' => $this->faker->buildingNumber(),
        'epulet' => $this->faker->randomLetter(),
        'lepcsohaz' => $this->faker->randomDigitNotNull(),
        'emelet' => $this->faker->randomDigitNotNull(),
        'ajto' => $this->faker->randomDigitNotNull(),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

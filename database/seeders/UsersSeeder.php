<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert($this->getData());
    }
    private function getData(): array
	{
		$faker = Factory::create();
		$data = [];

		for($i=0; $i < 5; $i++) {
			$data[] = [
                'name' => $faker->name(),
                'is_admin' => 0,
                'email' => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => Hash::make($faker->text(mt_rand(10, 30))),
                'remember_token' => Str::random(10),
            ];
		}

        $data[] = [
            'name' => 'Админ Вася',
            'email' => 'admin@mail.ru',
            'is_admin' => 1,
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ];

		return $data;
	}
}

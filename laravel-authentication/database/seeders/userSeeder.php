<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = collect([
            [
                'name' => 'alendra',
                'email' => 'email@example.com',
                'password' => bcrypt('12345')
            ],
        ]);

        $data->each(function ($data) {
            User::create($data);
        });
    }
}

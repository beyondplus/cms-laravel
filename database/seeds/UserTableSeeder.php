<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Admin;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        User::truncate();
        $this->faker = \Faker\Factory::create();
        Admin::create([
            'username'     => 'San Pwint Thu',
        	'email'        => 'root@email.com',
        	'password'     => Hash::make('root'),
            'api_token'    => 'r27bHi9jwClte3W8MypKXXqpMCvIRZErVOttKsz9SNf14xKwtK6J1rjWE9Zc',
            'created_at'   => '2016-06-3 00:36:29'
        ]);


        for ($i=0; $i < 10; $i++) {
            $user = [
                'name'          => $this->faker->firstName,
                'email'         => $this->faker->unique()->email,
                'password'      => bcrypt('user'),
                'api_token'     => str_random(60)
            ];
            User::insert($user);
        }

    }
}

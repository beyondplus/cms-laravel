<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
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
        User::truncate();
        $this->faker = \Faker\Factory::create();
        User::create([
            'name'          => 'San Pwint Thu',
            'email'         => 'root@email.com',
            'password'      => Hash::make('root'),
            'user_type'     => 2,
            'api_token'     => 'r27bHi9jwClte3W8MypKXXqpMCvIRZErVOttKsz9SNf14xKwtK6J1rjWE9Zc',
            'avatar'        => 'http://lorempixel.com/150/150/people/?55009',
            'phone_no'      => '1-428-547-2288',
            'created_at'    => '2016-06-3 00:36:29'
        ]);
        for ($i=0; $i < 10; $i++) {
            $user = [
                'name'          => $this->faker->firstName,
                'email'         => $this->faker->unique()->email,
                'password'      => bcrypt('user'),
                'api_token'     => str_random(60),
                'avatar'        => 'http://lorempixel.com/150/150/people/?55009',
                'phone_no'      => '1-428-547-2288',
                'created_at'    => '2016-06-3 00:36:29'     
            ];
            User::insert($user);
        }
        
    }
}

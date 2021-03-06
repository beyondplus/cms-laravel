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
            'role'          => 3,
            'api_token'     => str_random(60),
            'avatar'        => 'http://lorempixel.com/150/150/people/?55009',
            'phone_no'      => '1-428-547-2288',
            'verified'      => '1',
            'created_at'    => '2016-06-3 00:36:29'
        ]);
        for ($i=0; $i < 5; $i++) {
            $user = [
                'name'          => $this->faker->firstName,
                'email'         => $this->faker->unique()->email,
                'password'      => bcrypt('user'),
                'role'          => 1,
                'api_token'     => str_random(60),
                'avatar'        => 'http://lorempixel.com/150/150/people/?55009',
                'phone_no'      => '1-428-547-2288',
                'verified'      => '0',
                'created_at'    => '2016-06-3 00:36:29'     
            ];
            User::insert($user);
        }
        
    }
}

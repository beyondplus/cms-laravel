<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bp_post;
use App\Models\Bp_relationship;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bp_post::truncate();
        $this->faker = \Faker\Factory::create();
        for ($i=1; $i <= 10; $i++) {
            $Bp_post = [
                'title'         => $post = $this->faker->sentence($nbWords = 6, $variableNbWords = true),
                'body'          => $this->faker->text,
                'post_link'     => formatUrl($post),
                'post_type'     => 'post',
                'featured_img'  => 'default.jpg',
                'staff_id'      => 1,
                'translate_id'  => 0,
                'created_at'    => '2016-06-3 00:36:29'
            ];

            $Bp_relationship = [
                'tax_id'    => 1,
                'post_id'   => $i,
                'type'   => 'cat',
            ];

            Bp_relationship::insert($Bp_relationship);
            Bp_post::insert($Bp_post);
        }
        for ($y=1; $y <= 5; $y++) {
            $Bp_post = [
                'title'         => $page = $this->faker->sentence($nbWords = 6, $variableNbWords = true),
                'body'          => $this->faker->text,
                'post_link'     => formatUrl($page),
                'post_type'     => 'page',
                'featured_img'  => 'default.jpg',
                'staff_id'      => 1,
                'translate_id'  => 0,
                'created_at'    => '2016-06-3 00:36:29'
            ];

            $Bp_relationship = [
                'tax_id'    => 1,
                'post_id'   => 10+$y,
                'type'   => 'cat',
            ];

            Bp_relationship::insert($Bp_relationship);
            Bp_post::insert($Bp_post);
        }
    }
}

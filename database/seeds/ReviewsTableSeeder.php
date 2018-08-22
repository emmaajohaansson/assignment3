<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                "name" => "Emma",
                "comment" => "Sjukt spännande serie!!",
                "grade" => 5,
                "tv_show_id" => 1
            ],
            [
                "name" => "Philip",
                "comment" => "Min favoritserie of all times!!",
                "grade" => 5,
                "tv_show_id" => 3
            ],
            [
                "name" => "Oscar",
                "comment" => "Bra första avsnitt i alla fall!",
                "grade" => 3,
                "tv_show_id" => 2
            ],
            [
                "name" => "Max",
                "comment" => "Helt okej!",
                "grade" => 3,
                "tv_show_id" => 1
            ],
            [
                "name" => "Emma",
                "comment" => "Riktigt underhållande och spännande!",
                "grade" => 4,
                "tv_show_id" => 4
            ]
        ]);
    }
}
